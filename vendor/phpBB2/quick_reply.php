<?php 
/***************************************************************************
 *                              quick_reply.php
 *                              ---------------
 *   begin                : Friday, May 11, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   original work by     : Smartor <smartor_xp@hotmail.com>
 *   and                  : RustyDragon <dev@RustyDragon.com>, http://www.RustyDragon.com
 *
 *   $Id: quick_reply.php 192 2007-01-20 15:17:44Z kronos $
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

// ZphpBB2 =>
if (isset($_POST['qmode']) || isset($_GET['qmode'])) {
    $mode = ( isset($_POST['qmode']) ) ? $_POST['qmode'] : $_GET['qmode'];
    if ( $mode == 'smilies' || $mode == 'postimages' ) {
        include($phpbb_root_path . 'extension.inc');
        include($phpbb_root_path . 'common.'.$phpEx);
        $starttime = 0;
        include($phpbb_root_path . 'includes/functions_post.'.$phpEx);
        if ( $mode == 'smilies' ) {
            generate_smilies('window', PAGE_POSTING);
        } else {
            generate_post_images('window', PAGE_POSTING);
        }

        exit; // also for ZphpBB2
    } else {
        return;
    }
}
// <= ZphpBB2

$template->set_filenames(array(
  'quick_reply_output' => 'quick_reply.tpl')
);

if ($board_config['pnphpbb2_quickreply'] == 2)
{
  $template->assign_block_vars('adv_quick_reply', array());
}

$post_to_quote = $total_posts - 1;
if (!empty($_POST['postorder']) or !empty($_GET['postorder']))
{
  if(((!empty($_POST['postorder'])) ? htmlspecialchars($_POST['postorder']) : htmlspecialchars($_GET['postorder'])) == 'desc')
  {
    $post_to_quote = 0;
  }
}
elseif (($forum_topic_data['post_sort_order'] == 1) or (($forum_topic_data['post_sort_order'] == 0) and ($board_config['pnphpbb2_post_order'] == 1)))
{
  $post_to_quote = 0;
}

$bbcode_uid = $postrow[$post_to_quote]['bbcode_uid'];
$last_poster =   ( trim($postrow[$post_to_quote]['post_username']) != '' ) ? $postrow[$post_to_quote]['post_username'] : $postrow[$post_to_quote]['username'];
$subject = ( $postrow[$post_to_quote]['first_post'] ) ? $postrow[$post_to_quote]['topic_title'] : $postrow[$post_to_quote]['post_subject'];
$last_msg = $postrow[$post_to_quote]['post_text'];

if ( $bbcode_uid != '' )
{
  $last_msg = preg_replace('/\:(([a-z0-9]:)?)' . $bbcode_uid . '/s', '', $last_msg);
}

$last_msg = str_replace('<', '&lt;', $last_msg);
$last_msg = str_replace('>', '&gt;', $last_msg);
$last_msg = str_replace('<br />', "\n", $last_msg);

$orig_word = array();
$replacement_word = array();
obtain_word_list($orig_word, $replace_word);

// Use trim to get rid of spaces placed there by MS-SQL 2000
$last_msg = '[quote="' . DataUtil::formatForDisplay($last_poster) . '"]' . DataUtil::formatForDisplay($last_msg) . '[/quote]';

if ( !empty($orig_word) )
{
    $subject = ( !empty($subject) ) ? preg_replace($orig_word, $replace_word, $subject) : '';
    $last_msg = ( !empty($last_msg) ) ? preg_replace($orig_word, $replace_word, $last_msg) : '';
}
if ( !preg_match('/^' . $lang['Re'] . '/', $subject) && strlen($subject) > 0 )
{
    $subject = $lang['Re'] . ' ' . $subject;
}

$attach_sig = (( $userdata['session_logged_in'] ) ? $userdata['user_attachsig'] : 0) ? "checked='checked'" : '';
$notify_user = (( $userdata['session_logged_in'] ) ? $userdata['user_notify'] : 0) ? "checked='checked'" : '';
    
if( $userdata['session_logged_in'])
{
  $template->assign_block_vars('user_logged_in', array(
      'ATTACH_SIGNATURE' => $attach_sig,
    'NOTIFY_ON_REPLY' => $notify_user)
  );
}
else
{
  $template->assign_block_vars('user_logged_out', array());
}

$template->assign_vars(array(
  'POST_ACTION' => append_sid("posting.$phpEx", true),
  'TOPIC_ID' => $topic_id,
  'SUBJECT' => $subject,
  'SID' => $userdata['session_id'],
  'LAST_MESSAGE' => $last_msg,
    'REPLY_TITLE' => $lang['Re'] . " " . $topic_title,
  'U_MORE_SMILIES' => append_sid("quick_reply.$phpEx?qmode=smilies", true),
  'U_MORE_POST_IMAGES' => append_sid("quick_reply.$phpEx?qmode=postimages", true),
  'L_USERNAME' => $lang['Username'],
  'L_PREVIEW' => $lang['Preview'],
  'L_OPTIONS' => $lang['Options'],
  'L_SUBMIT' => $lang['Submit'],
  'L_CANCEL' => $lang['Cancel'],
  'L_ATTACH_SIGNATURE' => $lang['Attach_signature'], 
  'L_NOTIFY_ON_REPLY' => $lang['Notify'],
  'L_NOTIFY_ON_REPLY' => $lang['Notify'],
  'L_ATTACH_SIGNATURE' => $lang['Attach_signature'],
  'L_POST_IMAGE' => $lang['Post_Image'],
  'L_ALL_SMILIES' => $lang['Quick_Reply_smilies'],
  'L_ADD_SMILIES' => $lang['Quick_add_smilies'],
  'L_QUOTE_SELECTED' => $lang['QuoteSelelected'],
  'L_NO_TEXT_SELECTED' => $lang['QuoteSelelectedEmpty'],
  'L_EMPTY_MESSAGE' => $lang['Empty_message'],
  'L_QUOTE_LAST_MESSAGE' => $lang['Quick_quote'],
  'L_QUICK_REPLY' => $lang['Quick_Reply'],
  'L_PREVIEW' => $lang['Preview'],
  'L_SUBMIT' => $lang['Submit'])
);

if ($post_time_order == 'DESC')
{
  $template->assign_var_from_handle('QUICKREPLY_OUTPUT_DESC', 'quick_reply_output');
}
else
{
  $template->assign_var_from_handle('QUICKREPLY_OUTPUT_ASC', 'quick_reply_output');
}
?>
