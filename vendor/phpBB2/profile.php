<?php
/***************************************************************************
 *                                profile.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: profile.php 192 2007-01-20 15:17:44Z kronos $
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
 
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
//
// End session management
//

// session id check
if (!empty($_POST['sid']) || !empty($_GET['sid']))
{
	$sid = (!empty($_POST['sid'])) ? $_POST['sid'] : $_GET['sid'];
}
else
{
	$sid = '';
}

// Begin PNphpBB2 Module
if (!$userdata['session_logged_in'])
{
	if ( isset($_GET['mode']) || isset($_POST['mode']) )
	{
		$mode = ( isset($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
		$mode = htmlspecialchars($mode);
	}
	else
	{
		$mode = '';
	}
	if ( !empty($_GET[POST_USERS_URL]) && $_GET[POST_USERS_URL] <> ANONYMOUS )
	{
		$user_id = "&" . POST_USERS_URL . "=" . intval($_GET[POST_USERS_URL]);
	}
	else
	{
		$user_id = "";
	}
	redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=$mode" . $user_id, true));
}
// End PNphpBB2 Module

//
// Set default email variables
//
// Begin PNphpBB2 Module
//$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($board_config['script_path']));
//$script_name = ( $script_name != '' ) ? $script_name . '/profile.'.$phpEx : 'profile.'.$phpEx;
//$server_name = trim($board_config['server_name']);
//$server_protocol = ( $board_config['cookie_secure'] ) ? 'https://' : 'http://';
//$server_port = ( $board_config['server_port'] <> 80 ) ? ':' . trim($board_config['server_port']) . '/' : '/';

//$server_url = $server_protocol . $server_name . $server_port . $script_name;
// End PNphpBB2 Module

// -----------------------
// Page specific functions
//
function gen_rand_string($hash)
{
	$rand_str = dss_rand();

	return ( $hash ) ? md5($rand_str) : substr($rand_str, 0, 8);
}
//
// End page specific functions
// ---------------------------

//
// Start of program proper
//
if ( isset($_GET['mode']) || isset($_POST['mode']) )
{
	$mode = ( isset($_GET['mode']) ) ? $_GET['mode'] : $_POST['mode'];
	$mode = htmlspecialchars($mode);

	if ( $mode == 'viewprofile' )
	{
		include($phpbb_root_path . 'includes/usercp_viewprofile.'.$phpEx);
		return; # ZphpBB2 exit;
	}
// Begin PNphpBB2 Module
/*	else if ( $mode == 'editprofile' || $mode == 'register' )
	{
		if ( !$userdata['session_logged_in'] && $mode == 'editprofile' )
		{
			redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=editprofile", true));
		}

		include($phpbb_root_path . 'includes/usercp_register.'.$phpEx);
		return; # ZphpBB2 exit;
	}
	else if ( $mode == 'confirm' )
	{
		// Visual Confirmation
		if ( $userdata['session_logged_in'] )
		{
			return; # ZphpBB2 exit;
		}

		include($phpbb_root_path . 'includes/usercp_confirm.'.$phpEx);
		return; # ZphpBB2 exit;
	}
	else if ( $mode == 'sendpassword' )
	{
		include($phpbb_root_path . 'includes/usercp_sendpasswd.'.$phpEx);
		return; # ZphpBB2 exit;
	}
	else if ( $mode == 'activate' )
	{
		include($phpbb_root_path . 'includes/usercp_activate.'.$phpEx);
		return; # ZphpBB2 exit;
	}
*/
	else if ( $mode == 'editprofile' )
	{
		if ( !$userdata['session_logged_in'] )
		{
			redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=editprofile", true));
		}

		include($phpbb_root_path . 'includes/usercp_register.'.$phpEx);
 		/* exit; ZphpBB2 */ return;
 	}
// End PNphpBB2 Module
	else if ( $mode == 'email' )
	{
		include($phpbb_root_path . 'includes/usercp_email.'.$phpEx);
		/* exit; ZphpBB2 */ return;
	}
}

redirect(append_sid("index.$phpEx", true));

?>
