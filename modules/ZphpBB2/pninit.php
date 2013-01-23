<?php
/***************************************************************************
 * Module        : ZphpBB2 (The forum for Zikula)
 * Filename      : pninit.php
 * Copyright     : (C) 2003 The PNphpBB Group
 * Contact       : support@pnphpbb.com
 *               : http://www.pnphpbb.com
 *
 * Initialize the ZphpBB2 module and setup datasets
 *
 * $Id: pninit.php 200 2007-02-11 16:11:01Z kronos $
 *
 ***************************************************************************/
 
$ModName = 'ZphpBB2';
$phpbb_root_path = './modules/' . $ModName . '/';
define('IN_PHPBB', true);
include($phpbb_root_path.'extension.inc');
$starttime = 0;
include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
$language = getPNlanguage();
// If no language files exist for PostNuke language then use english
if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx)) {
    $language = "english";
}
define('PNPHPBB_INSTALL', true);
include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);

function ZphpBB2_init()
{
  if (!pnSecAuthAction(0, 'ZphpBB2::', '::', ACCESS_ADMIN)) {
    return false;
  }
  global $phpbb_root_path, $table_prefix, $lang, $modversion;
 
  $ModName = 'ZphpBB2';
  $phpbb_root_path = './modules/' . $ModName . '/';
  define('IN_PHPBB', true);
  include($phpbb_root_path.'extension.inc');
  $table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

  // Get PostNuke's Default Language and use this for ZphpBB2 default.
  include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
  $language = getPNlanguage();

  // If no language files exist for PostNuke language then use english
  if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
  {
    $language = "english";
  }

  define('PNPHPBB_INSTALL', true);
  include_once($phpbb_root_path . "pnversion.php");
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);

  include_once($phpbb_root_path . 'install/includes/functions_install.' . $phpEx);

  // determine if module have been installed
  $test_installed = zExecuteSQLobject1row("SHOW TABLES LIKE '" . $table_prefix . "users" . "'");

  if (!$test_installed) {
	// INSTALL MODULE
	global $remove_remarks, $delimiter, $db, $errored, $error_ary;

	error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables

	$error = false;

	// Include some required functions
	include($phpbb_root_path . 'includes/constants.' . $phpEx);
	// include($phpbb_root_path . 'includes/template.' . $phpEx);

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

	list($dbms, $dbhost, $dbuser, $dbpasswd, $dbname) = get_pndb_config();

	// Obtain the server domain
	if (empty($_SERVER['HTTP_HOST']))
	{
	  $server_name = getenv('HTTP_HOST');
	}
	else
	{
	  $server_name = $_SERVER['HTTP_HOST'];
	}

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

		include($phpbb_root_path . 'includes/db.' . $phpEx);
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
		include($phpbb_root_path.'includes/sql_parse.'.$phpEx);

		// Ok we have the db info go ahead and read in the relevant schema
		// and work on building the table.. probably ought to provide some
		// kind of feedback to the user as we are working here in order
		// to let them know we are actually doing something.

		$sql_query = @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema));
	  
		// Ok now lest do the same for the attachment mod schema
		$sql_query .= @fread(@fopen($dbms_attach_schema, 'r'), @filesize($dbms_attach_schema));

		// Ok now lest do the same for the pnphpbb2 schema
	  // $sql_query .= @fread(@fopen($dbms_pnphpbb2_schema, 'r'), @filesize($dbms_pnphpbb2_schema));

		$result = evaluate_statement($sql_query, sprintf($lang['ZphpBB2_Install_Title'], $table_prefix) , false, true);

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
		'board_email'	=> pnConfigGetVar('adminmail'),
		'script_path'	=> $phpbb_root_path,
		'server_port'	=> $server_port,
		'server_name'	=> $server_name
	);

	while (list($config_name, $config_value) = each($update_config))
	{
		$sql_query .= "UPDATE " . $table_prefix . "config SET config_value = '$config_value' WHERE config_name = '$config_name';";
	}

	$admin_name=pnUserGetVar('uname');
	// Obtain PN user password
	$sql = "SELECT pass FROM users WHERE uid='2'";

	if ( !($result = $db->sql_query($sql)) )
	{
		 message_die(CRITICAL_ERROR, 'Could not obtain PN user table', '', __LINE__, __FILE__, $sql);
	}
	list($admin_pass_md5) = $db->sql_fetchrow($result);

	$sql_query .= "UPDATE " . $table_prefix . "users SET username = '" . str_replace("\'", "''", $admin_name) . "', user_password='" . str_replace("\'", "''", $admin_pass_md5) . "', user_lang = '" . str_replace("\'", "''", $language) . "', user_email='" . str_replace("\'", "''", pnConfigGetVar('adminmail')) . "' WHERE username = 'Admin';";

	$sql_query .= "UPDATE " . $table_prefix . "users SET user_regdate = " . time() . ";";

	$result = evaluate_statement($sql_query, $lang['Populate_DB_Admin'], false, false);

	if ($errored)
	{
		LogUtil::registerError("Error! ".$lang['ZphpBB2_Some_Failed']);

		for ($i = 0; $i < count($error_ary['sql']); $i++)
		{
			LogUtil::registerError("<li>Error :: <b>" . $error_ary['error_code'][$i]['message'] . "</b><br />");
			LogUtil::registerError("SQL &nbsp; :: <b>" . $error_ary['sql'][$i] . "</b><br /></li>");
		}
	}

  }

  return true;
}

// ***************************************************
// * upgrade the ZphpBB2 module from an old version *
// ***************************************************

function ZphpBB2_upgrade()
{
  // @nikp N.Petkov: realy on fact we upgraded before moving to Zikula 1.3
  return true;
}

// ******************************
// * Delete the ZphpBB2 module *
// ******************************

function ZphpBB2_delete()
{
	$retok = true;

	$table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

	$query = "SHOW TABLES LIKE '" . $table_prefix . "_%';";
	$result = zExecuteSQLarray($query);

	foreach ($result as $r) {
		$query = "DROP TABLE `" . $r[0] . "`";
		if (!DBUtil::executeSQL($query)) {
			LogUtil::registerError();
			$retok = false;
		}
	}
	
	return $retok;
}
