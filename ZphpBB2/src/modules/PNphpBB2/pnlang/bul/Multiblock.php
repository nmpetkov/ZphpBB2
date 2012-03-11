<?php
// ----------------------------------------------------------------------
// Language File by Carls - carls@pnphpbb.com
// 
// Updated on: 03/22/2003
// ----------------------------------------------------------------------
// Default time/date formats
def_iconv("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
def_iconv("_DATEFORMAT","%d. %b");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
def_iconv("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock Options");
def_iconv("_SEP_BAR", "Show separator bar");
def_iconv("_SHOW_TITLE", "Show section title");
def_iconv('_USER_STRING_LENGTH','Maximal character length of user names (0 = full length)');
					
// Forum stats
def_iconv("_DISPLAY_STATS", "Display Forum Statistics in block");
def_iconv("_STATISTICS", "FORUM STATISTICS");
def_iconv("_NUMBER_OF_POSTS", "Number of posts");
def_iconv("_PTS", "Posts:");
def_iconv("_POSTS_PER_DAY", "Posts per day");
def_iconv("_PD", "per day:");
def_iconv("_NUMBER_TOPICS", "Number of topics");
def_iconv("_TOP", "Topics:");
def_iconv("_TOPICS_PER_DAY", "Topics per day");
def_iconv("_NUMBER_USERS", "Number of users");
def_iconv("_USR", "Users:");
def_iconv("_USERS_PER_DAY", "Users per day");


// Members Online
def_iconv("_DISPLAY_MEMBERS", "Display Members Online in block (Not available in center block)");
if (!defined('_AND'))
{
   def_iconv('_AND', 'and');
}
if (!defined('_ONLINE'))
{
   def_iconv('_ONLINE', 'online');
}
def_iconv('_MEMBERS_ONLINE_TITLE', "MEMBERS ONLINE");
def_iconv('_NOMEMBERS','Currently no members online.');
def_iconv('_CURRENTLY','We have');
def_iconv('_GUEST','guest');
def_iconv('_GUESTS','guests');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
def_iconv('_NOGUESTS','No');
def_iconv('_MEMBER','member');
def_iconv('_MEMBERS','members');
def_iconv('_YOUAREANON','You are an anonymous user. You can register for free by clicking <a href="user.php?op=check_age&amp;module=NS-NewUser"><b>here</b></a>');
def_iconv('_USE_PN_PM','Use PostNuke personal message notification');
def_iconv('_DISPLAY_TO_ANNON','Display online users to anonymous users');
def_iconv("_AMT_PRIVATEMSG","Amount of private message(s)!");
def_iconv("_UNREAD_PRIVATEMSG"," Unread private message(s)!");
def_iconv("_SEND_PM","Send a private message !");
def_iconv("_USE_PM_SOUND", "Sound for personal message (pnimages/)");
def_iconv("_INFO_ICON", "Image to display in anonymous box (pnimages/)");
def_iconv("_NUM_USERS", "Maximum number of users to show online");

// Login prompt
def_iconv("_DISPLAY_LOGIN", "Display Member Login prompt in block");
def_iconv("_REMEMBER_ME", "Show remember me check box");

// Catergory List
def_iconv("_DISPLAY_CATEGORY", "Display Category List in block");
def_iconv("_CATEGORY_LENGTH" , "Maximal character length of categories");
def_iconv("_INCLUDE_CATEGORY", "Show the following categories (CTRL+CLICK clears selections)");
def_iconv("_FORUM_DRILLDOWN", "Allow forum drilldown");
def_iconv("_FORUM_DRILLDOWN_MAX", "Maximul number of forums to drilldown");
def_iconv("_FORUM_CATEGORIES", "FORUMS");

// Last forum Posts
def_iconv("_FORUM_POSTS_TITLE", "LAST FORUM POSTS");
def_iconv("_DISPLAY_POSTS", "Display Last Forum Posts in block");
def_iconv("_DISPLAY_CAT_POSTS", "Display Category with each post");

def_iconv("_TIME_FORMAT", "Enter time format (PHP)");
def_iconv("_DATE_FORMAT", "Enter date format (PHP)");

def_iconv("_POST_BY","îò"); # by
def_iconv("_POST_ON","íà"); # on
def_iconv("_POST_AT","â"); # at
def_iconv("_GOTO_BOARD","[Êúì ôîğóìà]"); # Access Forum
def_iconv("_GOTO_POST","goto Post");
def_iconv("_BOARD_GUEST","Guest");
def_iconv("_PM_NOTIFICATION","New private messages:");

def_iconv("_TOPIC_TITLE","Topic");
def_iconv("_TOPIC_REPLIES","Replies");
def_iconv("_TOPIC_VIEWS","Views");
def_iconv("_POSTER","Poster");
def_iconv("_POST_DATE","Date");
def_iconv("_POST_TIME","Time");

def_iconv("_LAST_X_POSTS","Number of entries to display");
def_iconv("_LAST_X_SCROLL","Scroll forum posts in block");
def_iconv("_SCROLL_HEIGHT","Height of scroll area");
def_iconv("_SCROLL_IMAGES","Display images next to topics");
def_iconv("_GROUP_TOPICS","Show only the last post of every topic");
def_iconv("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

def_iconv("_EXCLUDE_FORUMS","Don't show posts of the following forums (CTRL+LEFT CLICK sets/clears selections)");
def_iconv("_MODULE_NAME", "PostNuke module name (Directory name) Default=PNphpBB2");
def_iconv("_MODULE_LINKS", "Use module calls for links to forum.");
def_iconv("_MODULE_LINKS_EXPLAIN", "(Example: http://www.host.com/modules.php?op=modload&name=)");
def_iconv("_MODULE_ERROR", "Module name/path is not valid, or module not installed. Please correct.");
def_iconv("_PREFIX_ERROR", "Forum prefix error, could not locate forum database.");
def_iconv("_TEMPLATE_ERROR","Invalid template settings!");
def_iconv("_POSTINFO_ERROR","Unable to obtain post-info from database!");

def_iconv("_SCROLL_SPEED", "Scroll Speed");
def_iconv("_DISPLAY_DATE", "Display Date");
def_iconv("_DISPLAY_TIME", "Display Time");
?>