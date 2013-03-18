<?php
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.3 2002/05/12 17:57:34 psotfx Exp $
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
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

//$lang['ENCODING'] = 'utf-8';
$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = '%d.%m.%Y';
// End PNphpBB2 Module
// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Форум'; # Forum
$lang['Category'] = 'Категория'; # Category
$lang['Topic'] = 'Тема'; # Topic
$lang['Topics'] = 'Теми'; # Topics
$lang['Replies'] = 'Отговори'; # Replies
$lang['Views'] = 'Видяно'; # Views
$lang['Post'] = 'Съобщение'; # Post
$lang['Posts'] = 'Съобщения'; # Posts
$lang['Posted'] = 'Изпратено'; # Posted
$lang['Username'] = 'Потребителско име'; # Username
$lang['Password'] = 'Парола'; # Password
$lang['Email'] = 'Email';
$lang['Poster'] = 'Изпратил'; # Poster
$lang['Author'] = 'Автор'; # Author
$lang['Time'] = 'Време'; # Time
$lang['Hours'] = 'Часове'; # Hours
$lang['Message'] = 'Съобщение'; # Message

$lang['1_Day'] = '1 ден'; # 1 Day
$lang['7_Days'] = '7 дни'; # 7 Days
$lang['2_Weeks'] = '2 седмици'; # 2 Weeks
$lang['1_Month'] = '1 месец'; # 1 Month
$lang['3_Months'] = '3 месеца'; # 3 Months
$lang['6_Months'] = '6 месеца'; # 6 Months
$lang['1_Year'] = '1 година'; # 1 Year

$lang['Go'] = 'OK'; # Go
$lang['Jump_to'] = 'Отиди на'; # Jump to
$lang['Submit'] = 'Изпрати'; # Submit
$lang['Reset'] = 'Нулирай'; # Reset
$lang['Cancel'] = 'Отмени'; # Cancel
$lang['Preview'] = 'Преглед'; # Preview
$lang['Confirm'] = 'Потвърди'; # Confirm
$lang['Spellcheck'] = 'Правопис'; # Spellcheck
$lang['Yes'] = 'Да'; # Yes
$lang['No'] = 'Не'; # No
$lang['Enabled'] = 'Активно'; # Enabled
$lang['Disabled'] = 'Неактивно'; # Disabled
$lang['Error'] = 'Грешка'; # Error

$lang['Next'] = 'Следваща'; # Next
$lang['Previous'] = 'Предишна'; # Previous
$lang['Goto_page'] = 'Отиди на страница'; # Goto page
$lang['Joined'] = 'От'; # Joined
$lang['IP_Address'] = 'IP адрес'; # IP Address

$lang['Select_forum'] = 'Изберете форум'; # Select a forum
$lang['View_latest_post'] = 'Вижте последното съобщение'; # View latest post
$lang['View_newest_post'] = 'Вижте най-новото съобщение'; # View newest post
$lang['Page_of'] = 'Страница <b>%d</b> от <b>%d</b>'; # Page <b>%d</b> of <b>%d</b>

$lang['ICQ'] = 'ICQ номер';
$lang['AIM'] = 'AIM адрес';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Форуми'; # %s Forum Index // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Нова тема'; # Post new topic
$lang['Reply_to_topic'] = 'Отговори на темата'; # Reply to topic
$lang['Reply_with_quote'] = 'Отговори с цитиране'; # Reply with quote

$lang['Click_return_topic'] = '%sНазад към темата%s'; # Click %sHere%s to return to the topic// %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sОпитай отново%s'; # Click %sHere%s to try again
$lang['Click_return_forum'] = '%sНазад към форума%s'; # Click %sHere%s to return to the forum
$lang['Click_view_message'] = '%sПреглед на вашето съобщение%s'; # Click %sHere%s to view your message
$lang['Click_return_modcp'] = '%sНазад към панела на модератора%s'; # Click %sHere%s to return to the Moderator Control Panel
$lang['Click_return_group'] = '%sНазад към информацията за групата%s'; # Click %sHere%s to return to group information

$lang['Admin_panel'] = 'Администриране'; # Go to Administration Panel

$lang['Board_disable'] = 'Същаляваме, но този форум в момента не е достъпен, моля опитайте по-късно'; # Sorry but this board is currently unavailable, please try again later


//
// Global Header strings
//
$lang['Registered_users'] = 'Регистрирани потребители:'; # Registered Users:
$lang['Browsing_forum'] = 'Потребители във форума:'; # Users browsing this forum:
$lang['Online_users_zero_total'] = 'Има общо <b>0</b> потребителя онлайн: '; # In total there are <b>0</b> users online :: 
$lang['Online_users_total'] = 'Има общо <b>%d</b> потребителя онлайн: '; # In total there are <b>%d</b> users online :: 
$lang['Online_user_total'] = 'Има общо <b>%d</b> потребител онлайн: '; # In total there is <b>%d</b> user online :: 
$lang['Reg_users_zero_total'] = '0 регистрирани, '; # 0 Registered, 
$lang['Reg_users_total'] = '%d регистрирани, '; # %d Registered, 
$lang['Reg_user_total'] = '%d регистриран, '; # %d Registered, 
$lang['Hidden_users_zero_total'] = '0 скрити и '; # 0 Hidden and 
$lang['Hidden_user_total'] = '%d скрит и '; # %d Hidden and 
$lang['Hidden_users_total'] = '%d скрити и '; # %d Hidden and 
$lang['Guest_users_zero_total'] = '0 гости'; # 0 Guests
$lang['Guest_users_total'] = '%d гости'; # %d Guests
$lang['Guest_user_total'] = '%d гост'; # %d Guest
$lang['Record_online_users'] = 'Най-много е имало <b>%s</b> на %s'; # Most users ever online was <b>%s</b> on %s // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sАдминистратор%s'; # %sAdministrator%s
$lang['Mod_online_color'] = '%sМодератор%s'; # %sModerator%s

$lang['You_last_visit'] = 'Последното ви посещение е на %s'; # You last visited on %s // %s replaced by date/time
$lang['Current_time'] = 'Сега е %s'; # The time now is %s

$lang['Search_new'] = 'Вижте само новите съобщения'; # View posts since last visit
$lang['Search_your_posts'] = 'Вижте собствените съобщения'; # View your posts
$lang['Search_unanswered'] = 'Вижте съобщенията без отговор'; # View unanswered posts

$lang['Register'] = 'Регистрация'; # Register
$lang['Profile'] = 'Профил'; # Profile
$lang['Edit_profile'] = 'Редактирай своя профил'; # Edit your profile
$lang['Search'] = 'Търси'; # Search
$lang['Memberlist'] = 'Потребители'; # Memberlist
$lang['FAQ'] = 'Помощ'; # FAQ
$lang['BBCode_guide'] = 'BBCode наръчник'; # BBCode Guide
$lang['Usergroups'] = 'Потреб.групи'; # Usergroups
$lang['Last_Post'] = 'Посл.съобщение'; # Last Post
$lang['Moderator'] = 'Модератор'; # Moderator
$lang['Moderators'] = 'Модератори'; # Moderators


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Има общо <b>0</b> съобщения'; # Our users have posted a total of <b>0</b> article // Number of posts
$lang['Posted_articles_total'] = 'Има общо <b>%d</b> съобщения'; # Our users have posted a total of <b>%d</b> articles // Number of posts
$lang['Posted_article_total'] = 'Има общо <b>%d</b> съобщение'; # Our users have posted a total of <b>%d</b> article // Number of posts
$lang['Registered_users_zero_total'] = 'Има <b>0</b> регистрирани потребители'; # We have <b>0</b> registered users // # registered users
$lang['Registered_users_total'] = 'Има <b>%d</b> регистрирани потребители'; # We have <b>%d</b> registered users // # registered users
$lang['Registered_user_total'] = 'Има <b>%d</b> регистриран потребител'; # We have <b>%d</b> registered user // # registered users
$lang['Newest_user'] = 'Последният регистрирал се потребител е <b>%s%s%s</b>'; # The newest registered user is <b>%s%s%s</b> // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Няма новости от последното ви посещение'; # No new posts since your last visit
$lang['No_new_posts'] = 'Няма нови'; # No new posts
$lang['New_posts'] = 'Има нови'; # New posts
$lang['New_post'] = 'Ново'; # New post
$lang['No_new_posts_hot'] = 'Няма нови [ популярна ]'; # No new posts [ Popular ]
$lang['New_posts_hot'] = 'Има нови [ популярна ]'; # New posts [ Popular ]
$lang['No_new_posts_locked'] = 'Няма нови [ заключена ]'; # No new posts [ Locked ]
$lang['New_posts_locked'] = 'Има нови [ заключена ]'; # New posts [ Locked ]
$lang['Forum_is_locked'] = 'Форумът е заключен'; # Forum is locked


//
// Login
//
$lang['Enter_password'] = 'За вход въведете потребителско име и парола'; # Please enter your username and password to login
$lang['Login'] = 'Вход'; # Login
$lang['Logout'] = 'Изход'; # Logout

