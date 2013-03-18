<?php
/***************************************************************************
 *                           page_header_admin.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_header_admin.php 192 2007-01-20 15:17:44Z kronos $
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

define('HEADER_INC', true);

//
// gzip_compression
//
$do_gzip_compress = FALSE;
// Begin PNphpBB2 Module
/*
if ( $board_config['gzip_compress'] )
{
	$phpver = phpversion();

	$useragent = (isset($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : getenv('HTTP_USER_AGENT');

	if ( $phpver >= '4.0.4pl1' && ( strstr($useragent,'compatible') || strstr($useragent,'Gecko') ) )
	{
		if ( extension_loaded('zlib') )
		{
			ob_start('ob_gzhandler');
		}
	}
	else if ( $phpver > '4.0' )
	{
		if ( strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') )
		{
			if ( extension_loaded('zlib') )
			{
				$do_gzip_compress = TRUE;
				ob_start();
				ob_implicit_flush(0);

				header('Content-Encoding: gzip');
			}
		}
	}
}
*/
// End PNphpBB2 Module

$template->set_filenames(array(
	'header' => 'admin/page_header.tpl')
);

// Format Timezone. We are unable to use array_pop here, because of PHP3 compatibility
$l_timezone = explode('.', $board_config['board_timezone']);
$l_timezone = (count($l_timezone) > 1 && $l_timezone[count($l_timezone)-1] != 0) ? $lang[sprintf('%.1f', $board_config['board_timezone'])] : $lang[number_format($board_config['board_timezone'])];

//
// The following assigns all _common_ variables that may be used at any point
// in a template. Note that all URL's should be wrapped in append_sid, as
// should all S_x_ACTIONS for forms.
//
// ZphpBB2 =>
$admintheme = ModUtil::getVar('Admin', 'admintheme');
if (empty($admintheme)) {
    $admintheme = $board_config['theme_name'];
}
// <= ZphpBB2

$template->assign_vars(array(
/* Begin PNphpBB2 Module */
	'CSS_PNTHEME' => $admintheme,
	'CSS_PNPHPBB' => $board_config['style_name'],
/* End PNphpBB2 Module */
	'SITENAME' => $board_config['sitename'],
	'PAGE_TITLE' => $page_title,

	'L_ADMIN' => $lang['Admin'], 
	'L_INDEX' => sprintf($lang['Forum_Index'], $board_config['sitename']),
	'L_FAQ' => $lang['FAQ'],

/* Begin PNphpBB2 Module */
/*	'U_INDEX' => append_sid('../index.'.$phpEx), */
	'U_INDEX' => append_sid('index.'.$phpEx),
/* End PNphpBB2 Module */

	'S_TIMEZONE' => sprintf($lang['All_times'], $l_timezone),
/* Begin PNphpBB2 Module */
/*	'S_LOGIN_ACTION' => append_sid('../login.'.$phpEx), */
/*	'S_JUMPBOX_ACTION' => append_sid('../viewforum.'.$phpEx), */
	'S_LOGIN_ACTION' => append_sid('login.'.$phpEx),
	'S_JUMPBOX_ACTION' => append_sid('viewforum.'.$phpEx),
/* End PNphpBB2 Module */
	'S_CURRENT_TIME' => sprintf($lang['Current_time'], create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])), 
	'S_CONTENT_DIRECTION' => $lang['DIRECTION'], 
	'S_CONTENT_ENCODING' => $lang['ENCODING'], 
	'S_CONTENT_DIR_LEFT' => $lang['LEFT'], 
	'S_CONTENT_DIR_RIGHT' => $lang['RIGHT'], 

