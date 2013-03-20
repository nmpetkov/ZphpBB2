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
     * Loads phpBB board config table in array
     * @return boolean
     */
    public static function getBoardConfig()
    {
        $dom = ZLanguage::getModuleDomain('ZphpBB2');

        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
        $stmt = $connection->prepare("SELECT * FROM " . self::getTablePrefix() . 'config');
        $stmt->execute();
        $data = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);

        $board_config = array();
        if ($data) {
            foreach ($data as $row) {
                $board_config[$row['config_name']] = $row['config_value'];
            }
        } else {
            return LogUtil::registerError(__('Error: Could not obtain config information.', $dom));
        }

        return $board_config;
    }

    /**
     * Update phpBB user account from Zikula account by given Id
     * @return boolean
     */
    public static function phpBBupdateAccountById($user_id)
    {
        $dom = ZLanguage::getModuleDomain('ZphpBB2');

        $userObj = UserUtil::getVars($user_id);

        if ($userObj) {
            $class = 'ZphpBB2_Listener_UsersSynch';
            if (!class_exists($class)) {
                include_once 'modules/ZphpBB2/lib/ZphpBB2/Listener/UsersSynch.php';
            }

            return ZphpBB2_Listener_UsersSynch::updateAccount($userObj);
        } else {
            return LogUtil::registerError(__('Error: Could not obtain user information, Id '.$user_id, $dom));
        }
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

    public static function getTablePrefix()
    {
        return ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');
    }
}