$lang['Forgotten_password'] = 'Забравил съм си паролата'; # I forgot my password

$lang['Log_me_in'] = 'Запомни регистрацията ми'; # Log me on automatically each visit

$lang['Error_login'] = 'Невалидно потребителско име или парола'; # You have specified an incorrect or inactive username or an invalid password


//
// Index page
//
$lang['Index'] = 'Индекс'; # Index
$lang['No_Posts'] = 'Няма съобщения'; # No Posts
$lang['No_forums'] = 'Няма налични форуми'; # This board has no forums

$lang['Private_Message'] = 'Лично съобщение'; # Private Message
$lang['Private_Messages'] = 'Лични съобщения'; # Private Messages
$lang['Who_is_Online'] = 'Кой е онлайн'; # Who is Online

$lang['Mark_all_forums'] = 'Маркирай форумите като прочетени'; # Mark all forums read
$lang['Forums_marked_read'] = 'Всички форуми са маркирани като прочетени'; # All forums have been marked read


//
// Viewforum
//
$lang['View_forum'] = 'Виж форум'; # View Forum

$lang['Forum_not_exist'] = 'Избраният форум не съществува'; # The forum you selected does not exist
$lang['Reached_on_error'] = 'Достигнахте тази страница след грешка'; # You have reached this page in error

$lang['Display_topics'] = 'Покажи темите отпреди'; # Display topics from previous
$lang['All_Topics'] = 'Всички теми'; # All Topics

$lang['Topic_Announcement'] = '<b>Обявление:</b>'; # <b>Announcement:</b>
$lang['Topic_Sticky'] = '<b>Проблемно:</b>'; # <b>Sticky:</b>
$lang['Topic_Moved'] = '<b>Преместен:</b>'; # <b>Moved:</b>
$lang['Topic_Poll'] = '<b>[ Анкета ]</b>'; # <b>[ Poll ]</b>

$lang['Mark_all_topics'] = 'Маркирай всичко като прочетено'; # Mark all topics read
$lang['Topics_marked_read'] = 'Темите в този форум сега са маркирани като прочетени'; # The topics for this forum have now been marked read

$lang['Rules_post_can'] = '<b>можете</b> да създавате теми'; # You <b>can</b> post new topics in this forum
$lang['Rules_post_cannot'] = '<b>не можете</b> да създавате теми'; # You <b>cannot</b> post new topics in this forum
$lang['Rules_reply_can'] = '<b>можете</b> да отговаряте'; # You <b>can</b> reply to topics in this forum
$lang['Rules_reply_cannot'] = '<b>не можете</b> да отговаряте'; # You <b>cannot</b> reply to topics in this forum
$lang['Rules_edit_can'] = '<b>можете</b> променяте свои съобщения'; # You <b>can</b> edit your posts in this forum
$lang['Rules_edit_cannot'] = '<b>не можете</b> променяте свои съобщения'; # You <b>cannot</b> edit your posts in this forum
$lang['Rules_delete_can'] = '<b>можете</b> изтривате свои съобщения'; # You <b>can</b> delete your posts in this forum
$lang['Rules_delete_cannot'] = '<b>не можете</b> изтривате свои съобщения'; # You <b>cannot</b> delete your posts in this forum
$lang['Rules_vote_can'] = '<b>можете</b> гласувате в анкети'; # You <b>can</b> vote in polls in this forum
$lang['Rules_vote_cannot'] = '<b>не можете</b> гласувате на анкети'; # You <b>cannot</b> vote in polls in this forum
$lang['Rules_moderate'] = '<b>можете</b> %sда модерирате този форум%s'; # You <b>can</b> %smoderate this forum%s // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Няма съобщения в този форум<br />Изберете <b>Нова тема</b> на тази страница за да изпратите съобщение'; # There are no posts in this forum<br />Click on the <b>Post New Topic</b> link on this page to post one


//
// Viewtopic
//
$lang['View_topic'] = 'View topic';

$lang['Guest'] = 'Гост'; # Guest
$lang['Post_subject'] = 'Заглавие'; # Post subject
$lang['View_next_topic'] = 'Следваща тема'; # View next topic
$lang['View_previous_topic'] = 'Предишна тема'; # View previous topic
$lang['Submit_vote'] = 'Гласувам'; # Submit Vote
$lang['View_results'] = 'Резултати'; # View Results
$lang['Poll'] = 'Анкета';

$lang['No_newer_topics'] = 'Няма по-нови теми в този форум'; # There are no newer topics in this forum
$lang['No_older_topics'] = 'Няма по-стари теми в този форум'; # There are no older topics in this forum
$lang['Topic_post_not_exist'] = 'Поисканата тема/съобщение не съществува'; # The topic or post you requested does not exist
$lang['No_posts_topic'] = 'Няма съобщения за тази тема'; # No posts exist for this topic

$lang['Display_posts'] = 'Покажи съобщенията от предишните'; # Display posts from previous
$lang['All_Posts'] = 'Всички съобщения'; # All Posts
$lang['Newest_First'] = 'Новите първи'; # Newest First
$lang['Oldest_First'] = 'Старите първи'; # Oldest First

$lang['Back_to_top'] = 'Назад в началото'; # Back to top

$lang['Read_profile'] = 'Профил на потребителя'; # View users profile
$lang['Send_email'] = 'Изпращане на email  до потребителя'; # Send email to user
$lang['Visit_website'] = 'Посещение на web сайта на изпращача'; # Visit posters website
$lang['ICQ_status'] = 'ICQ статус'; # ICQ Status
$lang['Edit_delete_post'] = 'Промяна/изтриване'; # Edit/Delete this post
$lang['View_IP'] = 'IP на изпращача'; # View IP of poster
$lang['Delete_post'] = 'Изтриване'; # Delete this post

$lang['wrote'] = 'написа'; # wrote // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Цитат'; # Quote // comes before bbcode quote output.
$lang['Code'] = 'Код'; # Code // comes before bbcode code output.

$lang['Edited_time_total'] = 'Последно редактирана от %s на %s, редактирана общо %d път'; # Last edited by %s on %s, edited %d time in total // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Последно редактирана от %s на %s, редактирана общо %d пъти'; # Last edited by %s on %s, edited %d times in total // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Заключи тази тема'; # Lock this topic
$lang['Unlock_topic'] = 'Отключи тази тема'; # Unlock this topic
$lang['Move_topic'] = 'Премести тази тема'; # Move this topic
$lang['Delete_topic'] = 'Изтрий тази тема'; # Delete this topic
$lang['Split_topic'] = 'Раздели тази тема'; # Split this topic

$lang['Stop_watching_topic'] = 'Спри следенето на тази тема'; # Stop watching this topic
$lang['Start_watching_topic'] = 'Следи тази тема за отговори'; # Watch this topic for replies
$lang['No_longer_watching'] = 'Следенето на тази тема за вас е прекратено'; # You are no longer watching this topic
$lang['You_are_watching'] = 'Сега тази тема се следи за вас'; # You are now watching this topic

$lang['Total_votes'] = 'Общо гласове'; # Total Votes

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Съобщение'; # Message body
$lang['Topic_review'] = 'Преглед на темата'; # Topic review

$lang['No_post_mode'] = 'Не е оказан тип на съобщението'; # No post mode specified // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Създаване на нова тема'; # Post a new topic
$lang['Post_a_reply'] = 'Изпращане на отговор'; # Post a reply
$lang['Post_topic_as'] = 'Изпрати темата като'; # Post topic as
$lang['Edit_Post'] = 'Редакция'; # Edit post
$lang['Options'] = 'Възможности'; # Options

$lang['Post_Announcement'] = 'Обявление'; # Announcement
$lang['Post_Sticky'] = 'Проблемно'; # Sticky
$lang['Post_Normal'] = 'Нормално'; # Normal

$lang['Confirm_delete'] = 'Сигурни ли сте, че искате да изтриете това съобщение'; # Are you sure you want to delete this post?
$lang['Confirm_delete_poll'] = 'Сигурни ли сте, че искате да изтриете тази анкета'; # Are you sure you want to delete this poll?

