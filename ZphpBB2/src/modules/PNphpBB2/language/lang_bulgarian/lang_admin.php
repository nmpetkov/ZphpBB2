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
$lang['General'] = iconv('CP1251',_CHARSET, '���� ��������������'); # General Admin
$lang['Users'] = iconv('CP1251',_CHARSET, '�������������� �� �������������'); # User Admin
$lang['Groups'] = iconv('CP1251',_CHARSET, '����� �� ��������������'); # Group Admin
$lang['Forums'] = iconv('CP1251',_CHARSET, '�������������� �� ��������'); # Forum Admin
$lang['Styles'] = iconv('CP1251',_CHARSET, '������� �� ����������������'); # Styles Admin

$lang['Configuration'] = iconv('CP1251',_CHARSET, '������������'); # Configuration
$lang['Permissions'] = iconv('CP1251',_CHARSET, '�����'); # Permissions
$lang['Manage'] = iconv('CP1251',_CHARSET, '���������'); # Management
$lang['Disallow'] = iconv('CP1251',_CHARSET, '������� �� �����'); # Disallow names
$lang['Prune'] = iconv('CP1251',_CHARSET, '�����������'); #Pruning
$lang['Mass_Email'] = iconv('CP1251',_CHARSET, '����� ����'); # Mass Email
$lang['Ranks'] = iconv('CP1251',_CHARSET, '�������'); # Ranks
$lang['Smilies'] = iconv('CP1251',_CHARSET, '�������'); # Smilies
$lang['Ban_Management'] = iconv('CP1251',_CHARSET, '��� �������'); # Ban Control
$lang['Word_Censor'] = iconv('CP1251',_CHARSET, '����������� ����'); # Word Censors
$lang['Export'] = iconv('CP1251',_CHARSET, '������������'); # Export
$lang['Create_new'] = iconv('CP1251',_CHARSET, '���������'); # Create
$lang['Add_new'] = iconv('CP1251',_CHARSET, '��������'); # Add
$lang['Backup_DB'] = iconv('CP1251',_CHARSET, '����������� �� ��'); # Backup Database
$lang['Restore_DB'] = iconv('CP1251',_CHARSET, '�������������� �� ��'); # Restore Database


//
// Index
//
$lang['Admin'] = iconv('CP1251',_CHARSET, '�������������'); # Administration
$lang['Not_admin'] = iconv('CP1251',_CHARSET, '������ ����� �� �������������� ���� ������'); # You are not authorised to administer this board
$lang['Welcome_phpBB'] = iconv('CP1251',_CHARSET, '����� ����� � phpBB'); # Welcome to phpBB
$lang['Admin_intro'] = iconv('CP1251',_CHARSET, '���������� ��, �� �������� phpBB �� ������ ����� �������. ���� �������� ��������� ����� ���������� �� ��������. ������ �� �� ������� ��� ���� �������� �� <u>�����-�����</u> � ����� �����. �� �� �� ������� �� ��������� �������� �� ��������, �������� �� ������ (���� � ����� �����). ������� ������ � ���� ����� ��� ����������� �� �������������� �� ������ ������� �� ��������. ����� ������ ������� ���������� �� ����������������.'); # Thank you for choosing phpBB as your forum solution. This screen will give you a quick overview of all the various statistics of your board. You can get back to this page by clicking on the <u>Admin Index</u> link in the left pane. To return to the index of your board, click the phpBB logo also in the left pane. The other links on the left hand side of this screen will allow you to control every aspect of your forum experience, each screen will have instructions on how to use the tools.
$lang['Main_index'] = iconv('CP1251',_CHARSET, '������ �� ��������'); # Forum Index
$lang['Forum_stats'] = iconv('CP1251',_CHARSET, '����� ����������'); # Forum Statistics
$lang['Admin_Index'] = iconv('CP1251',_CHARSET, '�����-�����'); # Admin Index
$lang['Preview_forum'] = iconv('CP1251',_CHARSET, '������� �� ������'); # Preview Forum

