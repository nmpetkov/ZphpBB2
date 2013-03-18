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
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

// Profiles/Registration
$lang['ZphpBB2_Change_Profile'] = 'Промени профила си в сайта'; # Change Your PostNuke Profile
$lang['ZphpBB2_Refresh_Profile'] = 'Опресни профила си в сайта'; # Refresh Your PostNuke Profile
$lang['ZphpBB2_Profile_Info'] = 'Тази информация се използва само във форума. Общите данни за форума  и другите секции на сайта се настройват от "Моят профил" в менюто на сайта.'; # This information is used in ZphpBB2 only. All profile information that is shared between PostNuke and ZphpBB2 is set in the PostNuke Profile Settings.
$lang['ZphpBB2_Get_PN_Avatar'] = 'От сайта'; # From PostNuke

// Advanced Quick Reply Mod
$lang['Post_Image'] = "Икона"; # Msg Icon
$lang['Quick_Reply'] = 'Бърз отговор'; # Quick Reply
$lang['Quick_quote'] = 'Цитирай последното съобщение'; # Quote the last message
$lang['Quick_add_smilies'] = 'Усмивки'; # Smiles
$lang['QuoteSelelected'] = 'Цитирай избраното'; # Quote selected
$lang['QuoteSelelectedEmpty'] = 'Изберете текст където и да е на страницата и пробвайте отново'; # Select a text anywhere on a page and try again
$lang['Quick_Reply_smilies'] = 'всички'; # all

// Tell-A-Friend Mod
$lang['Tell_Friend'] = "Изпрати с e-mail на приятел"; # Email to a Friend.
$lang['Tell_Friend_Sender_User'] = "Вашето име:"; # Your Name:
$lang['Tell_Friend_Sender_Email'] = "Вашият Email:"; # Your Email:
$lang['Tell_Friend_Reciever_User'] = "Името на вашия приятел:"; # Your Friend's Name:
$lang['Tell_Friend_Reciever_Email'] = "Email на вашия приятел:"; # Your Friend's Email:
$lang['Tell_Friend_Msg'] = "Вашето съобщение:"; # Your message:
$lang['Tell_Friend_Title'] = "Изпрати на приятел"; # Tell A Friend
$lang['Tell_Friend_Body'] = "Здравей,\nАз току що прочетох тема >>{TOPIC}<< в {SITENAME} и мисля, че може да е интересна и за теб. Това е връзката: {LINK}\n\nПрочети я и ако искаш да отговориш, можеш да се регистрираш в сайта, ако не си го направил вече.";

// Printable Topic
$lang['Print_View'] = "Версия за печат"; # Printable version

// Credits
$lang['Powered_by'] = "";
$lang['Credits'] = "";

// Full page maximize/minimize
$lang['ZphpBB2_Minimize'] = "Минимизирай"; # Minimize
$lang['ZphpBB2_Maximize'] = "Максимизирай";  # Maximize

// Full page maximize/minimize
$lang['ZphpBB2_SubForum_Off'] = "Подкатегория"; # Sub-Category
$lang['ZphpBB2_SubForum_On'] = "Подфорум"; # Sub-Forum

// Hierarchies Mod

$lang['Forum_issub'] = 'Форумът който сте избрали съдържа подкатегории.<br>Това означава, че не може да има съобщения в него.'; # The forum you selected contains sub categories.<br>Therefore it is not possible to view posts.

//MsgIcon Mod
$lang['Msg_Icons'] = 'Икона на съобщението'; # Message Icons
$lang['Msg_Icon_No_Icon'] = 'Без икона'; # No Icon
$lang['More_msg_icons'] = "Още икони"; # View more icons

//Code Block mod by Daz
$lang['code_more'] = "View More of this Code";
$lang['code_even_more'] = "View Even More of this Code";
$lang['code_less'] = "View Less of this Code";
$lang['code_select'] = "Select All of this Code";

// Duplicated from phpBB admin language file for admin link :-(
$lang['Admin'] = 'Администрация'; # Administration
$lang['Moderate'] = 'Модерирайте този форум'; # Moderate this forum

// New version of the User authorisation levels output
$lang['Rules_header'] = 'В този форум вие можете да:'; # In this forum you can:
$lang['Rules_post'] = 'Създавате теми'; # Post new topics
$lang['Rules_reply'] = 'Отговаряте по теми'; # Reply to topics
$lang['Rules_edit'] = 'Редактирате собств.съобщения'; # Edit your posts
$lang['Rules_delete'] = 'Изтривате собств.съобщения'; # Delete your posts
$lang['Rules_vote'] = 'Гласувате в анкети'; # Vote in polls
$lang['Rules_attach'] = 'Прикрепяте файлове'; # Attach files
$lang['Rules_download'] = 'Теглите файлове'; # Download files
$lang['Rules_moderate_table'] = '%sМодерирате%s';
//$lang['Rules_moderate'] = 'Вие <b>можете</b> да %sмодерирате този форум%s'; # You <b>can</b> %smoderate this forum%s // %s replaced by a href links, do not remove! 

// Added Re: for replies, Hardcoded in phpBB
$lang['Re'] = 'RE:';

// Legend
$lang['Legend'] = 'Легенда'; # Legend

// User online mod
$lang['Status'] = 'Статус: '; # Status: 
$lang['Online'] = 'Онлайн!'; # Online
$lang['Offline'] = 'Офлайн'; # Offline

// Merge topics mod
$lang['Refresh'] = 'Опресни'; # Refresh
$lang['Merge_topics'] = 'Обедини теми'; # Merge topics
$lang['Merge_title'] = 'Заглавие на новата тема'; # New topic title
$lang['Merge_title_explain'] = 'This will be the new title of the final topic. Let it blank if you want the system to use the title of the destination topic';
$lang['Merge_topic_from'] = 'Тема за обединяване'; # Topic to merge
$lang['Merge_topic_from_explain'] = 'This topic will be merge to the other topic. You can input the topic id, the url of the topic, or the url of a post in this topic';
$lang['Merge_topic_to'] = 'Тема приемник'; # Destination topic
$lang['Merge_topic_to_explain'] = 'This topic will get all the posts of the precedent topic. You can input the topic id, the url of the topic, or the url of a post in this topic';
$lang['Merge_from_not_found'] = 'The topic to merge hasn\'t been found';
$lang['Merge_to_not_found'] = 'The destination topic hasn\'t been found';
$lang['Merge_topics_equals'] = 'You can\'t merge a topic with itself';
$lang['Merge_from_not_authorized'] = 'You are not a authorized to moderate topics coming from the forum of the topic to merge';
$lang['Merge_to_not_authorized'] = 'You are not a authorized to moderate topics coming from the forum of the destination topic';
$lang['Merge_poll_from'] = 'There is a poll on the topic to merge. It will be copied to the destination topic';
$lang['Merge_poll_from_and_to'] = 'The destination topic already has got a poll. The poll of the topic to merge will be deleted';
$lang['Merge_confirm_process'] = 'Сигурни ли сте че искате да обедините <br />"<b>%s</b>"<br />със<br />"<b>%s</b>"'; # Are you sure you want to merge <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"
$lang['Merge_topic_done'] = 'Темите са обединени успешно.'; # The topics have been successfully merged.

//limited post edit time MOD 
$lang['edit_time_past'] = 'Не може да редактирате своето съобщение. Бихте могли да го редактирате в рамките на <b>%d</b> минути след като сте го изпратили.'; # You are not allowed to edit your post. You have to edit your post within <b>%d</b> minutes, after you posted your message.

//
// That's all Folks!
// -------------------------------------------------