$lang['Flood_Error'] = 'Не можете толкова скоро да изпращате ново съобщение, опитайте по-късно'; # You cannot make another post so soon after your last, please try again in a short while
$lang['Empty_subject'] = 'Трябва да има заглавие на новата тема'; # You must specify a subject when posting a new topic
$lang['Empty_message'] = 'Трябва да има текст на съобщението/темата'; # You must enter a message when posting
$lang['Forum_locked'] = 'Този форум е заключен, можете само да отговаряте или редактирате'; # This forum is locked you cannot post, reply to or edit topics
$lang['Topic_locked'] = 'Тази тема е заключена, не можете да отговаряте или редактирате'; # This topic is locked you cannot edit posts or make replies
$lang['No_post_id'] = 'Трябва да изберете съобщение за редактиране'; # You must select a post to edit
$lang['No_topic_id'] = 'Трябва да изберете тема за да отговорите'; # You must select a topic to reply to
$lang['No_valid_mode'] = 'Не може да извършите тази операция, моля върнете се и опитайте отново'; # You can only post, reply edit or quote messages, please return and try again
$lang['No_such_post'] = 'Няма такова съобщение, моля върнете се и опитайте отново'; # There is no such post, please return and try again
$lang['Edit_own_posts'] = 'Съжаляваме, но можете да редактирате само собствени съобщения'; # Sorry but you can only edit your own posts
$lang['Delete_own_posts'] = 'Съжаляваме, но можете да изтривате само собствени съобщения'; # Sorry but you can only delete your own posts
$lang['Cannot_delete_replied'] = 'Съжаляваме, но не можете да изтривате теми, по които е отговаряно'; # Sorry but you may not delete posts that have been replied to
$lang['Cannot_delete_poll'] = 'Съжаляваме, но не можете да изтривате активна анкета'; # Sorry but you cannot delete an active poll
$lang['Empty_poll_title'] = 'Трябва да въведете заглавие на анкетата'; # You must enter a title for your poll
$lang['To_few_poll_options'] = 'Трябва да въведете най-малко две възможности за отговор'; # You must enter at least two poll options
$lang['To_many_poll_options'] = 'Не може да има толкова много възможности за отговор'; # You have tried to enter too many poll options
$lang['Post_has_no_poll'] = 'По тази тема няма анкета'; # This post has no poll
$lang['Already_voted'] = 'Вие вече сте гласували в тази анкета'; # You have already voted in this poll
$lang['No_vote_option'] = 'При гласуване трябва да изберете някакъв отговор'; # You must specify an option when voting

$lang['Add_poll'] = 'Добави анкета'; # Add a Poll
$lang['Add_poll_explain'] = 'Ако не искате да има анкета към темата - оставете полетата празни'; # If you do not want to add a poll to your topic leave the fields blank
$lang['Poll_question'] = 'Въпрос за анкетата'; # Poll question
$lang['Poll_option'] = 'Възможност за отговор'; # Poll option
$lang['Add_option'] = 'Добави възможност'; # Add option
$lang['Update'] = 'Промени'; # Update
$lang['Delete'] = 'Изтрий'; # Delete
$lang['Poll_for'] = 'Анкетата да е активна'; # Run poll for
$lang['Days'] = 'дни'; # Days // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Оставете празно или 0 за да няма ограничение във времето ]'; # [ Enter 0 or leave blank for a never ending poll ]
$lang['Delete_poll'] = 'Изтрий анкетата'; # Delete Poll

$lang['Disable_HTML_post'] = 'Деактивирай HTML'; # Disable HTML in this post
$lang['Disable_BBCode_post'] = 'Деактивирай BBCode'; # Disable BBCode in this post
$lang['Disable_Smilies_post'] = 'Деактивирай Усмивки'; # Disable Smilies in this post

$lang['HTML_is_ON'] = 'HTML е <u>активен</u>'; # HTML is <u>ON</u>
$lang['HTML_is_OFF'] = 'HTML е <u>неактивен</u>'; # HTML is <u>OFF</u>
$lang['BBCode_is_ON'] = '%sBBCode%s е <u>активен</u>'; # %sBBCode%s is <u>ON</u> // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s е <u>неактивен</u>'; # %sBBCode%s is <u>OFF</u>
$lang['Smilies_are_ON'] = 'Усмивките са <u>активни</u>'; # Smilies are <u>ON</u>
$lang['Smilies_are_OFF'] = 'Усмивките са <u>неактивни</u>'; # Smilies are <u>OFF</u>

$lang['Attach_signature'] = 'Добави подписа ми (може да се променя в профила)'; # Attach signature (signatures can be changed in profile)
$lang['Notify'] = 'Известете ме когато е изпратен отговор'; # Notify me when a reply is posted
$lang['Delete_post'] = 'Изтрий това съобщение'; # Delete this post

$lang['Stored'] = 'Съобщението ви е прието успешно'; # Your message has been entered successfully
$lang['Deleted'] = 'Съобщението ви е изтрито успешно'; # Your message has been deleted successfully
$lang['Poll_delete'] = 'Анкетата ви е изтрита успешно'; # Your poll has been deleted successfully
$lang['Vote_cast'] = 'Гласът ви е зачетен'; # Your vote has been cast

$lang['Topic_reply_notification'] = 'Topic Reply Notification';

$lang['bbcode_b_help'] = 'Удебелен: [b]текст[/b]  (alt+b)'; # Bold text: [b]text[/b]  (alt+b)
$lang['bbcode_i_help'] = 'Наклонен: [i]текст[/i]  (alt+i)'; # Italic text: [i]text[/i]  (alt+i)
$lang['bbcode_u_help'] = 'Подчертан: [u]текст[/u]  (alt+u)'; # Underline text: [u]text[/u]  (alt+u)
$lang['bbcode_q_help'] = 'Цитиран: [quote]текст[/quote]  (alt+q)'; # Quote text: [quote]text[/quote]  (alt+q)
$lang['bbcode_c_help'] = 'Кодове: [code]код[/code]  (alt+c)'; # Code display: [code]code[/code]  (alt+c)
$lang['bbcode_l_help'] = 'Списък: [list]текст[/list] (alt+l)'; # List: [list]text[/list] (alt+l)
$lang['bbcode_o_help'] = 'Подреден списък: [list=]текст[/list]  (alt+o)'; # Ordered list: [list=]text[/list]  (alt+o)
$lang['bbcode_p_help'] = 'Изображение: [img]http://image_url[/img]  (alt+p)'; # Insert image: [img]http://image_url[/img]  (alt+p)
$lang['bbcode_w_help'] = 'Връзка: [url]http://url[/url] или [url=http://url]URL текст[/url]  (alt+w)'; # Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)
$lang['bbcode_a_help'] = 'Затваря всички отворени bbCode кодове'; # Close all open bbCode tags
$lang['bbcode_s_help'] = 'Цвят на шрифта: [color=red]текст[/color]  Съвет: важи още color=#FF0000'; # Font color: [color=red]text[/color]  Tip: you can also use color=#FF0000
$lang['bbcode_f_help'] = 'Размер на шрифта: [size=x-small]текст[/size]'; # Font size: [size=x-small]small text[/size]

$lang['Emoticons'] = 'Усмивки'; # Emoticons
$lang['More_emoticons'] = 'Още усмивки'; # View more Emoticons

$lang['Font_color'] = 'Шрифт - цвят'; # Font colour
$lang['color_default'] = 'Обикновен'; # Default
$lang['color_dark_red'] = 'Тъмно червен'; # Dark Red
$lang['color_red'] = 'Червен'; # Red
$lang['color_orange'] = 'Оранжев'; # Orange
$lang['color_brown'] = 'Кафяв'; # Brown
$lang['color_yellow'] = 'Жълт'; # Yellow
$lang['color_green'] = 'Зелен'; # Green
$lang['color_olive'] = 'Маслинен'; # Olive
$lang['color_cyan'] = 'Синьозелен'; # Cyan
$lang['color_blue'] = 'Син'; # Blue
$lang['color_dark_blue'] = 'Тъмно син'; # Dark Blue
$lang['color_indigo'] = 'Мастилено'; # Indigo
$lang['color_violet'] = 'Виолетов'; # Violet
$lang['color_white'] = 'Бял'; # White
$lang['color_black'] = 'Черен'; # Black

$lang['Font_size'] = 'Размер'; # Font size
$lang['font_tiny'] = 'Дребен'; # Tiny
$lang['font_small'] = 'Малък'; # Small
$lang['font_normal'] = 'Нормален'; # Normal
$lang['font_large'] = 'Голям'; # Large
$lang['font_huge'] = 'Огромен'; # Huge

$lang['Close_Tags'] = 'Затвори кодове'; # Close Tags
$lang['Styles_tip'] = 'Съвет: стиловете се прилагат към избрания текст'; # Tip: Styles can be applied quickly to selected text


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Лични съобщения'; # Private Messaging

$lang['Login_check_pm'] = 'Лични съобщения'; # Login to check your private messages
$lang['New_pms'] = 'Имате %d нови съобщения'; # You have %d new messages // You have 2 new messages
$lang['New_pm'] = 'Имате %d ново съобщение'; # You have %d new message // You have 1 new message
$lang['No_new_pm'] = 'Нямате нови съобщения'; # You have no new messages
$lang['Unread_pms'] = 'Имате %d непрочетени съощения'; # You have %d unread messages
$lang['Unread_pm'] = 'Имате %d непрочетено съощение'; # You have %d unread message
$lang['No_unread_pm'] = 'Нямате непрочетени съощения'; # You have no unread messages
$lang['You_new_pm'] = 'Имате 1 ново лично съобщение'; # A new private message is waiting for you in your Inbox
$lang['You_new_pms'] = 'Имате нови лични съобщения'; # New private messages are waiting for you in your Inbox
$lang['You_no_new_pm'] = 'Нямате нови лични съобщения'; # No new private messages are waiting for you

