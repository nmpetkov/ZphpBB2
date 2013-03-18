<?php
/***************************************************************************
 *                            lang_main_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/07/03 22:10:49 carls Exp $
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = 'Вие <b>можете</b> да прикрепяте файлове в този форум'; # You <b>can</b> attach files in this forum
$lang['Rules_attach_cannot'] = 'Вие <b>не можете</b> да прикрепяте файлове в този форум'; # You <b>cannot</b> attach files in this forum
$lang['Rules_download_can'] = 'Вие <b>можете</b> да теглите файлове в този форум'; # You <b>can</b> download files in this forum
$lang['Rules_download_cannot'] = 'Вие <b>не можете</b> да теглите файлове в този форум'; # You <b>cannot</b> download files in this forum
$lang['Sorry_auth_view_attach'] = 'Съжаляваме, но вие нямата права да виждате или теглите този файл'; # Sorry but you are not authorized to view or download this Attachment

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Описание'; # Description// used in Administration Panel too...
$lang['Downloaded'] = 'Изтеглен'; # Downloaded
$lang['Download'] = 'Изтегли'; # Download// this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Размер'; # Filesize
$lang['Viewed'] = 'Видяно'; # Viewed
$lang['Download_number'] = '%d път(и)'; # %d Time(s)// replace %d with count
$lang['Extension_disabled_after_posting'] = 'Разширението \'%s\' е деактивирано от администратора, файла не може да се покаже.'; # The Extension \'%s\' was deactivated by an board admin, therefore this Attachment is not displayed. // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Контролен панел за прикрепяне на файлове'; # Attachment Posting Control Panel
$lang['Attach_posting_cp_explain'] = 'Ако изберете Прикрепяне на файл, ще се отвори каре за тази цел.<br />Ако изберете Прикрепени файлове, ще видите списък с вече прикрепените файлове и ще можете да ги редактирате.<br />Ако искате да подмените някой файл (Подмени с нова версия), трябва да изберете и двете връзки. Добавете файл по нормалната процедура, след това не избирайте Прикрепи файл, а изберете Подмени с нова версия за файла, който искате да подмените.'; # If you click on Add an Attachment, you will see the box for adding Attachments.<br />If you click on Posted Attachments, you will see a list of already attached Files and you are able to edit them.<br />If you want to Replace (Upload new Version) an Attachment, you have to click both links. Add the Attachment as you normally would do, thereafter don\'t click on Add Attachment, rather click on Upload New Version at the Attachment Entry you intend to update.

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Прикрепи файл'; # Add Attachment
$lang['Add_attachment_title'] = 'Прикрепяне на файл'; # Add an Attachment
$lang['Add_attachment_explain'] = 'Ако не желаете да прикрепяте файлове към съобщението си, моля оставете полетата празни'; # If you do not want to add an Attachment to your Post, please leave the Fields blank
$lang['File_name'] = 'Име на файла'; # Filename
$lang['File_comment'] = 'Коментар'; # File Comment

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Прикрепени файлове'; # Posted Attachments
$lang['Options'] = 'Възможности'; # Options
$lang['Update_comment'] = 'Промени коментар'; # Update Comment
$lang['Delete_attachments'] = 'Изтрий файловете'; # Delete Attachments
$lang['Delete_attachment'] = 'Изтрий файла'; # Delete Attachment
$lang['Delete_thumbnail'] = 'Изтрий иконата'; # Delete Thumbnail
$lang['Upload_new_version'] = 'Подмени с нова версия'; # Upload New Version

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s е навалидно име на файл'; # %s is an invalid filename // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Файлът е твърде голям.<br />Не може да се вземе от системата ограничението по размер в PHP.'; # The Attachment is too big.<br />Couldn\'t get the maximum Size defined in PHP.<br />The Attachment Mod is unable to determine the maximum Upload Size defined in the php.ini.
$lang['Attachment_php_size_overrun'] = 'Файлът е твърде голям.<br />Максимален размер за качване: %d MB.<br />Ограничението е зададено в PHP системата на сървъра.'; # The Attachment is too big.<br />Maximum Upload Size: %d MB.<br />Please note that this Size is defined in php.ini, this means it\'s set by PHP and the Attachment Mod can not override this value. // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Разширението %s не е позволено'; # The Extension %s is not allowed // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Не е позволено да качвате файлове с разширение %s в този форум'; #You are not allowed to post Files with the Extension %s within this Forum // replace %s with the Extension
$lang['Attachment_too_big'] = 'Файлът е твърде голям.<br />Максимален размер: %d %s'; # The Attachment is too big.<br />Max Size: %d %s // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Съжаляваме. но е достигнат максималния размер на прикрепените файлове. Моля контактувайте с администратора на форума ако имате въпроси.'; # Sorry, but the maximum filesize for all Attachments is reached. Please contact the Board Administrator if you have questions.
$lang['Too_many_attachments'] = 'Файлът не може да бъде прикачен, тъй като е достигнат максимания брой от %d файла за това съобщение'; # Attachment cannot be added, since the max. number of %d Attachments in this post was achieved // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Прикаченото изображение трябва да бъде по-малко от %d пиксела ширина и %d пиксела височина';  # The Attachment/Image must be less than %d pixels wide and %d pixels high
$lang['General_upload_error'] = 'Грешка при качването: Не може да се запише файла на %s.'; # Upload Error: Could not upload Attachment to %s. // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Трябва да въведете стойности в карето \'Прикрепяне на файл\''; # You have to enter values in the \'Add an Attachment\' Box
$lang['Error_missing_old_entry'] = 'Не може да се направи подмяната, тъй като не е намерен стария файл'; # Unable to Update Attachment, could not find old Attachment Entry

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Съжаляваме, но е достигнат сумарния максималния размер на файловете във вашата папка с лични съобщения. Моля изтрийте част от файловете.'; # Sorry, but the maximum filesize for all Attachments in your Private Message Folder has been reached. Please delete some of your received/sent Attachments.
$lang['Attach_quota_receiver_pm_reached'] = 'Съжаляваме, но е достигнат сумарния максималния размер на файловете в папката с лични съобщения на %s. Моля уведомете го(я), или изчакайте докато тя/той освободи място в личната си папка.'; # Sorry, but the maximum filesize for all Attachments in the Private Message Folder of \'%s\' has been reached. Please let him know, or wait until he/she has deleted some of his/her Attachments.

// Errors -> Download
$lang['No_attachment_selected'] = 'Не сте избрали файл за изтегляне или преглед.'; # You haven\'t selected an attachment to download or view.
$lang['Error_no_attachment'] = 'Избраният файл вече го няма на сървъра'; # The selected Attachment does not exist anymore

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Сигурни ли сте, че искате да изтриете избраните файлове?'; # Are you sure you want to delete the selected Attachments?
$lang['Deleted_attachments'] = 'Избраните файлове са изтрити.'; # The selected Attachments have been deleted.
$lang['Error_deleted_attachments'] = 'Файловете не могат да бъдат изтрити.'; # Could not delete Attachments.
$lang['Confirm_delete_pm_attachments'] = 'Сигурни ли сте, че искате да изтриете файловете в това лично съобщение?'; # Are you sure you want to delete all Attachments posted in this PM?

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Възможността за прикачване на файлове е деактивирана.'; # The Attachment Feature is disabled.

$lang['Directory_does_not_exist'] = 'Папка \'%s\' не съществува или не може да бъде намерена.'; # The Directory \'%s\' does not exist or couldn\'t be found. // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Моля проверете дали \'%s\' е папка.'; # Please check if \'%s\' is a directory. // replace %s with directory
$lang['Directory_not_writeable'] = 'В папка \'%s\' е забранено писането. Трябва да я създадете и смените атрибутите на 777 (или да смените собственика на сървъра) за да качвате файлове.<br />Ако имате само обикновен ftp-достъп сменете атрибутите на папката до rwxrwxrwx.'; # Directory \'%s\' is not writeable. You\'ll have to create the upload path and chmod it to 777 (or change the owner to you httpd-servers owner) to upload files.<br />If you have only plain ftp-access change the \'Attribute\' of the directory to rwxrwxrwx. // replace %s with directory

$lang['Ftp_error_connect'] = 'Could not connect to FTP Server: \'%s\'. Please check your FTP-Settings.';
$lang['Ftp_error_login'] = 'Could not login to FTP Server. The Username \'%s\' or the Password is wrong. Please check your FTP-Settings.';
$lang['Ftp_error_path'] = 'Could not access ftp directory: \'%s\'. Please check your FTP Settings.';
$lang['Ftp_error_upload'] = 'Could not upload files to ftp directory: \'%s\'. Please check your FTP Settings.';
$lang['Ftp_error_delete'] = 'Could not delete files in ftp directory: \'%s\'. Please check your FTP Settings.<br />Another reason for this error could be the non-existence of the Attachment, please check this first in Shadow Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Unable to enable/disable FTP Passive Mode';

// Attach Rules Window
$lang['Rules_page'] = 'Правила за прикачени файлове'; # Attachment Rules
$lang['Attach_rules_title'] = 'Позволени групи разширения и размерите им'; # Allowed Extension Groups and their Sizes
$lang['Group_rule_header'] = '%s -> Максимален размер на файловете: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Позволени разширения и размери'; # Allowed Extensions and Sizes
$lang['Note_user_empty_group_permissions'] = 'Бележка:<br />Нормално ви е разрешено да прикрепяте файлове в този форум, но няма зададени групи от разчирения и вие няма да можете да прикрепяте файлове. Ако опитате, <br />ще получите съобщение за грешка.<br />'; # NOTE:<br />You are normally allowed to attach files within this Forum, <br />but since no Extension Group is allowed to be attached here, <br />you are unable to attach anything. If you try, <br />you will receive an Error Message.<br />

// Quota Variables
$lang['Upload_quota'] = 'Квота за качване'; # Upload Quota
$lang['Pm_quota'] = 'Квота за лични съобщения'; # PM Quota
$lang['User_upload_quota_reached'] = 'Съжаляваме, достигнали сте максималната си квота за качени файлове от %d %s'; # Sorry, you have reached your maximum Upload Quota Limit of %d %s // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Потребителски КП'; # User ACP
$lang['UACP'] = 'Потребителски контролен панел за прикачени файлове'; # User Attachment Control Panel
$lang['User_uploaded_profile'] = 'Качени: %s'; # Uploaded: %s
$lang['User_quota_profile'] = 'Квота: %s'; # Quota: %s
$lang['Upload_percent_profile'] = '%d%% от общо'; # %d%% of total

// Common Variables
$lang['Bytes'] = 'байта'; # Bytes
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Търси прикачени файлове'; # Search Attachments
$lang['Test_settings'] = 'Тествай настройките'; # Test Settings
$lang['Not_assigned'] = 'Не е асоциирано'; # Not Assigned
$lang['No_file_comment_available'] = 'Няма коментар за файла'; # No File Comment available
$lang['Attachbox_limit'] = 'Папката ви с файлове е %d%% пълна'; # Your Attachbox is %d%% full
$lang['No_quota_limit'] = 'Няма зададена квота'; # No Quota Limit
$lang['Unlimited'] = 'Неограничен'; # Unlimited
