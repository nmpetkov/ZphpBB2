<?php
/**
 * Newletter Plugin - ZphpBB2
 */

class Newsletter_DBObject_PluginZphpBB2Array extends Newsletter_DBObject_PluginBaseArray
{
    function Newsletter_DBObject_PluginZphpBB2Array($init=null, $where='')
    {
        $this->Newsletter_DBObject_PluginBaseArray();
    }

    function getPluginData($lang=null)
    {
        if (!ModUtil::available('ZphpBB2')) {
            return array();
        }
        // get module information
        $modinfo = ModUtil::getInfoFromName("ZphpBB2");

        $nItems = ModUtil::getVar ('Newsletter', 'plugin_ZphpBB2_nItems', 1);

        ModUtil::dbInfoLoad('ZphpBB2');
        $table_prefix = System::getVar('prefix') . "_phpbb_";
        $link_url = "index.php?module=" . $modinfo['url'] . "&amp;file=";

        // include some files
        define('IN_PHPBB', true);
        $phpbb_root_path = "./modules/" . $modinfo['directory'] . "/";
        include($phpbb_root_path . "extension.inc");
        include_once($phpbb_root_path . "includes/constants.php");
        include_once($phpbb_root_path . "includes/functions.php");
        $langfile = $phpbb_root_path . 'pnlang/'.ZLanguage::getLanguageCodeLegacy().'/Lastposts.php';
        if (!file_exists($langfile)) {
            $langfile = $phpbb_root_path . 'pnlang/eng/Lastposts.php';
        }
        include_once($langfile);

        //do we want every topic to appear just once?
        $group_topics = false;
        if ($group_topics) {
            $connkeys_posts = TOPICS_TABLE . ".topic_last_post_id = " . POSTS_TABLE . ".post_id";
        } else {
            $connkeys_posts = TOPICS_TABLE . ".topic_id = " . POSTS_TABLE . ".topic_id";
        }
        //limit to certain forums?
        $excluded_forums = null;
        if (!is_null ($excluded_forums)) {
             $excluded_forums = in_array("", $excluded_forums) ? "" : "AND " . FORUMS_TABLE . ".forum_id NOT IN (" . implode(", ", $excluded_forums) . ")";
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
        $postslimit = ($nItems) ? $nItems : 10;
        $query = "SELECT " . TOPICS_TABLE . ".topic_title, 
                   " . TOPICS_TABLE . ".topic_replies, 
                     " . TOPICS_TABLE . ".topic_views, 
                     " . TOPICS_TABLE . ".topic_id, 
                     " . USERS_TABLE . ".username, 
                     " . POSTS_TABLE . ".post_id, 
                     " . POSTS_TABLE . ".poster_id, 
                     " . POSTS_TABLE . ".post_time, 
                     " . POSTS_TEXT_TABLE . ".post_subject, 
                     " . POSTS_TEXT_TABLE . ".post_text, 
                     " . FORUMS_TABLE . ".forum_id, 
                     " . FORUMS_TABLE . ".forum_name,
                     " . CATEGORIES_TABLE . ".cat_title 
                     FROM ((" . TOPICS_TABLE . " 
                     INNER JOIN " . POSTS_TABLE . " ON $connkeys_posts) 
                     INNER JOIN " . USERS_TABLE . " ON " . USERS_TABLE . ".user_id = " . POSTS_TABLE . ".poster_id 
                     INNER JOIN " . POSTS_TEXT_TABLE . " ON " . POSTS_TEXT_TABLE . ".post_id = " . POSTS_TABLE . ".post_id) 
                     INNER JOIN " . FORUMS_TABLE . " ON " . FORUMS_TABLE . ".forum_id = " . TOPICS_TABLE . ".forum_id 
                     INNER JOIN " . CATEGORIES_TABLE . " ON " . CATEGORIES_TABLE . ".cat_id = " . FORUMS_TABLE . ".cat_id 
                     WHERE (" . FORUMS_TABLE . ".auth_view <= $userstate $view_private $view_mod)
                     AND   (" . FORUMS_TABLE . ".auth_read <= $userstate $read_private $read_mod) $excluded_forums 
                     AND   " . TOPICS_TABLE . ".topic_status <> " . TOPIC_MOVED . "
                     ORDER BY post_time DESC LIMIT ".$postslimit;

        $result = DBUtil::executeSQL($query);
        if ($result) {
            $items = $result->fetchAll(Doctrine_Core::FETCH_BOTH);
        }

        if ($items) {
            foreach (array_keys($items) as $k) {
                //list($topic_subject, $post_replies, $post_views, $topic_id, $post_username, $post_id, $poster_id, $post_time, $forum_id, $forum_name, $cat_title) = $r;
                $items[$k]['replyicon'] = ($lastvisit > 0 && $items[$k]['post_time'] > $lastvisit) ? "icon_newest_reply" : "icon_latest_reply";
                $items[$k]['post_username'] = ($items[$k]['poster_id'] != ANONYMOUS) ? $items[$k]['username'] : _BOARD_GUEST;
                $items[$k]['profile_url'] = ($items[$k]['poster_id'] != ANONYMOUS) ? $link_url . "profile&amp;mode=viewprofile&amp;u=".$items[$k]['poster_id'] : "";
                $items[$k]['topicurl'] = $link_url . 'viewtopic&t=' . $items[$k]['topic_id'];
                $items[$k]['posturl'] = $link_url . 'viewtopic&p=' . $items[$k]['post_id'] .'#'. $items[$k]['post_id'];
            }
        }

        return $items;
    }
}