$lang['Unread_message'] = 'Непрочетено съобщение'; # Unread message
$lang['Read_message'] = 'Прочетено съобщение'; # Read message

$lang['Read_pm'] = 'Прочети съобщението'; # Read message
$lang['Post_new_pm'] = 'Изпрати съобщение'; # Post message
$lang['Post_reply_pm'] = 'Отговори на съобщението'; # Reply to message
$lang['Post_quote_pm'] = 'Цитирай съобщението'; # Quote message
$lang['Edit_pm'] = 'Редактирай съобщението'; # Edit message

$lang['Inbox'] = 'Входящи'; # Inbox
$lang['Outbox'] = 'Изходящи'; # Outbox
$lang['Savebox'] = 'Запазени'; # Savebox
$lang['Sentbox'] = 'Изпратени'; # Sentbox
$lang['Flag'] = 'Флаг'; # Flag
$lang['Subject'] = 'Заглавие'; # Subject
$lang['From'] = 'От'; # From
$lang['To'] = 'За'; # To
$lang['Date'] = 'Дата'; # Date
$lang['Mark'] = 'Маркирай'; # Mark
$lang['Sent'] = 'Изпрати'; # Sent
$lang['Saved'] = 'Запазено'; # Saved
$lang['Delete_marked'] = 'Изтрий маркираните'; # Delete Marked
$lang['Delete_all'] = 'Изтрий всички'; # Delete All
$lang['Save_marked'] = 'Запази маркираните'; # Save Marked
$lang['Save_message'] = 'Запази съобщението'; # Save Message
$lang['Delete_message'] = 'Изтрий съобщението'; # Delete Message

$lang['Display_messages'] = 'Покажи съобщенията отпреди'; # Display messages from previous // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Всички съобщения'; # All Messages

$lang['No_messages_folder'] = 'Нямате съобщения в тази папка'; # You have no messages in this folder

$lang['PM_disabled'] = 'Изпращането на лични съобщения е деактивирано за този форум'; # Private messaging has been disabled on this board
$lang['Cannot_send_privmsg'] = 'Съжаляваме, но администратора ви е забранил да изпращате лични съобщения'; # Sorry but the administrator has prevented you from sending private messages
$lang['No_to_user'] = 'Трябва да укажете потребителско име за да изпратите това съобщение'; # You must specify a username to send this message
$lang['No_such_user'] = 'Съжаляваме, но няма такъв потребител'; # Sorry but no such user exists

$lang['Disable_HTML_pm'] = 'Деактивирай HTML'; # Disable HTML in this message
$lang['Disable_BBCode_pm'] = 'Деактивирай BBCode'; # Disable BBCode in this message
$lang['Disable_Smilies_pm'] = 'Деактивирай Усмивки'; # Disable Smilies in this message

$lang['Message_sent'] = 'Съобщението ви е изпратено'; # Your message has been sent

$lang['Click_return_inbox'] = '%sОбратно към вашата пощенска кутия%s';
$lang['Click_return_index'] = '%sОбратно към индекса с форуми%s';

$lang['Send_a_new_message'] = 'Ново лично съобщение'; # Send a new private message
$lang['Send_a_reply'] = 'Отговор на лично съобщение'; # Reply to a private message
$lang['Edit_message'] = 'Редакция на лично съобщение'; # Edit private message

$lang['Notification_subject'] = 'Пристигнали са нови лични съобщения'; # New Private Message has arrived

$lang['Find_username'] = 'Намери потребител'; # Find a username
$lang['Find'] = 'Намери'; # Find
$lang['No_match'] = 'Няма открити'; # No matches found

$lang['No_post_id'] = 'Не е указано ID при изпращането'; # No post ID was specified
$lang['No_such_folder'] = 'Няма такава папка'; # No such folder exists
$lang['No_folder'] = 'Няма указана папка'; # No folder specified

$lang['Mark_all'] = 'Маркирай всички'; # Mark all
$lang['Unmark_all'] = 'Отмаркирай всички'; # Unmark all

$lang['Confirm_delete_pm'] = 'Сигурни ли сте, че искате да изтриете това съобщение'; # Are you sure you want to delete this message?
$lang['Confirm_delete_pms'] = 'Сигурни ли сте, че искате да изтриете тези съобщения'; # Are you sure you want to delete these messages?

$lang['Inbox_size'] = 'Папка входящи е запълнена %d%%'; # Your Inbox is %d%% full // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Папка изпратени е запълнена %d%%'; # Your Sentbox is %d%% full
$lang['Savebox_size'] = 'Папка запазени е запълнена %d%%'; # Your Savebox is %d%% full

$lang['Click_view_privmsg'] = '%sКъм вашата папка входящи%s'; # Click %sHere%s to visit your Inbox


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Профил на: %s'; # Viewing profile :: %s // %s is username 
$lang['About_user'] = 'Всичко за %s'; # All about %s // %s is username

$lang['Preferences'] = 'Характеристики'; # Preferences
$lang['Items_required'] = 'Обектите маркирани със * са задължителни, освен ако не е указано друго'; # Items marked with a * are required unless stated otherwise
$lang['Registration_info'] = 'Информация за регистрацията'; # Registration Information
$lang['Profile_info'] = 'Информация за профила'; # Profile Information
$lang['Profile_info_warn'] = 'Тази информация е видима за останалите'; # This information will be publicly viewable
$lang['Avatar_panel'] = 'Аватар (образ) - контролен панел'; # Avatar control panel
$lang['Avatar_gallery'] = 'Галерия с образи'; # Avatar gallery


$lang['Website'] = 'Web сайт'; # Website
$lang['Location'] = 'Местонахождение'; # Location
$lang['Contact'] = 'За контакт с'; # Contact
$lang['Email_address'] = 'Email адрес'; # Email address
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Изпрати лично съобщение'; # Send private message
$lang['Hidden_email'] = '[ скрит ]'; # [ Hidden ]
$lang['Search_user_posts'] = 'Търси за съобщения от този потребител'; # Search for posts by this user
$lang['Interests'] = 'Интереси'; # Interests
$lang['Occupation'] = 'Професия'; # Occupation
$lang['Poster_rank'] = 'Ранк във Форума'; # Poster rank

$lang['Total_posts'] = 'Общо съобщения'; # Total posts
$lang['User_post_pct_stats'] = '%.2f%% от всички'; # %.2f%% of total // 1.25% of total
$lang['User_post_day_stats'] = '%.2f на ден'; # %.2f posts per day // 1.5 posts per day
$lang['Search_user_posts'] = 'Намери всички съобщения на %s'; # Find all posts by %s // Find all posts by username

$lang['No_user_id_specified'] = 'Съжаляваме, но този потребител не съществува'; # Sorry but that user does not exist
$lang['Wrong_Profile'] = 'Не можете да променяте чужд профил.'; # You cannot modify a profile that is not your own.

$lang['Only_one_avatar'] = 'Може да бъде указан само един аватар (образ)'; # Only one type of avatar can be specified
$lang['File_no_data'] = 'Файла на URL-а който сте подали не съдържа данни'; # The file at the URL you gave contains no data
$lang['No_connection_URL'] = 'Не може да се осъществи връзка с URL-а който сте подали'; # A connection could not be made to the URL you gave
$lang['Incomplete_URL'] = 'URL-ът който сте въвели е непълен'; # The URL you entered is incomplete
$lang['Wrong_remote_avatar_format'] = 'URL-ът на отдалечения образ е невалиден'; # The URL of the remote avatar is not valid
$lang['No_send_account_inactive'] = 'Съжаляваме, но паролата не може да бъде получена, защото профила ви е декативиран. Моля обърнете се към администратора'; # Sorry, but your password cannot be retrieved because your account is currently inactive. Please contact the forum administrator for more information

$lang['Always_smile'] = 'Винаги да са активни усмивките'; # Always enable Smilies
$lang['Always_html'] = 'Винаги да е активен HTML'; # Always allow HTML
$lang['Always_bbcode'] = 'Винаги да е активен BBCode'; # Always allow BBCode
$lang['Always_add_sig'] = 'Винаги да се добавя подписа ми'; # Always attach my signature
$lang['Always_notify'] = 'Винаги ме информирайте за отговори'; # Always notify me of replies
$lang['Always_notify_explain'] = 'Когато някой отговори на тема отворена от вас, ви се изпраща email. Това може да се променя при създаването на тема'; # Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post