/* Begin PNphpBB2 Module */
/*
	'T_HEAD_STYLESHEET' => $theme['head_stylesheet'],
	'T_BODY_BACKGROUND' => $theme['body_background'],
	'T_BODY_BGCOLOR' => '#'.$theme['body_bgcolor'],
	'T_BODY_TEXT' => '#'.$theme['body_text'],
	'T_BODY_LINK' => '#'.$theme['body_link'],
	'T_BODY_VLINK' => '#'.$theme['body_vlink'],
	'T_BODY_ALINK' => '#'.$theme['body_alink'],
	'T_BODY_HLINK' => '#'.$theme['body_hlink'],
	'T_TR_COLOR1' => '#'.$theme['tr_color1'],
	'T_TR_COLOR2' => '#'.$theme['tr_color2'],
	'T_TR_COLOR3' => '#'.$theme['tr_color3'],
	'T_TR_CLASS1' => $theme['tr_class1'],
	'T_TR_CLASS2' => $theme['tr_class2'],
	'T_TR_CLASS3' => $theme['tr_class3'],
	'T_TH_COLOR1' => '#'.$theme['th_color1'],
	'T_TH_COLOR2' => '#'.$theme['th_color2'],
	'T_TH_COLOR3' => '#'.$theme['th_color3'],
	'T_TH_CLASS1' => $theme['th_class1'],
	'T_TH_CLASS2' => $theme['th_class2'],
	'T_TH_CLASS3' => $theme['th_class3'],
	'T_TD_COLOR1' => '#'.$theme['td_color1'],
	'T_TD_COLOR2' => '#'.$theme['td_color2'],
	'T_TD_COLOR3' => '#'.$theme['td_color3'],
	'T_TD_CLASS1' => $theme['td_class1'],
	'T_TD_CLASS2' => $theme['td_class2'],
	'T_TD_CLASS3' => $theme['td_class3'],
	'T_FONTFACE1' => $theme['fontface1'],
	'T_FONTFACE2' => $theme['fontface2'],
	'T_FONTFACE3' => $theme['fontface3'],
	'T_FONTSIZE1' => $theme['fontsize1'],
	'T_FONTSIZE2' => $theme['fontsize2'],
	'T_FONTSIZE3' => $theme['fontsize3'],
	'T_FONTCOLOR1' => '#'.$theme['fontcolor1'],
	'T_FONTCOLOR2' => '#'.$theme['fontcolor2'],
	'T_FONTCOLOR3' => '#'.$theme['fontcolor3'],
	'T_SPAN_CLASS1' => $theme['span_class1'],
	'T_SPAN_CLASS2' => $theme['span_class2'],
	'T_SPAN_CLASS3' => $theme['span_class3'])
*/
	'T_MODNAME' => 'ZphpBB2',
	'T_THEME_NAME' => $phpbb_theme['template_name'],
	'T_HEAD_STYLESHEET' => $phpbb_theme['head_stylesheet'],
	'T_BODY_BACKGROUND' => $phpbb_theme['body_background'],
	'T_BODY_BGCOLOR' => '#'.$phpbb_theme['body_bgcolor'],
	'T_BODY_TEXT' => '#'.$phpbb_theme['body_text'],
	'T_BODY_LINK' => '#'.$phpbb_theme['body_link'],
	'T_BODY_VLINK' => '#'.$phpbb_theme['body_vlink'],
	'T_BODY_ALINK' => '#'.$phpbb_theme['body_alink'],
	'T_BODY_HLINK' => '#'.$phpbb_theme['body_hlink'],
	'T_TR_COLOR1' => '#'.$phpbb_theme['tr_color1'],
	'T_TR_COLOR2' => '#'.$phpbb_theme['tr_color2'],
	'T_TR_COLOR3' => '#'.$phpbb_theme['tr_color3'],
	'T_TR_CLASS1' => $phpbb_theme['tr_class1'],
	'T_TR_CLASS2' => $phpbb_theme['tr_class2'],
	'T_TR_CLASS3' => $phpbb_theme['tr_class3'],
	'T_TH_COLOR1' => '#'.$phpbb_theme['th_color1'],
	'T_TH_COLOR2' => '#'.$phpbb_theme['th_color2'],
	'T_TH_COLOR3' => '#'.$phpbb_theme['th_color3'],
	'T_TH_CLASS1' => $phpbb_theme['th_class1'],
	'T_TH_CLASS2' => $phpbb_theme['th_class2'],
	'T_TH_CLASS3' => $phpbb_theme['th_class3'],
	'T_TD_COLOR1' => '#'.$phpbb_theme['td_color1'],
	'T_TD_COLOR2' => '#'.$phpbb_theme['td_color2'],
	'T_TD_COLOR3' => '#'.$phpbb_theme['td_color3'],
	'T_TD_CLASS1' => $phpbb_theme['td_class1'],
	'T_TD_CLASS2' => $phpbb_theme['td_class2'],
	'T_TD_CLASS3' => $phpbb_theme['td_class3'],
	'T_FONTFACE1' => $phpbb_theme['fontface1'],
	'T_FONTFACE2' => $phpbb_theme['fontface2'],
	'T_FONTFACE3' => $phpbb_theme['fontface3'],
	'T_FONTSIZE1' => $phpbb_theme['fontsize1'],
	'T_FONTSIZE2' => $phpbb_theme['fontsize2'],
	'T_FONTSIZE3' => $phpbb_theme['fontsize3'],
	'T_FONTCOLOR1' => '#'.$phpbb_theme['fontcolor1'],
	'T_FONTCOLOR2' => '#'.$phpbb_theme['fontcolor2'],
	'T_FONTCOLOR3' => '#'.$phpbb_theme['fontcolor3'],
	'T_SPAN_CLASS1' => $phpbb_theme['span_class1'],
	'T_SPAN_CLASS2' => $phpbb_theme['span_class2'],
	'T_SPAN_CLASS3' => $phpbb_theme['span_class3'])
/* End PNphpBB2 Module */
);

// Work around for "current" Apache 2 + PHP module which seems to not
// cope with private cache control setting
if (!empty($_SERVER['SERVER_SOFTWARE']) && strstr($_SERVER['SERVER_SOFTWARE'], 'Apache/2'))
{
	header ('Cache-Control: no-cache, pre-check=0, post-check=0');
}
else
{
	header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
}
header ('Expires: 0');
header ('Pragma: no-cache');

$template->pparse('header');
