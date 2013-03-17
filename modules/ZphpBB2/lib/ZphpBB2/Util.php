<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Util
{
    /**
     * ZphpBB2 Default Module Settings
     * @return boolean xyz
     */
    public static function testUtil()
    {
        die('I am here.');
        return true;
    }   

    /**
     * Return array of phpBB tables
     * @return array
     */
    public static function getTableNames()
    {
        return array('', 'attach_quota', '', 'attachments', '', 'attachments_config', '', 'attachments_desc', 
            'auth_access', 'banlist', 'categories', 'config', 'confirm', 'disallow', 
            'extension_groups', 'extensions', 'forbidden_extensions', 'forum_prune', 'forums', 
            'groups', 'posts', 'posts_text', 'privmsgs', 'privmsgs_text', 'quota_limits', 
            'ranks', 'search_results', 'search_wordlist', 'search_wordmatch', 'sessions', 'smilies', 
            'themes', 'themes_name', 'topics', 'topics_watch', 'user_group', 'users', 'vote_desc', 
            'vote_results', 'vote_voters', 'words');
    }   

    /**
     * Return table name witout prefix
     * @return array
     */
    public static function getTableStem($table_name, $table_prefix)
    {
        $table_stem = $table_name;
        $pos = strpos($table_name, $table_prefix);
        if ($pos !== false) {
            $len = strlen($table_prefix);
            $table_stem = substr($table_name, $pos+$len);
        }

        return $table_stem;
    }   
}