$lang['Board_style'] = 'Стил за форума'; # Board Style
$lang['Board_lang'] = 'Език за форума'; # Board Language
$lang['No_themes'] = 'Няма теми в базата данни'; # No Themes In database
$lang['Timezone'] = 'Часова зона'; # Timezone
$lang['Date_format'] = 'Формат за дати'; # Date format
$lang['Date_format_explain'] = 'Синтаксисът е както във функцията <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>'; # The syntax used is identical to the PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> function
$lang['Signature'] = 'Подпис'; # Signature
$lang['Signature_explain'] = 'Това е блок от текст, който може да се добавя към вашите съобщения. Ограничението е %d знака'; # This is a block of text that can be added to posts you make. There is a %d character limit
$lang['Public_view_email'] = 'Винаги да се показва Email адреса ми'; # Always show my Email Address

$lang['Current_password'] = 'Текуща парола'; # Current password
$lang['New_password'] = 'Нова парола'; # New password
$lang['Confirm_password'] = 'Потвърди паролата'; # Confirm password
$lang['Confirm_password_explain'] = 'Трябва да потвърдите текущата си парола преди да въведете нова или да смените email адреса си'; # You must confirm your current password if you wish to change it or alter your email address
$lang['password_if_changed'] = 'Трябва да въведете парола само ако искате да я смените'; # You only need to supply a password if you want to change it
$lang['password_confirm_if_changed'] = 'Трябва да потвърдите паролата си само ако сте я променили по-горе'; # You only need to confirm your password if you changed it above

$lang['Avatar'] = 'Аватар (образ)'; # Avatar
$lang['Avatar_explain'] = 'Показва се малко изображение под вашите данни в съобщенията. Само едно изображение се показва, ширината му не може да надвишава %d пиксела, височината %d пиксела, размера на файла да не надвишава %d Kb.'; # Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than %d pixels, a height no greater than %d pixels and a file size no more than %dkB. $lang['Upload_Avatar_file'] = 'Upload Avatar from your machine';
$lang['Upload_Avatar_file'] = 'Качете аватар (образ) от вашия компютър'; # Upload Avatar from your machine
$lang['Upload_Avatar_URL'] = 'Качете аватар (образ) от зададен URL'; # Upload Avatar from a URL
$lang['Upload_Avatar_URL_explain'] = 'Въведете адреса на аватара (образа), от където той ще бъде копиран тук.'; # Enter the URL of the location containing the Avatar image, it will be copied to this site.
$lang['Pick_local_Avatar'] = 'Изберете аватар (образ) от галерията'; # Select Avatar from the gallery
$lang['Link_remote_Avatar'] = 'Динамичен аватар (образ)'; # Link to off-site Avatar
$lang['Link_remote_Avatar_explain'] = 'Въведете URL, от където образа ще се зарежда директно.'; # Enter the URL of the location containing the Avatar image you wish to link to.
$lang['Avatar_URL'] = 'Адрес на аватара (образа)'; # URL of Avatar Image
$lang['Select_from_gallery'] = 'Изберете аватар (образ) от галерията'; # Select Avatar from gallery
$lang['View_avatar_gallery'] = 'Вижте галерията'; # Show gallery

$lang['Select_avatar'] = 'Изберете аватар (образ)'; # Select avatar
$lang['Return_profile'] = 'Върнете се обратно'; # Cancel avatar
$lang['Select_category'] = 'Изберете категория'; # Select category

$lang['Delete_Image'] = 'Изтрий'; # Delete Image
$lang['Current_Image'] = 'Текущо изображение'; # Current Image

$lang['Notify_on_privmsg'] = 'Информирайте ме при ново лично съобщение'; # Notify on new Private Message
$lang['Popup_on_privmsg'] = 'Съобщение в прозорец при ново лично съобщение'; # Pop up window on new Private Message
$lang['Popup_on_privmsg_explain'] = 'Ще бъдете информирани от системата така, че да не можете да го пропуснете'; # Some templates may open a new window to inform you when new private messages arrive
$lang['Hide_user'] = 'Да се скрива ли вашия онлайн статус'; # Hide your online status

$lang['Profile_updated'] = 'Профилът ви е променен'; # Your profile has been updated
$lang['Profile_updated_inactive'] = 'Профилът ви е променен, но вие сте подменили основни данни, така че сега профила ви не е активен. Проверете си email-а, за да видите как да го активирате отново, или ако се налага активиране от администратора, моля изчакайте докато това стане'; # Your profile has been updated, however you have changed vital details thus your account is now inactive. Check your email to find out how to reactivate your account, or if admin activation is require wait for the administrator to reactivate your account

$lang['Password_mismatch'] = 'Паролите, които сте въвели не съвпадат'; # The passwords you entered did not match
$lang['Current_password_mismatch'] = 'Паролата, която сте въвели не съвпада с тази в базата'; # The current password you supplied does not match that stored in the database
$lang['Password_long'] = 'Паролата ви неможе да е по-дълга от 32 символа!'; # Your password must be no more than 32 characters
$lang['Too_many_registers'] = 'Направихте твърде много опити за регистрация. Моля опитайте по-късно.'; # You have made too many registration attempts. Please try again later.
$lang['Username_taken'] = 'Потребителското име, което сте въвели е заето!'; # Sorry but this username has already been taken
$lang['Username_invalid'] = 'Потребителското име, което сте въвели е заето, забранено, или съдържа невалидни символи, като например \" !'; # Sorry but this username contains an invalid character such as \'
$lang['Username_disallowed'] = 'Потребителското име, което сте въвели е забранено!'; # Sorry but this username has been disallowed
$lang['Email_taken'] = 'Email адреса, който сте въвели, е вече използван от друг потребител!'; # Sorry but that email address is already registered to a user
$lang['Email_banned'] = 'Email адреса, който сте въвели, е баннат!'; # Sorry but this email address has been banned
$lang['Email_invalid'] = 'Email адреса, който сте въвели, е невалиден!'; # Sorry but this email address is invalid
$lang['Signature_too_long'] = 'Подписът ви е прекалено дълъг'; # Your signature is too long
$lang['Fields_empty'] = 'Трябва да попълните задължителните полета'; # You must fill in the required fields
$lang['Avatar_filetype'] = 'Образа трябва да е .jpg, .gif или .png'; # The avatar filetype must be .jpg, .gif or .png
$lang['Avatar_filesize'] = 'Размера на файла на образа трябва да е по-малко от %dkB'; // The avatar image file size must be less than 6 kB # The avatar image file size must be less than %d kB
$lang['Avatar_imagesize'] = 'Образа трябва да има основа по-малка от %d пиксела и височина по-малка от %d пиксела';  # The avatar must be less than %d pixels wide and %d pixels high

$lang['Welcome_subject'] = 'Добре дошли на %s Форумите'; // Welcome to my.com forums # Welcome to %s Forums
$lang['New_account_subject'] = 'Нов потребител'; # New user account
$lang['Account_activated_subject'] = 'Потребителя е активиран'; # Account Activated

$lang['Account_added'] = 'Благодарим ви, че се регистрирахте. Вашия потребител е създаден. Можете да влезете с вашите име и парола'; # Thank you for registering, your account has been created. You may now login with your username and password
$lang['Account_inactive'] = 'Вашият потребител е създаден. Тези форуми изискват лично активиране на потребителя и в тази връзка на мейла ви е изпратен ключ за активиране. Моля проверете мейла си за повече информация'; # Your account has been created. However, this forum requires account activation, an activation key has been sent to the email address you provided. Please check your email for further information
$lang['Account_inactive_admin'] = 'Вашият потребител е създаден. Тези форуми изискват активиране на потребителя от администратор и в тази връзка на администраторите е изпратен мейл. Ще бъдете информиран, когато активират потребителя ви.'; # Your account has been created. However, this forum requires account activation by the administrator. An email has been sent to them and you will be informed when your account has been activated
$lang['Account_active'] = 'Потребителят ви е активиран. Благодарим ви, че се регистрирахте.'; # Your account has now been activated. Thank you for registering
$lang['Account_active_admin'] = 'Потребителят ви е активиран.'; # The account has now been activated
$lang['Reactivate'] = 'Ре-активирайте потребителя си!'; # Reactivate your account!
$lang['Already_activated'] = 'Вече сте активирали потребителя си'; # You have already activated your account
$lang['COPPA'] = 'Потребителя ви създаден, но трябва да бъде одобрен. Моля проверете мейла си за повече информация.'; # Your account has been created but has to be approved, please check your email for details.

