<?php
/***************************************************************************
 *                                common.php
 *                            -------------------
 *   begin                : Saturday, Feb 23, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: common.php 192 2007-01-20 15:17:44Z kronos $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// This will NOT report uninitialized variables
error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

// Protect against GLOBALS tricks
if (isset($_POST['GLOBALS']) || isset($_FILES['GLOBALS']) || isset($_GET['GLOBALS']) || isset($_COOKIE['GLOBALS']))
{
	die("Hacking attempt");
}

// Protect against HTTP_SESSION_VARS tricks
if (isset($_SESSION) && !is_array($_SESSION))
{
	die("Hacking attempt");
}

if (@ini_get('register_globals') == '1' || strtolower(@ini_get('register_globals')) == 'on')
{
	// PHP4+ path
	$not_unset = array('HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_COOKIE_VARS', 'HTTP_SERVER_VARS', 'HTTP_SESSION_VARS', 'HTTP_ENV_VARS', 'HTTP_POST_FILES', 'phpEx', 'phpbb_root_path');

	// Not only will array_merge give a warning if a parameter
	// is not an array, it will actually fail. So we check if
	// HTTP_SESSION_VARS has been initialised.
	if (!isset($_SESSION) || !is_array($_SESSION))
	{
		$_SESSION = array();
	}

	// Merge all into one extremely huge array; unset
	// this later
	$input = array_merge($_GET, $_POST, $_COOKIE, $_SERVER, $_SESSION, $_ENV, $_FILES);

	unset($input['input']);
	unset($input['not_unset']);

	while (list($var,) = @each($input))
	{
		if (in_array($var, $not_unset))
		{
			die('Hacking attempt!');
		}
		unset($var);
	}

	unset($input);
}

//
// addslashes to vars if magic_quotes_gpc is off
// this is a security precaution to prevent someone
// trying to break out of a SQL statement.
//
if( !get_magic_quotes_gpc() )
{
	if( is_array($_GET) )
	{
		while( list($k, $v) = each($_GET) )
		{
			if( is_array($_GET[$k]) )
			{
				while( list($k2, $v2) = each($_GET[$k]) )
				{
					$_GET[$k][$k2] = addslashes($v2);
				}
				@reset($_GET[$k]);
			}
			else
			{
				$_GET[$k] = addslashes($v);
			}
		}
		@reset($_GET);
	}

	if( is_array($_POST) )
	{
		while( list($k, $v) = each($_POST) )
		{
			if( is_array($_POST[$k]) )
			{
				while( list($k2, $v2) = each($_POST[$k]) )
				{
					$_POST[$k][$k2] = addslashes($v2);
				}
				@reset($_POST[$k]);
			}
			else
			{
				$_POST[$k] = addslashes($v);
			}
		}
		@reset($_POST);
	}

    // ZphpBB2 =>
	if( is_array($_COOKIE) )
	{
		while( list($k, $v) = each($_COOKIE) )
		{
			if( is_array($_COOKIE[$k]) )
			{
				while( list($k2, $v2) = each($_COOKIE[$k]) )
				{
					$_COOKIE[$k][$k2] = addslashes($v2);
				}
				@reset($_COOKIE[$k]);
			}
			else
			{
				$_COOKIE[$k] = addslashes($v);
			}
		}
		@reset($_COOKIE);
	}
    // <= ZphpBB2
}

//
// Define some basic configuration arrays this also prevents
// malicious rewriting of language and otherarray values via
// URI params
//
// ZphpBB2 => otherwise including main forum files from within controller methods does not work!
global $board_config, $userdata, $phpbb_theme, $images, $lang, $nav_links, $dss_seeded;
// <= ZphpBB2
$board_config = array();
$userdata = array();
// Begin PNphpBB2 Module
$phpbb_theme = array();
// End PNphpBB2 Module
$images = array();
$lang = array();
$nav_links = array();
$dss_seeded = false;
global $gen_simple_header;
$gen_simple_header = FALSE;

// Begin PNphpBB2 Module
// include($phpbb_root_path . 'config.'.$phpEx);

include($phpbb_root_path . 'includes/functions.'.$phpEx);

$dbms = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['dbdriver'];
$dbhost = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['host'];
$dbuser = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['user'];
$dbpasswd = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['password'];
$dbname = $GLOBALS['ZConfig']['DBInfo']['databases']['default']['dbname'];
$table_prefix = ModUtil::getVar ('ZphpBB2', 'table_prefix', 'phpbb_');

// Can we find the users table?
$connection = Doctrine_Manager::getInstance()->getCurrentConnection();
$stmt = $connection->prepare("SHOW TABLES LIKE '" . $table_prefix . "users" . "'");
$stmt->execute();
$test_installed = $stmt->fetchAll(Doctrine_Core::FETCH_ASSOC);
if (!$test_installed) {
	LogUtil::registerError("Error! Unable to access " . $table_prefix . "users table, table is missing.");
	return;
}
// End PNphpBB2 Module

include($phpbb_root_path . 'includes/constants.'.$phpEx);
// Begin PNphpBB2 Module
// include($phpbb_root_path . 'includes/template.'.$phpEx);
// End PNphpBB2 Module

include($phpbb_root_path . 'includes/sessions.'.$phpEx);
include($phpbb_root_path . 'includes/auth.'.$phpEx);
// Begin PNphpBB2 Module
// include($phpbb_root_path . 'includes/functions.'.$phpEx);
// End PNphpBB2 Module
global $db;
include($phpbb_root_path . 'includes/db.'.$phpEx);
// We do not need this any longer, unset for safety purposes
unset($dbpasswd);

//
// Obtain and encode users IP
//
// I'm removing HTTP_X_FORWARDED_FOR ... this may well cause other problems such as
// private range IP's appearing instead of the guilty routable IP, tough, don't
// even bother complaining ... go scream and shout at the idiots out there who feel
// "clever" is doing harm rather than good ... karma is a great thing ... :)
//
$client_ip = ( !empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( ( !empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] : getenv('REMOTE_ADDR') );
$user_ip = encode_ip($client_ip);

//
// Setup forum wide options, if this fails
// then we output a CRITICAL_ERROR since
// basic forum information is not available
//
$sql = "SELECT *
	FROM " . CONFIG_TABLE;
if( !($result = $db->sql_query($sql)) )
{
	message_die(CRITICAL_ERROR, "Could not query config information", "", __LINE__, __FILE__, $sql);
}

while ( $row = $db->sql_fetchrow($result) )
{
	$board_config[$row['config_name']] = $row['config_value'];
}
// Begin PNphpBB2 Module
// Set defaults that can not be used with PN
if ($board_config['pnphpbb2_template_compiler'] == 1)
{
 	 include($phpbb_root_path . 'includes/xs_template.'.$phpEx);
}
else
{
 	 include($phpbb_root_path . 'includes/template.'.$phpEx);
}
$board_config['default_dateformat'] = '%d.%m.%Y %H:%M';

$board_config['server_name'] = System::getBaseUrl();
// ZphpBB2 commented
//$modinfo = ModUtil::getInfoFromName("ZphpBB2");
//$board_config['module_url'] = "index.php?module=" . $modinfo['url'] . "&file=";

$board_config['sitename'] = System::getVar('sitename'); 
$board_config['site_desc'] = System::getVar('slogan'); 
$board_config['require_activation'] = 0;
// $board_config['gzip_compress'] = System::getVar('UseCompression');
$board_config['gzip_compress'] = 0;
$board_config['allow_namechange'] = 0;
$board_config['cookie_secure'] = 0;
$board_config['default_lang'] = getPNlanguage();
$board_config['board_timezone'] = System::getVar('timezone_offset') - 12;
$board_config['board_email'] = System::getVar('adminmail'); 

$fullpage = SessionUtil::getVar('fullpage');
if ($fullpage === false)
{
	 SessionUtil::setVar('fullpage', $board_config['pnphpbb2_full_page']);
}
$subforum = SessionUtil::getVar('subforum');
//if ($subforum === false)
if (!$subforum)
{
 	 SessionUtil::setVar('subforum', $board_config['pnphpbb2_sub_forum']);
}
$board_config['avatar_gallery_path']= $board_config['avatar_gallery_path']; // ZphpBB2 - path is from site root now, removed prefix $phpbb_root_path
$board_config['avatar_path']= $board_config['avatar_path']; // ZphpBB2 - path is from site root now, removed prefix $phpbb_root_path

/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
include($phpbb_root_path . 'attach_mod/attachment_mod.'.$phpEx);
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

// Check to see if admin removed the install directory

if (!DEBUG && file_exists($phpbb_root_path . 'install'))
// End PNphpBB2 Module
{
	message_die(GENERAL_MESSAGE, 'Please_remove_install_contrib');
}

//
// Show 'Board is disabled' message if needed.
//
if( $board_config['board_disable'] && !defined("IN_ADMIN") && !defined("IN_LOGIN") )
{
	message_die(GENERAL_MESSAGE, 'Board_disable', 'Information');
}
