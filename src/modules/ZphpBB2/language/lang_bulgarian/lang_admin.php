<?php

/***************************************************************************
 *                            lang_admin.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.2 2002/05/12 15:33:28 psotfx Exp $
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
// Format is same as lang_main
//

if (!defined('_CHARSET')) define('_CHARSET', 'utf-8');

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = iconv('CP1251',_CHARSET, 'Общо администриране'); # General Admin
$lang['Users'] = iconv('CP1251',_CHARSET, 'Администриране на потребителите'); # User Admin
$lang['Groups'] = iconv('CP1251',_CHARSET, 'Група на администриране'); # Group Admin
$lang['Forums'] = iconv('CP1251',_CHARSET, 'Администриране на форумите'); # Forum Admin
$lang['Styles'] = iconv('CP1251',_CHARSET, 'Стилове на администрирането'); # Styles Admin

$lang['Configuration'] = iconv('CP1251',_CHARSET, 'Конфигурация'); # Configuration
$lang['Permissions'] = iconv('CP1251',_CHARSET, 'Права'); # Permissions
$lang['Manage'] = iconv('CP1251',_CHARSET, 'Настройки'); # Management
$lang['Disallow'] = iconv('CP1251',_CHARSET, 'Забрана на имена'); # Disallow names
$lang['Prune'] = iconv('CP1251',_CHARSET, 'Прочистване'); #Pruning
$lang['Mass_Email'] = iconv('CP1251',_CHARSET, 'Масов мейл'); # Mass Email
$lang['Ranks'] = iconv('CP1251',_CHARSET, 'Рангове'); # Ranks
$lang['Smilies'] = iconv('CP1251',_CHARSET, 'Усмивки'); # Smilies
$lang['Ban_Management'] = iconv('CP1251',_CHARSET, 'Бан контрол'); # Ban Control
$lang['Word_Censor'] = iconv('CP1251',_CHARSET, 'Цензурирани думи'); # Word Censors
$lang['Export'] = iconv('CP1251',_CHARSET, 'Експортиране'); # Export
$lang['Create_new'] = iconv('CP1251',_CHARSET, 'Създаване'); # Create
$lang['Add_new'] = iconv('CP1251',_CHARSET, 'Добавяне'); # Add
$lang['Backup_DB'] = iconv('CP1251',_CHARSET, 'Съхраняване на БД'); # Backup Database
$lang['Restore_DB'] = iconv('CP1251',_CHARSET, 'Възстановяване на БД'); # Restore Database


//
// Index
//
$lang['Admin'] = iconv('CP1251',_CHARSET, 'Администрация'); # Administration
$lang['Not_admin'] = iconv('CP1251',_CHARSET, 'Нямате право да администрирате тези форуми'); # You are not authorised to administer this board
$lang['Welcome_phpBB'] = iconv('CP1251',_CHARSET, 'Добре дошли в phpBB'); # Welcome to phpBB
$lang['Admin_intro'] = iconv('CP1251',_CHARSET, 'Благодарим ви, че избрахте phpBB за вашата форум система. Тази страница представя някои статистики за форумите. Можете да се върнете тук като кликнете на <u>Админ-панел</u> в левия фрейм. За да се върнете на началната страница на форумите, кликнете на логото (също в левия фрейм). Другите връзки в ляво водят към инструменти за администриране на всички аспекти на форумите. Всяка секция съдържа инструкции за администрирането.'); # Thank you for choosing phpBB as your forum solution. This screen will give you a quick overview of all the various statistics of your board. You can get back to this page by clicking on the <u>Admin Index</u> link in the left pane. To return to the index of your board, click the phpBB logo also in the left pane. The other links on the left hand side of this screen will allow you to control every aspect of your forum experience, each screen will have instructions on how to use the tools.
$lang['Main_index'] = iconv('CP1251',_CHARSET, 'Индекс на форумите'); # Forum Index
$lang['Forum_stats'] = iconv('CP1251',_CHARSET, 'Форум статистики'); # Forum Statistics
$lang['Admin_Index'] = iconv('CP1251',_CHARSET, 'Админ-панел'); # Admin Index
$lang['Preview_forum'] = iconv('CP1251',_CHARSET, 'Преглед на форума'); # Preview Forum

$lang['Click_return_admin_index'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в Админ-панела'); # Click %sHere%s to return to the Admin Index

$lang['Statistic'] = iconv('CP1251',_CHARSET, 'Статистика'); # Statistic
$lang['Value'] = iconv('CP1251',_CHARSET, 'Стойност'); # Value
$lang['Number_posts'] = iconv('CP1251',_CHARSET, 'Брой мнения'); # Number of posts
$lang['Posts_per_day'] = iconv('CP1251',_CHARSET, 'Мнения на ден'); # Posts per day
$lang['Number_topics'] = iconv('CP1251',_CHARSET, 'Брой теми'); # Number of topics
$lang['Topics_per_day'] = iconv('CP1251',_CHARSET, 'Теми на ден'); # Topics per day
$lang['Number_users'] = iconv('CP1251',_CHARSET, 'Брой потребители'); # Number of users
$lang['Users_per_day'] = iconv('CP1251',_CHARSET, 'Потребители на ден'); # Users per day
$lang['Board_started'] = iconv('CP1251',_CHARSET, 'Старт на борда'); # Board started
$lang['Avatar_dir_size'] = iconv('CP1251',_CHARSET, 'Размер на папката с аватари (образи)'); # Avatar directory size
$lang['Database_size'] = iconv('CP1251',_CHARSET, 'Размер на базата данни'); # Database size
$lang['Gzip_compression'] = iconv('CP1251',_CHARSET, 'Gzip компресия'); # Gzip compression
$lang['Not_available'] = iconv('CP1251',_CHARSET, 'Няма данни'); # Not available

$lang['ON'] = iconv('CP1251',_CHARSET, 'Включена'); // This is for GZip compression # ON
$lang['OFF'] = iconv('CP1251',_CHARSET, 'Изключена');  # OFF


//
// DB Utils
//
$lang['Database_Utilities'] = iconv('CP1251',_CHARSET, 'Работа с базата данни'); # Database Utilities

$lang['Restore'] = iconv('CP1251',_CHARSET, 'Възстановяване'); # Restore
$lang['Backup'] = iconv('CP1251',_CHARSET, 'Съхраняване'); # Backup
$lang['Restore_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да направите пълно възстановяване на базата данни на phpBB от съхранен файл. Ако сървърът ви го поддържа, можете да качите компресиран с gzip файл, който ще бъде автоматично разкомпресиран. <b>ВНИМАНИЕ!</b> Възстановяването ще изтрие всички налични данни. Процеса може да отнеме много време, моля не презареждайте страницата докато свърши.'); # This will perform a full restore of all phpBB tables from a saved file. If your server supports it you may upload a gzip compressed text file and it will automatically be decompressed. <b>WARNING</b> This will overwrite any existing data. The restore may take a long time to process please do not move from this page till it is complete.
$lang['Backup_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да съхраните цялата база данни на phpBB. Ако имате някакви допълнителни таблици в същата база данни като phpBB, които искате да бъдат съхранени, моля въведете имената им, разделени от запетаи в полето Допълнителни таблици по-долу. Ако сървъра ви го поддръжа, можете да компресирате файла с данните с gzip, за да намалите размера за сваляне.'); # Here you can backup all your phpBB related data. If you have any additional custom tables in the same database with phpBB that you would like to back up as well please enter their names separated by commas in the Additional Tables textbox below. If your server supports it you may also gzip compress the file to reduce its size before download.

$lang['Backup_options'] = iconv('CP1251',_CHARSET, 'Опции за съхраняване'); # Backup options
$lang['Start_backup'] = iconv('CP1251',_CHARSET, 'Започни съхраняване'); # Start Backup
$lang['Full_backup'] = iconv('CP1251',_CHARSET, 'Пълно съхраняване'); # Full backup
$lang['Structure_backup'] = iconv('CP1251',_CHARSET, 'Съхраняване само на структурата'); # Structure Only backup
$lang['Data_backup'] = iconv('CP1251',_CHARSET, 'Съхраняване само на данните'); # Data only backup
$lang['Additional_tables'] = iconv('CP1251',_CHARSET, 'Допълнителни таблици'); # Additional tables
$lang['Gzip_compress'] = iconv('CP1251',_CHARSET, 'Компресиране на файла с Gzip'); # Gzip compress file
$lang['Select_file'] = iconv('CP1251',_CHARSET, 'Изберете файл'); # Select a file
$lang['Start_Restore'] = iconv('CP1251',_CHARSET, 'Започни възстановяването'); # Start Restore

$lang['Restore_success'] = iconv('CP1251',_CHARSET, 'Базата данни беше възстановена успешно.<br /><br />Форумите са върнати в състоянието, в което са били при последното Съхраняване.'); # The Database has been successfully restored.<br /><br />Your board should be back to the state it was when the backup was made.
$lang['Backup_download'] = iconv('CP1251',_CHARSET, 'Свалянето ще започне след малко, моля изчакайте!'); # Your download will start shortly please wait till it begins
$lang['Backups_not_supported'] = iconv('CP1251',_CHARSET, 'Съхраняването не е възможно поради липса на поддръжка във вашата БД-система.'); # Sorry but database backups are not currently supported for your database system

$lang['Restore_Error_uploading'] = iconv('CP1251',_CHARSET, 'Грешка при качването на файла с данните за възстановяване.'); # Error in uploading the backup file
$lang['Restore_Error_filename'] = iconv('CP1251',_CHARSET, 'Проблем с името на файла, моля опитайте с друг файл.'); # Filename problem, please try an alternative file
$lang['Restore_Error_decompress'] = iconv('CP1251',_CHARSET, 'Gzip-файла не може да бъде разкомпресиран, моля качете некомпресирана версия на файла.'); # Cannot decompress a gzip file, please upload a plain text version
$lang['Restore_Error_no_file'] = iconv('CP1251',_CHARSET, 'Няма такъв качен файл'); # No file was uploaded


//
// Auth pages
//
$lang['Select_a_User'] = iconv('CP1251',_CHARSET, 'Изберете потребител'); # Select a User
$lang['Select_a_Group'] = iconv('CP1251',_CHARSET, 'Изберете група'); # Select a Group
$lang['Select_a_Forum'] = iconv('CP1251',_CHARSET, 'Изберете форум'); # Select a Forum
$lang['Auth_Control_User'] = iconv('CP1251',_CHARSET, 'Контрол на правата на потребителите');  # User Permissions Control
$lang['Auth_Control_Group'] = iconv('CP1251',_CHARSET, 'Контрол на правата на групите');  # Group Permissions Control
$lang['Auth_Control_Forum'] = iconv('CP1251',_CHARSET, 'Контрол на правата във форумите');  # Forum Permissions Control
$lang['Look_up_User'] = iconv('CP1251',_CHARSET, 'Вижте потребителя');  # Look up User
$lang['Look_up_Group'] = iconv('CP1251',_CHARSET, 'Вижте групата'); # Look up Group
$lang['Look_up_Forum'] = iconv('CP1251',_CHARSET, 'Вижте форума'); # Look up Forum

$lang['Group_auth_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да промените правата и модераторския статут на всяка група. Когато сменяте правата на дадена група, не забравяйте, че личните потребителски настройки могат все пак да дадат на потребителя права, които са му били отнети с промяната на правата на групата. Ще бъдете предупредени, ако това е случая.'); # Here you can alter the permissions and moderator status assigned to each user group. Do not forget when changing group permissions that individual user permissions may still allow the user entry to forums, etc. You will be warned if this is the case.
$lang['User_auth_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да промените правата и модераторския статут на всеки потребител. Когато сменяте правата на даден потребител, не забравяйте, че груповите права могат все пак да дадат на потребителя права, които са му били отнети с промяната на личните му права. Ще бъдете предупредени, ако това е случая.'); # Here you can alter the permissions and moderator status assigned to each individual user. Do not forget when changing user permissions that group permissions may still allow the user entry to forums, etc. You will be warned if this is the case.
$lang['Forum_auth_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да примените правата за всеки форум. Има прост и сложен метод за настройка, като сложния дава повече контрол над всяко действие във форума. Помнете, че като променяте правата за даден форум, това ще афектира въхру действията, които потребителите могат да изпълняват във форума.'); # Here you can alter the authorisation levels of each forum. You will have both a simple and advanced method for doing this, advanced offers greater control of each forum operation. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.

$lang['Simple_mode'] = iconv('CP1251',_CHARSET, 'Прости настройки'); # Simple Mode
$lang['Advanced_mode'] = iconv('CP1251',_CHARSET, 'Сложни настройки'); # Advanced Mode
$lang['Moderator_status'] = iconv('CP1251',_CHARSET, 'Статут на модератор'); # Moderator status

$lang['Allowed_Access'] = iconv('CP1251',_CHARSET, 'Достъп разрешен'); # Allowed Access
$lang['Disallowed_Access'] = iconv('CP1251',_CHARSET, 'Достъп забранен'); # Disallowed Access
$lang['Is_Moderator'] = iconv('CP1251',_CHARSET, 'Е Модератор'); # Is Moderator
$lang['Not_Moderator'] = iconv('CP1251',_CHARSET, 'Не е Модератор'); # Not Moderator

$lang['Conflict_warning'] = iconv('CP1251',_CHARSET, 'Предупреждение за конфликт в правата'); # Authorisation Conflict Warning
$lang['Conflict_access_userauth'] = iconv('CP1251',_CHARSET, 'Този потребител все още има права за достъп във този форум заради членството си в определена група. Може би ще желаете да промените правата на групата или да премахнете потребителя от нея, за да сте сигурни, че потребителя няма да има достъп до този форум. Групите, даващи права на потребителя и въпросните форуми са отбелязани долу.'); # This user still has access rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having access rights. The groups granting rights (and the forums involved) are noted below.
$lang['Conflict_mod_userauth'] = iconv('CP1251',_CHARSET, 'Този потребител все още има модераторски права във този форум заради членството си в определена група. Може би ще желаете да промените правата на групата или да премахнете потребителя от нея, за да сте сигурни, че потребителя няма да има модераторски права в този форум. Групите, даващи права на потребителя и въпросните форуми са отбелязани долу.'); # This user still has moderator rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having moderator rights. The groups granting rights (and the forums involved) are noted below.

$lang['Conflict_access_groupauth'] = iconv('CP1251',_CHARSET, 'Следните потребители все още имат права за достъп в този форум заради настройките на личните им права. Може би ще желаете да промените правата на потребителя, за да сте сигурни, че потребителя няма да има достъп до този форум. Потребителите с достъп и въпросните форуми са отбелязани долу.'); # The following user (or users) still have access rights to this forum via their user permission settings. You may want to alter the user permissions to fully prevent them having access rights. The users granted rights (and the forums involved) are noted below.
$lang['Conflict_mod_groupauth'] = iconv('CP1251',_CHARSET, 'Следните потребители все още имат модераторски права в този форум заради настройките на личните им права. Може би ще желаете да промените правата на потребителя, за да сте сигурни, че потребителя няма да има модераторски права в този форум. Потребителите с модераторски права и въпросните форуми са отбелязани долу.'); # The following user (or users) still have moderator rights to this forum via their user permissions settings. You may want to alter the user permissions to fully prevent them having moderator rights. The users granted rights (and the forums involved) are noted below.

$lang['Public'] = iconv('CP1251',_CHARSET, 'Публичен'); # Public
$lang['Private'] = iconv('CP1251',_CHARSET, 'Частен'); # Private
$lang['Registered'] = iconv('CP1251',_CHARSET, 'Регистриран'); # Registered
$lang['Administrators'] = iconv('CP1251',_CHARSET, 'Администратори'); # Administrators
$lang['Hidden'] = iconv('CP1251',_CHARSET, 'Скрит'); # Hidden

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = iconv('CP1251',_CHARSET, 'ALL'); # ALL
$lang['Forum_REG'] = iconv('CP1251',_CHARSET, 'REG'); # REG
$lang['Forum_PRIVATE'] = iconv('CP1251',_CHARSET, 'PRIVATE'); # PRIVATE
$lang['Forum_MOD'] = iconv('CP1251',_CHARSET, 'MOD'); # MOD
$lang['Forum_ADMIN'] = iconv('CP1251',_CHARSET, 'ADMIN'); # ADMIN

$lang['View'] = iconv('CP1251',_CHARSET, 'Виждане'); # View
$lang['Read'] = iconv('CP1251',_CHARSET, 'Четене'); # Read
$lang['Post'] = iconv('CP1251',_CHARSET, 'Писане'); # Post
$lang['Reply'] = iconv('CP1251',_CHARSET, 'Отговаряне'); # Reply
$lang['Edit'] = iconv('CP1251',_CHARSET, 'Промяна'); # Edit
$lang['Delete'] = iconv('CP1251',_CHARSET, 'Изтриване'); # Delete
$lang['Sticky'] = iconv('CP1251',_CHARSET, 'Проблемна тема'); # Sticky
$lang['Announce'] = iconv('CP1251',_CHARSET, 'Обява');  # Announce
$lang['Vote'] = iconv('CP1251',_CHARSET, 'Гласуване'); # Vote
$lang['Pollcreate'] = iconv('CP1251',_CHARSET, 'Анкета'); # Poll create

$lang['Permissions'] = iconv('CP1251',_CHARSET, 'Права'); # Permissions
$lang['Simple_Permission'] = iconv('CP1251',_CHARSET, 'Прости права'); # Simple Permission

$lang['User_Level'] = iconv('CP1251',_CHARSET, 'Потребителско ниво');  # User Level
$lang['Auth_User'] = iconv('CP1251',_CHARSET, 'Потребител'); # User
$lang['Auth_Admin'] = iconv('CP1251',_CHARSET, 'Администратор'); # Administrator
$lang['Group_memberships'] = iconv('CP1251',_CHARSET, 'Членство в потреб.групи'); # Usergroup memberships
$lang['Usergroup_members'] = iconv('CP1251',_CHARSET, 'Тази група има следните членове'); # This group has the following members

$lang['Forum_auth_updated'] = iconv('CP1251',_CHARSET, 'Правата във форума са обновени'); # Forum permissions updated
$lang['User_auth_updated'] = iconv('CP1251',_CHARSET, 'Правата на потребителя са обновени'); # User permissions updated
$lang['Group_auth_updated'] = iconv('CP1251',_CHARSET, 'Правата на групата са обновени'); # Group permissions updated

$lang['Auth_updated'] = iconv('CP1251',_CHARSET, 'Правата са обновени'); # Permissions have been updated
$lang['Click_return_userauth'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в контрол на правата на потребителите'); # Click %sHere%s to return to User Permissions
$lang['Click_return_groupauth'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в контрол на правата на групите'); # Click %sHere%s to return to Group Permissions
$lang['Click_return_forumauth'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в Контрол на правата във форумите'); # Click %sHere%s to return to Forum Permissions


//
// Banning
//
$lang['Ban_control'] = iconv('CP1251',_CHARSET, 'Права на достъп'); # Ban Control
$lang['Ban_explain'] = iconv('CP1251',_CHARSET, 'От тук можете да поставите забрана на потребител от форумите. Можете да поставите права на потребител по потребителско име, по IP адрес или набор от IP адреси или домейн. Тези методи няма да позволят на потребителя да достигне дори до началната страница на форумите. За да попречите на изгоген потребител да се регистрира отново, но с друго име, можете да забраните определен email адрес. Обърнете внимание, че забраната на email адрес няма да попречи на потребителя да влиза и да пише във форумите ви. Ще трябва да изберете един от първите методи, за да постигнете това.'); # Here you can control the banning of users. You can achieve this by banning either or both of a specific user or an individual or range of IP addresses or hostnames. These methods prevent a user from even reaching the index page of your board. To prevent a user from registering under a different username you can also specify a banned email address. Please note that banning an email address alone will not prevent that user from being able to logon or post to your board, you should use one of the first two methods to achieve this.
$lang['Ban_explain_warn'] = iconv('CP1251',_CHARSET, 'Обърнете внимание, че като поставите забрана на набор от IP адреси, на практика можете неумишлено да изгоните много потребители от една и съща подмрежа. Това става, защото всички адреси между началния и крайния адрес, които сте задали, се считат за отстранени. Затова ползвайте малки набори от IP адреси или най-добре избройте няколко конкретни IP адреса.'); # Please note that entering a range of IP addresses results in all the addresses between the start and end being added to the banlist. Attempts will be made to minimise the number of addresses added to the database by introducing wildcards automatically where appropriate. If you really must enter a range try to keep it small or better yet state specific addresses.

$lang['Select_username'] = iconv('CP1251',_CHARSET, 'Изберете потребител'); # Select a Username
$lang['Select_ip'] = iconv('CP1251',_CHARSET, 'Изберете IP'); # Select an IP
$lang['Select_email'] = iconv('CP1251',_CHARSET, 'Изберете Email адрес'); # Select an Email address

$lang['Ban_username'] = iconv('CP1251',_CHARSET, 'Права по потребителско име'); # Ban one or more specific users
$lang['Ban_username_explain'] = iconv('CP1251',_CHARSET, 'Можете да изгоните няколко потребителя едновременно като ги селектирате от списъка.'); # You can ban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Ban_IP'] = iconv('CP1251',_CHARSET, 'Права по IP адрес или домейн'); # Ban one or more IP addresses or hostnames
$lang['IP_hostname'] = iconv('CP1251',_CHARSET, 'IP адрес или домейн'); # IP addresses or hostnames
$lang['Ban_IP_explain'] = iconv('CP1251',_CHARSET, 'За да изберете няколко различни IPта или домейна, разделете ги с запетаи. За да изберете набор от IPта, разделете началния и крайния с тире (-). Можете да ползвате и * за избор на цяла подмрежа.'); # To specify several different IP\'s or hostnames separate them with commas. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use *

$lang['Ban_email'] = iconv('CP1251',_CHARSET, 'Ban по мейл адрес'); # Ban one or more email addresses
$lang['Ban_email_explain'] = iconv('CP1251',_CHARSET, 'За да изберете повече от един мейл адрес, разделете ги с запетаи. Използвайте *, за да изберете набор от адреси, например *@hotmail.com или johnsmith@*.com'); # To specify more than one email address separate them with commas. To specify a wildcard username use *, for example *@hotmail.com

$lang['Unban_username'] = iconv('CP1251',_CHARSET, 'Unban по потребителско име'); # Un-ban one more specific users
$lang['Unban_username_explain'] = iconv('CP1251',_CHARSET, 'Можете да премахнете поставения ban на няколко потребителя едновременно като ги селектирате от списъка.'); # You can unban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Unban_IP'] = iconv('CP1251',_CHARSET, 'Unban по IP адрес или домейн'); # Un-ban one or more IP addresses
$lang['Unban_IP_explain'] = iconv('CP1251',_CHARSET, 'Можете да премахнете поставения ban на няколко потребителя едновременно като ги селектирате от списъка.'); # You can unban multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Unban_email'] = iconv('CP1251',_CHARSET, 'Unban по мейл адрес'); # Un-ban one or more email addresses
$lang['Unban_email_explain'] = iconv('CP1251',_CHARSET, 'Можете премахнете поставения ban на няколко потребителя едновременно като ги селектирате от списъка.'); # You can unban multiple email addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['No_banned_users'] = iconv('CP1251',_CHARSET, 'Няма отстранени потребители'); # No banned usernames
$lang['No_banned_ip'] = iconv('CP1251',_CHARSET, 'Няма забранени IPта'); # No banned IP addresses
$lang['No_banned_email'] = iconv('CP1251',_CHARSET, 'Няма забранени мейл адреси'); # No banned email addresses

$lang['Ban_update_sucessful'] = iconv('CP1251',_CHARSET, 'Списъка с отстранените е обновен успешно'); # The banlist has been updated successfully
$lang['Click_return_banadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в Ban Контрола'); # Click %sHere%s to return to Ban Control


//
// Configuration
//
$lang['General_Config'] = iconv('CP1251',_CHARSET, 'Обща конфигурация'); # General Configuration
$lang['Config_explain'] = iconv('CP1251',_CHARSET, 'Формата долу позволява настройка на всички общи опции по форумите. За настройки по потребителите или конкретен форум, кликнете съответните връзки в ляво.'); # The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side.

$lang['Click_return_config'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в общата конфигурация'); # Click %sHere%s to return to General Configuration

$lang['General_settings'] = iconv('CP1251',_CHARSET, 'Общи настройки на форумите'); # General Board Settings
$lang['Server_name'] = iconv('CP1251',_CHARSET, 'Име на домейн'); # Domain Name
$lang['Server_name_explain'] = iconv('CP1251',_CHARSET, 'Домейна, на който върви този форум'); # The domain name this board runs from
$lang['Script_path'] = iconv('CP1251',_CHARSET, 'Път към форумите'); # Script path
$lang['Script_path_explain'] = iconv('CP1251',_CHARSET, 'Пътя към phpBB2 спрямо домейна'); # The path where phpBB2 is located relative to the domain name
$lang['Server_port'] = iconv('CP1251',_CHARSET, 'Порт на сървъра'); # Server Port
$lang['Server_port_explain'] = iconv('CP1251',_CHARSET, 'Порта, на който съвръра приема заявки, обиковено е 80, променете само ако сте сигурни, че е различен'); # The port your server is running on, usually 80, only change if different
$lang['Site_name'] = iconv('CP1251',_CHARSET, 'Име на сайта'); # Site name
$lang['Site_desc'] = iconv('CP1251',_CHARSET, 'Описание на сайта'); # Site description
$lang['Board_disable'] = iconv('CP1251',_CHARSET, 'Изключете форумите'); # Disable board
$lang['Board_disable_explain'] = iconv('CP1251',_CHARSET, 'Това ще направи форумите недостъпни за потребителите. Не излизайта от форумите след като сте ги изключили, няма да можете да влезете обратно!'); # This will make the board unavailable to users. Do not logout when you disable the board, you will not be able to log back in!
$lang['Acct_activation'] = iconv('CP1251',_CHARSET, 'Активиране на потребителите'); # Enable account activation
$lang['Acc_None'] = iconv('CP1251',_CHARSET, 'Не е нужно'); // These three entries are the type of activation # None
$lang['Acc_User'] = iconv('CP1251',_CHARSET, 'От Потребител'); # User
$lang['Acc_Admin'] = iconv('CP1251',_CHARSET, 'От Администратор'); # Admin

$lang['Abilities_settings'] = iconv('CP1251',_CHARSET, 'Основни настройки на потребител и форум'); # User and Forum Basic Settings
$lang['Max_poll_options'] = iconv('CP1251',_CHARSET, 'Максимум възможни отговори за анкета'); # Max number of poll options
$lang['Flood_Interval'] = iconv('CP1251',_CHARSET, 'Интервал за flood'); # Flood Interval
$lang['Flood_Interval_explain'] = iconv('CP1251',_CHARSET, 'Брой секунди, които потребителя трябва да изчака между отделните мнения.');  # Number of seconds a user must wait between posts
$lang['Board_email_form'] = iconv('CP1251',_CHARSET, 'Пращане на email чрез Форумите'); # User email via board
$lang['Board_email_form_explain'] = iconv('CP1251',_CHARSET, 'Потребителите могат да си пращат email чрез форумите'); # Users send email to each other via this board
$lang['Topics_per_page'] = iconv('CP1251',_CHARSET, 'Теми на страница'); # Topics Per Page
$lang['Posts_per_page'] = iconv('CP1251',_CHARSET, 'Мнения на страница'); # Posts Per Page
$lang['Hot_threshold'] = iconv('CP1251',_CHARSET, 'Брой мнения за популярна тема'); # Posts for Popular Threshold
$lang['Default_style'] = iconv('CP1251',_CHARSET, 'Основен стил'); # Default Style
$lang['Override_style'] = iconv('CP1251',_CHARSET, 'Заменяне на потребителския стил'); # Override user style
$lang['Override_style_explain'] = iconv('CP1251',_CHARSET, 'Заменя избрания от потребителя с основния'); # Replaces users style with the default
$lang['Default_language'] = iconv('CP1251',_CHARSET, 'Основен език'); # Default Language
$lang['Date_format'] = iconv('CP1251',_CHARSET, 'Формат на датата'); # Date Format
$lang['System_timezone'] = iconv('CP1251',_CHARSET, 'Часова зона на системата'); # System Timezone
$lang['Enable_gzip'] = iconv('CP1251',_CHARSET, 'Включена GZip компресия'); # Enable GZip Compression
$lang['Enable_prune'] = iconv('CP1251',_CHARSET, 'Включенo прочистване'); # Enable Forum Pruning
$lang['Allow_HTML'] = iconv('CP1251',_CHARSET, 'Разрешен HTML'); # Allow HTML
$lang['Allow_BBCode'] = iconv('CP1251',_CHARSET, 'Разрешен BBCode'); # Allow BBCode
$lang['Allowed_tags'] = iconv('CP1251',_CHARSET, 'Разрешени HTML тагове'); # Allowed HTML tags
$lang['Allowed_tags_explain'] = iconv('CP1251',_CHARSET, 'Разделете таговете с запетаи'); # Separate tags with commas
$lang['Allow_smilies'] = iconv('CP1251',_CHARSET, 'Разрешени усмивки'); # Allow Smilies
$lang['Smilies_path'] = iconv('CP1251',_CHARSET, 'Път към папката със усмивки'); # Smilies Storage Path
$lang['Smilies_path_explain'] = iconv('CP1251',_CHARSET, 'Път, спрямо основната папка на phpBB, напр. images/smilies'); # Path under your phpBB root dir, e.g. images/smilies
$lang['Allow_sig'] = iconv('CP1251',_CHARSET, 'Позволени подписи'); # Allow Signatures
$lang['Max_sig_length'] = iconv('CP1251',_CHARSET, 'Максимум символи'); # Maximum signature length
$lang['Max_sig_length_explain'] = iconv('CP1251',_CHARSET, 'Максимален брой на символите в сигнатурата'); # Maximum number of characters in user signatures
$lang['Allow_name_change'] = iconv('CP1251',_CHARSET, 'Разрешени смени на потребителско име'); # Allow Username changes

$lang['Avatar_settings'] = iconv('CP1251',_CHARSET, 'Аватари (образи) - настройки'); # Avatar Settings
$lang['Allow_local'] = iconv('CP1251',_CHARSET, 'Разрешена галерията с образи'); # Enable gallery avatars
$lang['Allow_remote'] = iconv('CP1251',_CHARSET, 'Разрешени външни аватари (образи)'); # Enable remote avatars
$lang['Allow_remote_explain'] = iconv('CP1251',_CHARSET, 'Образи, качени на друг сайт и поставени тук с връзка'); # Avatars linked to from another website
$lang['Allow_upload'] = iconv('CP1251',_CHARSET, 'Разрешено качването на образи'); # Enable avatar uploading
$lang['Max_filesize'] = iconv('CP1251',_CHARSET, 'Максимален размер на файла с образа'); # Maximum Avatar File Size
$lang['Max_filesize_explain'] = iconv('CP1251',_CHARSET, 'Отнася се за качените файлове с образи'); # For uploaded avatar files
$lang['Max_avatar_size'] = iconv('CP1251',_CHARSET, 'Максимален размер на файла'); # Maximum Avatar Dimensions
$lang['Max_avatar_size_explain'] = iconv('CP1251',_CHARSET, '(Височина x Ширина в пиксели)'); # (Height x Width in pixels)
$lang['Avatar_storage_path'] = iconv('CP1251',_CHARSET, 'Папка за съхранение на образите'); # Avatar Storage Path
$lang['Avatar_storage_path_explain'] = iconv('CP1251',_CHARSET, 'Път, спрямо основната папка на phpBB, напр. images/avatars'); # Path under your phpBB root dir, e.g. images/avatars
$lang['Avatar_gallery_path'] = iconv('CP1251',_CHARSET, 'Папка за галерията с образи'); # Avatar Gallery Path
$lang['Avatar_gallery_path_explain'] = iconv('CP1251',_CHARSET, 'Път, спрямо основната папка на phpBB, към папка с изображения за галерията с образи'); # Path under your phpBB root dir for pre-loaded images, e.g. images/avatars/gallery

$lang['COPPA_settings'] = iconv('CP1251',_CHARSET, 'Настройки на COPPA'); # COPPA Settings
$lang['COPPA_fax'] = iconv('CP1251',_CHARSET, 'COPPA Факс номер'); # COPPA Fax Number
$lang['COPPA_mail'] = iconv('CP1251',_CHARSET, 'COPPA email адрес'); # COPPA Mailing Address
$lang['COPPA_mail_explain'] = iconv('CP1251',_CHARSET, 'Това е email адрес, на който родителите ще изпращат COPPA регистрационни'); # This is the mailing address where parents will send COPPA registration forms

$lang['Email_settings'] = iconv('CP1251',_CHARSET, 'Настройки на email-а'); # Email Settings
$lang['Admin_email'] = iconv('CP1251',_CHARSET, 'Email на администратора'); # Admin Email Address
$lang['Email_sig'] = iconv('CP1251',_CHARSET, 'Email подпис'); # Email Signature
$lang['Email_sig_explain'] = iconv('CP1251',_CHARSET, 'Този подпис ще бъде прикачен към всички email-и, изпращани от форумите'); # This text will be attached to all emails the board sends
$lang['Use_SMTP'] = iconv('CP1251',_CHARSET, 'Използване на SMTP-сървър'); # Use SMTP Server for email
$lang['Use_SMTP_explain'] = iconv('CP1251',_CHARSET, 'Ако искате да пращате email през избран SMTP-сървър, а не през локалната мейл-функция.'); # Say yes if you want or have to send email via a named server instead of the local mail function
$lang['SMTP_server'] = iconv('CP1251',_CHARSET, 'Адрес на SMTP-сървъра'); # SMTP Server Address
$lang['SMTP_username'] = iconv('CP1251',_CHARSET, 'SMTP Потребителко име'); # SMTP Username
$lang['SMTP_username_explain'] = iconv('CP1251',_CHARSET, 'Въведете потребителко име само ако вашия smtp сървър го изисква'); # Only enter a username if your smtp server requires it
$lang['SMTP_password'] = iconv('CP1251',_CHARSET, 'SMTP Парола'); # SMTP Password
$lang['SMTP_password_explain'] = iconv('CP1251',_CHARSET, 'Въведете парола само ако вашия smtp сървър го изисква'); # Only enter a password if your smtp server requires it

$lang['Disable_privmsg'] = iconv('CP1251',_CHARSET, 'Система за лични съобщения'); # Private Messaging
$lang['Inbox_limits'] = iconv('CP1251',_CHARSET, 'Максимум съобщения във входящи'); # Max posts in Inbox
$lang['Sentbox_limits'] = iconv('CP1251',_CHARSET, 'Максимум съобщения в получени'); # Max posts in Sentbox
$lang['Savebox_limits'] = iconv('CP1251',_CHARSET, 'Максимум съобщения в съхранени'); # Max posts in Savebox

$lang['Cookie_settings'] = iconv('CP1251',_CHARSET, 'Настройки на Cookies');  # Cookie settings
$lang['Cookie_settings_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да настроите cookie-тата, които форумите изпращат към браузърите на потребителите ви. В повечето случаи текущата конфигурация е достатъчна. Внимавайте много при промяна на настройките, защото грешни стойности могат да попречат на потребителите да влизат във форумите.'); # These details define how cookies are sent to your users browsers. In most cases the default values for the cookie settings should be sufficient but if you need to change them do so with care, incorrect settings can prevent users logging in
$lang['Cookie_domain'] = iconv('CP1251',_CHARSET, 'Домейн на Cookie'); # Cookie domain
$lang['Cookie_name'] = iconv('CP1251',_CHARSET, 'Име на Cookie'); # Cookie name
$lang['Cookie_path'] = iconv('CP1251',_CHARSET, 'Път на Cookie'); # Cookie path
$lang['Cookie_secure'] = iconv('CP1251',_CHARSET, 'Сигурност на Cookie (по https)'); # Cookie secure
$lang['Cookie_secure_explain'] = iconv('CP1251',_CHARSET, 'Ако сървърът ви поддържа SSL, можете да включите тази опция, в противен случай я оставете изключена.'); # If your server is running via SSL set this to enabled else leave as disabled
$lang['Session_length'] = iconv('CP1251',_CHARSET, 'Дължина на сесията (в секунди)'); # Session length [ seconds ]

// Visual Confirmation
$lang['Visual_confirm'] = iconv('CP1251',_CHARSET, 'Enable Visual Confirmation');
$lang['Visual_confirm_explain'] = iconv('CP1251',_CHARSET, 'Requires users enter a code defined by an image when registering.');

// Forum Management
//
$lang['Forum_admin'] = iconv('CP1251',_CHARSET, 'Администриране на форумите'); # Forum Administration
$lang['Forum_admin_explain'] = iconv('CP1251',_CHARSET, 'От този панел можете да добавяте, изтривате, променяте, препреждате или синхронизирате категории и форумите.'); # From this panel you can add, delete, edit, re-order and re-synchronise categories and forums
$lang['Edit_forum'] = iconv('CP1251',_CHARSET, 'Промяна на форум'); # Edit forum
$lang['Create_forum'] = iconv('CP1251',_CHARSET, 'Създаване на нов форум'); # Create new forum
$lang['Create_category'] = iconv('CP1251',_CHARSET, 'Създаване на нова категория'); # Create new category
$lang['Remove'] = iconv('CP1251',_CHARSET, 'Премахване'); # Remove
$lang['Action'] = iconv('CP1251',_CHARSET, 'Действие'); # Action
$lang['Update_order'] = iconv('CP1251',_CHARSET, 'Обновяване на реда'); # Update Order
$lang['Config_updated'] = iconv('CP1251',_CHARSET, 'Настройките на форума са обновени успешно'); # Forum Configuration Updated Successfully
$lang['Edit'] = iconv('CP1251',_CHARSET, 'Промяна'); # Edit
$lang['Delete'] = iconv('CP1251',_CHARSET, 'Изтриване'); # Delete
$lang['Move_up'] = iconv('CP1251',_CHARSET, 'Нагоре'); # Move up
$lang['Move_down'] = iconv('CP1251',_CHARSET, 'Надолу'); # Move down
$lang['Resync'] = iconv('CP1251',_CHARSET, 'Синхронизация'); # Resync
$lang['No_mode'] = iconv('CP1251',_CHARSET, 'Не е избран режим'); # No mode was set
$lang['Forum_edit_delete_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да настроите всички общи функции на форумите. За настройки по потребителите или конкретен форум, кликнете съответните връзки в ляво.'); # The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side

$lang['Move_contents'] = iconv('CP1251',_CHARSET, 'Преместване на съдържанието'); # Move all contents
$lang['Forum_delete'] = iconv('CP1251',_CHARSET, 'Изтриване на форум'); # Delete Forum
$lang['Forum_delete_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да изтриете форум (или категория) и да изберете къде да бъдат преместени всички теми (или форумите), които съдържа.'); # The form below will allow you to delete a forum (or category) and decide where you want to put all topics (or forums) it contained.

$lang['Status_locked'] = iconv('CP1251',_CHARSET, 'Заключен');	# Locked
$lang['Status_unlocked'] = iconv('CP1251',_CHARSET, 'Отключен'); # Unlocked
$lang['Forum_settings'] = iconv('CP1251',_CHARSET, 'Общи настройки за форум'); # General Forum Settings
$lang['Forum_name'] = iconv('CP1251',_CHARSET, 'Име на форума'); # Forum name
$lang['Forum_desc'] = iconv('CP1251',_CHARSET, 'Описание'); # Description
$lang['Forum_status'] = iconv('CP1251',_CHARSET, 'Статус на форума'); # Forum status
$lang['Forum_pruning'] = iconv('CP1251',_CHARSET, 'Самопрочистване'); # Auto-pruning

$lang['prune_freq'] = iconv('CP1251',_CHARSET, 'Проверка за възрастта на темата на всеки'); # Check for topic age every
$lang['prune_days'] = iconv('CP1251',_CHARSET, 'Премахни теми, в които не е било писано от'); # Remove topics that have not been posted to in
$lang['Set_prune_data'] = iconv('CP1251',_CHARSET, 'Включили сте самопрочистването за този форум, но не сте задали интервал (или дни) на прочистване. Моля върнете се и коригирайте грешката.'); # You have turned on auto-prune for this forum but did not set a frequency or number of days to prune. Please go back and do so

$lang['Move_and_Delete'] = iconv('CP1251',_CHARSET, 'Местене и изтриване'); # Move and Delete

$lang['Delete_all_posts'] = iconv('CP1251',_CHARSET, 'Изтриване на всички мнения'); # Delete all posts
$lang['Nowhere_to_move'] = iconv('CP1251',_CHARSET, 'Не сте указали къде да се преместят темите'); # Nowhere to move too

$lang['Edit_Category'] = iconv('CP1251',_CHARSET, 'Настройки на категория'); # Edit Category
$lang['Edit_Category_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да промените името на категорията.'); # Use this form to modify a categories name.

$lang['Forums_updated'] = iconv('CP1251',_CHARSET, 'Информацията за форума и категорията е обновена успешно'); # Forum and Category information updated successfully

$lang['Must_delete_forums'] = iconv('CP1251',_CHARSET, 'Трябва да изтриете всички форуми, преди да можете да премахнете категорията'); # You need to delete all forums before you can delete this category

$lang['Click_return_forumadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в администриране на форумите'); # Click %sHere%s to return to Forum Administration


//
// Smiley Management
//
$lang['smiley_title'] = iconv('CP1251',_CHARSET, 'Администриране на усмивки'); # Smiles Editing Utility
$lang['smile_desc'] = iconv('CP1251',_CHARSET, 'Тук можете да добавяте, редактирате и премахвате усмивки, които потребителите могат да ползват в съобщенията си.'); # From this page you can add, remove and edit the emoticons or smileys your users can use in their posts and private messages.

$lang['smiley_config'] = iconv('CP1251',_CHARSET, 'Конфигурация на усмивките'); # Smiley Configuration
$lang['smiley_code'] = iconv('CP1251',_CHARSET, 'Код на усмивките'); # Smiley Code
$lang['smiley_url'] = iconv('CP1251',_CHARSET, 'Изображение на усмивките'); # Smiley Image File
$lang['smiley_emot'] = iconv('CP1251',_CHARSET, 'Емоция на усмивките'); # Smiley Emotion
$lang['smile_add'] = iconv('CP1251',_CHARSET, 'Добавяне на нови усмивки'); # Add a new Smiley
$lang['Smile'] = iconv('CP1251',_CHARSET, 'Усмивки'); # Smile
$lang['Emotion'] = iconv('CP1251',_CHARSET, 'Емоция'); # Emotion

$lang['Select_pak'] = iconv('CP1251',_CHARSET, 'Изберете пакет (.pak)'); # Select Pack (.pak) File
$lang['replace_existing'] = iconv('CP1251',_CHARSET, 'Замести съществуващите усмивки'); # Replace Existing Smiley
$lang['keep_existing'] = iconv('CP1251',_CHARSET, 'Запази съществуващите усмивки'); # Keep Existing Smiley
$lang['smiley_import_inst'] = iconv('CP1251',_CHARSET, 'Трябва да разархивирате пакета с усмивки и да качите всички файлове в съответната директория. Тогава изберете нужните настройки в тази форма, за да импортирате пакета.'); # You should unzip the smiley package and upload all files to the appropriate Smiley directory for your installation.  Then select the correct information in this form to import the smiley pack.
$lang['smiley_import'] = iconv('CP1251',_CHARSET, 'Импортиране на пакет от усмивки'); # Smiley Pack Import
$lang['choose_smile_pak'] = iconv('CP1251',_CHARSET, 'Изберете .pak файл'); # Choose a Smile Pack .pak file
$lang['import'] = iconv('CP1251',_CHARSET, 'Импортирай пакета'); # Import Smileys
$lang['smile_conflicts'] = iconv('CP1251',_CHARSET, 'Реакция в случай на конфликт:'); # What should be done in case of conflicts
$lang['del_existing_smileys'] = iconv('CP1251',_CHARSET, 'Изтриване на текущите усмивки преди импортирането'); # Delete existing smileys before import
$lang['import_smile_pack'] = iconv('CP1251',_CHARSET, 'Импортиране на пакет от усмивки'); # Import Smiley Pack
$lang['export_smile_pack'] = iconv('CP1251',_CHARSET, 'Създаване на пакет от усмивки'); # Create Smiley Pack
$lang['export_smiles'] = iconv('CP1251',_CHARSET, 'За да създадете пакет от усмивки от текущо инсталираните ви усмивки, кликнете %sтук%s за да свалите файла smiles.pak. Именувайте този файл по желание, но запазете разширението .pak. След това създайте един ZIP-файл, съдържащ всички изображения на усмивки и .pak-файла.'); # To create a smiley pack from your currently installed smileys, click %sHere%s to download the smiles.pak file. Name this file appropriately making sure to keep the .pak file extension.  Then create a zip file containing all of your smiley images plus this .pak configuration file.

$lang['smiley_add_success'] = iconv('CP1251',_CHARSET, 'Усмивките са добавени успешно'); # The Smiley was successfully added
$lang['smiley_edit_success'] = iconv('CP1251',_CHARSET, 'Усмивките са обновени успешно'); # The Smiley was successfully updated
$lang['smiley_import_success'] = iconv('CP1251',_CHARSET, 'Пакета от усмивки е импортиран успешно'); # The Smiley Pack was imported successfully!
$lang['smiley_del_success'] = iconv('CP1251',_CHARSET, 'Усмивките са премахнати успешно'); # The Smiley was successfully removed
$lang['Click_return_smileadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в администриране на усмивките'); # Click %sHere%s to return to Smiley Administration


//
// User Management
//
$lang['User_admin'] = iconv('CP1251',_CHARSET, 'Администриране на потребителите'); # User Administration
$lang['User_admin_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да променяте всички данни и настройки на избран потребител. За да промените правата на потребител, ползвайте системата за определяне на права на потребител или потребителска група.'); # Here you can change your user\'s information and certain specific options. To modify the users permissions please use the user and group permissions system.

$lang['Look_up_user'] = iconv('CP1251',_CHARSET, 'Вижте потребителя'); # Look up user

$lang['Admin_user_fail'] = iconv('CP1251',_CHARSET, 'Профилът на потребителя не беше обновен.'); # Couldn\'t update the users profile.
$lang['Admin_user_updated'] = iconv('CP1251',_CHARSET, 'Профилът на потребителя е обновен успешно.'); # The user\'s profile was successfully updated.
$lang['Click_return_useradmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в администриране на потребителите'); # Click %sHere%s to return to User Administration

$lang['User_delete'] = iconv('CP1251',_CHARSET, 'Изтриване на потребителя'); # Delete this user
$lang['User_delete_explain'] = iconv('CP1251',_CHARSET, 'Кликнете тук, за да изтриете този потребител. Това действие не е обратимо.'); # Click here to delete this user, this cannot be undone.
$lang['User_deleted'] = iconv('CP1251',_CHARSET, 'Потребителя беше изтрит успешно.'); # User was successfully deleted.

$lang['User_status'] = iconv('CP1251',_CHARSET, 'Потребителя е активен'); # User is active
$lang['User_allowpm'] = iconv('CP1251',_CHARSET, 'Може да праща лични съобщения'); # Can send Private Messages
$lang['User_allowavatar'] = iconv('CP1251',_CHARSET, 'Може да показва аватар (образ)'); # Can display avatar

$lang['Admin_avatar_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да видите и изтриете аватара (образа) на потребителя.'); # Here you can see and delete the user\'s current avatar.

$lang['User_special'] = iconv('CP1251',_CHARSET, 'Специални полета, досъпни само на администратора'); # Special admin-only fields
$lang['User_special_explain'] = iconv('CP1251',_CHARSET, 'Тези полета не могат да бъдат променяни от потребителите. Тук можете да настроите някой достъпни само за администраторите опции.'); # These fields are not able to be modified by the users.  Here you can set their status and other options that are not given to users.


//
// Group Management
//
$lang['Group_administration'] = iconv('CP1251',_CHARSET, 'Администриране на групите'); # Group Administration
$lang['Group_admin_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да администрирате потребителските групи. Можете да ги създавате, променята и изтривате. Можете също да избирате модератори за групите, да задавате статус, име и описание.'); # From this panel you can administer all your usergroups, you can; delete, create and edit existing groups. You may choose moderators, toggle open/closed group status and set the group name and description
$lang['Error_updating_groups'] = iconv('CP1251',_CHARSET, 'Грешка при обновяването на групата'); # There was an error while updating the groups
$lang['Updated_group'] = iconv('CP1251',_CHARSET, 'Групата е обновена успешно'); # The group was successfully updated
$lang['Added_new_group'] = iconv('CP1251',_CHARSET, 'Новата група е създадена успешно'); # The new group was successfully created
$lang['Deleted_group'] = iconv('CP1251',_CHARSET, 'Групата е изтрита успешно'); # The group was successfully deleted
$lang['New_group'] = iconv('CP1251',_CHARSET, 'Създаване на нова група'); # Create new group
$lang['Edit_group'] = iconv('CP1251',_CHARSET, 'Промяна'); # Edit group
$lang['group_name'] = iconv('CP1251',_CHARSET, 'Име на групата'); # Group name
$lang['group_description'] = iconv('CP1251',_CHARSET, 'Описание на групата'); # Group description
$lang['group_moderator'] = iconv('CP1251',_CHARSET, 'Модератор на групата'); # Group moderator
$lang['group_status'] = iconv('CP1251',_CHARSET, 'Статус на групата'); # Group status
$lang['group_open'] = iconv('CP1251',_CHARSET, 'Отворена'); # Open group
$lang['group_closed'] = iconv('CP1251',_CHARSET, 'Затворена'); # Closed group
$lang['group_hidden'] = iconv('CP1251',_CHARSET, 'Скрита'); # Hidden group
$lang['group_delete'] = iconv('CP1251',_CHARSET, 'Изтриване'); # Delete group
$lang['group_delete_check'] = iconv('CP1251',_CHARSET, 'Изтрий тази група'); # Delete this group
$lang['submit_group_changes'] = iconv('CP1251',_CHARSET, 'Прати промените'); # Submit Changes
$lang['reset_group_changes'] = iconv('CP1251',_CHARSET, 'Изчисти промените'); # Reset Changes
$lang['No_group_name'] = iconv('CP1251',_CHARSET, 'Трябва да въведете име за групата'); # You must specify a name for this group
$lang['No_group_moderator'] = iconv('CP1251',_CHARSET, 'Трябва да изберете модератор за групата'); # You must specify a moderator for this group
$lang['No_group_mode'] = iconv('CP1251',_CHARSET, 'Трябва да изберете статус за групата'); # You must specify a mode for this group, open or closed
$lang['No_group_action'] = iconv('CP1251',_CHARSET, 'Не сте избрали действие'); # No action was specified
$lang['delete_group_moderator'] = iconv('CP1251',_CHARSET, 'Да изтрие ли старата група на модератора?'); # Delete the old group moderator?
$lang['delete_moderator_explain'] = iconv('CP1251',_CHARSET, 'Ако сменяте модератора на групата, изберете тази опция, за да премахнете стария модератор от групата. В противен случай, не избирайте опцията и потребителя ще остане член на групата.'); # If you\'re changing the group moderator, check this box to remove the old moderator from the group.  Otherwise, do not check it, and the user will become a regular member of the group.
$lang['Click_return_groupsadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в администриране на групите'); # Click %sHere%s to return to Group Administration.
$lang['Select_group'] = iconv('CP1251',_CHARSET, 'Изберете група'); # Select a group
$lang['Look_up_group'] = iconv('CP1251',_CHARSET, 'Виж групата'); # Look up group


//
// Prune Administration
//
$lang['Forum_Prune'] = iconv('CP1251',_CHARSET, 'Прочистване на форум'); # Forum Prune
$lang['Forum_Prune_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да изтриете всяка тема, която не е била активна за посочения от вас брой дни. Ако не въведете дни, всички теми ще бъдат изтрити. Няма да бъдат изтрити само обявленията, както и теми с активни анкети. Тях се налага да изтриете ръчно.'); # This will delete any topic which has not been posted to within the number of days you select. If you do not enter a number then all topics will be deleted. It will not remove topics in which polls are still running nor will it remove announcements. You will need to remove these topics manually.
$lang['Do_Prune'] = iconv('CP1251',_CHARSET, 'Зачисти'); # Do Prune
$lang['All_Forums'] = iconv('CP1251',_CHARSET, 'Всички форуми'); # All Forums
$lang['Prune_topics_not_posted'] = iconv('CP1251',_CHARSET, 'Зачисти теми без отговор за последните'); # Prune topics with no replies in this many days
$lang['Topics_pruned'] = iconv('CP1251',_CHARSET, 'Темите са зачистени'); # Topics pruned
$lang['Posts_pruned'] = iconv('CP1251',_CHARSET, 'Мненията са зачистени'); # Posts pruned
$lang['Prune_success'] = iconv('CP1251',_CHARSET, 'Прочистванено на форумите е успешно'); # Pruning of forums was successful


//
// Word censor
//
$lang['Words_title'] = iconv('CP1251',_CHARSET, 'Цензурирани думи'); # Word Censoring
$lang['Words_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да добавяте, променяте и изтривате думи, които ще бъдат автоматично цензурирани на форумите. Освен това, цензурираните думи немогат да бъдат използвани в потребителските имена. Можете да използвате маска (*) в полето с цензурираната дума. Така например *test* ще цензурира detestable, test* ще цензурира testing, *test ще цензурира detest.'); # From this control panel you can add, edit, and remove words that will be automatically censored on your forums. In addition people will not be allowed to register with usernames containing these words. Wildcards (*) are accepted in the word field, eg. *test* will match detestable, test* would match testing, *test would match detest.
$lang['Word'] = iconv('CP1251',_CHARSET, 'Дума'); # Word
$lang['Edit_word_censor'] = iconv('CP1251',_CHARSET, 'Промяна на цензурираната дума'); # Edit word censor
$lang['Replacement'] = iconv('CP1251',_CHARSET, 'Заместител'); # Replacement
$lang['Add_new_word'] = iconv('CP1251',_CHARSET, 'Добавяне на нова дума'); # Add new word
$lang['Update_word'] = iconv('CP1251',_CHARSET, 'Обновяване на цензурираните думи'); # Update word censor

$lang['Must_enter_word'] = iconv('CP1251',_CHARSET, 'Трябва да въведете дума и заместител'); # You must enter a word and its replacement
$lang['No_word_selected'] = iconv('CP1251',_CHARSET, 'Не е избрана дума за промяна'); # No word selected for editing

$lang['Word_updated'] = iconv('CP1251',_CHARSET, 'Цензурираната дума е обновена успешно'); # The selected word censor has been successfully updated
$lang['Word_added'] = iconv('CP1251',_CHARSET, 'Новата цензурирана дума е добавена успешно'); # The word censor has been successfully added
$lang['Word_removed'] = iconv('CP1251',_CHARSET, 'Цензурираната дума е премахната успешно'); # The selected word censor has been successfully removed

$lang['Click_return_wordadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в цензурираните думи'); # Click %sHere%s to return to Word Censor Administration


//
// Mass Email
//
$lang['Mass_email_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да изпратите email до всички потребители на форума или до членовете на определена група. Масовия email се разпраща като съобщението, което сте въвели бива изпратено на административния email, който сте въвели в конфигурацията, като email-ите на получателите са прикачени като BCC (blind carbon copy). Ако пращате email на голяма група хора, това може да отнеме значително време. Моля не прекъсвайте скрипта по средата на изпълнението му, а изчакайте да приключи. Ще бъдете уведомен, когато това стане.'); # Here you can email a message to either all of your users, or all users of a specific group.  To do this, an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed
$lang['Compose'] = iconv('CP1251',_CHARSET, 'Писане на email-а');  # Compose

$lang['Recipients'] = iconv('CP1251',_CHARSET, 'Получатели');  # Recipients
$lang['All_users'] = iconv('CP1251',_CHARSET, 'Всички потребители'); # All Users

$lang['Email_successfull'] = iconv('CP1251',_CHARSET, 'Съобщенитето ви е изпратено успешно'); # Your message has been sent
$lang['Click_return_massemail'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в масовия email'); # Click %sHere%s to return to the Mass Email form


//
// Ranks admin
//
$lang['Ranks_title'] = iconv('CP1251',_CHARSET, 'Администриране на ранговете'); # Rank Administration
$lang['Ranks_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да добавяте, променяте и изтривате рангове. Можете също да създавате специални рангове, който да прикачите на потребител през настройки на потребители'); # Using this form you can add, edit, view and delete ranks. You can also create custom ranks which can be applied to a user via the user management facility

$lang['Add_new_rank'] = iconv('CP1251',_CHARSET, 'Добавяне на нов ранг'); # Add new rank

$lang['Rank_title'] = iconv('CP1251',_CHARSET, 'Рангова титла'); # Rank Title
$lang['Rank_special'] = iconv('CP1251',_CHARSET, 'Статут на специален ранг'); # Set as Special Rank
$lang['Rank_minimum'] = iconv('CP1251',_CHARSET, 'Минимум мнения'); # Minimum Posts
$lang['Rank_maximum'] = iconv('CP1251',_CHARSET, 'Максимум мнения'); # Maximum Posts
$lang['Rank_image'] = iconv('CP1251',_CHARSET, 'Рангово изображение (път, спрямо основната папка на phpBB)'); # Rank Image (Relative to phpBB2 root path)
$lang['Rank_image_explain'] = iconv('CP1251',_CHARSET, 'Това е малко изображение, свързано с съответния ранг'); # Use this to define a small image associated with the rank

$lang['Must_select_rank'] = iconv('CP1251',_CHARSET, 'Трябва да изберете ранг'); # You must select a rank
$lang['No_assigned_rank'] = iconv('CP1251',_CHARSET, 'Няма прикачен специален ранк'); # No special rank assigned

$lang['Rank_updated'] = iconv('CP1251',_CHARSET, 'Рангът е обновен успешно'); # The rank was successfully updated
$lang['Rank_added'] = iconv('CP1251',_CHARSET, 'Рангът е добавен успешно'); # The rank was successfully added
$lang['Rank_removed'] = iconv('CP1251',_CHARSET, 'Рангът е изтрит успешно'); # The rank was successfully deleted
$lang['No_update_ranks'] = iconv('CP1251',_CHARSET, 'The rank was successfully deleted, however, user accounts using this rank were not updated.  You will need to manually reset the rank on these accounts');

$lang['Click_return_rankadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в администриране на ранговете'); # Click %sHere%s to return to Rank Administration


//
// Disallow Username Admin
//
$lang['Disallow_control'] = iconv('CP1251',_CHARSET, 'Забрана на потребителски имена'); # Username Disallow Control
$lang['Disallow_explain'] = iconv('CP1251',_CHARSET, 'Тук контролирате кои имена не са разрешени за употреба от потребителите. Можете да използвате маска (*). Обърнете внимание, че неможете да забраните вече регистрирано име; трябва първо да го изтриете, за да можете да въведете забрана.'); # Here you can control usernames which will not be allowed to be used.  Disallowed usernames are allowed to contain a wildcard character of *.  Please note that you will not be allowed to specify any username that has already been registered, you must first delete that name then disallow it

$lang['Delete_disallow'] = iconv('CP1251',_CHARSET, 'Изтрий'); # Delete
$lang['Delete_disallow_title'] = iconv('CP1251',_CHARSET, 'Премахване на забранено потребителско име'); # Remove a Disallowed Username
$lang['Delete_disallow_explain'] = iconv('CP1251',_CHARSET, 'Можете да премахнете забранено потребителско име като го селектирате в списъка и кликнете изтриване'); # You can remove a disallowed username by selecting the username from this list and clicking submit

$lang['Add_disallow'] = iconv('CP1251',_CHARSET, 'Добави'); # Add
$lang['Add_disallow_title'] = iconv('CP1251',_CHARSET, 'Добавяне на забранено потребителско име'); # Add a disallowed username
$lang['Add_disallow_explain'] = iconv('CP1251',_CHARSET, 'Можете да използвате * като маска, за да забраните множество потребителски имена едновременно'); # You can disallow a username using the wildcard character * to match any character

$lang['No_disallowed'] = iconv('CP1251',_CHARSET, 'Няма забранени потребителски имена'); # No Disallowed Usernames

$lang['Disallowed_deleted'] = iconv('CP1251',_CHARSET, 'Забраненото потребителско име е премахнато успешно'); # The disallowed username has been successfully removed
$lang['Disallow_successful'] = iconv('CP1251',_CHARSET, 'Забраненото потребителско име е добавено успешно'); # The disallowed username has been successfully added
$lang['Disallowed_already'] = iconv('CP1251',_CHARSET, 'Името, което сте въвели, неможе да бъде забранено. То вече е забранено, или е цензурирана дума, или е регистрирано.'); # The name you entered could not be disallowed. It either already exists in the list, exists in the word censor list, or a matching username is present

$lang['Click_return_disallowadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в забрана на потребителски имена'); # Click %sHere%s to return to Disallow Username Administration


//
// Styles Admin
//
$lang['Styles_admin'] = iconv('CP1251',_CHARSET, 'Администриране на стиловете'); # Styles Administration
$lang['Styles_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да добавяте, променяте и изтривате стилове за форумите. Стил е комбинацията от темплейт и тема.'); # Using this facility you can add, remove and manage styles (templates and themes) available to your users
$lang['Styles_addnew_explain'] = iconv('CP1251',_CHARSET, 'Този списък показва всички теми, които са достъпни за темплейтите, които имате. Тези теми още не са инсталирани в базата данни. За да ги инсталирате, просто кликнете на съответната връзка до всяка тема.'); # The following list contains all the themes that are available for the templates you currently have. The items on this list have not yet been installed into the phpBB database. To install a theme simply click the install link beside an entry

$lang['Select_template'] = iconv('CP1251',_CHARSET, 'Изберете темплейт'); # Select a Template

$lang['Style'] = iconv('CP1251',_CHARSET, 'Стил'); # Style
$lang['Template'] = iconv('CP1251',_CHARSET, 'Темплейт'); # Template
$lang['Install'] = iconv('CP1251',_CHARSET, 'Инсталирай'); # Install
$lang['Download'] = iconv('CP1251',_CHARSET, 'Свали'); # Download

$lang['Edit_theme'] = iconv('CP1251',_CHARSET, 'Създаване на тема'); # Edit Theme
$lang['Edit_theme_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да промените настроките на избраната тема'); # In the form below you can edit the settings for the selected theme

$lang['Create_theme'] = iconv('CP1251',_CHARSET, 'Създаване на тема'); # Create Theme
$lang['Create_theme_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да създадете нова тема за избрания темплейт. Когато въвеждате цветове, моля ползвайте шестнадесетичните им еквиваленти. Освен това не трябва да включвате символа #, напр. CCCCCC е вярно, а #CCCCCC не е.'); # Use the form below to create a new theme for a selected template. When entering colours (for which you should use hexadecimal notation) you must not include the initial #, i.e.. CCCCCC is valid, #CCCCCC is not

$lang['Export_themes'] = iconv('CP1251',_CHARSET, 'Експортиране на тема'); # Export Themes
$lang['Export_explain'] = iconv('CP1251',_CHARSET, 'Тук можете да експортирате конфигурация за темата на избрания темплейт. Изберете темплейт от списъка по-долу и скрипта ще създаде конфигурационен файл за темата, както и ще опита да го съхрани в директорията на избрания темплейт. Ако съхраняването не е възможно, ще ву бъде дадена опция да свалите файла на диска си. За да може файла да бъде съхранен успешно, форумите трябва да имат права за писане в папката на темйплейта на уеб сървъра. За повече информация вижте документацията на phpBB 2.'); # In this panel you will be able to export the theme data for a selected template. Select the template from the list below and the script will create the theme configuration file and attempt to save it to the selected template directory. If it cannot save the file itself it will give you the option to download it. In order for the script to save the file you must give write access to the webserver for the selected template dir. For more information on this see the phpBB 2 users guide.

$lang['Theme_installed'] = iconv('CP1251',_CHARSET, 'Избраната тема е инсталирана успешно'); # The selected theme has been installed successfully
$lang['Style_removed'] = iconv('CP1251',_CHARSET, 'Избрания стил е премахнат от базата данни. За да премахнете този стил напълно, трябва да го изтриете от папката със темплейтите'); # The selected style has been removed from the database. To fully remove this style from your system you must delete the appropriate style from your templates directory.
$lang['Theme_info_saved'] = iconv('CP1251',_CHARSET, 'Информацията за темата за избрания темплейт е съхранена. Сега трябва да върнете правата на theme_info.cfg на read-only'); # The theme information for the selected template has been saved. You should now return the permissions on the theme_info.cfg (and if applicable the selected template directory) to read-only
$lang['Theme_updated'] = iconv('CP1251',_CHARSET, 'Избраната тема е обновена. Можете да експортирате новите настройки на темата'); # The selected theme has been updated. You should now export the new theme settings
$lang['Theme_created'] = iconv('CP1251',_CHARSET, 'Темата е създадена. Можете да експортирате темата към конфигурационния й файл, който да запазите на сигурно място или да използвате на други форуми.'); # Theme created. You should now export the theme to the theme configuration file for safe keeping or use elsewhere

$lang['Confirm_delete_style'] = iconv('CP1251',_CHARSET, 'Сигурни ли сте, че искате да изтриете този стил?'); # Are you sure you want to delete this style

$lang['Download_theme_cfg'] = iconv('CP1251',_CHARSET, 'Конфигурационния файл не беше създаден поради грешка при опита за запис. Кликнете бутона по-долу, за да свалите този файл през браузъра ви. След като го свалите, можете да го поставите ръчно в папката, съдържаща файловете на темплейта на темата. След това можете да комплектовате всички файлове за разпространение или употреба на други форуми.'); # The exporter could not write the theme information file. Click the button below to download this file with your browser. Once you have downloaded it you can transfer it to the directory containing the template files. You can then package the files for distribution or use elsewhere if you desire
$lang['No_themes'] = iconv('CP1251',_CHARSET, 'Темплейта, който сте избрали, няма прикачени теми. За да създадете нова тема кликнете на съответната връзка.'); # The template you selected has no themes attached to it. To create a new theme click the Create New link on the left hand panel
$lang['No_template_dir'] = iconv('CP1251',_CHARSET, 'Директорията с темплейтите не е достъпна. Вероятно има проблем с правата за четене от сървъра или директорията не съществува.'); # Could not open the template directory. It may be unreadable by the webserver or may not exist
$lang['Cannot_remove_style'] = iconv('CP1251',_CHARSET, 'Не можете да премахнете стил, който е основен за Форумите. Моля променете основния стил и опитайте отново.'); # You cannot remove the style selected since it is currently the forum default. Please change the default style and try again.
$lang['Style_exists'] = iconv('CP1251',_CHARSET, 'Името на стила, което сте избрали, вече съществува. Моля върнете се и изберете различно име.'); # The style name to selected already exists, please go back and choose a different name.

$lang['Click_return_styleadmin'] = iconv('CP1251',_CHARSET, 'Кликнете %sтук%s за да се върнете в Администриране на стиловете'); # Click %sHere%s to return to Style Administration

$lang['Theme_settings'] = iconv('CP1251',_CHARSET, 'Настройки на темата'); # Theme Settings
$lang['Theme_element'] = iconv('CP1251',_CHARSET, 'Елемент от темата'); # Theme Element
$lang['Simple_name'] = iconv('CP1251',_CHARSET, 'Просто име'); # Simple Name
$lang['Value'] = iconv('CP1251',_CHARSET, 'Стойност'); # Value
$lang['Save_Settings'] = iconv('CP1251',_CHARSET, 'Запази настройките'); # Save Settings

$lang['Stylesheet'] = iconv('CP1251',_CHARSET, 'CSS Стилове'); # CSS Stylesheet
$lang['Background_image'] = iconv('CP1251',_CHARSET, 'Фонова картинка'); # Background Image
$lang['Background_color'] = iconv('CP1251',_CHARSET, 'Фонов цвят'); # Background Colour
$lang['Theme_name'] = iconv('CP1251',_CHARSET, 'Име на темата'); # Theme Name
$lang['Link_color'] = iconv('CP1251',_CHARSET, 'Цвят на връзките'); # Link Colour
$lang['Text_color'] = iconv('CP1251',_CHARSET, 'Цвят на текста'); # Text Colour
$lang['VLink_color'] = iconv('CP1251',_CHARSET, 'Цвят на посетените връзки'); # Visited Link Colour
$lang['ALink_color'] = iconv('CP1251',_CHARSET, 'Цвят на активните връзки'); # Active Link Colour
$lang['HLink_color'] = iconv('CP1251',_CHARSET, 'Цвят на посочените връзки'); # Hover Link Colour
$lang['Tr_color1'] = iconv('CP1251',_CHARSET, 'Цвят на табличен ред 1'); # Table Row Colour 1
$lang['Tr_color2'] = iconv('CP1251',_CHARSET, 'Цвят на табличен ред 2'); # Table Row Colour 2
$lang['Tr_color3'] = iconv('CP1251',_CHARSET, 'Цвят на табличен ред 3'); # Table Row Colour 3
$lang['Tr_class1'] = iconv('CP1251',_CHARSET, 'Клас на табличен ред 1'); # Table Row Class 1
$lang['Tr_class2'] = iconv('CP1251',_CHARSET, 'Клас на табличен ред 2'); # Table Row Class 2
$lang['Tr_class3'] = iconv('CP1251',_CHARSET, 'Клас на табличен ред 3'); # Table Row Class 3
$lang['Th_color1'] = iconv('CP1251',_CHARSET, 'Цвят на табличен хедър 1'); # Table Header Colour 1
$lang['Th_color2'] = iconv('CP1251',_CHARSET, 'Цвят на табличен хедър 2'); # Table Header Colour 2
$lang['Th_color3'] = iconv('CP1251',_CHARSET, 'Цвят на табличен хедър 3'); # Table Header Colour 3
$lang['Th_class1'] = iconv('CP1251',_CHARSET, 'Клас на табличен хедър 1'); # Table Header Class 1
$lang['Th_class2'] = iconv('CP1251',_CHARSET, 'Клас на табличен хедър 2'); # Table Header Class 2
$lang['Th_class3'] = iconv('CP1251',_CHARSET, 'Клас на табличен хедър 3'); # Table Header Class 3
$lang['Td_color1'] = iconv('CP1251',_CHARSET, 'Цвят на таблична клетка 1'); # Table Cell Colour 1
$lang['Td_color2'] = iconv('CP1251',_CHARSET, 'Цвят на таблична клетка 2'); # Table Cell Colour 2
$lang['Td_color3'] = iconv('CP1251',_CHARSET, 'Цвят на таблична клетка 3'); # Table Cell Colour 3
$lang['Td_class1'] = iconv('CP1251',_CHARSET, 'Клас на таблична клетка 1'); # Table Cell Class 1
$lang['Td_class2'] = iconv('CP1251',_CHARSET, 'Клас на таблична клетка 2'); # Table Cell Class 2
$lang['Td_class3'] = iconv('CP1251',_CHARSET, 'Клас на таблична клетка 3'); # Table Cell Class 3
$lang['fontface1'] = iconv('CP1251',_CHARSET, 'Шрифт 1'); # Font Face 1
$lang['fontface2'] = iconv('CP1251',_CHARSET, 'Шрифт 2'); # Font Face 2
$lang['fontface3'] = iconv('CP1251',_CHARSET, 'Шрифт 3'); # Font Face 3
$lang['fontsize1'] = iconv('CP1251',_CHARSET, 'Размер на шрифта 1'); # Font Size 1
$lang['fontsize2'] = iconv('CP1251',_CHARSET, 'Размер на шрифта 2'); # Font Size 2
$lang['fontsize3'] = iconv('CP1251',_CHARSET, 'Размер на шрифта 3'); # Font Size 3
$lang['fontcolor1'] = iconv('CP1251',_CHARSET, 'Цвят на шрифта 1'); # Font Colour 1
$lang['fontcolor2'] = iconv('CP1251',_CHARSET, 'Цвят на шрифта 2'); # Font Colour 2
$lang['fontcolor3'] = iconv('CP1251',_CHARSET, 'Цвят на шрифта 3'); # Font Colour 3
$lang['span_class1'] = iconv('CP1251',_CHARSET, 'Клас <span> 1'); # Span Class 1
$lang['span_class2'] = iconv('CP1251',_CHARSET, 'Клас <span> 2'); # Span Class 2
$lang['span_class3'] = iconv('CP1251',_CHARSET, 'Клас <span> 3'); # Span Class 3
$lang['img_poll_size'] = iconv('CP1251',_CHARSET, 'Размер на изображението за резултати от гласуването в пиксели'); # Polling Image Size [px]
$lang['img_pm_size'] = iconv('CP1251',_CHARSET, 'Размер на статус-бара на личните съобщения в пиксели'); # Private Message Status size [px]


//
// Install Process
//
$lang['Welcome_install'] = iconv('CP1251',_CHARSET, 'Добре дошли в инсталацията на phpBB 2'); # Welcome to phpBB 2 Installation
$lang['Initial_config'] = iconv('CP1251',_CHARSET, 'Обща конфигурация'); # Basic Configuration
$lang['DB_config'] = iconv('CP1251',_CHARSET, 'Конфигурация на базата данни'); # Database Configuration
$lang['Admin_config'] = iconv('CP1251',_CHARSET, 'Конфигурация на администратора'); # Admin Configuration
$lang['continue_upgrade'] = iconv('CP1251',_CHARSET, ''); # Once you have downloaded your config file to your local machine you may\'Continue Upgrade\' button below to move forward with the upgrade process.  Please wait to upload the config file until the upgrade process is complete.
$lang['upgrade_submit'] = iconv('CP1251',_CHARSET, 'Продължи Ъпгрейда'); # Continue Upgrade

$lang['Installer_Error'] = iconv('CP1251',_CHARSET, 'Грешка при инсталацията'); # An error has occurred during installation
$lang['Previous_Install'] = iconv('CP1251',_CHARSET, 'Открита е предишна инсталация'); # A previous installation has been detected
$lang['Install_db_error'] = iconv('CP1251',_CHARSET, 'Грешка при опит за обновяване на базата данни'); # An error occurred trying to update the database

$lang['Re_install'] = iconv('CP1251',_CHARSET, 'Предишната ви инсталация е все още активна.<br /><br />Ако искате да преинсталирате phpBB 2, трябва да кликнете бутона Да по-долу. Обърнете внимание, че това ще унищожи всички текущи данни! Ще се запазят само потребителското име и паролата на администратора, всички останали данни ще бъдат изтрити!<br /><br />Помислете преди да кликнете Да!'); # Your previous installation is still active. <br /><br />If you would like to re-install phpBB 2 you should click the Yes button below. Please be aware that doing so will destroy all existing data, no backups will be made! The administrator username and password you have used to login in to the board will be re-created after the re-installation, no other settings will be retained. <br /><br />Think carefully before pressing Yes!

$lang['Inst_Step_0'] = iconv('CP1251',_CHARSET, 'Благодарим ви, че избрахте phpBB 2. За да извършите инсталацията, моля попълнете детайлите, описани по-долу. Обърнете внимание, че базата данни, в която инсталирате, трябва да съществува. Ако инсталирате в база данни, която използва ODBC, като например MS Access, трябва да създадете DSN за нея преди да продължите.'); # Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.

$lang['Start_Install'] = iconv('CP1251',_CHARSET, 'Започни инсталирането'); # Start Install
$lang['Finish_Install'] = iconv('CP1251',_CHARSET, 'Завърши инсталирането'); # Finish Installation

$lang['Default_lang'] = iconv('CP1251',_CHARSET, 'Основен език на форумите'); # Default board language
$lang['DB_Host'] = iconv('CP1251',_CHARSET, 'Сървър на базата данни / DSN'); # Database Server Hostname / DSN
$lang['DB_Name'] = iconv('CP1251',_CHARSET, 'Име на базата данни'); # Your Database Name
$lang['DB_Username'] = iconv('CP1251',_CHARSET, 'Потребителско име за базата данни'); # Database Username
$lang['DB_Password'] = iconv('CP1251',_CHARSET, 'Парола за базата данни'); # Database Password
$lang['Database'] = iconv('CP1251',_CHARSET, 'Вашата база данни'); # Your Database
$lang['Install_lang'] = iconv('CP1251',_CHARSET, 'Изберете език за инсталацията'); # Choose Language for Installation
$lang['dbms'] = iconv('CP1251',_CHARSET, 'Вид на базата данни'); # Database Type
$lang['Table_Prefix'] = iconv('CP1251',_CHARSET, 'Представка за таблиците в базата данни'); # Prefix for tables in database
$lang['Admin_Username'] = iconv('CP1251',_CHARSET, 'Потребителко име на администратора'); # Administrator Username
$lang['Admin_Password'] = iconv('CP1251',_CHARSET, 'Парола на администратора'); # Administrator Password
$lang['Admin_Password_confirm'] = iconv('CP1251',_CHARSET, 'Парола на администратора (потвърдете)'); # Administrator Password [ Confirm ]

$lang['Inst_Step_2'] = iconv('CP1251',_CHARSET, 'Потребителя администратор е създаден. До тук основната инсталация е завършена. Сега ще трябва да настроите новоинсталираните си Форуми. Моля не забравяйте да погледнете в обща конфигурация и да нанесете необходимите промени. Благодарим ви, че избрахте phpBB 2.'); # Your admin username has been created.  At this point your basic installation is complete. You will now be taken to a screen which will allow you to administer your new installation. Please be sure to check the General Configuration details and make any required changes. Thank you for choosing phpBB 2.

$lang['Unwriteable_config'] = iconv('CP1251',_CHARSET, 'Config-файла ви е недостъпен за писане. Копие на config-файла ще бъде свален на вашата машина, след като кликнете бутона долу. Трябва да качите този файл в папката на phpBB 2. (Можете да го направите достъпен, като дадете права за писане на всички; не забравяйте да върнете правате обратно след инсталацията!) След като направите това, трябва да влезете с администраторското име и парола, които въведохте на предишния екран и да посетите Администраторския Панел (линк натам има в дъното на всички страници на Форумите), за да настроите инсталацията. Благодарим ви, че избрахте phpBB 2.'); # Your config file is un-writeable at present. A copy of the config file will be downloaded to your when you click the button below. You should upload this file to the same directory as phpBB 2. Once this is done you should log in using the administrator name and password you provided on the previous form and visit the admin control centre (a link will appear at the bottom of each screen once logged in) to check the general configuration. Thank you for choosing phpBB 2.
$lang['Download_config'] = iconv('CP1251',_CHARSET, 'Свалете Config-файл'); # Download Config

$lang['ftp_choose'] = iconv('CP1251',_CHARSET, 'Изберете метод за сваляне'); # Choose Download Method
$lang['ftp_option'] = iconv('CP1251',_CHARSET, '<br />Тъй като FTP-функциите са включени в тази версия на PHP, можете да пробвате да вземете config-файла по FTP.'); # <br />Since FTP extensions are enabled in this version of PHP you may also be given the option of first trying to automatically ftp the config file into place.
$lang['ftp_instructs'] = iconv('CP1251',_CHARSET, 'Избрали сте да качите config-файла към акаунта, който съдържа phpBB 2 автоматично. Моля въведете исканата по-долу информация. Обърнете внимание, че FTP-пътя трябва да е същия, какъвто е и за вашата phpBB 2 инсталация.'); # You have chosen to ftp the file to the account containing phpBB 2 automatically.  Please enter the information below to facilitate this process. Note that the FTP path should be the exact path via ftp to your phpBB2 installation as if you were ftping to it using any normal client.
$lang['ftp_info'] = iconv('CP1251',_CHARSET, 'Въведете вашата FTP информация'); # Enter Your FTP Information
$lang['Attempt_ftp'] = iconv('CP1251',_CHARSET, 'Опит за качване на config-файла по FTP'); # Attempt to ftp config file into place
$lang['Send_file'] = iconv('CP1251',_CHARSET, 'Просто ми пратете файла, аз ще го кача ръчно.'); # Just send the file to me and I\'ll ftp it manually
$lang['ftp_path'] = iconv('CP1251',_CHARSET, 'FTP-път към phpBB 2'); # FTP path to phpBB 2
$lang['ftp_username'] = iconv('CP1251',_CHARSET, 'Вашето FTP Име'); # Your FTP Username
$lang['ftp_password'] = iconv('CP1251',_CHARSET, 'Вашата FTP Парола'); # Your FTP Password
$lang['Transfer_config'] = iconv('CP1251',_CHARSET, 'Започни трансфера'); # Start Transfer
$lang['NoFTP_config'] = iconv('CP1251',_CHARSET, 'Опита за автоматично качване на config-файла по FTP се провали.Моля свалете файла и го качете ръчно.'); # The attempt to ftp the config file into place failed.  Please download the config file and ftp it into place manually.

$lang['Install'] = iconv('CP1251',_CHARSET, 'Инсталиране'); # Install
$lang['Upgrade'] = iconv('CP1251',_CHARSET, 'Ъпгрейд'); # Upgrade


$lang['Install_Method'] = iconv('CP1251',_CHARSET, 'Изберете метода на инсталиране'); # Choose your installation method

$lang['Install_No_Ext'] = iconv('CP1251',_CHARSET, 'Конфигурацията на PHP на вашия сървър не поддържа типа база данни, която сте избрали!'); # The php configuration on your server doesn\'t support the database type that you choose

$lang['Install_No_PCRE'] = iconv('CP1251',_CHARSET, 'phpBB2 изисква Perl-съвместим Regular Expressions Module за PHP, който вашата PHP конфигурация очевидно не поддържа!'); # phpBB2 Requires the Perl-Compatible Regular Expressions Module for php which your php configuration doesn\'t appear to support!