$lang['Registration'] = 'Условия за регистрация'; # Registration Agreement Terms
$lang['Reg_agreement'] = 'Въпреки, че администраторите и модераторите на този форум ще се опитат да премахнат или да променят възмжно най-бързо всеки материал, носещ вреда, невъзможно е да бъдат прегледани всички съобщения. Вие разбирате, че всички съобщения на тези форуми изразяват личното мнение на съответните им автори, а не на администраторите, модераторите или уебмастъра (като изключим съобщенията, пуснати от тези хора), и следователно те не носят никаква отговорност.<br /><br />Приемате да не пишете никакъв груб, неприличен, вулгарен, заплашителен, сексуално-ориентиран или всякакъв друг материал, който нарушава законите. Такова поведение може да доведе до моменталното и постоянното ви изгонване от форумите (както и уведомяването на вашия доставчик). IP адресите, от които са направени всички съобщения се записват и могат да бъдат използвани в такива случаи. Приемате, че уебмастъра, администратора и модераторите на този форум  имат правото да премахват, променят или заключват всяка тема по всяко време, ако намерят за уместно. Като потребител одобрявате записването на всяка информация, която въведете, в базата данни. Въпреки, че тази информация няма да бъде предоставяна на трети страни без вашето одобрение, уебмастъра, администратора и модераторите на този форум не могат да бъдат отговорни за всякакви хакерски атаки, които могат да доведат до разкриване на данните.<br /><br />Тази форум система използва cookies, за да записва информация на вашия компютър. Тези cookies не съдържат никаква информация за вас; използват се само за да подобрят функционалността на форумите. Мейл адреса ви се използва само за потвърждение на детайлите по регистрацията и паролата ви (и за изпращане на нови пароли, ако случайно забравите текущата си).<br /><br />Избирайки <b>Съгласен съм...</b> вие приемате горепосочените условия'; # While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you	have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above, they serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.

$lang['Agree_under_13'] = 'Съгласен съм с тези условия и възрастта ми е <b>под</b> 13 години'; # I Agree to these terms and am <b>under</b> 13 years of age
$lang['Agree_over_13'] = 'Съгласен съм с тези условия и възрастта ми е <b>над</b> 13 години'; # I Agree to these terms and am <b>over</b> 13 years of age
$lang['Agree_not'] = 'Не съм съгласен с тези условия'; # I do not agree to these terms

$lang['Wrong_activation'] = 'Ключът за активация, който сте въвели не съвпада с базата данни!'; # The activation key you supplied does not match any in the database
$lang['Send_password'] = 'Изпратете ми нова парола!';  # Send me a new password
$lang['Password_updated'] = 'Зададена ви е нова парола. Моля проверете мейла си за иформация как да я активирате!'; # A new password has been created, please check your email for details on how to activate it
$lang['No_email_match'] = 'Email адреса, който сте въвели, не съвпада със записания мейл за това потребителско име'; # The email address you supplied does not match the one listed for that username
$lang['New_password_activation'] = 'Активиране на нова парола'; # New password activation
$lang['Password_activated'] = 'Потребителят ви е ре-активиран. Влезте с новата парола, която получихте по мейла.'; # Your account has been re-activated. To logon please use the password supplied in the email you received

$lang['Send_email_msg'] = 'Изпратете email'; # Send an email message
$lang['No_user_specified'] = 'Трябва да изберете потребител'; # No user was specified
$lang['User_prevent_email'] = 'Този потребител предпочита да не получава поща. Можете да му изпратите лично съобщение'; # This user does not wish to receive email. Try sending them a private message
$lang['User_not_exist'] = 'Този потребител не съществува'; # That user does not exist
$lang['CC_email'] = 'Изпратете копие на email-а до себе си'; # Send a copy of this email to yourself
$lang['Email_message_desc'] = 'Това съобщение ще бъде изпратено като обикновен текст, не включвайте HTML или BBCode. Адреса на подателя ще бъде вашия мейл адрес.'; # This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.
$lang['Flood_email_limit'] = 'Не можете да изпратите нов email толкова скоро. Моля изчакайте няколко минути'; # You cannot send another email at this time, try again later
$lang['Recipient'] = 'Получател'; # Recipient
$lang['Email_sent'] = 'Email-ът е изпратен'; # The email has been sent
$lang['Send_email'] = 'Изпрати email-a'; # Send email
$lang['Empty_subject_email'] = 'Трябва да въведете заглавие на email-a'; # You must specify a subject for the email
$lang['Empty_message_email'] = 'Трябва да въведете съобщение, което да бъде изпратено'; # You must enter a message to be emailed

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'The confirmation code you entered was incorrect';
$lang['Too_many_registers'] = 'You have exceeded the number of registration attempts for this session. Please try again later.';
$lang['Confirm_code_impaired'] = 'If you are visually impaired or cannot otherwise read this code please contact the %sAdministrator%s for help.';
$lang['Confirm_code'] = 'Confirmation code';
$lang['Confirm_code_explain'] = 'Enter the code exactly as you see it. The code is case sensitive and zero has a diagonal line through it.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Метод за сортиране'; # Select sort method
$lang['Sort'] = 'Сортирай'; # Sort
$lang['Sort_Top_Ten'] = 'Най-активни'; # Top Ten Posters
$lang['Sort_Joined'] = 'Дата на присъединяване'; # Joined Date
$lang['Sort_Username'] = 'Потребителско име'; # Username
$lang['Sort_Location'] = 'Местоположение'; # Location
$lang['Sort_Posts'] = 'Общо съобщения'; # Total posts
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Web сайт'; # Website
$lang['Sort_Ascending'] = 'Възходяща'; # Ascending
$lang['Sort_Descending'] = 'Низходяща'; # Descending
$lang['Order'] = 'Подредба'; # Order


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Контролен панел на групата'; # Group Control Panel
$lang['Group_member_details'] = 'Детайли за групата'; # Group Membership Details
$lang['Group_member_join'] = 'Присъединяване към група'; # Join a Group

$lang['Group_Information'] = 'Информация за групата'; # Group Information
$lang['Group_name'] = 'Име на групата'; # Group name
$lang['Group_description'] = 'Описание на групата'; # Group description
$lang['Group_membership'] = 'Членство в групата'; # Group membership
$lang['Group_Members'] = 'Членове на групата'; # Group Members
$lang['Group_Moderator'] = 'Модератор на групата'; # Group Moderator
$lang['Pending_members'] = 'Чакащи кандидатури'; # Pending Members

$lang['Group_type'] = 'Тип на групата'; # Group type
$lang['Group_open'] = 'Отворена група'; # Open group
$lang['Group_closed'] = 'Затворена група'; # Closed group
$lang['Group_hidden'] = 'Скрита група'; # Hidden group

$lang['Current_memberships'] = 'Групи, в които сте член'; # Current memberships
$lang['Non_member_groups'] = 'Групи, в които не сте член'; # Non-member groups
$lang['Memberships_pending'] = 'Чакащи кандидатури'; # Memberships pending

$lang['No_groups_exist'] = 'Няма налични групи'; # No Groups Exist
$lang['Group_not_exist'] = 'Тази потребителска група не съществува'; # That user group does not exist

$lang['Join_group'] = 'Присъединете се към групата'; # Join Group
$lang['No_group_members'] = 'Тази група няма членове'; # This group has no members
$lang['Group_hidden_members'] = 'Тази група е скрита - не можете да видите членовете й'; # This group is hidden, you cannot view its membership
$lang['No_pending_group_members'] = 'Тази група няма чакащи кандидатури'; # This group has no pending members
$lang['Group_joined'] = 'Заявката ви за приемане в групата е изпратена успешно<br />Ще бъдете уведомени, когато кандидатурата ви бъде одобрена от модератора на групата'; # You have successfully subscribed to this group<br />You will be notified when your subscription is approved by the group moderator
$lang['Group_request'] = 'Получена е заявка за приемане в групата ви'; # A request to join your group has been made
$lang['Group_approved'] = 'Вашата кандидатура е одобрена'; # Your request has been approved
$lang['Group_added'] = 'Приет сте за член на тази група';  # You have been added to this usergroup
$lang['Already_member_group'] = 'Вече сте член на тази група'; # You are already a member of this group
$lang['User_is_member_group'] = 'Потребителя вече е член на тази група'; # User is already a member of this group
$lang['Group_type_updated'] = 'Типа на групата е променен успешно'; # Successfully updated group type

$lang['Could_not_add_user'] = 'Избрания потребител не съществува'; # The user you selected does not exist
$lang['Could_not_anon_user'] = 'Не можете да добавяте анонимни потребители към групата'; # You cannot make Anonymous a group member

$lang['Confirm_unsub'] = 'Сигурни ли сте, че искате да напуснете групата?'; # Are you sure you want to unsubscribe from this group?
$lang['Confirm_unsub_pending'] = 'Вашата кандидатура все още не е одобрена, сигурни ли сте, че искате да напуснете групата?'; # Your subscription to this group has not yet been approved, are you sure you want to unsubscribe?

$lang['Unsub_success'] = 'Успешно напуснахте тази група'; # You have been un-subscribed from this group.

$lang['Approve_selected'] = 'Одобрете селектираните'; # Approve Selected
$lang['Deny_selected'] = 'Отхвърлете селетираните'; # Deny Selected
$lang['Not_logged_in'] = 'Трябва да сте влезли, за да се присъедините към дадена група'; # You must be logged in to join a group.
$lang['Remove_selected'] = 'Премахнете селектираните'; # Remove Selected
$lang['Add_member'] = 'Добавете член'; # Add Member
$lang['Not_group_moderator'] = 'Не можете да изпълните това действие, защото не сте модератор на тази група'; # You are not this groups moderator therefor you cannot preform that action.

