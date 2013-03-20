<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Listener_UsersSynch
{
    /**
     * Create a user in forum database, if created in Zikula Users.
     *
     * @param Zikula_Event $event The event that triggered this handler.
     *
     * @return void
     */
    public static function createAccountListener(Zikula_Event $event)
    {
        $userObj = $event->getSubject();

        self::updateAccount($userObj);
    }

    /**
     * Updates user information in forum database.
     *
     * @param Zikula_Event $event The event that triggered this handler.
     *
     * @return void
     */
    public static function updateAccountListener(Zikula_Event $event)
    {
        $userObj = $event->getSubject();

        self::updateAccount($userObj);
    }

    /**
     * Updates user information in forum database.
     *
     * @param array with user information.
     *
     * @return boolean
     */
    public static function updateAccount($userObj)
    {
        if (is_array($userObj) && $userObj['uid'] > 0) {
            // We need some board config information to create board user_error
            $board_config = ZphpBB2_Util::getBoardConfig();
            $user_is_admin = SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN) ? 1 : 0;

            $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
            $table_users = self::getTableUsers();

            // check for new user
            $stmt = $connection->prepare("SELECT * FROM " . $table_users . " WHERE user_id=" . $userObj['uid']);
            try {
                $stmt->execute();
            } catch (Exception $e) {
                return LogUtil::registerError('Error: Could not get data from users table. ' . $e->getMessage());
            }
            if ($stmt->rowCount() == 0) {
                // New forum user
                // Wrap adding new user in transaction
                $connection->beginTransaction();
                try {
                    // new user - add in forum database
                    $sql = "INSERT INTO " . $table_users . " (";
                    $sql .= "user_id, user_active, username, user_password, ";
                    $sql .= "user_regdate, user_viewemail, user_attachsig, user_allowsmile, ";
                    $sql .= "user_allowhtml, user_allowbbcode, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_dateformat, ";
                    $sql .= "user_lang, user_style, user_level, user_allow_pm";
                    $sql .= ") VALUES (";
                    $sql .= "'" . $userObj['uid'] . "', '1', '" . DataUtil::formatForStore($userObj['uname']) . "', '" . DataUtil::formatForStore($userObj['pass']) . "', ";
                    $sql .= time() .", 0, " . $board_config['allow_sig'] . ", " . $board_config['allow_smilies'] . ", ";
                    $sql .= $board_config['allow_html'] . ", " . $board_config['allow_bbcode'] . ", 1, 0, 1, 1, '" . $board_config['default_dateformat'] . "', ";
                    $sql .= "'" . $board_config['default_lang'] . "', " . $board_config['default_style'] . ", ".$user_is_admin.", 1";
                    $sql .= ")";
                    $stmt = $connection->prepare($sql);
                    $stmt->execute();
                    
                    // Insert in group table
                    $sql = "INSERT INTO " . self::getTablePrefix() . "groups (group_name, group_description, group_single_user, group_moderator)";
                    $sql .= " VALUES ('', 'Personal User', 1, 0)";
                    $stmt = $connection->prepare($sql);
                    $stmt->execute();
                    $group_id = $connection->lastInsertId('group_id');

                    // Insert in user_group table
                    $sql = "INSERT INTO " . self::getTablePrefix() . "user_group (user_id, group_id, user_pending) VALUES (".$userObj['uid'].", ".$group_id.", 0)";
                    $stmt = $connection->prepare($sql);
                    $stmt->execute();
                    
                    // end transaction
                    $connection->commit(); 
                } catch (Exception $e) {
                    // error, rollback the transaction
                    $connection->rollback();
                    return LogUtil::registerError('Error: Could not insert data for new user. ' . $e->getMessage());
                }

                // Get inserted row
                $stmt = $connection->prepare("SELECT * FROM " . $table_users . " WHERE user_id=" . $userObj['uid']);
                try {
                    $stmt->execute();
                } catch (Exception $e) {
                    return LogUtil::registerError('Error: Could not get data from users table. ' . $e->getMessage());
                }
                $result = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
                $userObjOld = $result[0];
            } else {
                // Existing user
                $result = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
                $userObjOld = $result[0];
            }

            // Update data
            $sql = "UPDATE " . $table_users . " SET ";
            $sql .= "user_id = " . DataUtil::formatForStore($userObj['uid']) . ", ";
            if (isset($userObj['uname'])) {
                $sql .= "username = '" . DataUtil::formatForStore($userObj['uname']) . "', ";
            }
            if (isset($userObj['pass'])) {
                $sql .= "user_password = '" . DataUtil::formatForStore($userObj['pass']) . "', ";
            }
            if (isset($userObj['email'])) {
                $sql .= "user_email = '" . DataUtil::formatForStore($userObj['email']) . "', ";
            }
            if (isset($userObj['activated'])) {
                $sql .= "user_active = '" . DataUtil::formatForStore($userObj['activated']) . "', ";
            }
            // Data optionally coming from Profile module
            if (isset($userObj['__ATTRIBUTES__']['icq'])) {
                $sql .= "user_icq = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['icq']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['yim'])) {
                $sql .= "user_yim = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['yim']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['aim'])) {
                $sql .= "user_aim = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['aim']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['msnm'])) {
                $sql .= "user_msnm = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['msnm']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['url'])) {
                $url = "http://" . preg_replace ("'http://'i", '',  $userObj['__ATTRIBUTES__']['url']);
                $sql .= "user_website = '" . DataUtil::formatForStore($url) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['signature'])) {
                $sql .= "user_sig = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['signature']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['city'])) {
                $sql .= "user_from = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['city']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['occupation'])) {
                $sql .= "user_occ = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['occupation']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['interests'])) {
                $sql .= "user_interests = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['interests']) . "', ";
            }
            if (isset($userObj['__ATTRIBUTES__']['tzoffset'])) {
                $sql .= "user_timezone = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['tzoffset']-12) . "', ";
            }
            // Avatars are not synchronized yet
            /*if (isset($userObj['__ATTRIBUTES__']['avatar'])) {
                $sql .= "user_avatar = '" . DataUtil::formatForStore($userObj['__ATTRIBUTES__']['avatar']) . "', ";
                $sql .= "user_avatar_type = 3, ";
            }*/
            // Update user rights
            if (isset($userObjOld['user_level'])) {
                $user_is_admin = $user_is_admin == 0 && $userObjOld['user_level'] <> 0 ? $user_is_admin = $userObjOld['user_level'] : $user_is_admin;
                $sql .= "user_level = ".$user_is_admin.", ";
            }
            $sql = rtrim($sql, ' ,');
            $sql .= " WHERE user_id=" . $userObj['uid'];
            $stmt = $connection->prepare($sql);
            try {
                $stmt->execute();
            } catch (Exception $e) {
                return LogUtil::registerError('Error: Could not update data for the user.' . $e->getMessage());
            }

            // Update group tables
            if (stripslashes($userObjOld['username']) != UserUtil::getVar('uname')) {
                $sql = "UPDATE " . self::getTablePrefix() . "groups SET group_name = '" . DataUtil::formatForStore($userObj['uname']) . "' WHERE group_name = '" . $userObjOld['username'] . "'";
                $stmt = $connection->prepare($sql);
                try {
                    $stmt->execute();
                } catch (Exception $e) {
                    return LogUtil::registerError('Error: Could not update groups table. ' . $e->getMessage());
                }
            }

            return true;
        }

        return false;
    }

    /**
     * Deletes the user in forum database, if deleted in Zikula Users.
     *
     * @param Zikula_Event $event The event that triggered this handler.
     *
     * @return void
     */
    public static function deleteAccountListener(Zikula_Event $event)
    {
        $userObj = $event->getSubject();

        if (is_array($userObj) && $userObj['uid'] > 0) {
            $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
            $stmt = $connection->prepare("DELETE FROM " . self::getTableUsers() . " WHERE user_id=" . $userObj['uid']);
            $stmt->execute();
        }
    }

    public static function getTableUsers()
    {
        return self::getTablePrefix() . 'users';
    }

    public static function getTablePrefix()
    {
        return ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');
    }
}