$lang['Click_return_admin_index'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �����-������'); # Click %sHere%s to return to the Admin Index

$lang['Statistic'] = iconv('CP1251',_CHARSET, '����������'); # Statistic
$lang['Value'] = iconv('CP1251',_CHARSET, '��������'); # Value
$lang['Number_posts'] = iconv('CP1251',_CHARSET, '���� ������'); # Number of posts
$lang['Posts_per_day'] = iconv('CP1251',_CHARSET, '������ �� ���'); # Posts per day
$lang['Number_topics'] = iconv('CP1251',_CHARSET, '���� ����'); # Number of topics
$lang['Topics_per_day'] = iconv('CP1251',_CHARSET, '���� �� ���'); # Topics per day
$lang['Number_users'] = iconv('CP1251',_CHARSET, '���� �����������'); # Number of users
$lang['Users_per_day'] = iconv('CP1251',_CHARSET, '����������� �� ���'); # Users per day
$lang['Board_started'] = iconv('CP1251',_CHARSET, '����� �� �����'); # Board started
$lang['Avatar_dir_size'] = iconv('CP1251',_CHARSET, '������ �� ������� � ������� (������)'); # Avatar directory size
$lang['Database_size'] = iconv('CP1251',_CHARSET, '������ �� ������ �����'); # Database size
$lang['Gzip_compression'] = iconv('CP1251',_CHARSET, 'Gzip ���������'); # Gzip compression
$lang['Not_available'] = iconv('CP1251',_CHARSET, '���� �����'); # Not available

$lang['ON'] = iconv('CP1251',_CHARSET, '��������'); // This is for GZip compression # ON
$lang['OFF'] = iconv('CP1251',_CHARSET, '���������');  # OFF


//
// DB Utils
//
$lang['Database_Utilities'] = iconv('CP1251',_CHARSET, '������ � ������ �����'); # Database Utilities

$lang['Restore'] = iconv('CP1251',_CHARSET, '��������������'); # Restore
$lang['Backup'] = iconv('CP1251',_CHARSET, '�����������'); # Backup
$lang['Restore_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ����� �������������� �� ������ ����� �� phpBB �� �������� ����. ��� �������� �� �� ��������, ������ �� ������ ����������� � gzip ����, ����� �� ���� ����������� ��������������. <b>��������!</b> ���������������� �� ������ ������ ������� �����. ������� ���� �� ������ ����� �����, ���� �� ������������� ���������� ������ ������.'); # This will perform a full restore of all phpBB tables from a saved file. If your server supports it you may upload a gzip compressed text file and it will automatically be decompressed. <b>WARNING</b> This will overwrite any existing data. The restore may take a long time to process please do not move from this page till it is complete.
$lang['Backup_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������ ���� ����� �� phpBB. ��� ����� ������� ������������ ������� � ������ ���� ����� ���� phpBB, ����� ������ �� ����� ���������, ���� �������� ������� ��, ��������� �� ������� � ������ ������������ ������� ��-����. ��� ������� �� �� ��������, ������ �� ������������ ����� � ������� � gzip, �� �� �������� ������� �� �������.'); # Here you can backup all your phpBB related data. If you have any additional custom tables in the same database with phpBB that you would like to back up as well please enter their names separated by commas in the Additional Tables textbox below. If your server supports it you may also gzip compress the file to reduce its size before download.

$lang['Backup_options'] = iconv('CP1251',_CHARSET, '����� �� �����������'); # Backup options
$lang['Start_backup'] = iconv('CP1251',_CHARSET, '������� �����������'); # Start Backup
$lang['Full_backup'] = iconv('CP1251',_CHARSET, '����� �����������'); # Full backup
$lang['Structure_backup'] = iconv('CP1251',_CHARSET, '����������� ���� �� �����������'); # Structure Only backup
$lang['Data_backup'] = iconv('CP1251',_CHARSET, '����������� ���� �� �������'); # Data only backup
$lang['Additional_tables'] = iconv('CP1251',_CHARSET, '������������ �������'); # Additional tables
$lang['Gzip_compress'] = iconv('CP1251',_CHARSET, '������������ �� ����� � Gzip'); # Gzip compress file
$lang['Select_file'] = iconv('CP1251',_CHARSET, '�������� ����'); # Select a file
$lang['Start_Restore'] = iconv('CP1251',_CHARSET, '������� ����������������'); # Start Restore

$lang['Restore_success'] = iconv('CP1251',_CHARSET, '������ ����� ���� ������������ �������.<br /><br />�������� �� ������� � �����������, � ����� �� ���� ��� ���������� �����������.'); # The Database has been successfully restored.<br /><br />Your board should be back to the state it was when the backup was made.
$lang['Backup_download'] = iconv('CP1251',_CHARSET, '��������� �� ������� ���� �����, ���� ���������!'); # Your download will start shortly please wait till it begins
$lang['Backups_not_supported'] = iconv('CP1251',_CHARSET, '������������� �� � �������� ������ ����� �� ��������� ��� ������ ��-�������.'); # Sorry but database backups are not currently supported for your database system

$lang['Restore_Error_uploading'] = iconv('CP1251',_CHARSET, '������ ��� ��������� �� ����� � ������� �� ��������������.'); # Error in uploading the backup file
$lang['Restore_Error_filename'] = iconv('CP1251',_CHARSET, '������� � ����� �� �����, ���� �������� � ���� ����.'); # Filename problem, please try an alternative file
$lang['Restore_Error_decompress'] = iconv('CP1251',_CHARSET, 'Gzip-����� �� ���� �� ���� ��������������, ���� ������ �������������� ������ �� �����.'); # Cannot decompress a gzip file, please upload a plain text version
$lang['Restore_Error_no_file'] = iconv('CP1251',_CHARSET, '���� ����� ����� ����'); # No file was uploaded


//
// Auth pages
//
$lang['Select_a_User'] = iconv('CP1251',_CHARSET, '�������� ����������'); # Select a User
$lang['Select_a_Group'] = iconv('CP1251',_CHARSET, '�������� �����'); # Select a Group
$lang['Select_a_Forum'] = iconv('CP1251',_CHARSET, '�������� �����'); # Select a Forum
$lang['Auth_Control_User'] = iconv('CP1251',_CHARSET, '������� �� ������� �� �������������');  # User Permissions Control
$lang['Auth_Control_Group'] = iconv('CP1251',_CHARSET, '������� �� ������� �� �������');  # Group Permissions Control
$lang['Auth_Control_Forum'] = iconv('CP1251',_CHARSET, '������� �� ������� ��� ��������');  # Forum Permissions Control
$lang['Look_up_User'] = iconv('CP1251',_CHARSET, '����� �����������');  # Look up User
$lang['Look_up_Group'] = iconv('CP1251',_CHARSET, '����� �������'); # Look up Group
$lang['Look_up_Forum'] = iconv('CP1251',_CHARSET, '����� ������'); # Look up Forum

$lang['Group_auth_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������� � ������������� ������ �� ����� �����. ������ ������� ������� �� ������ �����, �� ����������, �� ������� ������������� ��������� ����� ��� ��� �� ����� �� ����������� �����, ����� �� �� ���� ������ � ��������� �� ������� �� �������. �� ������ ������������, ��� ���� � ������.'); # Here you can alter the permissions and moderator status assigned to each user group. Do not forget when changing group permissions that individual user permissions may still allow the user entry to forums, etc. You will be warned if this is the case.
$lang['User_auth_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������� � ������������� ������ �� ����� ����������. ������ ������� ������� �� ����� ����������, �� ����������, �� ��������� ����� ����� ��� ��� �� ����� �� ����������� �����, ����� �� �� ���� ������ � ��������� �� ������� �� �����. �� ������ ������������, ��� ���� � ������.'); # Here you can alter the permissions and moderator status assigned to each individual user. Do not forget when changing user permissions that group permissions may still allow the user entry to forums, etc. You will be warned if this is the case.
$lang['Forum_auth_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������� �� ����� �����. ��� ����� � ������ ����� �� ���������, ���� ������� ���� ������ ������� ��� ����� �������� ��� ������. �������, �� ���� ��������� ������� �� ����� �����, ���� �� �������� ����� ����������, ����� ������������� ����� �� ���������� ��� ������.'); # Here you can alter the authorisation levels of each forum. You will have both a simple and advanced method for doing this, advanced offers greater control of each forum operation. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.

$lang['Simple_mode'] = iconv('CP1251',_CHARSET, '������ ���������'); # Simple Mode
$lang['Advanced_mode'] = iconv('CP1251',_CHARSET, '������ ���������'); # Advanced Mode
$lang['Moderator_status'] = iconv('CP1251',_CHARSET, '������ �� ���������'); # Moderator status

$lang['Allowed_Access'] = iconv('CP1251',_CHARSET, '������ ��������'); # Allowed Access
$lang['Disallowed_Access'] = iconv('CP1251',_CHARSET, '������ ��������'); # Disallowed Access
$lang['Is_Moderator'] = iconv('CP1251',_CHARSET, '� ���������'); # Is Moderator
$lang['Not_Moderator'] = iconv('CP1251',_CHARSET, '�� � ���������'); # Not Moderator

$lang['Conflict_warning'] = iconv('CP1251',_CHARSET, '�������������� �� �������� � �������'); # Authorisation Conflict Warning
$lang['Conflict_access_userauth'] = iconv('CP1251',_CHARSET, '���� ���������� ��� ��� ��� ����� �� ������ ��� ���� ����� ������ ���������� �� � ���������� �����. ���� �� �� ������� �� ��������� ������� �� ������� ��� �� ���������� ����������� �� ���, �� �� ��� �������, �� ����������� ���� �� ��� ������ �� ���� �����. �������, ������ ����� �� ����������� � ���������� ������ �� ���������� ����.'); # This user still has access rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having access rights. The groups granting rights (and the forums involved) are noted below.
$lang['Conflict_mod_userauth'] = iconv('CP1251',_CHARSET, '���� ���������� ��� ��� ��� ������������ ����� ��� ���� ����� ������ ���������� �� � ���������� �����. ���� �� �� ������� �� ��������� ������� �� ������� ��� �� ���������� ����������� �� ���, �� �� ��� �������, �� ����������� ���� �� ��� ������������ ����� � ���� �����. �������, ������ ����� �� ����������� � ���������� ������ �� ���������� ����.'); # This user still has moderator rights to this forum via group membership. You may want to alter the group permissions or remove this user the group to fully prevent them having moderator rights. The groups granting rights (and the forums involved) are noted below.

$lang['Conflict_access_groupauth'] = iconv('CP1251',_CHARSET, '�������� ����������� ��� ��� ���� ����� �� ������ � ���� ����� ������ ����������� �� ������� �� �����. ���� �� �� ������� �� ��������� ������� �� �����������, �� �� ��� �������, �� ����������� ���� �� ��� ������ �� ���� �����. ������������� � ������ � ���������� ������ �� ���������� ����.'); # The following user (or users) still have access rights to this forum via their user permission settings. You may want to alter the user permissions to fully prevent them having access rights. The users granted rights (and the forums involved) are noted below.
$lang['Conflict_mod_groupauth'] = iconv('CP1251',_CHARSET, '�������� ����������� ��� ��� ���� ������������ ����� � ���� ����� ������ ����������� �� ������� �� �����. ���� �� �� ������� �� ��������� ������� �� �����������, �� �� ��� �������, �� ����������� ���� �� ��� ������������ ����� � ���� �����. ������������� � ������������ ����� � ���������� ������ �� ���������� ����.'); # The following user (or users) still have moderator rights to this forum via their user permissions settings. You may want to alter the user permissions to fully prevent them having moderator rights. The users granted rights (and the forums involved) are noted below.

$lang['Public'] = iconv('CP1251',_CHARSET, '��������'); # Public
$lang['Private'] = iconv('CP1251',_CHARSET, '������'); # Private
$lang['Registered'] = iconv('CP1251',_CHARSET, '�����������'); # Registered
$lang['Administrators'] = iconv('CP1251',_CHARSET, '��������������'); # Administrators
$lang['Hidden'] = iconv('CP1251',_CHARSET, '�����'); # Hidden

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = iconv('CP1251',_CHARSET, 'ALL'); # ALL
$lang['Forum_REG'] = iconv('CP1251',_CHARSET, 'REG'); # REG
$lang['Forum_PRIVATE'] = iconv('CP1251',_CHARSET, 'PRIVATE'); # PRIVATE
$lang['Forum_MOD'] = iconv('CP1251',_CHARSET, 'MOD'); # MOD
$lang['Forum_ADMIN'] = iconv('CP1251',_CHARSET, 'ADMIN'); # ADMIN

$lang['View'] = iconv('CP1251',_CHARSET, '�������'); # View
$lang['Read'] = iconv('CP1251',_CHARSET, '������'); # Read
$lang['Post'] = iconv('CP1251',_CHARSET, '������'); # Post
$lang['Reply'] = iconv('CP1251',_CHARSET, '����������'); # Reply
$lang['Edit'] = iconv('CP1251',_CHARSET, '�������'); # Edit
$lang['Delete'] = iconv('CP1251',_CHARSET, '���������'); # Delete
$lang['Sticky'] = iconv('CP1251',_CHARSET, '��������� ����'); # Sticky
$lang['Announce'] = iconv('CP1251',_CHARSET, '�����');  # Announce
$lang['Vote'] = iconv('CP1251',_CHARSET, '���������'); # Vote
$lang['Pollcreate'] = iconv('CP1251',_CHARSET, '������'); # Poll create

$lang['Permissions'] = iconv('CP1251',_CHARSET, '�����'); # Permissions
$lang['Simple_Permission'] = iconv('CP1251',_CHARSET, '������ �����'); # Simple Permission

$lang['User_Level'] = iconv('CP1251',_CHARSET, '������������� ����');  # User Level
$lang['Auth_User'] = iconv('CP1251',_CHARSET, '����������'); # User
$lang['Auth_Admin'] = iconv('CP1251',_CHARSET, '�������������'); # Administrator
$lang['Group_memberships'] = iconv('CP1251',_CHARSET, '�������� � ������.�����'); # Usergroup memberships
$lang['Usergroup_members'] = iconv('CP1251',_CHARSET, '���� ����� ��� �������� �������'); # This group has the following members

$lang['Forum_auth_updated'] = iconv('CP1251',_CHARSET, '������� ��� ������ �� ��������'); # Forum permissions updated
$lang['User_auth_updated'] = iconv('CP1251',_CHARSET, '������� �� ����������� �� ��������'); # User permissions updated
$lang['Group_auth_updated'] = iconv('CP1251',_CHARSET, '������� �� ������� �� ��������'); # Group permissions updated

$lang['Auth_updated'] = iconv('CP1251',_CHARSET, '������� �� ��������'); # Permissions have been updated
$lang['Click_return_userauth'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������� �� ������� �� �������������'); # Click %sHere%s to return to User Permissions
$lang['Click_return_groupauth'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������� �� ������� �� �������'); # Click %sHere%s to return to Group Permissions
$lang['Click_return_forumauth'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������� �� ������� ��� ��������'); # Click %sHere%s to return to Forum Permissions


//
// Banning
//
$lang['Ban_control'] = iconv('CP1251',_CHARSET, '����� �� ������'); # Ban Control
$lang['Ban_explain'] = iconv('CP1251',_CHARSET, '�� ��� ������ �� ��������� ������� �� ���������� �� ��������. ������ �� ��������� ����� �� ���������� �� ������������� ���, �� IP ����� ��� ����� �� IP ������ ��� ������. ���� ������ ���� �� �������� �� ����������� �� �������� ���� �� ��������� �������� �� ��������. �� �� ��������� �� ������� ���������� �� �� ���������� ������, �� � ����� ���, ������ �� ��������� ��������� email �����. �������� ��������, �� ��������� �� email ����� ���� �� ������� �� ����������� �� ����� � �� ���� ��� �������� ��. �� ������ �� �������� ���� �� ������� ������, �� �� ���������� ����.'); # Here you can control the banning of users. You can achieve this by banning either or both of a specific user or an individual or range of IP addresses or hostnames. These methods prevent a user from even reaching the index page of your board. To prevent a user from registering under a different username you can also specify a banned email address. Please note that banning an email address alone will not prevent that user from being able to logon or post to your board, you should use one of the first two methods to achieve this.
$lang['Ban_explain_warn'] = iconv('CP1251',_CHARSET, '�������� ��������, �� ���� ��������� ������� �� ����� �� IP ������, �� �������� ������ ���������� �� �������� ����� ����������� �� ���� � ���� ��������. ���� �����, ������ ������ ������ ����� �������� � ������� �����, ����� ��� ������, �� ������ �� ����������. ������ ��������� ����� ������ �� IP ������ ��� ���-����� �������� ������� ��������� IP ������.'); # Please note that entering a range of IP addresses results in all the addresses between the start and end being added to the banlist. Attempts will be made to minimise the number of addresses added to the database by introducing wildcards automatically where appropriate. If you really must enter a range try to keep it small or better yet state specific addresses.

$lang['Select_username'] = iconv('CP1251',_CHARSET, '�������� ����������'); # Select a Username
$lang['Select_ip'] = iconv('CP1251',_CHARSET, '�������� IP'); # Select an IP
$lang['Select_email'] = iconv('CP1251',_CHARSET, '�������� Email �����'); # Select an Email address

$lang['Ban_username'] = iconv('CP1251',_CHARSET, '����� �� ������������� ���'); # Ban one or more specific users
$lang['Ban_username_explain'] = iconv('CP1251',_CHARSET, '������ �� �������� ������� ����������� ������������ ���� �� ����������� �� �������.'); # You can ban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Ban_IP'] = iconv('CP1251',_CHARSET, '����� �� IP ����� ��� ������'); # Ban one or more IP addresses or hostnames
$lang['IP_hostname'] = iconv('CP1251',_CHARSET, 'IP ����� ��� ������'); # IP addresses or hostnames
$lang['Ban_IP_explain'] = iconv('CP1251',_CHARSET, '�� �� �������� ������� �������� IP�� ��� �������, ��������� �� � �������. �� �� �������� ����� �� IP��, ��������� �������� � ������� � ���� (-). ������ �� �������� � * �� ����� �� ���� ��������.'); # To specify several different IP\'s or hostnames separate them with commas. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use *

$lang['Ban_email'] = iconv('CP1251',_CHARSET, 'Ban �� ���� �����'); # Ban one or more email addresses
$lang['Ban_email_explain'] = iconv('CP1251',_CHARSET, '�� �� �������� ������ �� ���� ���� �����, ��������� �� � �������. ����������� *, �� �� �������� ����� �� ������, �������� *@hotmail.com ��� johnsmith@*.com'); # To specify more than one email address separate them with commas. To specify a wildcard username use *, for example *@hotmail.com

$lang['Unban_username'] = iconv('CP1251',_CHARSET, 'Unban �� ������������� ���'); # Un-ban one more specific users
$lang['Unban_username_explain'] = iconv('CP1251',_CHARSET, '������ �� ���������� ���������� ban �� ������� ����������� ������������ ���� �� ����������� �� �������.'); # You can unban multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Unban_IP'] = iconv('CP1251',_CHARSET, 'Unban �� IP ����� ��� ������'); # Un-ban one or more IP addresses
$lang['Unban_IP_explain'] = iconv('CP1251',_CHARSET, '������ �� ���������� ���������� ban �� ������� ����������� ������������ ���� �� ����������� �� �������.'); # You can unban multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['Unban_email'] = iconv('CP1251',_CHARSET, 'Unban �� ���� �����'); # Un-ban one or more email addresses
$lang['Unban_email_explain'] = iconv('CP1251',_CHARSET, '������ ���������� ���������� ban �� ������� ����������� ������������ ���� �� ����������� �� �������.'); # You can unban multiple email addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser

$lang['No_banned_users'] = iconv('CP1251',_CHARSET, '���� ���������� �����������'); # No banned usernames
$lang['No_banned_ip'] = iconv('CP1251',_CHARSET, '���� ��������� IP��'); # No banned IP addresses
$lang['No_banned_email'] = iconv('CP1251',_CHARSET, '���� ��������� ���� ������'); # No banned email addresses

$lang['Ban_update_sucessful'] = iconv('CP1251',_CHARSET, '������� � ������������ � ������� �������'); # The banlist has been updated successfully
$lang['Click_return_banadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � Ban ��������'); # Click %sHere%s to return to Ban Control


//
// Configuration
//
$lang['General_Config'] = iconv('CP1251',_CHARSET, '���� ������������'); # General Configuration
$lang['Config_explain'] = iconv('CP1251',_CHARSET, '������� ���� ��������� ��������� �� ������ ���� ����� �� ��������. �� ��������� �� ������������� ��� ��������� �����, �������� ����������� ������ � ����.'); # The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side.

$lang['Click_return_config'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������ ������������'); # Click %sHere%s to return to General Configuration

$lang['General_settings'] = iconv('CP1251',_CHARSET, '���� ��������� �� ��������'); # General Board Settings
$lang['Server_name'] = iconv('CP1251',_CHARSET, '��� �� ������'); # Domain Name
$lang['Server_name_explain'] = iconv('CP1251',_CHARSET, '�������, �� ����� ����� ���� �����'); # The domain name this board runs from
$lang['Script_path'] = iconv('CP1251',_CHARSET, '��� ��� ��������'); # Script path
$lang['Script_path_explain'] = iconv('CP1251',_CHARSET, '���� ��� phpBB2 ������ �������'); # The path where phpBB2 is located relative to the domain name
$lang['Server_port'] = iconv('CP1251',_CHARSET, '���� �� �������'); # Server Port
$lang['Server_port_explain'] = iconv('CP1251',_CHARSET, '�����, �� ����� ������� ������ ������, ��������� � 80, ��������� ���� ��� ��� �������, �� � ��������'); # The port your server is running on, usually 80, only change if different
$lang['Site_name'] = iconv('CP1251',_CHARSET, '��� �� �����'); # Site name
$lang['Site_desc'] = iconv('CP1251',_CHARSET, '�������� �� �����'); # Site description
$lang['Board_disable'] = iconv('CP1251',_CHARSET, '��������� ��������'); # Disable board
$lang['Board_disable_explain'] = iconv('CP1251',_CHARSET, '���� �� ������� �������� ���������� �� �������������. �� ��������� �� �������� ���� ���� ��� �� ���������, ���� �� ������ �� ������� �������!'); # This will make the board unavailable to users. Do not logout when you disable the board, you will not be able to log back in!
$lang['Acct_activation'] = iconv('CP1251',_CHARSET, '���������� �� �������������'); # Enable account activation
$lang['Acc_None'] = iconv('CP1251',_CHARSET, '�� � �����'); // These three entries are the type of activation # None
$lang['Acc_User'] = iconv('CP1251',_CHARSET, '�� ����������'); # User
$lang['Acc_Admin'] = iconv('CP1251',_CHARSET, '�� �������������'); # Admin

$lang['Abilities_settings'] = iconv('CP1251',_CHARSET, '������� ��������� �� ���������� � �����'); # User and Forum Basic Settings
$lang['Max_poll_options'] = iconv('CP1251',_CHARSET, '�������� �������� �������� �� ������'); # Max number of poll options
$lang['Flood_Interval'] = iconv('CP1251',_CHARSET, '�������� �� flood'); # Flood Interval
$lang['Flood_Interval_explain'] = iconv('CP1251',_CHARSET, '���� �������, ����� ����������� ������ �� ������ ����� ��������� ������.');  # Number of seconds a user must wait between posts
$lang['Board_email_form'] = iconv('CP1251',_CHARSET, '������� �� email ���� ��������'); # User email via board
$lang['Board_email_form_explain'] = iconv('CP1251',_CHARSET, '������������� ����� �� �� ������ email ���� ��������'); # Users send email to each other via this board
$lang['Topics_per_page'] = iconv('CP1251',_CHARSET, '���� �� ��������'); # Topics Per Page
$lang['Posts_per_page'] = iconv('CP1251',_CHARSET, '������ �� ��������'); # Posts Per Page
$lang['Hot_threshold'] = iconv('CP1251',_CHARSET, '���� ������ �� ��������� ����'); # Posts for Popular Threshold
$lang['Default_style'] = iconv('CP1251',_CHARSET, '������� ����'); # Default Style
$lang['Override_style'] = iconv('CP1251',_CHARSET, '�������� �� �������������� ����'); # Override user style
$lang['Override_style_explain'] = iconv('CP1251',_CHARSET, '������ �������� �� ����������� � ��������'); # Replaces users style with the default
$lang['Default_language'] = iconv('CP1251',_CHARSET, '������� ����'); # Default Language
$lang['Date_format'] = iconv('CP1251',_CHARSET, '������ �� ������'); # Date Format
$lang['System_timezone'] = iconv('CP1251',_CHARSET, '������ ���� �� ���������'); # System Timezone
$lang['Enable_gzip'] = iconv('CP1251',_CHARSET, '�������� GZip ���������'); # Enable GZip Compression
$lang['Enable_prune'] = iconv('CP1251',_CHARSET, '�������o �����������'); # Enable Forum Pruning
$lang['Allow_HTML'] = iconv('CP1251',_CHARSET, '�������� HTML'); # Allow HTML
$lang['Allow_BBCode'] = iconv('CP1251',_CHARSET, '�������� BBCode'); # Allow BBCode
$lang['Allowed_tags'] = iconv('CP1251',_CHARSET, '��������� HTML ������'); # Allowed HTML tags
$lang['Allowed_tags_explain'] = iconv('CP1251',_CHARSET, '��������� �������� � �������'); # Separate tags with commas
$lang['Allow_smilies'] = iconv('CP1251',_CHARSET, '��������� �������'); # Allow Smilies
$lang['Smilies_path'] = iconv('CP1251',_CHARSET, '��� ��� ������� ��� �������'); # Smilies Storage Path
$lang['Smilies_path_explain'] = iconv('CP1251',_CHARSET, '���, ������ ��������� ����� �� phpBB, ����. images/smilies'); # Path under your phpBB root dir, e.g. images/smilies
$lang['Allow_sig'] = iconv('CP1251',_CHARSET, '��������� �������'); # Allow Signatures
$lang['Max_sig_length'] = iconv('CP1251',_CHARSET, '�������� �������'); # Maximum signature length
$lang['Max_sig_length_explain'] = iconv('CP1251',_CHARSET, '���������� ���� �� ��������� � �����������'); # Maximum number of characters in user signatures
$lang['Allow_name_change'] = iconv('CP1251',_CHARSET, '��������� ����� �� ������������� ���'); # Allow Username changes

$lang['Avatar_settings'] = iconv('CP1251',_CHARSET, '������� (������) - ���������'); # Avatar Settings
$lang['Allow_local'] = iconv('CP1251',_CHARSET, '��������� ��������� � ������'); # Enable gallery avatars
$lang['Allow_remote'] = iconv('CP1251',_CHARSET, '��������� ������ ������� (������)'); # Enable remote avatars
$lang['Allow_remote_explain'] = iconv('CP1251',_CHARSET, '������, ������ �� ���� ���� � ��������� ��� � ������'); # Avatars linked to from another website
$lang['Allow_upload'] = iconv('CP1251',_CHARSET, '��������� ��������� �� ������'); # Enable avatar uploading
$lang['Max_filesize'] = iconv('CP1251',_CHARSET, '���������� ������ �� ����� � ������'); # Maximum Avatar File Size
$lang['Max_filesize_explain'] = iconv('CP1251',_CHARSET, '������ �� �� �������� ������� � ������'); # For uploaded avatar files
$lang['Max_avatar_size'] = iconv('CP1251',_CHARSET, '���������� ������ �� �����'); # Maximum Avatar Dimensions
$lang['Max_avatar_size_explain'] = iconv('CP1251',_CHARSET, '(�������� x ������ � �������)'); # (Height x Width in pixels)
$lang['Avatar_storage_path'] = iconv('CP1251',_CHARSET, '����� �� ���������� �� ��������'); # Avatar Storage Path
$lang['Avatar_storage_path_explain'] = iconv('CP1251',_CHARSET, '���, ������ ��������� ����� �� phpBB, ����. images/avatars'); # Path under your phpBB root dir, e.g. images/avatars
$lang['Avatar_gallery_path'] = iconv('CP1251',_CHARSET, '����� �� ��������� � ������'); # Avatar Gallery Path
$lang['Avatar_gallery_path_explain'] = iconv('CP1251',_CHARSET, '���, ������ ��������� ����� �� phpBB, ��� ����� � ����������� �� ��������� � ������'); # Path under your phpBB root dir for pre-loaded images, e.g. images/avatars/gallery

$lang['COPPA_settings'] = iconv('CP1251',_CHARSET, '��������� �� COPPA'); # COPPA Settings
$lang['COPPA_fax'] = iconv('CP1251',_CHARSET, 'COPPA ���� �����'); # COPPA Fax Number
$lang['COPPA_mail'] = iconv('CP1251',_CHARSET, 'COPPA email �����'); # COPPA Mailing Address
$lang['COPPA_mail_explain'] = iconv('CP1251',_CHARSET, '���� � email �����, �� ����� ���������� �� �������� COPPA ��������������'); # This is the mailing address where parents will send COPPA registration forms

$lang['Email_settings'] = iconv('CP1251',_CHARSET, '��������� �� email-�'); # Email Settings
$lang['Admin_email'] = iconv('CP1251',_CHARSET, 'Email �� ��������������'); # Admin Email Address
$lang['Email_sig'] = iconv('CP1251',_CHARSET, 'Email ������'); # Email Signature
$lang['Email_sig_explain'] = iconv('CP1251',_CHARSET, '���� ������ �� ���� �������� ��� ������ email-�, ��������� �� ��������'); # This text will be attached to all emails the board sends
$lang['Use_SMTP'] = iconv('CP1251',_CHARSET, '���������� �� SMTP-������'); # Use SMTP Server for email
$lang['Use_SMTP_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ������� email ���� ������ SMTP-������, � �� ���� ��������� ����-�������.'); # Say yes if you want or have to send email via a named server instead of the local mail function
$lang['SMTP_server'] = iconv('CP1251',_CHARSET, '����� �� SMTP-�������'); # SMTP Server Address
$lang['SMTP_username'] = iconv('CP1251',_CHARSET, 'SMTP ������������ ���'); # SMTP Username
$lang['SMTP_username_explain'] = iconv('CP1251',_CHARSET, '�������� ������������ ��� ���� ��� ����� smtp ������ �� �������'); # Only enter a username if your smtp server requires it
$lang['SMTP_password'] = iconv('CP1251',_CHARSET, 'SMTP ������'); # SMTP Password
$lang['SMTP_password_explain'] = iconv('CP1251',_CHARSET, '�������� ������ ���� ��� ����� smtp ������ �� �������'); # Only enter a password if your smtp server requires it

$lang['Disable_privmsg'] = iconv('CP1251',_CHARSET, '������� �� ����� ���������'); # Private Messaging
$lang['Inbox_limits'] = iconv('CP1251',_CHARSET, '�������� ��������� ��� �������'); # Max posts in Inbox
$lang['Sentbox_limits'] = iconv('CP1251',_CHARSET, '�������� ��������� � ��������'); # Max posts in Sentbox
$lang['Savebox_limits'] = iconv('CP1251',_CHARSET, '�������� ��������� � ���������'); # Max posts in Savebox

$lang['Cookie_settings'] = iconv('CP1251',_CHARSET, '��������� �� Cookies');  # Cookie settings
$lang['Cookie_settings_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� cookie-����, ����� �������� �������� ��� ���������� �� ������������� ��. � �������� ������ �������� ������������ � ����������. ���������� ����� ��� ������� �� �����������, ������ ������ ��������� ����� �� �������� �� ������������� �� ������ ��� ��������.'); # These details define how cookies are sent to your users browsers. In most cases the default values for the cookie settings should be sufficient but if you need to change them do so with care, incorrect settings can prevent users logging in
$lang['Cookie_domain'] = iconv('CP1251',_CHARSET, '������ �� Cookie'); # Cookie domain
$lang['Cookie_name'] = iconv('CP1251',_CHARSET, '��� �� Cookie'); # Cookie name
$lang['Cookie_path'] = iconv('CP1251',_CHARSET, '��� �� Cookie'); # Cookie path
$lang['Cookie_secure'] = iconv('CP1251',_CHARSET, '��������� �� Cookie (�� https)'); # Cookie secure
$lang['Cookie_secure_explain'] = iconv('CP1251',_CHARSET, '��� �������� �� �������� SSL, ������ �� �������� ���� �����, � �������� ������ � �������� ���������.'); # If your server is running via SSL set this to enabled else leave as disabled
$lang['Session_length'] = iconv('CP1251',_CHARSET, '������� �� ������� (� �������)'); # Session length [ seconds ]

// Visual Confirmation
$lang['Visual_confirm'] = iconv('CP1251',_CHARSET, 'Enable Visual Confirmation');
$lang['Visual_confirm_explain'] = iconv('CP1251',_CHARSET, 'Requires users enter a code defined by an image when registering.');

// Forum Management
//
$lang['Forum_admin'] = iconv('CP1251',_CHARSET, '�������������� �� ��������'); # Forum Administration
$lang['Forum_admin_explain'] = iconv('CP1251',_CHARSET, '�� ���� ����� ������ �� ��������, ���������, ���������, ����������� ��� �������������� ��������� � ��������.'); # From this panel you can add, delete, edit, re-order and re-synchronise categories and forums
$lang['Edit_forum'] = iconv('CP1251',_CHARSET, '������� �� �����'); # Edit forum
$lang['Create_forum'] = iconv('CP1251',_CHARSET, '��������� �� ��� �����'); # Create new forum
$lang['Create_category'] = iconv('CP1251',_CHARSET, '��������� �� ���� ���������'); # Create new category
$lang['Remove'] = iconv('CP1251',_CHARSET, '����������'); # Remove
$lang['Action'] = iconv('CP1251',_CHARSET, '��������'); # Action
$lang['Update_order'] = iconv('CP1251',_CHARSET, '���������� �� ����'); # Update Order
$lang['Config_updated'] = iconv('CP1251',_CHARSET, '����������� �� ������ �� �������� �������'); # Forum Configuration Updated Successfully
$lang['Edit'] = iconv('CP1251',_CHARSET, '�������'); # Edit
$lang['Delete'] = iconv('CP1251',_CHARSET, '���������'); # Delete
$lang['Move_up'] = iconv('CP1251',_CHARSET, '������'); # Move up
$lang['Move_down'] = iconv('CP1251',_CHARSET, '������'); # Move down
$lang['Resync'] = iconv('CP1251',_CHARSET, '�������������'); # Resync
$lang['No_mode'] = iconv('CP1251',_CHARSET, '�� � ������ �����'); # No mode was set
$lang['Forum_edit_delete_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������ ���� ������� �� ��������. �� ��������� �� ������������� ��� ��������� �����, �������� ����������� ������ � ����.'); # The form below will allow you to customize all the general board options. For User and Forum configurations use the related links on the left hand side

$lang['Move_contents'] = iconv('CP1251',_CHARSET, '����������� �� ������������'); # Move all contents
$lang['Forum_delete'] = iconv('CP1251',_CHARSET, '��������� �� �����'); # Delete Forum
$lang['Forum_delete_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� �������� ����� (��� ���������) � �� �������� ���� �� ����� ���������� ������ ���� (��� ��������), ����� �������.'); # The form below will allow you to delete a forum (or category) and decide where you want to put all topics (or forums) it contained.

$lang['Status_locked'] = iconv('CP1251',_CHARSET, '��������');	# Locked
$lang['Status_unlocked'] = iconv('CP1251',_CHARSET, '��������'); # Unlocked
$lang['Forum_settings'] = iconv('CP1251',_CHARSET, '���� ��������� �� �����'); # General Forum Settings
$lang['Forum_name'] = iconv('CP1251',_CHARSET, '��� �� ������'); # Forum name
$lang['Forum_desc'] = iconv('CP1251',_CHARSET, '��������'); # Description
$lang['Forum_status'] = iconv('CP1251',_CHARSET, '������ �� ������'); # Forum status
$lang['Forum_pruning'] = iconv('CP1251',_CHARSET, '���������������'); # Auto-pruning

$lang['prune_freq'] = iconv('CP1251',_CHARSET, '�������� �� ��������� �� ������ �� �����'); # Check for topic age every
$lang['prune_days'] = iconv('CP1251',_CHARSET, '�������� ����, � ����� �� � ���� ������ ��'); # Remove topics that have not been posted to in
$lang['Set_prune_data'] = iconv('CP1251',_CHARSET, '�������� ��� ����������������� �� ���� �����, �� �� ��� ������ �������� (��� ���) �� �����������. ���� ������� �� � ����������� ��������.'); # You have turned on auto-prune for this forum but did not set a frequency or number of days to prune. Please go back and do so

$lang['Move_and_Delete'] = iconv('CP1251',_CHARSET, '������� � ���������'); # Move and Delete

$lang['Delete_all_posts'] = iconv('CP1251',_CHARSET, '��������� �� ������ ������'); # Delete all posts
$lang['Nowhere_to_move'] = iconv('CP1251',_CHARSET, '�� ��� ������� ���� �� �� ��������� ������'); # Nowhere to move too

$lang['Edit_Category'] = iconv('CP1251',_CHARSET, '��������� �� ���������'); # Edit Category
$lang['Edit_Category_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ����� �� �����������.'); # Use this form to modify a categories name.

$lang['Forums_updated'] = iconv('CP1251',_CHARSET, '������������ �� ������ � ����������� � �������� �������'); # Forum and Category information updated successfully

$lang['Must_delete_forums'] = iconv('CP1251',_CHARSET, '������ �� �������� ������ ������, ����� �� ������ �� ���������� �����������'); # You need to delete all forums before you can delete this category

$lang['Click_return_forumadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� ��������'); # Click %sHere%s to return to Forum Administration


//
// Smiley Management
//
$lang['smiley_title'] = iconv('CP1251',_CHARSET, '�������������� �� �������'); # Smiles Editing Utility
$lang['smile_desc'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������, ����������� � ���������� �������, ����� ������������� ����� �� ������� � ����������� ��.'); # From this page you can add, remove and edit the emoticons or smileys your users can use in their posts and private messages.

$lang['smiley_config'] = iconv('CP1251',_CHARSET, '������������ �� ���������'); # Smiley Configuration
$lang['smiley_code'] = iconv('CP1251',_CHARSET, '��� �� ���������'); # Smiley Code
$lang['smiley_url'] = iconv('CP1251',_CHARSET, '����������� �� ���������'); # Smiley Image File
$lang['smiley_emot'] = iconv('CP1251',_CHARSET, '������ �� ���������'); # Smiley Emotion
$lang['smile_add'] = iconv('CP1251',_CHARSET, '�������� �� ���� �������'); # Add a new Smiley
$lang['Smile'] = iconv('CP1251',_CHARSET, '�������'); # Smile
$lang['Emotion'] = iconv('CP1251',_CHARSET, '������'); # Emotion

$lang['Select_pak'] = iconv('CP1251',_CHARSET, '�������� ����� (.pak)'); # Select Pack (.pak) File
$lang['replace_existing'] = iconv('CP1251',_CHARSET, '������� �������������� �������'); # Replace Existing Smiley
$lang['keep_existing'] = iconv('CP1251',_CHARSET, '������ �������������� �������'); # Keep Existing Smiley
$lang['smiley_import_inst'] = iconv('CP1251',_CHARSET, '������ �� ������������� ������ � ������� � �� ������ ������ ������� � ����������� ����������. ������ �������� ������� ��������� � ���� �����, �� �� ����������� ������.'); # You should unzip the smiley package and upload all files to the appropriate Smiley directory for your installation.  Then select the correct information in this form to import the smiley pack.
$lang['smiley_import'] = iconv('CP1251',_CHARSET, '����������� �� ����� �� �������'); # Smiley Pack Import
$lang['choose_smile_pak'] = iconv('CP1251',_CHARSET, '�������� .pak ����'); # Choose a Smile Pack .pak file
$lang['import'] = iconv('CP1251',_CHARSET, '���������� ������'); # Import Smileys
$lang['smile_conflicts'] = iconv('CP1251',_CHARSET, '������� � ������ �� ��������:'); # What should be done in case of conflicts
$lang['del_existing_smileys'] = iconv('CP1251',_CHARSET, '��������� �� �������� ������� ����� �������������'); # Delete existing smileys before import
$lang['import_smile_pack'] = iconv('CP1251',_CHARSET, '����������� �� ����� �� �������'); # Import Smiley Pack
$lang['export_smile_pack'] = iconv('CP1251',_CHARSET, '��������� �� ����� �� �������'); # Create Smiley Pack
$lang['export_smiles'] = iconv('CP1251',_CHARSET, '�� �� ��������� ����� �� ������� �� ������ ������������� �� �������, �������� %s���%s �� �� ������� ����� smiles.pak. ���������� ���� ���� �� �������, �� �������� ������������ .pak. ���� ���� �������� ���� ZIP-����, �������� ������ ����������� �� ������� � .pak-�����.'); # To create a smiley pack from your currently installed smileys, click %sHere%s to download the smiles.pak file. Name this file appropriately making sure to keep the .pak file extension.  Then create a zip file containing all of your smiley images plus this .pak configuration file.

$lang['smiley_add_success'] = iconv('CP1251',_CHARSET, '��������� �� �������� �������'); # The Smiley was successfully added
$lang['smiley_edit_success'] = iconv('CP1251',_CHARSET, '��������� �� �������� �������'); # The Smiley was successfully updated
$lang['smiley_import_success'] = iconv('CP1251',_CHARSET, '������ �� ������� � ���������� �������'); # The Smiley Pack was imported successfully!
$lang['smiley_del_success'] = iconv('CP1251',_CHARSET, '��������� �� ���������� �������'); # The Smiley was successfully removed
$lang['Click_return_smileadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� ���������'); # Click %sHere%s to return to Smiley Administration


//
// User Management
//
$lang['User_admin'] = iconv('CP1251',_CHARSET, '�������������� �� �������������'); # User Administration
$lang['User_admin_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ������ ����� � ��������� �� ������ ����������. �� �� ��������� ������� �� ����������, ��������� ��������� �� ���������� �� ����� �� ���������� ��� ������������� �����.'); # Here you can change your user\'s information and certain specific options. To modify the users permissions please use the user and group permissions system.

$lang['Look_up_user'] = iconv('CP1251',_CHARSET, '����� �����������'); # Look up user

$lang['Admin_user_fail'] = iconv('CP1251',_CHARSET, '�������� �� ����������� �� ���� �������.'); # Couldn\'t update the users profile.
$lang['Admin_user_updated'] = iconv('CP1251',_CHARSET, '�������� �� ����������� � ������� �������.'); # The user\'s profile was successfully updated.
$lang['Click_return_useradmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� �������������'); # Click %sHere%s to return to User Administration

$lang['User_delete'] = iconv('CP1251',_CHARSET, '��������� �� �����������'); # Delete this user
$lang['User_delete_explain'] = iconv('CP1251',_CHARSET, '�������� ���, �� �� �������� ���� ����������. ���� �������� �� � ��������.'); # Click here to delete this user, this cannot be undone.
$lang['User_deleted'] = iconv('CP1251',_CHARSET, '����������� ���� ������ �������.'); # User was successfully deleted.

$lang['User_status'] = iconv('CP1251',_CHARSET, '����������� � �������'); # User is active
$lang['User_allowpm'] = iconv('CP1251',_CHARSET, '���� �� ����� ����� ���������'); # Can send Private Messages
$lang['User_allowavatar'] = iconv('CP1251',_CHARSET, '���� �� ������� ������ (�����)'); # Can display avatar

$lang['Admin_avatar_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ������ � �������� ������� (������) �� �����������.'); # Here you can see and delete the user\'s current avatar.

$lang['User_special'] = iconv('CP1251',_CHARSET, '��������� ������, ������� ���� �� ��������������'); # Special admin-only fields
$lang['User_special_explain'] = iconv('CP1251',_CHARSET, '���� ������ �� ����� �� ����� ��������� �� �������������. ��� ������ �� ��������� ����� �������� ���� �� ���������������� �����.'); # These fields are not able to be modified by the users.  Here you can set their status and other options that are not given to users.


//
// Group Management
//
$lang['Group_administration'] = iconv('CP1251',_CHARSET, '�������������� �� �������'); # Group Administration
$lang['Group_admin_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� �������������� ��������������� �����. ������ �� �� ���������, ��������� � ���������. ������ ���� �� �������� ���������� �� �������, �� �������� ������, ��� � ��������.'); # From this panel you can administer all your usergroups, you can; delete, create and edit existing groups. You may choose moderators, toggle open/closed group status and set the group name and description
$lang['Error_updating_groups'] = iconv('CP1251',_CHARSET, '������ ��� ������������ �� �������'); # There was an error while updating the groups
$lang['Updated_group'] = iconv('CP1251',_CHARSET, '������� � �������� �������'); # The group was successfully updated
$lang['Added_new_group'] = iconv('CP1251',_CHARSET, '������ ����� � ��������� �������'); # The new group was successfully created
$lang['Deleted_group'] = iconv('CP1251',_CHARSET, '������� � ������� �������'); # The group was successfully deleted
$lang['New_group'] = iconv('CP1251',_CHARSET, '��������� �� ���� �����'); # Create new group
$lang['Edit_group'] = iconv('CP1251',_CHARSET, '�������'); # Edit group
$lang['group_name'] = iconv('CP1251',_CHARSET, '��� �� �������'); # Group name
$lang['group_description'] = iconv('CP1251',_CHARSET, '�������� �� �������'); # Group description
$lang['group_moderator'] = iconv('CP1251',_CHARSET, '��������� �� �������'); # Group moderator
$lang['group_status'] = iconv('CP1251',_CHARSET, '������ �� �������'); # Group status
$lang['group_open'] = iconv('CP1251',_CHARSET, '��������'); # Open group
$lang['group_closed'] = iconv('CP1251',_CHARSET, '���������'); # Closed group
$lang['group_hidden'] = iconv('CP1251',_CHARSET, '������'); # Hidden group
$lang['group_delete'] = iconv('CP1251',_CHARSET, '���������'); # Delete group
$lang['group_delete_check'] = iconv('CP1251',_CHARSET, '������ ���� �����'); # Delete this group
$lang['submit_group_changes'] = iconv('CP1251',_CHARSET, '����� ���������'); # Submit Changes
$lang['reset_group_changes'] = iconv('CP1251',_CHARSET, '������� ���������'); # Reset Changes
$lang['No_group_name'] = iconv('CP1251',_CHARSET, '������ �� �������� ��� �� �������'); # You must specify a name for this group
$lang['No_group_moderator'] = iconv('CP1251',_CHARSET, '������ �� �������� ��������� �� �������'); # You must specify a moderator for this group
$lang['No_group_mode'] = iconv('CP1251',_CHARSET, '������ �� �������� ������ �� �������'); # You must specify a mode for this group, open or closed
$lang['No_group_action'] = iconv('CP1251',_CHARSET, '�� ��� ������� ��������'); # No action was specified
$lang['delete_group_moderator'] = iconv('CP1251',_CHARSET, '�� ������ �� ������� ����� �� ����������?'); # Delete the old group moderator?
$lang['delete_moderator_explain'] = iconv('CP1251',_CHARSET, '��� ������� ���������� �� �������, �������� ���� �����, �� �� ���������� ������ ��������� �� �������. � �������� ������, �� ��������� ������� � ����������� �� ������ ���� �� �������.'); # If you\'re changing the group moderator, check this box to remove the old moderator from the group.  Otherwise, do not check it, and the user will become a regular member of the group.
$lang['Click_return_groupsadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� �������'); # Click %sHere%s to return to Group Administration.
$lang['Select_group'] = iconv('CP1251',_CHARSET, '�������� �����'); # Select a group
$lang['Look_up_group'] = iconv('CP1251',_CHARSET, '��� �������'); # Look up group


//
// Prune Administration
//
$lang['Forum_Prune'] = iconv('CP1251',_CHARSET, '����������� �� �����'); # Forum Prune
$lang['Forum_Prune_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� �������� ����� ����, ����� �� � ���� ������� �� ��������� �� ��� ���� ���. ��� �� �������� ���, ������ ���� �� ����� �������. ���� �� ����� ������� ���� �����������, ����� � ���� � ������� ������. ��� �� ������ �� �������� �����.'); # This will delete any topic which has not been posted to within the number of days you select. If you do not enter a number then all topics will be deleted. It will not remove topics in which polls are still running nor will it remove announcements. You will need to remove these topics manually.
$lang['Do_Prune'] = iconv('CP1251',_CHARSET, '�������'); # Do Prune
$lang['All_Forums'] = iconv('CP1251',_CHARSET, '������ ������'); # All Forums
$lang['Prune_topics_not_posted'] = iconv('CP1251',_CHARSET, '������� ���� ��� ������� �� ����������'); # Prune topics with no replies in this many days
$lang['Topics_pruned'] = iconv('CP1251',_CHARSET, '������ �� ���������'); # Topics pruned
$lang['Posts_pruned'] = iconv('CP1251',_CHARSET, '�������� �� ���������'); # Posts pruned
$lang['Prune_success'] = iconv('CP1251',_CHARSET, '������������� �� �������� � �������'); # Pruning of forums was successful


//
// Word censor
//
$lang['Words_title'] = iconv('CP1251',_CHARSET, '����������� ����'); # Word Censoring
$lang['Words_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������, ��������� � ��������� ����, ����� �� ����� ����������� ����������� �� ��������. ����� ����, ������������� ���� ������� �� ����� ���������� � ��������������� �����. ������ �� ���������� ����� (*) � ������ � ������������� ����. ���� �������� *test* �� ��������� detestable, test* �� ��������� testing, *test �� ��������� detest.'); # From this control panel you can add, edit, and remove words that will be automatically censored on your forums. In addition people will not be allowed to register with usernames containing these words. Wildcards (*) are accepted in the word field, eg. *test* will match detestable, test* would match testing, *test would match detest.
$lang['Word'] = iconv('CP1251',_CHARSET, '����'); # Word
$lang['Edit_word_censor'] = iconv('CP1251',_CHARSET, '������� �� ������������� ����'); # Edit word censor
$lang['Replacement'] = iconv('CP1251',_CHARSET, '����������'); # Replacement
$lang['Add_new_word'] = iconv('CP1251',_CHARSET, '�������� �� ���� ����'); # Add new word
$lang['Update_word'] = iconv('CP1251',_CHARSET, '���������� �� ������������� ����'); # Update word censor

$lang['Must_enter_word'] = iconv('CP1251',_CHARSET, '������ �� �������� ���� � ����������'); # You must enter a word and its replacement
$lang['No_word_selected'] = iconv('CP1251',_CHARSET, '�� � ������� ���� �� �������'); # No word selected for editing

$lang['Word_updated'] = iconv('CP1251',_CHARSET, '������������� ���� � �������� �������'); # The selected word censor has been successfully updated
$lang['Word_added'] = iconv('CP1251',_CHARSET, '������ ����������� ���� � �������� �������'); # The word censor has been successfully added
$lang['Word_removed'] = iconv('CP1251',_CHARSET, '������������� ���� � ���������� �������'); # The selected word censor has been successfully removed

$lang['Click_return_wordadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������������� ����'); # Click %sHere%s to return to Word Censor Administration


//
// Mass Email
//
$lang['Mass_email_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� email �� ������ ����������� �� ������ ��� �� ��������� �� ���������� �����. ������� email �� �������� ���� �����������, ����� ��� ������ ���� ��������� �� ���������������� email, ����� ��� ������ � ��������������, ���� email-��� �� ������������ �� ��������� ���� BCC (blind carbon copy). ��� ������� email �� ������ ����� ����, ���� ���� �� ������ ���������� �����. ���� �� ����������� ������� �� ������� �� ������������ ��, � ��������� �� ��������. �� ������ ��������, ������ ���� �����.'); # Here you can email a message to either all of your users, or all users of a specific group.  To do this, an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed
$lang['Compose'] = iconv('CP1251',_CHARSET, '������ �� email-�');  # Compose

$lang['Recipients'] = iconv('CP1251',_CHARSET, '����������');  # Recipients
$lang['All_users'] = iconv('CP1251',_CHARSET, '������ �����������'); # All Users

$lang['Email_successfull'] = iconv('CP1251',_CHARSET, '������������ �� � ��������� �������'); # Your message has been sent
$lang['Click_return_massemail'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������� email'); # Click %sHere%s to return to the Mass Email form


//
// Ranks admin
//
$lang['Ranks_title'] = iconv('CP1251',_CHARSET, '�������������� �� ���������'); # Rank Administration
$lang['Ranks_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������, ��������� � ��������� �������. ������ ���� �� ��������� ��������� �������, ����� �� ��������� �� ���������� ���� ��������� �� �����������'); # Using this form you can add, edit, view and delete ranks. You can also create custom ranks which can be applied to a user via the user management facility

$lang['Add_new_rank'] = iconv('CP1251',_CHARSET, '�������� �� ��� ����'); # Add new rank

$lang['Rank_title'] = iconv('CP1251',_CHARSET, '������� �����'); # Rank Title
$lang['Rank_special'] = iconv('CP1251',_CHARSET, '������ �� ��������� ����'); # Set as Special Rank
$lang['Rank_minimum'] = iconv('CP1251',_CHARSET, '������� ������'); # Minimum Posts
$lang['Rank_maximum'] = iconv('CP1251',_CHARSET, '�������� ������'); # Maximum Posts
$lang['Rank_image'] = iconv('CP1251',_CHARSET, '������� ����������� (���, ������ ��������� ����� �� phpBB)'); # Rank Image (Relative to phpBB2 root path)
$lang['Rank_image_explain'] = iconv('CP1251',_CHARSET, '���� � ����� �����������, �������� � ���������� ����'); # Use this to define a small image associated with the rank

$lang['Must_select_rank'] = iconv('CP1251',_CHARSET, '������ �� �������� ����'); # You must select a rank
$lang['No_assigned_rank'] = iconv('CP1251',_CHARSET, '���� �������� ��������� ����'); # No special rank assigned

$lang['Rank_updated'] = iconv('CP1251',_CHARSET, '������ � ������� �������'); # The rank was successfully updated
$lang['Rank_added'] = iconv('CP1251',_CHARSET, '������ � ������� �������'); # The rank was successfully added
$lang['Rank_removed'] = iconv('CP1251',_CHARSET, '������ � ������ �������'); # The rank was successfully deleted
$lang['No_update_ranks'] = iconv('CP1251',_CHARSET, 'The rank was successfully deleted, however, user accounts using this rank were not updated.  You will need to manually reset the rank on these accounts');

$lang['Click_return_rankadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� ���������'); # Click %sHere%s to return to Rank Administration


//
// Disallow Username Admin
//
$lang['Disallow_control'] = iconv('CP1251',_CHARSET, '������� �� ������������� �����'); # Username Disallow Control
$lang['Disallow_explain'] = iconv('CP1251',_CHARSET, '��� ������������ ��� ����� �� �� ��������� �� �������� �� �������������. ������ �� ���������� ����� (*). �������� ��������, �� �������� �� ��������� ���� ������������ ���; ������ ����� �� �� ��������, �� �� ������ �� �������� �������.'); # Here you can control usernames which will not be allowed to be used.  Disallowed usernames are allowed to contain a wildcard character of *.  Please note that you will not be allowed to specify any username that has already been registered, you must first delete that name then disallow it

$lang['Delete_disallow'] = iconv('CP1251',_CHARSET, '������'); # Delete
$lang['Delete_disallow_title'] = iconv('CP1251',_CHARSET, '���������� �� ��������� ������������� ���'); # Remove a Disallowed Username
$lang['Delete_disallow_explain'] = iconv('CP1251',_CHARSET, '������ �� ���������� ��������� ������������� ��� ���� �� ����������� � ������� � �������� ���������'); # You can remove a disallowed username by selecting the username from this list and clicking submit

$lang['Add_disallow'] = iconv('CP1251',_CHARSET, '������'); # Add
$lang['Add_disallow_title'] = iconv('CP1251',_CHARSET, '�������� �� ��������� ������������� ���'); # Add a disallowed username
$lang['Add_disallow_explain'] = iconv('CP1251',_CHARSET, '������ �� ���������� * ���� �����, �� �� ��������� ��������� ������������� ����� ������������'); # You can disallow a username using the wildcard character * to match any character

$lang['No_disallowed'] = iconv('CP1251',_CHARSET, '���� ��������� ������������� �����'); # No Disallowed Usernames

$lang['Disallowed_deleted'] = iconv('CP1251',_CHARSET, '����������� ������������� ��� � ���������� �������'); # The disallowed username has been successfully removed
$lang['Disallow_successful'] = iconv('CP1251',_CHARSET, '����������� ������������� ��� � �������� �������'); # The disallowed username has been successfully added
$lang['Disallowed_already'] = iconv('CP1251',_CHARSET, '�����, ����� ��� ������, ������ �� ���� ���������. �� ���� � ���������, ��� � ����������� ����, ��� � ������������.'); # The name you entered could not be disallowed. It either already exists in the list, exists in the word censor list, or a matching username is present

$lang['Click_return_disallowadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � ������� �� ������������� �����'); # Click %sHere%s to return to Disallow Username Administration


//
// Styles Admin
//
$lang['Styles_admin'] = iconv('CP1251',_CHARSET, '�������������� �� ���������'); # Styles Administration
$lang['Styles_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������, ��������� � ��������� ������� �� ��������. ���� � ������������ �� �������� � ����.'); # Using this facility you can add, remove and manage styles (templates and themes) available to your users
$lang['Styles_addnew_explain'] = iconv('CP1251',_CHARSET, '���� ������ ������� ������ ����, ����� �� �������� �� �����������, ����� �����. ���� ���� ��� �� �� ����������� � ������ �����. �� �� �� �����������, ������ �������� �� ����������� ������ �� ����� ����.'); # The following list contains all the themes that are available for the templates you currently have. The items on this list have not yet been installed into the phpBB database. To install a theme simply click the install link beside an entry

$lang['Select_template'] = iconv('CP1251',_CHARSET, '�������� ��������'); # Select a Template

$lang['Style'] = iconv('CP1251',_CHARSET, '����'); # Style
$lang['Template'] = iconv('CP1251',_CHARSET, '��������'); # Template
$lang['Install'] = iconv('CP1251',_CHARSET, '����������'); # Install
$lang['Download'] = iconv('CP1251',_CHARSET, '�����'); # Download

$lang['Edit_theme'] = iconv('CP1251',_CHARSET, '��������� �� ����'); # Edit Theme
$lang['Edit_theme_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ���������� �� ��������� ����'); # In the form below you can edit the settings for the selected theme

$lang['Create_theme'] = iconv('CP1251',_CHARSET, '��������� �� ����'); # Create Theme
$lang['Create_theme_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ��������� ���� ���� �� �������� ��������. ������ ��������� �������, ���� ��������� ����������������� �� �����������. ����� ���� �� ������ �� ��������� ������� #, ����. CCCCCC � �����, � #CCCCCC �� �.'); # Use the form below to create a new theme for a selected template. When entering colours (for which you should use hexadecimal notation) you must not include the initial #, i.e.. CCCCCC is valid, #CCCCCC is not

$lang['Export_themes'] = iconv('CP1251',_CHARSET, '������������ �� ����'); # Export Themes
$lang['Export_explain'] = iconv('CP1251',_CHARSET, '��� ������ �� ������������ ������������ �� ������ �� �������� ��������. �������� �������� �� ������� ��-���� � ������� �� ������� ��������������� ���� �� ������, ����� � �� ����� �� �� ������� � ������������ �� �������� ��������. ��� ������������� �� � ��������, �� �� ���� ������ ����� �� ������� ����� �� ����� ��. �� �� ���� ����� �� ���� �������� �������, �������� ������ �� ���� ����� �� ������ � ������� �� ���������� �� ��� �������. �� ������ ���������� ����� �������������� �� phpBB 2.'); # In this panel you will be able to export the theme data for a selected template. Select the template from the list below and the script will create the theme configuration file and attempt to save it to the selected template directory. If it cannot save the file itself it will give you the option to download it. In order for the script to save the file you must give write access to the webserver for the selected template dir. For more information on this see the phpBB 2 users guide.

$lang['Theme_installed'] = iconv('CP1251',_CHARSET, '��������� ���� � ����������� �������'); # The selected theme has been installed successfully
$lang['Style_removed'] = iconv('CP1251',_CHARSET, '�������� ���� � ��������� �� ������ �����. �� �� ���������� ���� ���� �������, ������ �� �� �������� �� ������� ��� �����������'); # The selected style has been removed from the database. To fully remove this style from your system you must delete the appropriate style from your templates directory.
$lang['Theme_info_saved'] = iconv('CP1251',_CHARSET, '������������ �� ������ �� �������� �������� � ���������. ���� ������ �� ������� ������� �� theme_info.cfg �� read-only'); # The theme information for the selected template has been saved. You should now return the permissions on the theme_info.cfg (and if applicable the selected template directory) to read-only
$lang['Theme_updated'] = iconv('CP1251',_CHARSET, '��������� ���� � ��������. ������ �� ������������ ������ ��������� �� ������'); # The selected theme has been updated. You should now export the new theme settings
$lang['Theme_created'] = iconv('CP1251',_CHARSET, '������ � ���������. ������ �� ������������ ������ ��� ���������������� � ����, ����� �� �������� �� ������� ����� ��� �� ���������� �� ����� ������.'); # Theme created. You should now export the theme to the theme configuration file for safe keeping or use elsewhere

$lang['Confirm_delete_style'] = iconv('CP1251',_CHARSET, '������� �� ���, �� ������ �� �������� ���� ����?'); # Are you sure you want to delete this style

$lang['Download_theme_cfg'] = iconv('CP1251',_CHARSET, '���������������� ���� �� ���� �������� ������ ������ ��� ����� �� �����. �������� ������ ��-����, �� �� ������� ���� ���� ���� �������� ��. ���� ���� �� �������, ������ �� �� ��������� ����� � �������, ��������� ��������� �� ��������� �� ������. ���� ���� ������ �� ������������� ������ ������� �� ��������������� ��� �������� �� ����� ������.'); # The exporter could not write the theme information file. Click the button below to download this file with your browser. Once you have downloaded it you can transfer it to the directory containing the template files. You can then package the files for distribution or use elsewhere if you desire
$lang['No_themes'] = iconv('CP1251',_CHARSET, '���������, ����� ��� �������, ���� ��������� ����. �� �� ��������� ���� ���� �������� �� ����������� ������.'); # The template you selected has no themes attached to it. To create a new theme click the Create New link on the left hand panel
$lang['No_template_dir'] = iconv('CP1251',_CHARSET, '������������ � ����������� �� � ��������. �������� ��� ������� � ������� �� ������ �� ������� ��� ������������ �� ����������.'); # Could not open the template directory. It may be unreadable by the webserver or may not exist
$lang['Cannot_remove_style'] = iconv('CP1251',_CHARSET, '�� ������ �� ���������� ����, ����� � ������� �� ��������. ���� ��������� �������� ���� � �������� ������.'); # You cannot remove the style selected since it is currently the forum default. Please change the default style and try again.
$lang['Style_exists'] = iconv('CP1251',_CHARSET, '����� �� �����, ����� ��� �������, ���� ����������. ���� ������� �� � �������� �������� ���.'); # The style name to selected already exists, please go back and choose a different name.

$lang['Click_return_styleadmin'] = iconv('CP1251',_CHARSET, '�������� %s���%s �� �� �� ������� � �������������� �� ���������'); # Click %sHere%s to return to Style Administration

$lang['Theme_settings'] = iconv('CP1251',_CHARSET, '��������� �� ������'); # Theme Settings
$lang['Theme_element'] = iconv('CP1251',_CHARSET, '������� �� ������'); # Theme Element
$lang['Simple_name'] = iconv('CP1251',_CHARSET, '������ ���'); # Simple Name
$lang['Value'] = iconv('CP1251',_CHARSET, '��������'); # Value
$lang['Save_Settings'] = iconv('CP1251',_CHARSET, '������ �����������'); # Save Settings

$lang['Stylesheet'] = iconv('CP1251',_CHARSET, 'CSS �������'); # CSS Stylesheet
$lang['Background_image'] = iconv('CP1251',_CHARSET, '������ ��������'); # Background Image
$lang['Background_color'] = iconv('CP1251',_CHARSET, '����� ����'); # Background Colour
$lang['Theme_name'] = iconv('CP1251',_CHARSET, '��� �� ������'); # Theme Name
$lang['Link_color'] = iconv('CP1251',_CHARSET, '���� �� ��������'); # Link Colour
$lang['Text_color'] = iconv('CP1251',_CHARSET, '���� �� ������'); # Text Colour
$lang['VLink_color'] = iconv('CP1251',_CHARSET, '���� �� ���������� ������'); # Visited Link Colour
$lang['ALink_color'] = iconv('CP1251',_CHARSET, '���� �� ��������� ������'); # Active Link Colour
$lang['HLink_color'] = iconv('CP1251',_CHARSET, '���� �� ���������� ������'); # Hover Link Colour
$lang['Tr_color1'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 1'); # Table Row Colour 1
$lang['Tr_color2'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 2'); # Table Row Colour 2
$lang['Tr_color3'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 3'); # Table Row Colour 3
$lang['Tr_class1'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 1'); # Table Row Class 1
$lang['Tr_class2'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 2'); # Table Row Class 2
$lang['Tr_class3'] = iconv('CP1251',_CHARSET, '���� �� �������� ��� 3'); # Table Row Class 3
$lang['Th_color1'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 1'); # Table Header Colour 1
$lang['Th_color2'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 2'); # Table Header Colour 2
$lang['Th_color3'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 3'); # Table Header Colour 3
$lang['Th_class1'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 1'); # Table Header Class 1
$lang['Th_class2'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 2'); # Table Header Class 2
$lang['Th_class3'] = iconv('CP1251',_CHARSET, '���� �� �������� ����� 3'); # Table Header Class 3
$lang['Td_color1'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 1'); # Table Cell Colour 1
$lang['Td_color2'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 2'); # Table Cell Colour 2
$lang['Td_color3'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 3'); # Table Cell Colour 3
$lang['Td_class1'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 1'); # Table Cell Class 1
$lang['Td_class2'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 2'); # Table Cell Class 2
$lang['Td_class3'] = iconv('CP1251',_CHARSET, '���� �� �������� ������ 3'); # Table Cell Class 3
$lang['fontface1'] = iconv('CP1251',_CHARSET, '����� 1'); # Font Face 1
$lang['fontface2'] = iconv('CP1251',_CHARSET, '����� 2'); # Font Face 2
$lang['fontface3'] = iconv('CP1251',_CHARSET, '����� 3'); # Font Face 3
$lang['fontsize1'] = iconv('CP1251',_CHARSET, '������ �� ������ 1'); # Font Size 1
$lang['fontsize2'] = iconv('CP1251',_CHARSET, '������ �� ������ 2'); # Font Size 2
$lang['fontsize3'] = iconv('CP1251',_CHARSET, '������ �� ������ 3'); # Font Size 3
$lang['fontcolor1'] = iconv('CP1251',_CHARSET, '���� �� ������ 1'); # Font Colour 1
$lang['fontcolor2'] = iconv('CP1251',_CHARSET, '���� �� ������ 2'); # Font Colour 2
$lang['fontcolor3'] = iconv('CP1251',_CHARSET, '���� �� ������ 3'); # Font Colour 3
$lang['span_class1'] = iconv('CP1251',_CHARSET, '���� <span> 1'); # Span Class 1
$lang['span_class2'] = iconv('CP1251',_CHARSET, '���� <span> 2'); # Span Class 2
$lang['span_class3'] = iconv('CP1251',_CHARSET, '���� <span> 3'); # Span Class 3
$lang['img_poll_size'] = iconv('CP1251',_CHARSET, '������ �� ������������� �� ��������� �� ����������� � �������'); # Polling Image Size [px]
$lang['img_pm_size'] = iconv('CP1251',_CHARSET, '������ �� ������-���� �� ������� ��������� � �������'); # Private Message Status size [px]


//
// Install Process
//
$lang['Welcome_install'] = iconv('CP1251',_CHARSET, '����� ����� � ������������ �� phpBB 2'); # Welcome to phpBB 2 Installation
$lang['Initial_config'] = iconv('CP1251',_CHARSET, '���� ������������'); # Basic Configuration
$lang['DB_config'] = iconv('CP1251',_CHARSET, '������������ �� ������ �����'); # Database Configuration
$lang['Admin_config'] = iconv('CP1251',_CHARSET, '������������ �� ��������������'); # Admin Configuration
$lang['continue_upgrade'] = iconv('CP1251',_CHARSET, ''); # Once you have downloaded your config file to your local machine you may\'Continue Upgrade\' button below to move forward with the upgrade process.  Please wait to upload the config file until the upgrade process is complete.
$lang['upgrade_submit'] = iconv('CP1251',_CHARSET, '�������� ��������'); # Continue Upgrade

$lang['Installer_Error'] = iconv('CP1251',_CHARSET, '������ ��� ������������'); # An error has occurred during installation
$lang['Previous_Install'] = iconv('CP1251',_CHARSET, '������� � �������� ����������'); # A previous installation has been detected
$lang['Install_db_error'] = iconv('CP1251',_CHARSET, '������ ��� ���� �� ���������� �� ������ �����'); # An error occurred trying to update the database

$lang['Re_install'] = iconv('CP1251',_CHARSET, '���������� �� ���������� � ��� ��� �������.<br /><br />��� ������ �� �������������� phpBB 2, ������ �� �������� ������ �� ��-����. �������� ��������, �� ���� �� ������� ������ ������ �����! �� �� ������� ���� ��������������� ��� � �������� �� ��������������, ������ �������� ����� �� ����� �������!<br /><br />��������� ����� �� �������� ��!'); # Your previous installation is still active. <br /><br />If you would like to re-install phpBB 2 you should click the Yes button below. Please be aware that doing so will destroy all existing data, no backups will be made! The administrator username and password you have used to login in to the board will be re-created after the re-installation, no other settings will be retained. <br /><br />Think carefully before pressing Yes!

$lang['Inst_Step_0'] = iconv('CP1251',_CHARSET, '���������� ��, �� �������� phpBB 2. �� �� ��������� ������������, ���� ��������� ���������, ������� ��-����. �������� ��������, �� ������ �����, � ����� �����������, ������ �� ����������. ��� ����������� � ���� �����, ����� �������� ODBC, ���� �������� MS Access, ������ �� ��������� DSN �� ��� ����� �� ����������.'); # Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.

$lang['Start_Install'] = iconv('CP1251',_CHARSET, '������� �������������'); # Start Install
$lang['Finish_Install'] = iconv('CP1251',_CHARSET, '������� �������������'); # Finish Installation

$lang['Default_lang'] = iconv('CP1251',_CHARSET, '������� ���� �� ��������'); # Default board language
$lang['DB_Host'] = iconv('CP1251',_CHARSET, '������ �� ������ ����� / DSN'); # Database Server Hostname / DSN
$lang['DB_Name'] = iconv('CP1251',_CHARSET, '��� �� ������ �����'); # Your Database Name
$lang['DB_Username'] = iconv('CP1251',_CHARSET, '������������� ��� �� ������ �����'); # Database Username
$lang['DB_Password'] = iconv('CP1251',_CHARSET, '������ �� ������ �����'); # Database Password
$lang['Database'] = iconv('CP1251',_CHARSET, '������ ���� �����'); # Your Database
$lang['Install_lang'] = iconv('CP1251',_CHARSET, '�������� ���� �� ������������'); # Choose Language for Installation
$lang['dbms'] = iconv('CP1251',_CHARSET, '��� �� ������ �����'); # Database Type
$lang['Table_Prefix'] = iconv('CP1251',_CHARSET, '���������� �� ��������� � ������ �����'); # Prefix for tables in database
$lang['Admin_Username'] = iconv('CP1251',_CHARSET, '������������ ��� �� ��������������'); # Administrator Username
$lang['Admin_Password'] = iconv('CP1251',_CHARSET, '������ �� ��������������'); # Administrator Password
$lang['Admin_Password_confirm'] = iconv('CP1251',_CHARSET, '������ �� �������������� (����������)'); # Administrator Password [ Confirm ]

$lang['Inst_Step_2'] = iconv('CP1251',_CHARSET, '����������� ������������� � ��������. �� ��� ��������� ���������� � ���������. ���� �� ������ �� ��������� ����������������� �� ������. ���� �� ���������� �� ���������� � ���� ������������ � �� �������� ������������ �������. ���������� ��, �� �������� phpBB 2.'); # Your admin username has been created.  At this point your basic installation is complete. You will now be taken to a screen which will allow you to administer your new installation. Please be sure to check the General Configuration details and make any required changes. Thank you for choosing phpBB 2.

$lang['Unwriteable_config'] = iconv('CP1251',_CHARSET, 'Config-����� �� � ���������� �� ������. ����� �� config-����� �� ���� ������ �� ������ ������, ���� ���� �������� ������ ����. ������ �� ������ ���� ���� � ������� �� phpBB 2. (������ �� �� ��������� ��������, ���� ������ ����� �� ������ �� ������; �� ���������� �� ������� ������� ������� ���� ������������!) ���� ���� ��������� ����, ������ �� ������� � ������������������ ��� � ������, ����� ��������� �� ��������� ����� � �� �������� ����������������� ����� (���� ����� ��� � ������ �� ������ �������� �� ��������), �� �� ��������� ������������. ���������� ��, �� �������� phpBB 2.'); # Your config file is un-writeable at present. A copy of the config file will be downloaded to your when you click the button below. You should upload this file to the same directory as phpBB 2. Once this is done you should log in using the administrator name and password you provided on the previous form and visit the admin control centre (a link will appear at the bottom of each screen once logged in) to check the general configuration. Thank you for choosing phpBB 2.
$lang['Download_config'] = iconv('CP1251',_CHARSET, '������� Config-����'); # Download Config

$lang['ftp_choose'] = iconv('CP1251',_CHARSET, '�������� ����� �� �������'); # Choose Download Method
$lang['ftp_option'] = iconv('CP1251',_CHARSET, '<br />��� ���� FTP-��������� �� �������� � ���� ������ �� PHP, ������ �� �������� �� ������� config-����� �� FTP.'); # <br />Since FTP extensions are enabled in this version of PHP you may also be given the option of first trying to automatically ftp the config file into place.
$lang['ftp_instructs'] = iconv('CP1251',_CHARSET, '������� ��� �� ������ config-����� ��� �������, ����� ������� phpBB 2 �����������. ���� �������� �������� ��-���� ����������. �������� ��������, �� FTP-���� ������ �� � �����, ������� � � �� ������ phpBB 2 ����������.'); # You have chosen to ftp the file to the account containing phpBB 2 automatically.  Please enter the information below to facilitate this process. Note that the FTP path should be the exact path via ftp to your phpBB2 installation as if you were ftping to it using any normal client.
$lang['ftp_info'] = iconv('CP1251',_CHARSET, '�������� ������ FTP ����������'); # Enter Your FTP Information
$lang['Attempt_ftp'] = iconv('CP1251',_CHARSET, '���� �� ������� �� config-����� �� FTP'); # Attempt to ftp config file into place
$lang['Send_file'] = iconv('CP1251',_CHARSET, '������ �� ������� �����, �� �� �� ���� �����.'); # Just send the file to me and I\'ll ftp it manually
$lang['ftp_path'] = iconv('CP1251',_CHARSET, 'FTP-��� ��� phpBB 2'); # FTP path to phpBB 2
$lang['ftp_username'] = iconv('CP1251',_CHARSET, '������ FTP ���'); # Your FTP Username
$lang['ftp_password'] = iconv('CP1251',_CHARSET, '������ FTP ������'); # Your FTP Password
$lang['Transfer_config'] = iconv('CP1251',_CHARSET, '������� ���������'); # Start Transfer
$lang['NoFTP_config'] = iconv('CP1251',_CHARSET, '����� �� ����������� ������� �� config-����� �� FTP �� �������.���� ������� ����� � �� ������ �����.'); # The attempt to ftp the config file into place failed.  Please download the config file and ftp it into place manually.

$lang['Install'] = iconv('CP1251',_CHARSET, '�����������'); # Install
$lang['Upgrade'] = iconv('CP1251',_CHARSET, '�������'); # Upgrade


$lang['Install_Method'] = iconv('CP1251',_CHARSET, '�������� ������ �� �����������'); # Choose your installation method

$lang['Install_No_Ext'] = iconv('CP1251',_CHARSET, '�������������� �� PHP �� ����� ������ �� �������� ���� ���� �����, ����� ��� �������!'); # The php configuration on your server doesn\'t support the database type that you choose

$lang['Install_No_PCRE'] = iconv('CP1251',_CHARSET, 'phpBB2 ������� Perl-��������� Regular Expressions Module �� PHP, ����� ������ PHP ������������ �������� �� ��������!'); # phpBB2 Requires the Perl-Compatible Regular Expressions Module for php which your php configuration doesn\'t appear to support!

//
// That's all Folks!
// -------------------------------------------------

?>