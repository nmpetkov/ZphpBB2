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

include ("includezik.php"); # @nikp N.Petkov: Zikula 1.3

define("IN_LOGIN", true);

include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

// @nmpetkov - login =>
$authid = FormUtil::getPassedValue('authid', '', 'POST');
if (!empty($authid) and $authid==SecurityUtil::generateAuthKey("Users")) {
	$uname = FormUtil::getPassedValue('uname', '', 'POST');
	$pass = FormUtil::getPassedValue('pass', '', 'POST');
	$rememberme = FormUtil::getPassedValue('autologin', '', 'POST');
	$url = FormUtil::getPassedValue('url', '', 'POST');
	if (UserUtil::login($uname, $pass, $rememberme)) {
		return System::redirect($url);
	} else {
		return System::redirect(ModUtil::url('Users', 'user', 'login', array('returnpage' => $url)));
	}
}
// @nmpetkov - login <=

//
// Set page ID for session management
//
$userdata = session_pagestart($user_ip, PAGE_LOGIN);
init_userprefs($userdata);
//
// End session management
//

// session id check
if (!empty($HTTP_POST_VARS['sid']) || !empty($HTTP_GET_VARS['sid']))
{
	$sid = (!empty($HTTP_POST_VARS['sid'])) ? $HTTP_POST_VARS['sid'] : $HTTP_GET_VARS['sid'];
}
else
{
	$sid = '';
}

if( isset($HTTP_POST_VARS['login']) || isset($HTTP_GET_VARS['login']) || isset($HTTP_POST_VARS['logout']) || isset($HTTP_GET_VARS['logout']) )
{
 	if( ( isset($HTTP_POST_VARS['login']) || isset($HTTP_GET_VARS['login']) ) && (!$userdata['session_logged_in'] || isset($HTTP_POST_VARS['admin'])) )
	{
		die("Login problem, code logic should not have brought you here!");
	}
	else if( ( isset($HTTP_GET_VARS['logout']) || isset($HTTP_POST_VARS['logout']) ) && $userdata['session_logged_in'] )
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

		if (!empty($HTTP_POST_VARS['redirect']) || !empty($HTTP_GET_VARS['redirect']))
		{
			$url = (!empty($HTTP_POST_VARS['redirect'])) ? htmlspecialchars($HTTP_POST_VARS['redirect']) : htmlspecialchars($HTTP_GET_VARS['redirect']);
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
		$url = ( !empty($HTTP_POST_VARS['redirect']) ) ? str_replace('&amp;', '&', htmlspecialchars($HTTP_POST_VARS['redirect'])) : "index.$phpEx";
		redirect(append_sid($url, true));
	}
}
else
{
	//
	// Do a full login page dohickey if
	// user not already logged in
	//
	if( !$userdata['session_logged_in'] || (isset($HTTP_GET_VARS['admin']) && $userdata['session_logged_in'] && $userdata['user_level'] == ADMIN))
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

		if( isset($HTTP_POST_VARS['redirect']) || isset($HTTP_GET_VARS['redirect']) )
		{
			$forward_to = $HTTP_SERVER_VARS['QUERY_STRING'];
			
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
		$s_hidden_fields .= (isset($HTTP_GET_VARS['admin'])) ? '<input type="hidden" name="admin" value="1" />' : '';

		make_jumpbox('viewforum.'.$phpEx);
		$template->assign_vars(array(
/* Begin PNphpBB2 Module */
/*			'USERNAME' => $username, */
			'USERNAME' => pnVarPrepForDisplay($username),
/* End PNphpBB2 Module */

			'L_ENTER_PASSWORD' => (isset($HTTP_GET_VARS['admin'])) ? $lang['Admin_reauthenticate'] : $lang['Enter_password'],
			'L_SEND_PASSWORD' => $lang['Forgotten_password'],
			
/* Begin PNphpBB2 Module */
/*			'U_SEND_PASSWORD' => append_sid("profile.$phpEx?mode=sendpassword"), */
			//'U_SEND_PASSWORD' => "user.$phpEx?op=lostpassscreen&amp;module=NS-LostPassword",
			//'U_SEND_PASSWORD' => "user.$phpEx?op=lostpassscreen&amp;module=LostPassword",
			'U_SEND_PASSWORD' => ModUtil::url('Users', 'user', 'lostPwdUname'), // @nmpetkov
	 		//'S_LOGIN_ACTION' => "index.php?module=Users&func=login",
	 		'S_LOGIN_ACTION' => "index.php?module=" . $modinfo['url'] . "&amp;file=login",
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
