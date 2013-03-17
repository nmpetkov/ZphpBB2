<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Block_Lastposts extends Zikula_Controller_AbstractBlock
{
    /**
     * Initialise block
     */
    public function init()
    {
        SecurityUtil::registerPermissionSchema('ZphpBB2:lastpostsblock:', 'Block ID::');
    }
    
    /**
     * Return array with block information
     */
    public function info()
    {
        return array(
            'module'           => 'ZphpBB2',
            'text_type'        => 'ZphpBB2',
            'text_type_long'   => $this->__('Last forum posts'),
            'allow_multiple'   => true,
            'form_content'     => false,
            'form_refresh'     => false,
            'show_preview'     => true);
    }
    
    /**
     * Display block
     */
    public function display($blockinfo)
    {
        if (!SecurityUtil::checkPermission('ZphpBB2_Lastposts::', $blockinfo[bid]."::", ACCESS_READ)) {
            return;
        }
        if (!ModUtil::available('ZphpBB2')) {
            return;
        }

        // Get variables from content block
        $vars = BlockUtil::varsFromContent($blockinfo['content']);

        // Implementation cached content
        $enable_cache = true;
        $write_to_cache = false;	# flag
        $cache_time = 180; # seconds
        if (isset($vars['cache_time'])) $cache_time = $vars['cache_time'];
        $content = "";
        if ($enable_cache and $cache_time>0) {
            $cachefilestem = 'ZphpBB2_' . $blockinfo['bid'];
            $cachedir = System::getVar('temp');
            if (StringUtil::right($cachedir, 1)<>'/') $cachedir .= '/';
            if (isset($vars['cache_dir']) and !empty($vars['cache_dir'])) $cachedir .= $vars['cache_dir'];
            else $cachedir .= 'any_cache';
            $cachefile = $cachedir .'/'. $cachefilestem;
            // attempt to load from cache
            if (file_exists($cachefile)) {
                $file_time = filectime($cachefile);
                $now = time();
                $diff = ($now - $file_time);
                if ($diff <= $cache_time) {
                    $content = file_get_contents($cachefile);
                }
            }
            if (empty($content)) $write_to_cache = true; # not loaded, flag to write to cache later
        }
        if (empty($content)) {
            // Create output object
            $connection = Doctrine_Manager::getInstance()->getCurrentConnection();

            $table_prefix = ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');

            // include some files
            define('IN_PHPBB', true);
            $phpbb_root_path = 'modules/ZphpBB2/vendor/phpBB2/';
            include_once($phpbb_root_path . "includes/constants.php");

            $blockinfo['content'] = "";

            // Defaults some things if they are empty!
            $vars['last_X_posts'] = $vars['last_X_posts'] ? $vars['last_X_posts'] : "5";
            //do we want every topic to appear just once?
            $connkeys = $vars['group_topics'] ? "" . TOPICS_TABLE . ".topic_last_post_id = " . POSTS_TABLE . ".post_id" : "" . TOPICS_TABLE . ".topic_id = " . POSTS_TABLE . ".topic_id";
            //limit to certain forums?
            if (!is_null ($vars['excluded_forums']) && is_array($vars['excluded_forums'])) {
                 $excluded_forums = in_array("", $vars['excluded_forums']) ? "" : "AND " . FORUMS_TABLE . ".forum_id NOT IN (" . implode(", ", $vars['excluded_forums']) . ")";
            }
            $lastvisit  = 0;
            //list of forums user can see if private
            $viewforums = "";
            //list of forums user can look into if private
            $readforums = "";
            //list of forums where user is moderator
            $modforums  = "";
            //just for guests
            $userstate  = 0; 
            if (UserUtil::isLoggedIn()) {
                $uid = UserUtil::getVar('uid');
                //permission level for registered users
                $userstate = AUTH_REG;
                //are you an board admin?
                $query = "SELECT user_level, user_lastvisit FROM   " . USERS_TABLE . " WHERE  user_id = $uid";
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);;
                list($level, $lastvisit) = $result[0];
                if ($level == ADMIN) {
                    //user have complete access
                    $userstate = AUTH_ADMIN;
                } else {
                    $query = "SELECT " . AUTH_ACCESS_TABLE . ".forum_id,
                        max(" . AUTH_ACCESS_TABLE . ".auth_view), 
                        max(" . AUTH_ACCESS_TABLE . ".auth_read), 
                        max(" . AUTH_ACCESS_TABLE . ".auth_mod)
                        FROM   " . USER_GROUP_TABLE . " INNER JOIN " . AUTH_ACCESS_TABLE . " ON " . USER_GROUP_TABLE . ".group_id = " . AUTH_ACCESS_TABLE . ".group_id
                        WHERE  " . USER_GROUP_TABLE . ".user_id = $uid
                        GROUP BY " . AUTH_ACCESS_TABLE . ".forum_id";
                    $stmt = $connection->prepare($query);
                    $stmt->execute();
                    $result = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
                    foreach ($result as $r) {
                        list($forum_id, $auth_view, $auth_read, $auth_mod) = $r;
                        //let's make a nice list of forums the user is allowed to view, read and moderate
                        if($auth_read | $auth_mod) $readforums .= empty($readforums) ? $forum_id : ", " . $forum_id;
                        if($auth_view | $auth_mod) $viewforums .= empty($viewforums) ? $forum_id : ", " . $forum_id;", " . $forum_id;
                        if($auth_mod) $modforums  .= empty($modforums)  ? $forum_id : ", " . $forum_id;", " . $forum_id;
                    }
                }
            }
            //let's see if we can optimize the query
            $view_private = !empty($viewforums) ? " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($viewforums)) " : "";
            $read_private = !empty($readforums) ? " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($readforums)) " : "";
            if (!empty($modforums)) {
               $view_mod = " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
               $read_mod = " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
            } else {
               $view_mod = $read_mod = "";
            }
            //now for the main query
            $query = "SELECT " . TOPICS_TABLE . ".topic_title, 
                       " . TOPICS_TABLE . ".topic_replies, 
                         " . TOPICS_TABLE . ".topic_views, 
                         " . TOPICS_TABLE . ".topic_id, 
                         " . USERS_TABLE . ".username, 
                         " . POSTS_TABLE . ".post_id, 
                         " . POSTS_TABLE . ".poster_id, 
                         " . POSTS_TABLE . ".post_time, 
                         " . FORUMS_TABLE . ".forum_id, 
                         " . FORUMS_TABLE . ".forum_name,
                         " . CATEGORIES_TABLE . ".cat_title 
                         FROM ((" . TOPICS_TABLE . " 
                         INNER JOIN " . POSTS_TABLE . " ON $connkeys) 
                         INNER JOIN " . USERS_TABLE . " ON " . USERS_TABLE . ".user_id = " . POSTS_TABLE . ".poster_id) 
                         INNER JOIN " . FORUMS_TABLE . " ON " . FORUMS_TABLE . ".forum_id = " . TOPICS_TABLE . ".forum_id 
                         INNER JOIN " . CATEGORIES_TABLE . " ON " . CATEGORIES_TABLE . ".cat_id = " . FORUMS_TABLE . ".cat_id 
                         WHERE (" . FORUMS_TABLE . ".auth_view <= $userstate $view_private $view_mod)
                         AND   (" . FORUMS_TABLE . ".auth_read <= $userstate $read_private $read_mod) $excluded_forums 
                         AND   " . TOPICS_TABLE . ".topic_status <> " . TOPIC_MOVED . "
                         ORDER BY post_time DESC LIMIT ".$vars['last_X_posts'];
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $items = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
            if (!$items) {
                $blockinfo['content'] = '';
                return BlockUtil::themesideblock($blockinfo);
            }

            // get module information
            $modinfo = ModUtil::getInfoFromName("ZphpBB2");

        //foreach ($items as $r) {
            foreach (array_keys($items) as $k) {
                $items[$k]['replyicon'] = 'modules/'.$modinfo['directory'].'/images/' . (($lastvisit > 0 && $items[$k]['post_time'] > $lastvisit) ? "icon_newest_reply.gif" : "icon_latest_reply.gif");
                $items[$k]['post_username'] = ($items[$k]['poster_id'] != ANONYMOUS) ? $items[$k]['username'] : $this->__('Guest');
                $items[$k]['profile_url'] = ($items[$k]['poster_id'] != ANONYMOUS) ? ModUtil::url('ZphpBB2', 'user', 'profile', array('mode' => 'viewprofile', 'u' => $items[$k]['poster_id'])) : "";
            }
        }

        $render_template = 'blocks/lastposts.tpl';
        if ($this->view->is_cached($render_template)) {
            $blockinfo['content'] = $this->view->fetch($render_template);
        } else {
            $this->view->assign($vars);
            $this->view->assign('items', $items);
            $this->view->assign('phpbb_root_path', $phpbb_root_path);
            $blockinfo['content'] = $this->view->fetch($render_template);
        }
        
        $content = BlockUtil::themesideblock($blockinfo);

        if ($write_to_cache and !empty($content)) {
           // attempt to write to cache if not loaded before
            if (!file_exists($cachedir)) {
                mkdir($cachedir, 0777); # attempt to make the dir
            }
            if (!file_put_contents($cachefile, $content)) {
                //echo "<br />Could not save data to cache. Please make sure your cache directory exists and is writable.<br />";
            }
        }
        return $content;
    }
    
    /**
     * modify block settings ..
     */
    public function modify($blockinfo)
    {
        $table_prefix = ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');

        // get module information
        $modinfo = ModUtil::getInfoFromName("ZphpBB2");

        // Get current content
        $vars = BlockUtil::varsFromContent($blockinfo['content']);

        // Defaults
        if (empty($vars['cache_dir'])) {
            $vars['cache_dir'] = "any_cache";
        }
        if (!isset($vars['cache_time'])) {
            $vars['cache_time'] = "120";
        }
        if (!is_array($vars['excluded_forums'])) {
            $vars['excluded_forums'] = array();
        }

        // Create forum list
        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
        $query = "SELECT f.forum_id, f.forum_name, c.cat_title FROM ".$table_prefix."forums f LEFT JOIN ".$table_prefix."categories c ON c.cat_id = f.cat_id ORDER BY c.cat_title, f.forum_name";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $items = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
        foreach ($items as $item) {
            $selected = !is_array($vars['excluded_forums']) || in_array($item['forum_id'], $vars['excluded_forums']) ? 1 : 0;
            $forums[] = array('id' => $item['forum_id'], 'name' => $item['cat_title'] . ' / ' . $item['forum_name'], 'selected' => $selected);
        }

        $this->view->assign($vars);
        $this->view->assign('forums', $forums);

        return $this->view->fetch('blocks/lastposts_modify.tpl');
    }
    
    /**
     * update block settings
     */
    public function update($blockinfo)
    {
        $vars = BlockUtil::varsFromContent($blockinfo['content']);

        $this->view->setCaching(Zikula_View::CACHE_DISABLED);

        // alter the corresponding variable
        $vars['cache_time'] = (int)FormUtil::getPassedValue('cache_time', 0, 'POST');
        $vars['cache_dir'] = FormUtil::getPassedValue('cache_dir', 'any_cache', 'POST');
        $vars['last_X_posts'] = (int)FormUtil::getPassedValue('last_X_posts', 5, 'POST');
        $vars['display_date'] = (bool)FormUtil::getPassedValue('display_date', false, 'POST');
        $vars['display_time'] = (bool)FormUtil::getPassedValue('display_time', false, 'POST');
        $vars['group_topics'] = (bool)FormUtil::getPassedValue('group_topics', false, 'POST');
        $vars['excluded_forums'] = FormUtil::getPassedValue('excluded_forums', null, 'POST');

        // write back the new contents
        $blockinfo['content'] = BlockUtil::varsToContent($vars);
    
        // clear the block cache
        $this->view->clear_cache('blocks/lastposts.tpl');
    
        return $blockinfo;
    }
}