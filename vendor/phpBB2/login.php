<?php
/***************************************************************************
 *                                login.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: login.php 192 2007-01-20 15:17:44Z kronos $
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

// ZphpBB2 - use Zikula login and redirect after
$url = FormUtil::getPassedValue('redirect', '', 'GETPOST');
$url = str_replace('.php', '', $url);
$url = str_replace('&amp;', '&', $url);
$arrParams = explode('&', $url);
$params = array();
if ($arrParams[1]) {
    $arrParam = explode('=', $arrParams[1]);
    $params[$arrParam[0]] = $arrParam[1];
}
if ($arrParams[2]) {
    $arrParam = explode('=', $arrParams[2]);
    $params[$arrParam[0]] = $arrParam[1];
}
$returnurl = ModUtil::url('ZphpBB2', 'user', $arrParams[0], $params);
return System::redirect(ModUtil::url('Users', 'user', 'login', array('returnpage' => urlencode($returnurl))));
// <= ZphpBB2

define("IN_LOGIN", true);

include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

// ZphpBB2 - login =>
$authid = FormUtil::getPassedValue('authid', '', 'POST');
if (!empty($authid) and $authid==SecurityUtil::generateAuthKey("Users")) {
	$uname = FormUtil::getPassedValue('uname', '', 'POST');
	$pass = FormUtil::getPassedValue('pass', '', 'POST');
	$rememberme = FormUtil::getPassedValue('autologin', '', 'POST');
	$url = FormUtil::getPassedValue('url', '', 'POST');
	if (UserUtil::login($uname, $pass, $rememberme)) {
		return System::redirect($url);
	} else {
		return System::redirect(ModUtil::url('Users', 'user', 'login', array('returnpage' => urlencode($url))));
	}
}
// ZphpBB2 - login <=

//
// Set page ID for session management
//
$userdata = session_pagestart($user_ip, PAGE_LOGIN);
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

if( isset($_POST['login']) || isset($_GET['login']) || isset($_POST['logout']) || isset($_GET['logout']) )
{
 	if( ( isset($_POST['login']) || isset($_GET['login']) ) && (!$userdata['session_logged_in'] || isset($_POST['admin'])) )
	{
		die("Login problem, code logic should not have brought you here!");
	}
	else if( ( isset($_GET['logout']) || isset($_POST['logout']) ) && $userdata['session_logged_in'] )
	{
		// session id check
		if ($sid == '' || $sid != $userdata['session_id'])
		{
			message_die(GENERAL_ERROR, 'Invalid_session');
		}

		if( $userdata['session_logged_in'] )
		{
			session_end($userdata['session_id'], $userdata['user_id']);
		}

		if (!empty($_POST['redirect']) || !empty($_GET['redirect']))
		{
			$url = (!empty($_POST['redirect'])) ? htmlspecialchars($_POST['redirect']) : htmlspecialchars($_GET['redirect']);
			$url = str_replace('&amp;', '&', $url);
			redirect(append_sid($url, true));
		}
		else
		{
			redirect(append_sid("index.$phpEx", true));
		}
	}
	else
	{
		$url = ( !empty($_POST['redirect']) ) ? str_replace('&amp;', '&', htmlspecialchars($_POST['redirect'])) : "index.$phpEx";
		redirect(append_sid($url, true));
	}
}
else
{
	//
	// Do a full login page dohickey if
	// user not already logged in
	//
	if( !$userdata['session_logged_in'] || (isset($_GET['admin']) && $userdata['session_logged_in'] && $userdata['user_level'] == ADMIN))
	{
		$page_title = $lang['Login'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		$template->set_filenames(array(
			'body' => 'login_body.tpl')
		);

// Begin PNphpBB2 Module
//		$forward_page = '';
		$forward_page = 'index';
// End PNphpBB2 Module

		if( isset($_POST['redirect']) || isset($_GET['redirect']) )
		{
			$forward_to = $_SERVER['QUERY_STRING'];
			
// Begin PNphpBB2 Module
//			if( preg_match("/^redirect=([a-z0-9\.#\/\?&=\+\-_]+)/si", $forward_to, $forward_matches) )
			if( preg_match("/redirect=([a-z0-9\/\?&=\+\-_]+)/si", $forward_to, $forward_matches) )
// End PNphpBB2 Module
			{
				$forward_to = ( !empty($forward_matches[3]) ) ? $forward_matches[3] : $forward_matches[1];
				$forward_match = explode('&', $forward_to);

				if(count($forward_match) > 1)
				{
					for($i = 1; $i < count($forward_match); $i++)
					{
						if( !ereg("sid=", $forward_match[$i]) )
						{
							if( $forward_page != '' )
							{
								$forward_page .= '&';
							}
							$forward_page .= $forward_match[$i];
						}
					}
// Begin PNphpBB2 Module
//					$forward_page = $forward_match[0] . '?' . $forward_page;
					$forward_page = $forward_match[0] . '&' . $forward_page;
// End PNphpBB2 Module
				}
				else
				{
					$forward_page = $forward_match[0];
				}
			}
		}

		$username = ( $userdata['user_id'] != ANONYMOUS ) ? $userdata['username'] : '';

// Begin PNphpBB2 Module
//		$s_hidden_fields = '<input type="hidden" name="redirect" value="' . $forward_page . '" />';
	 	$s_hidden_fields = '<input type="hidden" name="url" value="' . append_sid($forward_page) . '">';
		//$s_hidden_fields .= '<input type="hidden" name="module" value="NS-User">';
		//$s_hidden_fields .= '<input type="hidden" name="module" value="Users">';
		//$s_hidden_fields .= '<input type="hidden" name="func" value="login">';
// End PNphpBB2 Module
		$s_hidden_fields .= (isset($_GET['admin'])) ? '<input type="hidden" name="admin" value="1" />' : '';

        $modinfo = ModUtil::getInfoFromName("ZphpBB2");
		make_jumpbox('viewforum.'.$phpEx);
		$template->assign_vars(array(
/* Begin PNphpBB2 Module */
/*			'USERNAME' => $username, */
			'USERNAME' => DataUtil::formatForDisplay($username),
/* End PNphpBB2 Module */

			'L_ENTER_PASSWORD' => (isset($_GET['admin'])) ? $lang['Admin_reauthenticate'] : $lang['Enter_password'],
			'L_SEND_PASSWORD' => $lang['Forgotten_password'],
			
/* Begin PNphpBB2 Module */
/*			'U_SEND_PASSWORD' => append_sid("profile.$phpEx?mode=sendpassword"), */
			'U_SEND_PASSWORD' => ModUtil::url('Users', 'user', 'lostpassword'),
	 		'S_LOGIN_ACTION' => ModUtil::url('Users', 'user', 'login', array('returnpage' => urlencode(System::getCurrentUri()))),
			'AUTHID' => SecurityUtil::generateAuthKey("Users"),
			'URL' => append_sid($forward_page),
/* End PNphpBB2 Module */

			'S_HIDDEN_FIELDS' => $s_hidden_fields)
		);

		$template->pparse('body');

		include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
	}
	else
	{
		redirect(append_sid("index.$phpEx", true));
	}

}