$lang['Login_to_join'] = 'Влезте, за да можете да се присъедините към групата или да я модерирате'; # Login to join or manage group memberships
$lang['This_open_group'] = 'Това е отворена група, кликнете, за да кандидатствате за членство'; # This is an open group, click to request membership
$lang['This_closed_group'] = 'Това е затворена група, нови членове не се приемат'; # This is a closed group, no more users accepted
$lang['This_hidden_group'] = 'Това е скрита група, автоматичното добавяне на потребители не е разрешено'; # This is a hidden group, automatic user addition is not allowed
$lang['Member_this_group'] = 'Вие сте член на тази група'; # You are a member of this group
$lang['Pending_this_group'] = 'Кандидатурата ви за тази група чака одобрение'; # Your membership of this group is pending
$lang['Are_group_moderator'] = 'Вие сте модератора на групата'; # You are the group moderator
$lang['None'] = 'няма'; # None

$lang['Subscribe'] = 'Запишете се'; # Subscribe
$lang['Unsubscribe'] = 'Отпишете се'; #Unsubscribe
$lang['View_Information'] = 'Информация'; # View Information


//
// Search
//
$lang['Search_query'] = 'Критерии за търсене'; # Search Query
$lang['Search_options'] = 'Опции'; # Search Options

$lang['Search_keywords'] = 'Търсете по думи'; # Search for Keywords
$lang['Search_keywords_explain'] = 'Ползвайте <u>AND</u>, за да определите думи, които трябва да присъстват в резултатите, <u>OR</u> за такива, които могат да са в резултатите и <u>NOT</u> за думи, които не трябва да са в резултатите. Можете да ползвайте * като маска. Пример: *ива* връща Иванов, отбивам и коприва.'; # You can use <u>AND</u> to define words which must be in the results, <u>OR</u> to define words which may be in the result and <u>NOT</u> to define words which should not be in the result. Use * as a wildcard for partial matches
$lang['Search_author'] = 'Тръсете по автор'; # Search for Author
$lang['Search_author_explain'] = 'Използвайте * като маска.'; # Use * as a wildcard for partial matches
$lang['Search_for_any'] = 'Търси за коя да е от въведените думи'; # Search for any terms or use query as entered
$lang['Search_for_all'] = 'Търси за всички въведени думи'; # Search for all terms
$lang['Search_title_msg'] = 'Търси в заглавието и съдържанието на мненията'; # Search topic title and message text
$lang['Search_msg_only'] = 'Търси само в съдържанието на мненията'; # Search message text only

$lang['Return_first'] = 'Покажи първите'; // followed by xxx characters in a select box # Return first
$lang['characters_posts'] = 'символа от мнението'; # characters of posts

$lang['Search_previous'] = 'От преди'; // followed by days, weeks, months, year, all in a select box # Search previous

$lang['Sort_by'] = 'Сортирай по'; # Sort by
$lang['Sort_Time'] = 'Време'; # Post Time
$lang['Sort_Post_Subject'] = 'Заглавие на мнение'; # Post Subject
$lang['Sort_Topic_Title'] = 'Заглавие на тема'; # Topic Title
$lang['Sort_Author'] = 'Автор'; # Author
$lang['Sort_Forum'] = 'Форум'; # Forum

$lang['Display_results'] = 'Покажи резултатите като'; # Display results as
$lang['All_available'] = 'Всички налични'; # All available
$lang['No_searchable_forums'] = 'Не ви е разрешено да търсите из тези форуми!'; # You do not have permissions to search any forum on this site

$lang['No_search_match'] = 'Няма открити теми или съобщения в резултат на търсенето'; # No topics or posts met your search criteria
$lang['Found_search_match'] = 'При търсенето са открити %d тема/съобщение'; # Search found %d match // eg. Search found 1 match
$lang['Found_search_matches'] = 'При търсенето са открити %d теми/съобщения'; # Search found %d matches // eg. Search found 24 matches

$lang['Close_window'] = 'Затворете прозореца'; # Close Window


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Само %s могат да пускат СЪОБЩЕНИЯ в този форум'; # Sorry but only %s can post announcements in this forum
$lang['Sorry_auth_sticky'] = 'Само %s могат да пускат Важни теми в този форум';  # Sorry but only %s can post sticky messages in this forum
$lang['Sorry_auth_read'] = 'Само %s могат да четат теми в този форум';  # Sorry but only %s can read topics in this forum
$lang['Sorry_auth_post'] = 'Само %s могат да пускат теми в този форум';  # Sorry but only %s can post topics in this forum
$lang['Sorry_auth_reply'] = 'Само %s могат да отговарят в този форум';  # Sorry but only %s can reply to posts in this forum
$lang['Sorry_auth_edit'] = 'Само %s могат да променят мнения в този форум';  # Sorry but only %s can edit posts in this forum
$lang['Sorry_auth_delete'] = 'Само %s могат да изтриват мнения в този форум'; # Sorry but only %s can delete posts in this forum
$lang['Sorry_auth_vote'] = 'Само %s canмогат да гласуват на анкети в този форум'; # Sorry but only %s can vote in polls in this forum

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '"<b>Анонимни потребители</b>'; # <b>anonymous users</b>
$lang['Auth_Registered_Users'] = '<b>Регистрирани потребители</b>'; # <b>registered users</b>
$lang['Auth_Users_granted_access'] = '<b>Потребители със специални права</b>'; # <b>users granted special access</b>
$lang['Auth_Moderators'] = '<b>Модератори</b>'; # <b>moderators</b>
$lang['Auth_Administrators'] = '<b>Администратори</b>'; # <b>administrators</b>

$lang['Not_Moderator'] = 'Вие не сте модератор на този форум'; # You are not a moderator of this forum
$lang['Not_Authorised'] = 'Нямате право'; # Not Authorised

$lang['You_been_banned'] = 'Вие имате ограничение на достъпа до този форум.<br />Моля свържете се с администраторите за повече информация.'; # You have been banned from this forum<br />Please contact the webmaster or board administrator for more information


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Има 0 Регистрирани и '; // There ae 5 Registered and # There are 0 Registered users and 
$lang['Reg_users_online'] = 'Има %d Регистрирани и '; // There ae 5 Registered and # There are %d Registered users and 
$lang['Reg_user_online'] = 'Има %d Регистриран и '; // There ae 5 Registered and # There is %d Registered user and 
$lang['Hidden_users_zero_online'] = '0 Скрити потребители онлайн'; // 6 Hidden users online # 0 Hidden users online
$lang['Hidden_users_online'] = '"%d Скрити потребители онлайн'; // 6 Hidden users online # %d Hidden users online
$lang['Hidden_user_online'] = '"%d Скрит потребител онлайн'; // 6 Hidden users online # %d Hidden user online
$lang['Guest_users_online'] = 'Има %d Гости онлайн'; // There are 10 Guest users online # There are %d Guest users online
$lang['Guest_users_zero_online'] = 'Има 0 Гости онлайн'; // There are 10 Guest users online # There are 0 Guest users online
$lang['Guest_user_online'] = 'Има %d Гост онлайн'; // There is 1 Guest user online # There is %d Guest user online
$lang['No_users_browsing'] = 'Няма потребители, разглеждащи този форум'; # There are no users currently browsing this forum

$lang['Online_explain'] = 'Данните са за последните 5 минути'; # This data is based on users active over the past five minutes

$lang['Forum_Location'] = 'Мостоположение на форума'; # Forum Location
$lang['Last_updated'] = 'Последна промяна'; # Last Updated

$lang['Forum_index'] = 'Форуми'; # Forum index
$lang['Logging_on'] = 'Влиза'; # Logging on
$lang['Posting_message'] = 'Пише мнение'; # Posting a message
$lang['Searching_forums'] = 'Търси из форумите'; # Searching forums
$lang['Viewing_profile'] = 'Разглежда профил'; # Viewing profile
$lang['Viewing_online'] = 'Проверява кой е онлайн'; # Viewing who is online
$lang['Viewing_member_list'] = 'Гледа списъка с членовете'; # Viewing member list
$lang['Viewing_priv_msgs'] = 'Чете личните си съобщения'; # Viewing Private Messages
$lang['Viewing_FAQ'] = 'Чете FAQ'; # Viewing FAQ


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Модераторски панел'; # Moderator Control Panel
$lang['Mod_CP_explain'] = 'С помощта на формата по-долу можете да извършвате масова модерация на този форум. Можете да заключвате, отключвате, премествате или изтривате избрани теми.'; # Using the form below you can perform mass moderation operations on this forum. You can lock, unlock, move or delete any number of topics.

$lang['Select'] = 'Избери'; # Select
$lang['Delete'] = 'Изтрий'; # Delete
$lang['Move'] = 'Премести'; # Move
$lang['Lock'] = 'Заключи'; # Lock
$lang['Unlock'] = 'Отключи'; # Unlock

