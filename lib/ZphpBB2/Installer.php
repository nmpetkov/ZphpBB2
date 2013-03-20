<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Installer extends Zikula_AbstractInstaller
{
    /**
     * Initializes a new install
     *
     * @return  boolean    true/false
     */
    public function install()
    {
        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
        
        define('IN_PHPBB', true);

        global $table_prefix;
        $table_prefix = 'phpbb_';
        $this->setVar('table_prefix', $table_prefix);

        // check for existing tables like phpbb*
        $stmt = $connection->prepare("SHOW TABLES LIKE '" . $table_prefix . "%'");
        $stmt->execute();
        $tablesexist = $stmt->fetchAll(Doctrine_Core::FETCH_NUM);
        if ($tablesexist) {
            $message = '';
            foreach($tablesexist as $table) {
                $message .= $table[0].'<br />';
            }
            return LogUtil::registerError('Similar table exist:<br />'.$message);
        }

        // create tables
        $phpbb_root_path = 'modules/ZphpBB2/vendor/phpBB2/';
        include_once($phpbb_root_path . 'extension.inc');
        include_once($phpbb_root_path . 'includes/functions.php');
        $language = getPNlanguage();
        if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.php')) {
            $language = "english";
        }
        include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.php');
        include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.php');
        include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.php');
        include_once($phpbb_root_path . 'install/includes/functions_install.php');

        // determine if module have been installed
        $stmt = $connection->prepare("SHOW TABLES LIKE '" . $table_prefix . "users" . "'");
        $stmt->execute();
        $test_installed = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
        if (!$test_installed) {
            // INSTALL MODULE
            global $remove_remarks, $delimiter, $db, $errored, $error_ary;

            error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables

            $error = false;

            // Include some required functions
            include($phpbb_root_path . 'includes/constants.php');

            // Define schema info
            $available_dbms = array(
                'mysql'=> array(
                    'LABEL'			=> 'MySQL 3.x',
                    'SCHEMA'		=> 'mysql', 
                    'DELIM'			=> ';',
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> 'remove_remarks'
                ), 
                'mysql4' => array(
                    'LABEL'			=> 'MySQL 4.x/5.x',
                    'SCHEMA'		=> 'mysql', 
                    'DELIM'			=> ';', 
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> 'remove_remarks'
                ), 
                'postgres' => array(
                    'LABEL'			=> 'PostgreSQL 7.x',
                    'SCHEMA'		=> 'postgres', 
                    'DELIM'			=> ';', 
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> 'remove_comments'
                ), 
                'mssql' => array(
                    'LABEL'			=> 'MS SQL Server 7/2000',
                    'SCHEMA'		=> 'mssql', 
                    'DELIM'			=> 'GO', 
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> 'remove_comments'
                ),
                'msaccess' => array(
                    'LABEL'			=> 'MS Access [ ODBC ]',
                    'SCHEMA'		=> '', 
                    'DELIM'			=> '', 
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> ''
                ),
                'mssql-odbc' =>	array(
                    'LABEL'			=> 'MS SQL Server [ ODBC ]',
                    'SCHEMA'		=> 'mssql', 
                    'DELIM'			=> 'GO',
                    'DELIM_BASIC'	=> ';',
                    'COMMENTS'		=> 'remove_comments'
                )
            );

            $dbms = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['dbdriver'];
			$dbhost = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['host'];
			$dbuser = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['user'];
			$dbpasswd = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['password'];
			$dbname = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['dbname'];
            $server_port = '80';

            if (isset($dbms))
            {
                switch($dbms)
                {
                    case 'msaccess':
                    case 'mssql-odbc':
                        $check_exts = 'odbc';
                        $check_other = 'odbc';
                        break;

                    case 'mssql':
                        $check_exts = 'mssql';
                        $check_other = 'sybase';
                        break;

                    case 'mysql':
                    case 'mysql4':
                        $check_exts = 'mysql';
                        $check_other = 'mysql';
                        break;

                    case 'postgres':
                        $check_exts = 'pgsql';
                        $check_other = 'pgsql';
                        break;
                }
                

                if (!extension_loaded($check_exts) && !extension_loaded($check_other))
                {	
                    LogUtil::registerError($lang['Install_No_Ext']);
                    return false;
                }

                include($phpbb_root_path . 'includes/db.php');
            }
            $dbms_schema = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
            $dbms_basic = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';
            $dbms_attach_schema = $phpbb_root_path . 'install/schemas/attach_' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
            $dbms_attach_basic = $phpbb_root_path . 'install/schemas/attach_' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';
            //$dbms_pnphpbb2_schema = $phpbb_root_path . 'install/schemas/pnphpbb2_' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
            $dbms_pnphpbb2_basic = $phpbb_root_path . 'install/schemas/pnphpbb2_' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';


            $remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
            $delimiter = $available_dbms[$dbms]['DELIM']; 
            $delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

            $error_ary = array();
            $errored = FALSE;

            if ($dbms != 'msaccess')
            {
            // Load in the sql parser
                include($phpbb_root_path.'includes/sql_parse.php');

                // Ok we have the db info go ahead and read in the relevant schema
                // and work on building the table.. probably ought to provide some
                // kind of feedback to the user as we are working here in order
                // to let them know we are actually doing something.

                $sql_query = @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema));
              
                // Ok now lest do the same for the attachment mod schema
                $sql_query .= @fread(@fopen($dbms_attach_schema, 'r'), @filesize($dbms_attach_schema));

                // $sql_query .= @fread(@fopen($dbms_pnphpbb2_schema, 'r'), @filesize($dbms_pnphpbb2_schema));

                $result = evaluate_statement($sql_query, 'Installing tables', false, true);

                // Ok tables have been built, let's fill in the basic information
                $sql_query = @fread(@fopen($dbms_basic, 'r'), @filesize($dbms_basic));

                // Ok tables have been built, let's fill in the basic information for the attachment mod
                $sql_query .= @fread(@fopen($dbms_attach_basic, 'r'), @filesize($dbms_attach_basic));

              // Ok tables have been built, let's fill in the basic information for ZphpBB2
                $sql_query .= @fread(@fopen($dbms_pnphpbb2_basic, 'r'), @filesize($dbms_pnphpbb2_basic));
                $result = evaluate_statement($sql_query, $lang['Populate_DB_PNphpBB'], false, true);

            }

            $sql_query = '';

            // Update the default admin user with their information.
            $sql_query .= "INSERT INTO " . $table_prefix . "config (config_name, config_value) VALUES ('board_startdate', " . time() . ");";

            $sql_query .= "INSERT INTO " . $table_prefix . "config (config_name, config_value) VALUES ('default_lang', '" . str_replace("\'", "''", $language) . "');";

            $update_config = array(
                'board_email'	=> System::getVar('adminmail'),
                'script_path'	=> $phpbb_root_path,
                'server_port'	=> $server_port,
                'server_name'	=> $_SERVER['HTTP_HOST']
            );

            while (list($config_name, $config_value) = each($update_config))
            {
                $sql_query .= "UPDATE " . $table_prefix . "config SET config_value = '$config_value' WHERE config_name = '$config_name';";
            }

            $admin_name=UserUtil::getVar('uname');
            // Obtain PN user password
            $sql = "SELECT pass FROM users WHERE uid='2'";

            if ( !($result = $db->sql_query($sql)) )
            {
                 message_die(CRITICAL_ERROR, 'Could not obtain PN user table', '', __LINE__, __FILE__, $sql);
            }
            list($admin_pass_md5) = $db->sql_fetchrow($result);

            $sql_query .= "UPDATE " . $table_prefix . "users SET username = '" . str_replace("\'", "''", $admin_name) . "', user_password='" . str_replace("\'", "''", $admin_pass_md5) . "', user_lang = '" . str_replace("\'", "''", $language) . "', user_email='" . str_replace("\'", "''", System::getVar('adminmail')) . "' WHERE username = 'Admin';";

            $sql_query .= "UPDATE " . $table_prefix . "users SET user_regdate = " . time() . ";";

            $result = evaluate_statement($sql_query, $lang['Populate_DB_Admin'], false, false);

            if ($errored)
            {
                LogUtil::registerError("Error! Installing some tables failed.");

                for ($i = 0; $i < count($error_ary['sql']); $i++)
                {
                    LogUtil::registerError("<li>Error :: <b>" . $error_ary['error_code'][$i]['message'] . "</b><br />");
                    LogUtil::registerError("SQL &nbsp; :: <b>" . $error_ary['sql'][$i] . "</b><br /></li>");
                }
            }
        }

        // module variables
        $this->setVar('page_title', 'Forum');
        $this->setVar('page_description', 'Place for discussions and support');
        $this->setVar('page_robots', 'noindex, nofollow, noarchive');

        // Register hooks
        HookUtil::registerSubscriberBundles($this->version->getHookSubscriberBundles());

        // Register event handlers
        EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.create', array('ZphpBB2_Listener_UsersSynch', 'createAccountListener'));
        EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.update', array('ZphpBB2_Listener_UsersSynch', 'updateAccountListener'));
        EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.delete', array('ZphpBB2_Listener_UsersSynch', 'deleteAccountListener'));

        return true;
    }
    
    /**
     * Upgrade module
     *
     * @param   string    $oldversion
     * @return  boolean   true/false
     */
    public function upgrade($oldversion)
    {
        // upgrade dependent on old version number
        switch ($oldversion)
        {
            case '2.0':
                $table_prefix = 'phpbb_';
                $this->setVar('table_prefix', $table_prefix);

                $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
				// drop system table prefix (depreciated)
                $stmt = $connection->prepare("SHOW TABLES LIKE '%" . $table_prefix . "_%'");
                try {
                    $stmt->execute();
                } catch (Exception $e) {
                    return LogUtil::registerError(__('Error: ') . $e->getMessage());
                }
                $items = $stmt->fetchAll(Doctrine_Core::FETCH_NUM);
                foreach ($items as $item) {
                    $pos = strpos($item[0], $table_prefix);
                    if ($pos > 0) {
                        $stmt = $connection->prepare('RENAME TABLE ' . $item[0] . " TO " . substr($item[0], $pos));
                        try {
                            $stmt->execute();
                        } catch (Exception $e) {
                            return LogUtil::registerError(__('Error: ') . $e->getMessage());
                        }
                    }
                }
                // Register hooks
                $sqlQueries = array();
                $sqlQueries[] = 'DELETE FROM `hook_area` WHERE `owner`="ZphpBB2"';
                $sqlQueries[] = 'DELETE FROM `hook_subscriber` WHERE `owner`="ZphpBB2"';
                foreach ($sqlQueries as $sql) {
                    $stmt = $connection->prepare($sql);
                    try {
                        $stmt->execute();
                    } catch (Exception $e) {
                    }   
                }
                HookUtil::registerSubscriberBundles($this->version->getHookSubscriberBundles());

            case '2.1.0':
                // Register event handlers
                EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.create', array('ZphpBB2_Listener_UsersSynch', 'createAccountListener'));
                EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.update', array('ZphpBB2_Listener_UsersSynch', 'updateAccountListener'));
                EventUtil::registerPersistentModuleHandler('ZphpBB2', 'user.account.delete', array('ZphpBB2_Listener_UsersSynch', 'deleteAccountListener'));

        case '2.1.1':
				// future upgrade routines
        }
        return true;
    }
    
    /**
     * Delete module
     *
     * @return  boolean    true/false
     */
    public function uninstall()
    {
        $table_prefix = ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');
        $tablenames = ZphpBB2_Util::getTableNames();

        $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
        $stmt = $connection->prepare("SHOW TABLES LIKE '%" . $table_prefix . "_%'");
        try {
            $stmt->execute();
        } catch (Exception $e) {
            return LogUtil::registerError(__('Error: ') . $e->getMessage());
        }
        $items = $stmt->fetchAll(Doctrine_Core::FETCH_NUM);
        foreach ($items as $item) {
            $table_stem = ZphpBB2_Util::getTableStem($item[0], $table_prefix);
            if (in_array($table_stem, $tablenames)) {
                $stmt = $connection->prepare("DROP TABLE `" . $item[0] . "`");
                try {
                    $stmt->execute();
                } catch (Exception $e) {
                    return LogUtil::registerError(__('Error: ') . $e->getMessage());
                }
            }
        }

        // Unregister event handlers
        EventUtil::unregisterPersistentModuleHandler('ZphpBB2', 'user.account.create', array('ZphpBB2_Listener_UsersSynch', 'createAccountListener'));
        EventUtil::unregisterPersistentModuleHandler('ZphpBB2', 'user.account.update', array('ZphpBB2_Listener_UsersSynch', 'updateAccountListener'));
        EventUtil::unregisterPersistentModuleHandler('ZphpBB2', 'user.account.delete', array('ZphpBB2_Listener_UsersSynch', 'deleteAccountListener'));

        return true;
    }
}