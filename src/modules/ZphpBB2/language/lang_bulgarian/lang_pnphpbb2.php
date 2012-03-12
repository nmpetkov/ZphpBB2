<?php
/***************************************************************************
 *                            lang_pnphpbb2.php [English]
 *                              -------------------
 *     begin                : Tue Jan 13 2003
 *     update               : Fri May 17 2003
 *     copyright            : (C) 2003 the ZphpBB2 Group
 *     email                : support@itsallbutstraw.com
 *
 *     $Id: lang_pnphpbb2.php,v 1.10 2003/08/20 15:27:36 carls Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// The format of this file is ---> $lang['message'] = iconv('CP1251',_CHARSET, 'text');
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

if (!defined('_CHARSET')) define('_CHARSET', 'utf-8');

// Profiles/Registration
$lang['ZphpBB2_Change_Profile'] = iconv('CP1251',_CHARSET, 'Промени профила си в сайта'); # Change Your PostNuke Profile
$lang['ZphpBB2_Refresh_Profile'] = iconv('CP1251',_CHARSET, 'Опресни профила си в сайта'); # Refresh Your PostNuke Profile
$lang['ZphpBB2_Profile_Info'] = iconv('CP1251',_CHARSET, 'Тази информация се използва само във форума. Общите данни за форума  и другите секции на сайта се настройват от "Моят профил" в менюто на сайта.'); # This information is used in ZphpBB2 only. All profile information that is shared between PostNuke and ZphpBB2 is set in the PostNuke Profile Settings.
$lang['ZphpBB2_Get_PN_Avatar'] = iconv('CP1251',_CHARSET, 'От сайта'); # From PostNuke

// Advanced Quick Reply Mod
$lang['Post_Image'] = iconv('CP1251',_CHARSET, "Икона"); # Msg Icon
$lang['Quick_Reply'] = iconv('CP1251',_CHARSET, 'Бърз отговор'); # Quick Reply
$lang['Quick_quote'] = iconv('CP1251',_CHARSET, 'Цитирай последното съобщение'); # Quote the last message
$lang['Quick_add_smilies'] = iconv('CP1251',_CHARSET, 'Усмифки'); # Smiles
$lang['QuoteSelelected'] = iconv('CP1251',_CHARSET, 'Цитирай избраното'); # Quote selected
$lang['QuoteSelelectedEmpty'] = iconv('CP1251',_CHARSET, 'Изберете текст където и да е на страницата и пробвайте отново'); # Select a text anywhere on a page and try again
$lang['Quick_Reply_smilies'] = iconv('CP1251',_CHARSET, 'всички'); # all

// Tell-A-Friend Mod
$lang['Tell_Friend'] = iconv('CP1251',_CHARSET, "Изпрати с e-mail на приятел"); # Email to a Friend.
$lang['Tell_Friend_Sender_User'] = iconv('CP1251',_CHARSET, "Вашето име:"); # Your Name:
$lang['Tell_Friend_Sender_Email'] = iconv('CP1251',_CHARSET, "Вашият Email:"); # Your Email:
$lang['Tell_Friend_Reciever_User'] = iconv('CP1251',_CHARSET, "Името на вашия приятел:"); # Your Friend's Name:
$lang['Tell_Friend_Reciever_Email'] = iconv('CP1251',_CHARSET, "Email на вашия приятел:"); # Your Friend's Email:
$lang['Tell_Friend_Msg'] = iconv('CP1251',_CHARSET, "Вашето съобщение:"); # Your message:
$lang['Tell_Friend_Title'] = iconv('CP1251',_CHARSET, "Изпрати на приятел"); # Tell A Friend
$lang['Tell_Friend_Body'] = iconv('CP1251',_CHARSET, "Здравей,\nАз току що прочетох тема >>{TOPIC}<< в {SITENAME} и мисля, че може да е интересна и за теб. Това е връзката: {LINK}\n\nПрочети я и ако искаш да отговориш, можеш да се регистрираш в сайта, ако не си го направил вече.");

// Printable Topic
$lang['Print_View'] = iconv('CP1251',_CHARSET, "Версия за печат"); # Printable version

// Credits
$lang['Powered_by'] = iconv('CP1251',_CHARSET, "");
$lang['PNphpBB_group'] = iconv('CP1251',_CHARSET, "");
$lang['Credits'] = iconv('CP1251',_CHARSET, "");

// Full page maximize/minimize
$lang['ZphpBB2_Minimize'] = iconv('CP1251',_CHARSET, "Минимизирай"); # Minimize
$lang['ZphpBB2_Maximize'] = iconv('CP1251',_CHARSET, "Максимизирай");  # Maximize

// Full page maximize/minimize
$lang['ZphpBB2_SubForum_Off'] = iconv('CP1251',_CHARSET, "Подкатегория"); # Sub-Category
$lang['ZphpBB2_SubForum_On'] = iconv('CP1251',_CHARSET, "Подфорум"); # Sub-Forum

// Hierarchies Mod

$lang['Forum_issub'] = iconv('CP1251',_CHARSET, 'Форумът който сте избрали съдържа подкатегории.<br>Това означава, че не може да има съобщения в него.'); # The forum you selected contains sub categories.<br>Therefore it is not possible to view posts.

//MsgIcon Mod
$lang['Msg_Icons'] = iconv('CP1251',_CHARSET, 'Икона на съобщението'); # Message Icons
$lang['Msg_Icon_No_Icon'] = iconv('CP1251',_CHARSET, 'Без икона'); # No Icon
$lang['More_msg_icons'] = iconv('CP1251',_CHARSET, "Още икони"); # View more icons

//Code Block mod by Daz
$lang['code_more'] = iconv('CP1251',_CHARSET, "View More of this Code");
$lang['code_even_more'] = iconv('CP1251',_CHARSET, "View Even More of this Code");
$lang['code_less'] = iconv('CP1251',_CHARSET, "View Less of this Code");
$lang['code_select'] = iconv('CP1251',_CHARSET, "Select All of this Code");

// Duplicated from phpBB admin language file for admin link :-(
$lang['Admin'] = iconv('CP1251',_CHARSET, 'Администрация'); # Administration
$lang['Moderate'] = iconv('CP1251',_CHARSET, 'Модерирайте този форум'); # Moderate this forum

// New version of the User authorisation levels output
$lang['Rules_header'] = iconv('CP1251',_CHARSET, 'В този форум вие можете да:'); # In this forum you can:
$lang['Rules_post'] = iconv('CP1251',_CHARSET, 'Създавате теми'); # Post new topics
$lang['Rules_reply'] = iconv('CP1251',_CHARSET, 'Отговаряте по теми'); # Reply to topics
$lang['Rules_edit'] = iconv('CP1251',_CHARSET, 'Редактирате собств.съобщения'); # Edit your posts
$lang['Rules_delete'] = iconv('CP1251',_CHARSET, 'Изтривате собств.съобщения'); # Delete your posts
$lang['Rules_vote'] = iconv('CP1251',_CHARSET, 'Гласувате в анкети'); # Vote in polls
$lang['Rules_attach'] = iconv('CP1251',_CHARSET, 'Прикрепяте файлове'); # Attach files
$lang['Rules_download'] = iconv('CP1251',_CHARSET, 'Теглите файлове'); # Download files
$lang['Rules_moderate_table'] = iconv('CP1251',_CHARSET, '%sМодерирате%s');
//$lang['Rules_moderate'] = iconv('CP1251',_CHARSET, 'Вие <b>можете</b> да %sмодерирате този форум%s'); # You <b>can</b> %smoderate this forum%s // %s replaced by a href links, do not remove! 

// Added Re: for replies, Hardcoded in phpBB
$lang['Re'] = iconv('CP1251',_CHARSET, 'RE:');

// Legend
$lang['Legend'] = iconv('CP1251',_CHARSET, 'Легенда'); # Legend

// User online mod
$lang['Status'] = iconv('CP1251',_CHARSET, 'Статус: '); # Status: 
$lang['Online'] = iconv('CP1251',_CHARSET, 'Онлайн!'); # Online
$lang['Offline'] = iconv('CP1251',_CHARSET, 'Офлайн'); # Offline

// Merge topics mod
$lang['Refresh'] = iconv('CP1251',_CHARSET, 'Опресни'); # Refresh
$lang['Merge_topics'] = iconv('CP1251',_CHARSET, 'Обедини теми'); # Merge topics
$lang['Merge_title'] = iconv('CP1251',_CHARSET, 'Заглавие на новата тема'); # New topic title
$lang['Merge_title_explain'] = iconv('CP1251',_CHARSET, 'This will be the new title of the final topic. Let it blank if you want the system to use the title of the destination topic');
$lang['Merge_topic_from'] = iconv('CP1251',_CHARSET, 'Тема за обединяване'); # Topic to merge
$lang['Merge_topic_from_explain'] = iconv('CP1251',_CHARSET, 'This topic will be merge to the other topic. You can input the topic id, the url of the topic, or the url of a post in this topic');
$lang['Merge_topic_to'] = iconv('CP1251',_CHARSET, 'Тема приемник'); # Destination topic
$lang['Merge_topic_to_explain'] = iconv('CP1251',_CHARSET, 'This topic will get all the posts of the precedent topic. You can input the topic id, the url of the topic, or the url of a post in this topic');
$lang['Merge_from_not_found'] = iconv('CP1251',_CHARSET, 'The topic to merge hasn\'t been found');
$lang['Merge_to_not_found'] = iconv('CP1251',_CHARSET, 'The destination topic hasn\'t been found');
$lang['Merge_topics_equals'] = iconv('CP1251',_CHARSET, 'You can\'t merge a topic with itself');
$lang['Merge_from_not_authorized'] = iconv('CP1251',_CHARSET, 'You are not a authorized to moderate topics coming from the forum of the topic to merge');
$lang['Merge_to_not_authorized'] = iconv('CP1251',_CHARSET, 'You are not a authorized to moderate topics coming from the forum of the destination topic');
$lang['Merge_poll_from'] = iconv('CP1251',_CHARSET, 'There is a poll on the topic to merge. It will be copied to the destination topic');
$lang['Merge_poll_from_and_to'] = iconv('CP1251',_CHARSET, 'The destination topic already has got a poll. The poll of the topic to merge will be deleted');
$lang['Merge_confirm_process'] = iconv('CP1251',_CHARSET, 'Сигурни ли сте че искате да обедините <br />"<b>%s</b>"<br />със<br />"<b>%s</b>"'); # Are you sure you want to merge <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"
$lang['Merge_topic_done'] = iconv('CP1251',_CHARSET, 'Темите са обединени успешно.'); # The topics have been successfully merged.

//limited post edit time MOD 
$lang['edit_time_past'] = iconv('CP1251',_CHARSET, 'Не може да редактирате своето съобщение. Бихте могли да го редактирате в рамките на <b>%d</b> минути след като сте го изпратили.'); # You are not allowed to edit your post. You have to edit your post within <b>%d</b> minutes, after you posted your message.

//
// That's all Folks!
// -------------------------------------------------

?>
