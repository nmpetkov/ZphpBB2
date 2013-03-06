<?php
/**
 * Newletter Plugin - ZphpBB2
 */

class Newsletter_DBObject_PluginZphpBB2Array extends Newsletter_DBObject_PluginBaseArray
{
    function pluginAvailable()
    {
        return ModUtil::available('ZphpBB2');
    }

    // $filtAfterDate is null if is not set, or in format yyyy-mm-dd hh:mm:ss
    function getPluginData($lang=null, $filtAfterDate=null)
    {
        if (!$this->pluginAvailable()) {
            return array();
        }
        if (empty($lang)) {
            $lang = System::getVar('language_i18n', 'en');
        }

        $modinfo = ModUtil::getInfoFromName("ZphpBB2");
        $nItems = ModUtil::getVar ('Newsletter', 'plugin_ZphpBB2_nItems', 1);
        $userNewsletter  = (int)ModUtil::getVar ('Newsletter', 'newsletter_userid', 1);

        if (!SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_READ, $userNewsletter)) {
            return array();
        }

        $prefix = System::getVar('prefix');
        $prefix = $prefix ? $prefix.'_' : '';
        $TOPICS_TABLE = $prefix."phpbb_topics";
        $POSTS_TABLE = $prefix."phpbb_posts";
        $POSTS_TEXT_TABLE = $prefix."phpbb_posts_text";
        $FORUMS_TABLE = $prefix."phpbb_forums";

        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
        $sql = "SELECT forum_id, forum_name FROM $FORUMS_TABLE WHERE auth_view <= 0 AND auth_read <= 0";
        $stmt = $connection->prepare($sql);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            return LogUtil::registerError(__('Error in plugin').' ZphpBB2: ' . $e->getMessage());
        }
        $userforums = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
        $allowedforums = array();
        foreach (array_keys($userforums) as $k) {
            if (SecurityUtil::checkPermission('ZphpBB2::', ":".$userforums[$k]['forum_id'].":", ACCESS_READ, $userNewsletter)) {
                $allowedforums[] = $userforums[$k]['forum_id'];
            }
        }
        if (count($allowedforums)==0) {
            // user is not allowed to read any forum at all
            return array();
        }

        $sql = "SELECT $TOPICS_TABLE.topic_title, $TOPICS_TABLE.topic_replies, $TOPICS_TABLE.topic_views, $TOPICS_TABLE.topic_id, 
                     $POSTS_TABLE.post_id, $POSTS_TABLE.poster_id, $POSTS_TABLE.post_time, 
                     $POSTS_TEXT_TABLE.post_subject, $POSTS_TEXT_TABLE.post_text, 
                     $FORUMS_TABLE.forum_name 
                     FROM $TOPICS_TABLE 
                     INNER JOIN $POSTS_TABLE ON $POSTS_TABLE.topic_id = $TOPICS_TABLE.topic_id 
                     INNER JOIN $POSTS_TEXT_TABLE ON $POSTS_TEXT_TABLE.post_id = $POSTS_TABLE.post_id 
                     INNER JOIN $FORUMS_TABLE ON $FORUMS_TABLE.forum_id = $TOPICS_TABLE.forum_id";
        $sql .= " WHERE $TOPICS_TABLE.forum_id IN (" . implode(',', $allowedforums) . ")";
        if ($filtAfterDate) {
            $sql .= " AND FROM_UNIXTIME(post_time)>='".$filtAfterDate."'";
        }
        $sql .= " ORDER BY post_time DESC LIMIT ".$nItems;
        $stmt = $connection->prepare($sql);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            return LogUtil::registerError(__('Error in plugin').' ZphpBB2: ' . $e->getMessage());
        }
        $items = $stmt->fetchAll(Doctrine_Core::FETCH_BOTH);

        foreach (array_keys($items) as $k) {
            $items[$k]['topicurl'] = 'index.php?module=' . $modinfo['url'] . '&amp;file=viewtopic&t=' . $items[$k]['topic_id'];
            $items[$k]['posturl'] = 'index.php?module=' . $modinfo['url'] . '&amp;file=viewtopic&p=' . $items[$k]['post_id'] .'#'. $items[$k]['post_id'];
            $items[$k]['postdate'] = DateUtil::getDatetime($items[$k]['post_time']);
            $items[$k]['username']= UserUtil::getVar('uname', $items[$k]['poster_id']);

            $items[$k]['nl_title'] = $items[$k]['topic_title'];
            $items[$k]['nl_url_title'] = System::getBaseUrl().$items[$k]['posturl'];
            $items[$k]['nl_content'] = $items[$k]['forum_name'].', '.$items[$k]['username']."<br />\n".$items[$k]['post_text'];
            $items[$k]['nl_url_readmore'] = $items[$k]['nl_url_title'];
        }

        return $items;
    }
}