$lang['Topics_Removed'] = 'Избраните теми са премахнати от базата.'; # The selected topics have been successfully removed from the database.
$lang['Topics_Locked'] = 'Избраните теми са заключени'; # The selected topics have been locked
$lang['Topics_Moved'] = 'Избраните теми са преместени'; # The selected topics have been moved
$lang['Topics_Unlocked'] = 'Избраните теми са отключени'; # The selected topics have been unlocked
$lang['No_Topics_Moved'] = 'No topics were moved';

$lang['Confirm_delete_topic'] = 'Сигурни ли сте, че искате да изтриете избраните теми?'; # Are you sure you want to remove the selected topic/s?
$lang['Confirm_lock_topic'] = 'Сигурни ли сте, че искате да заключите избраните теми?'; # Are you sure you want to lock the selected topic/s?
$lang['Confirm_unlock_topic'] = 'Сигурни ли сте, че искате да отключите избраните теми?'; # Are you sure you want to unlock the selected topic/s?
$lang['Confirm_move_topic'] = 'Сигурни ли сте, че искате да преместите избраните?'; # Are you sure you want to move the selected topic/s?

$lang['Move_to_forum'] = 'Преместете във форум'; # Move to forum
$lang['Leave_shadow_topic'] = 'Остави линк към преместения топик в стария форум'; # Leave shadow topic in old forum.

$lang['Split_Topic'] = 'Панел за разделяне на теми'; # Split Topic Control Panel
$lang['Split_Topic_explain'] = 'С помощта на формата по-долу можете да разделяте теми на две, като поставите избраните мнения в нови теми или просто разделите темата на две след избрано мнение.'; # Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post
$lang['Split_title'] = 'Заглавие на новата тема'; # New topic title
$lang['Split_forum'] = 'Форум за новата тема'; # Forum for new topic
$lang['Split_posts'] = 'Разделете избраните мнения'; # Split selected posts
$lang['Split_after'] = 'Разделете темата след избраното мнение'; # Split from selected post
$lang['Topic_split'] = 'Темата е успешно разделена'; # The selected topic has been split successfully

$lang['Too_many_error'] = 'Селектирали сте прекалено много мнения! Трябва да изберете само едно мнение, след което искате да разделите темата!'; # You have selected too many posts. You can only select one post to split a topic after!

$lang['None_selected'] = 'Не сте избрали тема, на която да приложите тази операция! Моля върнете се обратно и изберете поне една.'; # You have no selected any topics to preform this operation on. Please go back and select at least one.
$lang['New_forum'] = 'Нов форум'; # New forum

$lang['This_posts_IP'] = 'IP адрес за това мнение'; # IP for this post
$lang['Other_IP_this_user'] = 'Други IP адреси, от които е писал този потребител'; # Other IP addresses this user has posted from
$lang['Users_this_IP'] = 'Потребители, писали от този IP адрес'; # Users posting from this IP
$lang['IP_info'] = 'Информация за IP адреса'; # IP Information
$lang['Lookup_IP'] = 'Виж IP адреса'; # Look up IP


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Времената са в %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 ч';
$lang['-11'] = 'GMT - 11 ч';
$lang['-10'] = 'GMT - 10 ч';
$lang['-9'] = 'GMT - 9 ч';
$lang['-8'] = 'GMT - 8 ч';
$lang['-7'] = 'GMT - 7 ч';
$lang['-6'] = 'GMT - 6 ч';
$lang['-5'] = 'GMT - 5 ч';
$lang['-4'] = 'GMT - 4 ч';
$lang['-3.5'] = 'GMT - 3.5 ч';
$lang['-3'] = 'GMT - 3 ч';
$lang['-2'] = 'GMT - 2 ч';
$lang['-1'] = 'GMT - 1 ч';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 ч';
$lang['2'] = 'GMT + 2 ч';
$lang['3'] = 'GMT + 3 ч';
$lang['3.5'] = 'GMT + 3.5 ч';
$lang['4'] = 'GMT + 4 ч';
$lang['4.5'] = 'GMT + 4.5 ч';
$lang['5'] = 'GMT + 5 ч';
$lang['5.5'] = 'GMT + 5.5 ч';
$lang['6'] = 'GMT + 6 ч';
$lang['6.5'] = 'GMT + 6.5 ч';
$lang['7'] = 'GMT + 7 ч';
$lang['8'] = 'GMT + 8 ч';
$lang['9'] = 'GMT + 9 ч';
$lang['9.5'] = 'GMT + 9.5 ч';
$lang['10'] = 'GMT + 10 ч';
$lang['11'] = 'GMT + 11 ч';
$lang['12'] = 'GMT + 12 ч';
$lang['13'] = 'GMT + 13 ч';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ч';
$lang['tz']['-11'] = 'GMT - 11 ч';
$lang['tz']['-10'] = 'GMT - 10 ч';
$lang['tz']['-9'] = 'GMT - 9 ч';
$lang['tz']['-8'] = 'GMT - 8 ч';
$lang['tz']['-7'] = 'GMT - 7 ч';
$lang['tz']['-6'] = 'GMT - 6 ч';
$lang['tz']['-5'] = 'GMT - 5 ч';
$lang['tz']['-4'] = 'GMT - 4 ч';
$lang['tz']['-3.5'] = 'GMT - 3.5 ч';
$lang['tz']['-3'] = 'GMT - 3 ч';
$lang['tz']['-2'] = 'GMT - 2 ч';
$lang['tz']['-1'] = 'GMT - 1 ч';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 ч';
$lang['tz']['2'] = 'GMT + 2 ч';
$lang['tz']['3'] = 'GMT + 3 ч';
$lang['tz']['3.5'] = 'GMT + 3.5 ч';
$lang['tz']['4'] = 'GMT + 4 ч';
$lang['tz']['4.5'] = 'GMT + 4.5 ч';
$lang['tz']['5'] = 'GMT + 5 ч';
$lang['tz']['5.5'] = 'GMT + 5.5 ч';
$lang['tz']['6'] = 'GMT + 6 ч';
$lang['tz']['6.5'] = 'GMT + 6.5 ч';
$lang['tz']['7'] = 'GMT + 7 ч';
$lang['tz']['8'] = 'GMT + 8 ч';
$lang['tz']['9'] = 'GMT + 9 ч';
$lang['tz']['9.5'] = 'GMT + 9.5 ч';
$lang['tz']['10'] = 'GMT + 10 ч';
$lang['tz']['11'] = 'GMT + 11 ч';
$lang['tz']['12'] = 'GMT + 12 ч';
$lang['tz']['13'] = 'GMT + 13 ч';

$lang['datetime']['Sunday'] = 'неделя';
$lang['datetime']['Monday'] = 'понеделник';
$lang['datetime']['Tuesday'] = 'вторник';
$lang['datetime']['Wednesday'] = 'сряда';
$lang['datetime']['Thursday'] = 'четвъртък';
$lang['datetime']['Friday'] = 'петък';
$lang['datetime']['Saturday'] = 'събота';
$lang['datetime']['Sun'] = 'Sun';
$lang['datetime']['Mon'] = 'Mon';
$lang['datetime']['Tue'] = 'Tue';
$lang['datetime']['Wed'] = 'Wed';
$lang['datetime']['Thu'] = 'Thu';
$lang['datetime']['Fri'] = 'Fri';
$lang['datetime']['Sat'] = 'Sat';
$lang['datetime']['January'] = 'януари';
$lang['datetime']['February'] = 'февруари';
$lang['datetime']['March'] = 'март';
$lang['datetime']['April'] = 'април';
$lang['datetime']['May'] = 'май';
$lang['datetime']['June'] = 'юни';
$lang['datetime']['July'] = 'юли';
$lang['datetime']['August'] = 'август';
$lang['datetime']['September'] = 'септември';
$lang['datetime']['October'] = 'октомври';
$lang['datetime']['November'] = 'ноември';
$lang['datetime']['December'] = 'декември';
$lang['datetime']['Jan'] = 'яну';
$lang['datetime']['Feb'] = 'фев';
$lang['datetime']['Mar'] = 'мар';
$lang['datetime']['Apr'] = 'апр';
$lang['datetime']['May'] = 'май';
$lang['datetime']['Jun'] = 'юни';
$lang['datetime']['Jul'] = 'юли';
$lang['datetime']['Aug'] = 'авг';
$lang['datetime']['Sep'] = 'сеп';
$lang['datetime']['Oct'] = 'окт';
$lang['datetime']['Nov'] = 'ное';
$lang['datetime']['Dec'] = 'дек';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Информация'; # Information
$lang['Critical_Information'] = 'Критична информация'; # Critical Information

$lang['General_Error'] = 'Грешка'; # General Error
$lang['Critical_Error'] = 'Критична грешка'; # Critical Error
$lang['An_error_occured'] = 'Възникнала е грешка'; # An Error Occurred
$lang['A_critical_error'] = 'Възникнала е критична грешка'; # A Critical Error Occurred

//
// That's all Folks!
// -------------------------------------------------
