<?php
/*
ZphpBB2 Last posts bloc, with templates
  Based on Multiblock
  Author: N.Petkov, 2012
*/

function ZphpBB2_Lastpostsblock_init()
{
   // Security
   SecurityUtil::registerPermissionSchema('ZphpBB2_Lastposts::', 'Block ID::');
}

function ZphpBB2_Lastpostsblock_info()
{
   // Values
   return array('text_type' => 'ZphpBB2',
                'module' => 'ZphpBB2',
                'text_type_long' => 'Last forum posts',
                'allow_multiple' => true,
                'form_content' => false,
                'form_refresh' => false,
                'show_preview' => true);
}

function ZphpBB2_Lastpostsblock_display($blockinfo)
{
    if (!SecurityUtil::checkPermission('ZphpBB2_Lastposts::', $blockinfo[bid]."::", ACCESS_READ)) {
        return;
    }

    global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2, $textcolor3, $textcolor4;

    // get module information
    $modinfo = ModUtil::getInfoFromName("ZphpBB2");
    if (empty($modinfo['name']) or empty($modinfo['directory'])) {
        return _MODULE_ERROR;
    }

    // Get variables from content block
    $vars = BlockUtil::varsFromContent($blockinfo['content']);
    $table_prefix = System::getVar('prefix') . "_phpbb_";

    define('IN_PHPBB', true);
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

        // include some files
        $phpbb_root_path = "./modules/" . $modinfo['directory'] . "/";
        include($phpbb_root_path . "extension.inc");
        include_once($phpbb_root_path . "includes/constants.".$phpEx);
        include_once($phpbb_root_path . "includes/functions.".$phpEx);
        $langfile = $phpbb_root_path . 'pnlang/'.ZLanguage::getLanguageCodeLegacy().'/Lastposts.' . $phpEx;
        if (!file_exists($langfile)) {
            $langfile = $phpbb_root_path . 'pnlang/eng/Lastposts.' . $phpEx;
        }
        include_once($langfile);

        $link_url = "index.php?module=" . $modinfo['url'] . "&amp;file=";
        $blockinfo['content'] = "";

        // Defaults some things if they are empty!
        $vars['last_X_posts'] ? ($vars['last_X_posts']) : "5";					// Show this many recent posts.
        //do we want every topic to appear just once?
        $connkeys = $vars['group_topics'] ? "" . TOPICS_TABLE . ".topic_last_post_id = " . POSTS_TABLE . ".post_id" : "" . TOPICS_TABLE . ".topic_id = " . POSTS_TABLE . ".topic_id";
        //limit to certain forums?
        if (!is_null ($vars['excluded_forums'])) {
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
            $result = zExecuteSQLarray($query);
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
                $result = zExecuteSQLarray($query);
                /* while (list($forum_id, $auth_view, $auth_read, $auth_mod) = $result->fields) {
                    $result->MoveNext(); */
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
        //now for the main query - plz don't expect me to explain this monster
        $postslimit = ($vars['last_X_posts']) ? $vars['last_X_posts'] : 10;
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
                     ORDER BY post_time DESC LIMIT ".$postslimit;
        $items = zExecuteSQLarray($query);
        if (!$items) {
            $blockinfo['content'] = _POSTINFO_ERROR;
            return BlockUtil::themesideblock($blockinfo);
        }
        
        //foreach ($items as $r) {
        foreach (array_keys($items) as $k) {
            //list($topic_subject, $post_replies, $post_views, $topic_id, $post_username, $post_id, $poster_id, $post_time, $forum_id, $forum_name, $cat_title) = $r;
            $items[$k]['replyicon'] = ($lastvisit > 0 && $items[$k]['post_time'] > $lastvisit) ? "icon_newest_reply" : "icon_latest_reply";
            $items[$k]['post_username'] = ($items[$k]['poster_id'] != ANONYMOUS) ? $items[$k]['username'] : _BOARD_GUEST;
            $items[$k]['profile_url'] = ($items[$k]['poster_id'] != ANONYMOUS) ? $link_url . "profile&amp;mode=viewprofile&amp;u=".$items[$k]['poster_id'] : "";
        }
    }

    $renderer = Zikula_View::getInstance('ZphpBB2');
    $render_template = 'block_lastposts.tpl';
    if ($renderer->is_cached($render_template)) {
        $blockinfo['content'] = $renderer->fetch($render_template);
    } else {
        $renderer->assign($vars);
        $renderer->assign('items', $items);
        $renderer->assign('link_url', $link_url);
        $renderer->assign('phpbb_root_path', $phpbb_root_path);
        $blockinfo['content'] = $renderer->fetch($render_template);
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
 * modify block settings
 */
function ZphpBB2_Lastpostsblock_modify($blockinfo)
{
    // Security check
    if (!SecurityUtil::checkPermission('ZphpBB2_Lastposts::', $blockinfo[bid]."::", ACCESS_EDIT)) {
      return false;
    }

    // get module information
    $modinfo = ModUtil::getInfoFromName("ZphpBB2");
    if (empty($modinfo['name']) or empty($modinfo['directory'])) {
        return _MODULE_ERROR;
    }
    
    // Get current content
    $vars = BlockUtil::varsFromContent($blockinfo['content']);
    $table_prefix = System::getVar('prefix') . "_phpbb_";

    define('IN_PHPBB', true);
    $phpbb_root_path = './modules/' . $modinfo['directory'] . '/';
    if (file_exists($phpbb_root_path)) {
        include($phpbb_root_path . 'extension.inc');
        include_once($phpbb_root_path . 'includes/constants.'.$phpEx);
        include_once($phpbb_root_path . "includes/functions.".$phpEx);
        $langfile = $phpbb_root_path . 'pnlang/'.ZLanguage::getLanguageCodeLegacy().'/Lastposts.' . $phpEx;
        if (!file_exists($langfile)) {
            $phpbb_root_path . 'pnlang/eng/Lastposts.' . $phpEx;
        }
        include_once($langfile);
    } else {
        return '';
    }
     // Defaults
    if (empty($vars)) {
      $vars['last_X_posts'] = 			"5";					 // Show this many recent posts.
      $vars['display_date'] = "1";								 // Display date in post
      $vars['display_time'] 				 		= "1";								 // Display time in post
      $vars['group_topics'] 				 		= "0";								 // Yes=1, to show the last X topics where was posted
      $vars['display_cat_posts'] 		 		= "0";								 // Display categories with posts 
      $vars['excluded_forums'][0] 	 		= "";									 // Forums to appear in the list
    }
    if (empty($vars['cache_dir'])) $vars['cache_dir'] = "any_cache";
    if (!isset($vars['cache_time'])) $vars['cache_time'] = "120";

    if (empty($vars['excluded_forums'])) {
        $vars['excluded_forums'] = array();
    }

    // Create forum list
    $query = "SELECT f.forum_id, f.forum_name, c.cat_title FROM " . FORUMS_TABLE . " f LEFT JOIN " . CATEGORIES_TABLE . " c ON c.cat_id = f.cat_id ORDER BY c.cat_title, f.forum_name";
    $result = zExecuteSQLarray($query);
    foreach ($result as $r) {
        list($forum_id, $forum_name, $cat_title) = $r;
        $selected = in_array($forum_id, $vars['excluded_forums']) ? 1 : 0;
        $forums[] = array('id' => $forum_id, 'name' => $cat_title . ' / ' . $forum_name, 'selected' => $selected);
    }

    $renderer = Zikula_View::getInstance('ZphpBB2');
    $render_template = 'block_lastposts_modify.tpl';
    $renderer->assign($vars);
    $renderer->assign('forums', $forums);
    return $renderer->fetch($render_template);
}


/**
 * update block settings
 */
function ZphpBB2_Lastpostsblock_update($blockinfo)
{
   list($vars['cache_time'],
        $vars['cache_dir'],
        $vars['last_X_posts'],
        $vars['last_X_scroll'],
        $vars['scroll_height'],
        $vars['scroll_speed'],
        $vars['scroll_images'],
        $vars['display_date'],
        $vars['display_time'],
        $vars['group_topics'],
        $vars['display_cat_posts'], 
        $vars['excluded_forums']
        ) = pnVarCleanFromInput(
        'cache_time',
        'cache_dir',
        'last_X_posts',
        'last_X_scroll',
        'scroll_height',
        'scroll_speed',
        'scroll_images',
        'display_date',
        'display_time',
        'group_topics', 
        'display_cat_posts',
        'excluded_forums');
   $blockinfo['content'] = pnBlockVarsToContent($vars);

   return $blockinfo;
}
