<?php
/*
ZphpBB2 * Multi-Block
Created 03/17/2003
  ZphpBB2 MultiBlock for Zikula .72x and Syndication
  Written by: Carl Slaughter + carls@itsallbutstraw.com
  http://www.itsallbutstraw.com or http://www.pnphpbb.com

  Using some code from LastXPostsblock by: Damien A.
  
  @nikp N.Petkov: implementation for caching the content, 2010
  @nikp N.Petkov: refactoring to work in Zikula 1.3, 2012-03-12
*/

function ZphpBB2_MultiBlockblock_init()
{
   // Security
   SecurityUtil::registerPermissionSchema('ZphpBB2_Multiblock::', 'Block ID::');
}

function ZphpBB2_MultiBlockblock_info()
{
   // Values
   return array('text_type' => 'ZphpBB2',
                'module' => 'ZphpBB2',
                'text_type_long' => 'Multi-Block',
                'allow_multiple' => true,
                'form_content' => false,
                'form_refresh' => false,
                'show_preview' => true);
}

function ZphpBB2_MultiBlockblock_display($blockinfo)
{
	if (!SecurityUtil::checkPermission('ZphpBB2_Multiblock::', $blockinfo[bid]."::", ACCESS_READ)) {
   		return;
	}

	global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2, $textcolor3, $textcolor4;

	define('IN_PHPBB', true);
	// Implementation cached content
	$enable_cache = false;
	$write_to_cache = false;	# flag
	$cache_time = 180; # seconds
	if (isset($vars['cache_time'])) $cache_time = $vars['cache_time'];
	$content = "";
	if ($enable_cache and $cache_time>0) {
		$cachefilestem = 'ZphpBB2_' . $blockinfo['bid'];
	    $cachedir = pnConfigGetVar('temp');
	    if (StringUtil::right($cachedir, 1)<>'/') $cachedir .= '/';
	    if (isset($vars['cache_dir']) and !empty($vars['cache_dir'])) $cachedir .= $vars['cache_dir'];
	    else $cachedir .= 'any_cache';
	    $cachefile = $cachedir .'/'. $cachefilestem;
		// attempt to load from cache
		if (file_exists($cachefile)) {
			$file_time = filectime($cachefile);
			$now = time();
			$diff = ($now - $file_time);
			if ($diff <= $cache_time) {
			    $content = file_get_contents($cachefile);
			}
		}
		if (empty($content)) $write_to_cache = true; # not loaded, flag to write to cache later
	}
	if (empty($content)) {
		// Create output object
		// Get variables from content block
		$vars = BlockUtil::varsFromContent($blockinfo['content']);
		$vars['module_name'] = ($vars['module_name']) ? $vars['module_name'] : "ZphpBB2";
		$table_prefix = pnConfigGetVar('prefix') . "_phpbb_";
		// include some files
		$phpbb_root_path = "./modules/" . $vars['module_name'] . "/";
		include($phpbb_root_path . "extension.inc");
		include_once($phpbb_root_path . "includes/constants.".$phpEx);
		if (!function_exists('getpnlanguage')) {
	  		include_once($phpbb_root_path . "includes/functions.".$phpEx);
		}
		$langfile = $phpbb_root_path . 'pnlang/'.ZLanguage::getLanguageCodeLegacy().'/Multiblock.' . $phpEx;
		if (!file_exists($langfile)) {
			$phpbb_root_path . 'pnlang/eng/Multiblock.' . $phpEx;
		}
		include_once($langfile);

		if ($vars['module_links']) {
			$link_url = "modules.php?name=" . $vars['module_name'] . "&amp;file=";
			$pn_link_url = "modules.php?name=";
		} else {
		  $link_url = "index.php?name=" . $vars['module_name'] . "&amp;file=";
			$pn_link_url = "index.php?name=";
		}
		$blockinfo['content'] = "";
		// Keep track of the number of sections used
		$numsections = 0;

		if ($vars['display_posts']) {
			// Defaults some things if they are empty!
			$vars['module_name'] ? ($vars['module_name']) : "ZphpBB2";		  // Module directory name for ZphpBB2
			$vars['last_X_posts'] ? ($vars['last_X_posts']) : "5";					// Show this many recent posts.
			$vars['date_format'] ? ($vars['date_format']) : _DATEFORMAT;		// Default date format
			$vars['time_format'] ? ($vars['time_format']) : _TIMEFORMAT;		// Default time format
			$vars['scroll_speed'] ? ($vars['scroll_speed']) : 2;            // Defualt scroll speed
			$vars['scroll_speed'] = ($vars['scroll_speed'] < 1 || $vars['scroll_speed'] > 10) ? 2 : $vars['scroll_speed'];
		 	//do we want every topic to appear just once?
			$connkeys = $vars['group_topics'] ? "" . TOPICS_TABLE . ".topic_last_post_id = " . POSTS_TABLE . ".post_id" : "" . TOPICS_TABLE . ".topic_id = " . POSTS_TABLE . ".topic_id";
			// Determine the Browser the User is using for ScrollBox (Marquee)
			if (!empty($_SERVER['HTTP_USER_AGENT'])) {
				 $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
			} elseif (!empty($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) {
			   $HTTP_USER_AGENT = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
			}	else if (!isset($HTTP_USER_AGENT)) {
				 $HTTP_USER_AGENT = '';
			}

			if (ereg('MSIE ([0-9].[0-9]{1,2})', $HTTP_USER_AGENT, $log_version)) {
				 $ie_marquee = true;
			} 
	
			//limit to certain forums?
			if (!is_null ($vars['excluded_forums'])) {
				 $excluded_forums = in_array("", $vars['excluded_forums']) ? "" : "AND " . FORUMS_TABLE . ".forum_id NOT IN (" . implode(", ", $vars['excluded_forums']) . ")";
			}
			$lastvisit  = 0;
			//list of forums user can see if private
			$viewforums = "";
			//list of forums user can look into if private
			$readforums = "";
			//list of forums where user is moderator
			$modforums  = "";
			//just for guests
			$userstate  = 0; 
			if (UserUtil::isLoggedIn()) {
				$uid = pnUserGetVar('uid');
				//permission level for registered users
				$userstate = AUTH_REG;
				//are you an board admin?
				$query = "SELECT user_level, user_lastvisit, user_new_privmsg FROM   " . USERS_TABLE . " WHERE  user_id = $uid";
				$result = zExecuteSQLarray($query);
				list($level, $lastvisit, $newpms) = $result[0];
				if ($level == ADMIN) {
					//user have complete access
					$userstate = AUTH_ADMIN;
				} else {
					$query = "SELECT " . AUTH_ACCESS_TABLE . ".forum_id,
						max(" . AUTH_ACCESS_TABLE . ".auth_view), 
						max(" . AUTH_ACCESS_TABLE . ".auth_read), 
						max(" . AUTH_ACCESS_TABLE . ".auth_mod)
						FROM   " . USER_GROUP_TABLE . " INNER JOIN " . AUTH_ACCESS_TABLE . " ON " . USER_GROUP_TABLE . ".group_id = " . AUTH_ACCESS_TABLE . ".group_id
						WHERE  " . USER_GROUP_TABLE . ".user_id = $uid
						GROUP BY " . AUTH_ACCESS_TABLE . ".forum_id";
					$result = zExecuteSQLarray($query);
					/* while (list($forum_id, $auth_view, $auth_read, $auth_mod) = $result->fields) {
						$result->MoveNext(); */
					foreach ($result as $r) {
						list($forum_id, $auth_view, $auth_read, $auth_mod) = $r;
						//let's make a nice list of forums the user is allowed to view, read and moderate
						if($auth_read | $auth_mod) $readforums .= empty($readforums) ? $forum_id : ", " . $forum_id;
						if($auth_view | $auth_mod) $viewforums .= empty($viewforums) ? $forum_id : ", " . $forum_id;", " . $forum_id;
						if($auth_mod) $modforums  .= empty($modforums)  ? $forum_id : ", " . $forum_id;", " . $forum_id;
					}
				}
			}
			//let's see if we can optimize the query
			$view_private = !empty($viewforums) ? " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($viewforums)) " : "";
			$read_private = !empty($readforums) ? " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($readforums)) " : "";
			if (!empty($modforums)) {
			   $view_mod = " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
			   $read_mod = " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
			} else {
			   $view_mod = $read_mod = "";
			}
			//now for the main query - plz don't expect me to explain this monster
			$postslimit = ($vars['last_X_posts']) ? $vars['last_X_posts'] : 10;
			$query = "SELECT " . TOPICS_TABLE . ".topic_title, 
			           " . TOPICS_TABLE . ".topic_replies, 
						 " . TOPICS_TABLE . ".topic_views, 
						 " . TOPICS_TABLE . ".topic_id, 
						 " . USERS_TABLE . ".username, 
						 " . POSTS_TABLE . ".post_id, 
						 " . POSTS_TABLE . ".poster_id, 
						 " . POSTS_TABLE . ".post_time, 
						 " . FORUMS_TABLE . ".forum_id, 
						 " . FORUMS_TABLE . ".forum_name,
						 " . CATEGORIES_TABLE . ".cat_title 
						 FROM ((" . TOPICS_TABLE . " 
						 INNER JOIN " . POSTS_TABLE . " ON $connkeys) 
						 INNER JOIN " . USERS_TABLE . " ON " . USERS_TABLE . ".user_id = " . POSTS_TABLE . ".poster_id) 
						 INNER JOIN " . FORUMS_TABLE . " ON " . FORUMS_TABLE . ".forum_id = " . TOPICS_TABLE . ".forum_id 
						 INNER JOIN " . CATEGORIES_TABLE . " ON " . CATEGORIES_TABLE . ".cat_id = " . FORUMS_TABLE . ".cat_id 
						 WHERE (" . FORUMS_TABLE . ".auth_view <= $userstate $view_private $view_mod)
						 AND   (" . FORUMS_TABLE . ".auth_read <= $userstate $read_private $read_mod) $excluded_forums 
						 AND   " . TOPICS_TABLE . ".topic_status <> " . TOPIC_MOVED . "
						 ORDER BY post_time DESC LIMIT ".$postslimit;
			$result = zExecuteSQLarray($query);
			if (!$result) {
				$blockinfo['content'] = _POSTINFO_ERROR;
				return themesideblock($blockinfo);
	   		}
			$blockinfo['content'] .= "<table align=\"center\" width=\"98%\" cellpadding=\"1\" cellspacing=\"0\" border=\"0\">";
			if ($vars['sep_bar_psosts']) {
				$blockinfo['content'] .= "<tr><td colspan=\"30\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"30\" height=\"1\" valign=\"top\" align=\"center\" bgcolor=\"" . $textcolor1 . "\"></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"30\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
			}
			if ($vars['title_posts']) {
				 $blockinfo['content'] .= "<tr><td colspan=\"30\" align=\"center\" valign=\"top\"><span class=\"z-normal\"><strong>" . _FORUM_POSTS_TITLE . "</strong></span></td></tr>";
			   $blockinfo['content'] .= "<tr><td colspan=\"30\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
			}
	
			if (($blockinfo['position'] == 'c' || $blockinfo['position'] == 't' || $blockinfo['position'] == 'b') && !$vars['last_X_scroll']) {
				$blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _TOPIC_TITLE . "</strong></span></td>";
				$blockinfo['content'] .= "<td colspan=\"3\" width=\"10%\" align=\"center\"><span class=\"z-normal\"><strong>" . _TOPIC_REPLIES . "</strong></span></td>";
				$blockinfo['content'] .= "<td colspan=\"3\" width=\"10%\" align=\"center\"><span class=\"z-normal\"><strong>" . _TOPIC_VIEWS . "</strong></span></td>";
				$blockinfo['content'] .= "<td colspan=\"3\" align=\"center\"><span class=\"z-normal\"><strong>" . _POSTER . "</strong></span></td>";
				if ($vars['display_date']) {
					$blockinfo['content'] .= "<td colspan=\"3\" align=\"center\"><span class=\"z-normal\"><strong>" . _POST_DATE . "</strong></span></td>";
				}
				if ($vars['display_time']) {
					$blockinfo['content'] .= "<td colspan=\"3\" align=\"center\"><span class=\"z-normal\"><strong>" . _POST_TIME . "</strong></span></td>";
				}
				$blockinfo['content'] .= "</tr>";
		 	}
			if ($vars['last_X_scroll'] && $ie_marquee) {
				$blockinfo['content'] .= "<tr><td>";
				$blockinfo['content'] .= "<a name= \"scrollingCode\"></a>";
				$blockinfo['content'] .= "<marquee behavior= \"scroll\" align=\"center\" direction=\"up\" height=\"" . $vars['scroll_height'] . "\" scrollamount= \"" . $vars['scroll_speed'] . "\" scrolldelay= \"20\" onmouseover='this.stop()' onmouseout='this.start()'>";
			}
			/* while (list($topic_subject, $post_replies, $post_views, $topic_id, $post_username, $post_id, $poster_id, $post_time, $forum_id, $forum_name, $cat_title) = $result->fields) {
				$result->MoveNext(); */
			foreach ($result as $r) {
				list($topic_subject, $post_replies, $post_views, $topic_id, $post_username, $post_id, $poster_id, $post_time, $forum_id, $forum_name, $cat_title) = $r;
				$replyicon = ($lastvisit > 0 && $post_time > $lastvisit) ? "icon_newest_reply" : "icon_latest_reply";
				$post_date = ml_ftime($vars['date_format'], getUserTime($post_time));
				$post_time = ml_ftime($vars['time_format'], getUserTime($post_time));
				$post_username = ($poster_id != ANONYMOUS) ? $post_username : _BOARD_GUEST;
				$profile_url = ($poster_id != ANONYMOUS) ? $link_url . "profile&amp;mode=viewprofile&amp;u=$poster_id" : "";
				$username_short = $post_username;
	
				if (($vars['title_string_length'] > 0) && (strlen($post_username) > $vars['user_string_length'])) {
						$username_short = mb_substr($post_username,0,$vars['user_string_length']) . '...';
				}
	
				$topic_short=$topic_subject;
				if (($vars['title_string_length'] > 0) && (strlen($topic_subject) > $vars['title_string_length'])) {
						$topic_short = mb_substr($topic_subject,0,$vars['title_string_length']) . '...';
				}
				if ($blockinfo['position'] == 'c' || $blockinfo['position'] == 't' || $blockinfo['position'] == 'b') {
						if ($vars['last_X_scroll'] && $ie_marquee) {
				   	 $blockinfo['content'] .= "<a href=\"" . $link_url . "viewtopic&amp;p=$post_id#" . $post_id . "\" title=\"" . _GOTO_POST . "\"><img src=\"" . $phpbb_root_path . "pnimages/" . $replyicon . ".gif\" border=0 alt=\"" . _GOTO_POST . "\"></a>&nbsp;&nbsp;";
				      $blockinfo['content'] .= "<a href=\"" . $link_url . "viewtopic&amp;t=" . $topic_id . "\" title=\"" . $cat_title . '/' . $forum_name . '/' . $topic_subject . "\">" . $topic_subject . "</a>&nbsp;<strong>" . _TOPIC_REPLIES . "</strong>&nbsp;(" . $post_replies . ")&nbsp;<strong>" . _TOPIC_VIEWS . "</strong>&nbsp;(" . $post_views . ")</span><br />";
				      $blockinfo['content'] .= "&nbsp;&nbsp;&nbsp;<font color=\"#666666\"><i>" . _POST_BY . "&nbsp;<a href=\"" . $profile_url . "\">" . pnVarPrepForDisplay($post_username) . "</a>&nbsp;in&nbsp;<a href=\"" . $link_url . "viewforum&amp;f=$forum_id\">$forum_name&nbsp;</a>";
				      if ($vars['display_date']) {
				      		$blockinfo['content'] .= "<strong>" . _POST_ON . "</strong> " . $post_date;
				      }
				      if ($vars['display_date']) {
				      		$blockinfo['content'] .= "<strong>" . _POST_AT . "</strong> " . $post_time;
				      }
				      //$blockinfo['content'] .= "</i></font><br>&nbsp;<br>";
				      $blockinfo['content'] .= "</i></font><br>";
					} else {
				      $blockinfo['content'] .= "<tr>";
				      $blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><a class=\"z-normal\" href=\"" . $link_url . "viewtopic&amp;p=$post_id#" . $post_id . "\" title=\"" . _GOTO_POST . "\"><img src=\"" . $phpbb_root_path . "pnimages/" . $replyicon . ".gif\" border=0 alt=\"" . _GOTO_POST . "\"></a></span>";
				      $blockinfo['content'] .= "&nbsp;<a class=\"z-normal\" href=\"" . $link_url . "viewtopic&amp;t=" . $topic_id . "\" title=\"" . $cat_title . '/' . $forum_name . '/' . $topic_subject . "\">" . $topic_short . "</a></span></td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td align=\"right\" valign=\"top\"><span class=\"z-normal\">(" . $post_replies . ")</span></td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td align=\"right\" valign=\"top\"><span class=\"z-normal\">(" . $post_views . ")</span></td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td><span class=\"z-normal\"><strong>" . _POST_BY ."</strong>&nbsp;<a class=\"z-normal\" href=\"" . $profile_url . "\" title=\"" . $post_username . "\">" . pnVarPrepForDisplay($username_short) . "</a></td>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      if ($vars['display_date']) {
				      		$blockinfo['content'] .= "<td>&nbsp;</td>";
				         $blockinfo['content'] .= "<td><span class=\"z-normal\"><strong>" . _POST_ON . "</strong> " . $post_date . "</span></td>";
				      }
				      if ($vars['display_time']) {
				         $blockinfo['content'] .= "<td>&nbsp;</td>";
				         $blockinfo['content'] .= "<td><span class=\"z-normal\"><strong>" . _POST_AT . "</strong> " . $post_time . "</span></td>";
				      }
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "</tr>";
					}
				} else {
				   if ($vars['last_X_scroll'] && $ie_marquee) {
				      $blockinfo['content'] .=  "<a href=\"" . $link_url . "viewtopic&amp;p=$post_id#" . $post_id . "\" title=\"" . _GOTO_POST . "\"><img src=\"" . $phpbb_root_path . "pnimages/" . $replyicon . ".gif\" border=0 alt=\"" . _GOTO_POST . "\"></a><a href=\"" . $link_url . "viewtopic&amp;t=" . $topic_id . "\"><strong> $topic_subject (" . $post_replies . ")</strong></a><br><font color=\"#666666\"><i>" . _POST_BY . " <a href=\"" . $profile_url . "\">" . pnVarPrepForDisplay($post_username) . "</a> in <a href=\"" . $link_url . "viewforum&amp;f=$forum_id\">&nbsp;$forum_name</a>&nbsp;";
				      if ($vars['display_date']) {
				      		$blockinfo['content'] .=  "<strong>" . _POST_ON . "</strong> " . $post_date . "&nbsp;";
				      }
				      if ($vars['display_time']) {
				      		$blockinfo['content'] .=  "<strong>" . _POST_AT . "</strong> " . $post_time . "</i></font>";
				      }
				      //$blockinfo['content'] .=  "<br>&nbsp;<br>";
				      $blockinfo['content'] .=  "<br>";
				   } else {
				      $blockinfo['content'] .= "<tr>";
				      $blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><a class=\"z-normal\" href=\"" . $link_url . "viewtopic&amp;p=$post_id#" . $post_id . "\" title=\"" . _GOTO_POST . "\"><img src=\"" . $phpbb_root_path . "pnimages/" . $replyicon . ".gif\" border=0 alt=\"" . _GOTO_POST . "\"></a></span></td>";
				      $blockinfo['content'] .= "<td width=\"100%\" valign=\"top\"><span class=\"z-normal\"><a class=\"z-normal\" href=\"" . $link_url . "viewtopic&amp;t=" . $topic_id . "\" title=\"" . $cat_title . '/' . $forum_name . '/' . $topic_subject . "\">" . $topic_short . "</a>";
				      $blockinfo['content'] .= "&nbsp;<strong>" . _POST_BY . "&nbsp;<a class=\"z-normal\" href=\"" . $profile_url . "\" title=\"" . $post_username . "\">" . pnVarPrepForDisplay($username_short) . "</a></strong>";
				      $blockinfo['content'] .= "</span></td>";
				      //$blockinfo['content'] .= "<td align=\"center\" valign=\"top\"><span class=\"z-normal\">(" . $post_replies . ")</span></td>";
				      $blockinfo['content'] .= "</tr>";
				      /*$blockinfo['content'] .= "<tr>";
				      $blockinfo['content'] .= "<td>&nbsp;</td>";
				      $blockinfo['content'] .= "<td colspan=\"2\"><span class=\"z-normal\"><strong>" . _POST_BY . "&nbsp;<a class=\"z-normal\" href=\"" . $profile_url . "\" title=\"" . $post_username . "\">" . pnVarPrepForDisplay($username_short) . "</a></strong></span></td>";
				      $blockinfo['content'] .= "</tr>"; */
				      if ($vars['display_date'] or $vars['display_time']) {
					      $blockinfo['content'] .= "<tr>";
					      $blockinfo['content'] .= "<td>&nbsp;</td>";
					      $blockinfo['content'] .= "<td colspan=\"2\"><span class=\"z-normal\">";
					      if ($vars['display_date']) {			 		
					      		$blockinfo['content'] .= "<strong>" . _POST_ON . "</strong> " . $post_date . "&nbsp;";
					      }
					      if ($vars['display_time']) {
					      		$blockinfo['content'] .= "<strong>" . _POST_AT . "</strong> " . $post_time . "";
					      }
					      $blockinfo['content'] .= "</span></td></tr>";
				      }
				   }
				}
			}
			// end foreach (posts)
	    	if ($vars['last_X_scroll'] && $ie_marquee)	{
				$blockinfo['content'] .= "</marquee></td></tr>";
			}
				 
			if (!empty($newpms)) {
				$blockinfo['content'] .= "<p style=\"text-align:center; margin:0.5em\" class=\"z-normal\" align=\"center\">" . _PM_NOTIFICATION . " <a class=\"z-normal\" href=\"" . $link_url . "privmsg&amp;folder=inbox\"><strong>" . $newpms . "</strong></a></p>";
			}
		 		
			$blockinfo['content'] .= "</table>";
			$numsections++;
		}
		// end: if ($vars['display_posts'])
	
		if ($vars['display_stats']) {
			// this language file is for stats display only
			//Get Zikula's Default Language and use this for ZphpBB2 default.
			$language = getPNlanguage();
			$langfile = $phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx;
			if (!file_exists($langfile)) {
				$language = "english"; // If no language files exist for Zikula language then use english
				$langfile = $phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx;
			}
			include_once($langfile);
	   		$query = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'default_dateformat' or config_name = 'board_startdate' or config_name = 'board_timezone'";
			$result = zExecuteSQLarray($query);
	   		if (!$result) {
	   			 return themesideblock($blockinfo);
	   		}
	   		list($deafault_dateformat) = $result[0];
	   		list($board_startdate) = $result[0];
	   		list($board_timezone) = $result[0];
	   		$total_posts = get_PNpbpbb_db_stat('postcount');
	   		$total_users = get_PNpbpbb_db_stat('usercount');
	   		$total_topics = get_PNpbpbb_db_stat('topiccount');
	   		$start_date = ml_ftime($vars['date_format'], $board_startdate);
	   		$boarddays = ( time() - $board_startdate ) / 86400;
	   		$posts_per_day = sprintf("%.2f", $total_posts / $boarddays);
	   		$topics_per_day = sprintf("%.2f", $total_topics / $boarddays);
	   		$users_per_day = sprintf("%.2f", $total_users / $boarddays);
	
	   		if ($posts_per_day > $total_posts) {
	   			 $posts_per_day = $total_posts;
	   		}
	   		if ($topics_per_day > $total_topics) {
	   			 $topics_per_day = $total_topics;
	   		}
	   		if ($users_per_day > $total_users) {
	   			 $users_per_day = $total_users;
	   		}
	
	   		$blockinfo['content'] .= "<table align=\"center\" width=\"98%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">";
	
	   		if ($numsections > 0 && $vars['sep_bar_stats']) {
	   			 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
					 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"1\" valign=\"top\" align=\"center\" bgcolor=\"" . $textcolor1 . "\"></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
				}
				if ($vars['title_stats']) {
	   			 $blockinfo['content'] .= "<tr><td colspan=\"10\" align=\"center\" valign=\"top\"><span class=\"z-normal\"><strong>" . _STATISTICS . "</strong></span></td></tr>";
				 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
	   		}
	   		if ($blockinfo['position'] == 'c' || $blockinfo['position'] == 't' || $blockinfo['position'] == 'b') {
	   			 $blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>&nbsp;" . _NUMBER_TOPICS . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $total_topics . "</span></td>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>" . _NUMBER_OF_POSTS . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $total_posts . "</span></td>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>" .  _NUMBER_USERS . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $total_users . "</span></td>";
				$blockinfo['content'] .= "</tr>";
				$blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>&nbsp;" . _TOPICS_PER_DAY . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $topics_per_day . "</span></td>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>" . _POSTS_PER_DAY . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $posts_per_day . "</span></td>";
				$blockinfo['content'] .= "<td width=\"10%\" align=\"left\"><span class=\"z-normal\"><strong>" . _USERS_PER_DAY . ":</strong></span></td>";
				$blockinfo['content'] .= "<td width=\"5%\" align=\"center\" valign=\"bottom\"><span class=\"z-normal\">" . $users_per_day . "</span></td>";
				$blockinfo['content'] .= "</tr>";
	   		} else {
	     	   $blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _TOP . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $total_topics . "</span></td>";
				$blockinfo['content'] .= "<td>&nbsp;&nbsp;</td>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _PD . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $topics_per_day . "</span></td>";
				$blockinfo['content'] .= "</tr>";
				$blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" .  _USR . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $total_users . "</span></td>";
				$blockinfo['content'] .= "<td>&nbsp;&nbsp;</td>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _PD . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $users_per_day . "</span></td>";
				$blockinfo['content'] .= "</tr>";
				$blockinfo['content'] .= "<tr>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _PTS . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $total_posts . "</span></td>";
				$blockinfo['content'] .= "<td>&nbsp;&nbsp;</td>";
				$blockinfo['content'] .= "<td align=\"left\"><span class=\"z-normal\"><strong>" . _PD . "</strong></span></td>";
				$blockinfo['content'] .= "<td align=\"right\" valign=\"bottom\"><span class=\"z-normal\">" . $posts_per_day . "</span></td>";
				$blockinfo['content'] .= "</tr>";
	   		}
	   		$blockinfo['content'] .= "</table>";
	   		$numsections++;
		}
		// if ($vars['display_stats'])
	
		if ($vars['display_category']) {
	   		//What categories?
	   		if (!is_null ($vars['include_category'])) {
	   			$include_forums = in_array("", $vars['include_category']) ? "" : "WHERE " . CATEGORIES_TABLE . ".cat_id IN (" . implode(", ", $vars['include_category']) . ")";
	   		}
	   		$query = "SELECT cat_id, cat_title FROM " . CATEGORIES_TABLE . " " .  $include_forums . " ORDER BY cat_id";
	   		$result = zExecuteSQLarray($query);
	   		if (!$result) {
				$blockinfo['content'] = _POSTINFO_ERROR;
	   		}
	   		$blockinfo['content'] .= "<table align=\"center\" width=\"98%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">";
	   		if ($numsections > 0 && $vars['sep_bar_category']) {
				$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"1\" valign=\"top\" align=\"center\" bgcolor=\"" . $textcolor1 . "\"></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
	   		}
	   		if ($vars['title_category']) {
	   			 $blockinfo['content'] .= "<tr><td colspan=\"10\" align=\"center\" valign=\"top\"><span class=\"z-normal\"><strong>" . _FORUM_CATEGORIES . "</strong></span></td></tr>";
				$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
	   		}
	   		$catcount = 0;
	   		$numcolumns = ($blockinfo['position'] == 'c' || $blockinfo['position'] == 't' || $blockinfo['position'] == 'b') ? 3 : 1;
	   		$drilldownmax = ($vars['forum_drilldown_max']) ? " LIMIT " . $vars['forum_drilldown_max'] : "";
	
			foreach ($result as $r) {
				list($cid,$txt) = $r;
				$catcount++;
				$txt=strip_tags(str_replace("'","&#146",$txt));
				if (!$txt) {
						$txt="…";
				}
				if (strlen($txt)>=$vars['category_length']) {
						$txt2=substr($txt,0,$vars['category_length'])."…";
				} else {
				   $txt2=$txt;
				}
				if ($catcount == 1) {
						$blockinfo['content'] .= "<tr>";
				}
				$blockinfo['content'] .= "<td title='".$txt."' width='25%' align=\"Left\" valign=\"top\"><img src=\"" . $phpbb_root_path . "pnimages/arrow_bs.gif\" alt=\"Category\" width=\"5\" height=\"5\" align=\"middle\" />&nbsp;<a href='" . $link_url . "index&amp;c=" . $cid . "'><span class='z-normal'><strong>".$txt2."</strong></span></a>";
				if ($vars['forum_drilldown']) {
					// Drill down the forums now!
					$query2 = "SELECT forum_id, forum_name FROM " . FORUMS_TABLE . " WHERE cat_id = " . $cid . " ORDER BY forum_id" . $drilldownmax;
					$result2 = zExecuteSQLarray($query2);
					if (!$result2) {
					   	$blockinfo['content'] = _POSTINFO_ERROR;
				    }
					$forumcount = 0;
					/* while (list($fid,$txt3) = $result2->fields) { */
					foreach ($result2 as $r2) {
						list($fid, $txt3) = $r2;
						$forumcount++;
						$txt3=strip_tags(str_replace("'","&#146",$txt3));
						if (!$txt3) {
							  $txt4="…";
						}
							if (strlen($txt3)>=$vars['category_length']) {
							  $txt4=substr($txt3,0,$vars['category_length'])."…";
						} else {
							  $txt4=$txt3;
						}
						$blockinfo['content'] .= "<br />&nbsp;&nbsp;<img src=\"" . $phpbb_root_path . "pnimages/arrow_gs.gif\" alt=\"Category\" width=\"5\" height=\"5\" align=\"middle\" />&nbsp;<a title='".$txt3."' href='" . $link_url . "viewforum&amp;f=" . $fid . "'><span class='z-normal'>".$txt4."</span></a>";
					}
				}   
	   			$blockinfo['content'] .= "</td>";
	    		if ($catcount == $numcolumns) {
					$blockinfo['content'] .= "</tr>";
					$blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"3\" valign=\"top\" align=\"center\"></td></tr>";
					$catcount = 0;
				}
		    }
			if ($catcount <> $numcolumns) {
				 $blockinfo['content'] .= "</tr>";
			}
		    $blockinfo['content'] .= "</table>";
			$numsections++;
		}
		// if ($vars['display_category'])
		 
		if ($vars['display_members'] && (!($blockinfo['position'] == 'c') || !($blockinfo['position'] == 't') || !($blockinfo['position'] == 'b'))) {
		 	$pntable = pnDBGetTables();
			$numusers = 0;
			$numguests = 0;
	   		$sessioninfocolumn = &$pntable['session_info_column'];
	   		$sessioninfotable = $pntable['session_info'];
		    $activetime = time() - (pnConfigGetVar('secinactivemins') * 60);
			
		    // Get list of users on-line
	   		$query = "SELECT $sessioninfocolumn[uid], count( 1 )
				      	FROM $sessioninfotable
				     	WHERE $sessioninfocolumn[lastused] > $activetime AND $sessioninfocolumn[uid] >0
						GROUP BY $sessioninfocolumn[uid]";
	     	$result = zExecuteSQLarray($query);
			if ($result) $numusers = count($result);
				
	   		$query2 = "SELECT $sessioninfocolumn[uid], count( 1 )
	   						   FROM $sessioninfotable
				  	     WHERE $sessioninfocolumn[lastused] > $activetime AND $sessioninfocolumn[uid] = '0'
			  		  		 GROUP BY $sessioninfocolumn[ipaddr]";
	   		$result2 = zExecuteSQLarray($query2);
			if ($numguests) $numusers = count($result2);
			$unames = array();
			$i = 0;
	   		foreach ($result as $r) {
				$i++;
				$num = $r[0];
			    if ($num > 0){
					$unames[] = pnUserGetVar('uname', $num);
				}
				if ($i == $vars['num_users' && $vars['num_users'] <> 0]){
					break;
				}
			}
			// Pluralise
			$guests = ($numguests > 0) ? (($numguests == 1) ? "1 " . _GUEST : $numguests . " " ._GUESTS) : _NOGUESTS . " " . _GUESTS;  
			$users = ($numusers > 0) ? (($numusers == 1) ? "1 " . _MEMBER : $numusers . " " . _MEMBERS) : _NOGUESTS . " " . _MEMBERS;
			
	   		// Sort by username
		    sort($unames);
		    reset($unames);
	
	   		$blockinfo['content'] .= "<table align=\"center\" width=\"98%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">";
				
				if ($numsections > 0 && $vars['sep_bar_members']) {
			     $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
					 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"1\" valign=\"top\" align=\"center\" bgcolor=\"" . $textcolor1 . "\"></td></tr>";
					 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr>";
				}
	
				if ($vars['title_members']) {
			     $blockinfo['content'] .= "<tr><td colspan=\"10\" align=\"center\" valign=\"top\"><span class=\"z-normal\"><strong>" . _MEMBERS_ONLINE_TITLE . "</strong></span></td></tr>";
					 $blockinfo['content'] .= "<tr><td colspan=\"10\" height=\"5\" valign=\"top\" align=\"center\"></td></tr></table>";
				}
				
				if ($vars['display_to_annon'] && !UserUtil::isLoggedIn() || UserUtil::isLoggedIn()) {
			     if ($numusers != 0) {
		 	 	    	$blockinfo['content'] .= '<center><table border="0" width="98%" cellpadding="0" cellspacing="1">';
				   foreach ($unames as $uname) {
				      $uname2=$uname;
				      $uname3=$uname;
				      if (strlen($uname2) > 7) {
			     	   		  // Limit title length to avoid wrap
				    		  $uname2 = strip_tags($uname2, '<a><i><b><ul><li>');
				    		  $uname2 = mb_substr($uname2,0,7);
	   		       		  $uname2 .= "...";
	   		   		   }
				 				 if (strlen($uname3) > 15) {
	   				 	 			// Limit title length to avoid wrap
	   		        	 	$uname3 = strip_tags($uname3, '<a><i><b><ul><li>');
	   		        		$uname3 = mb_substr($uname3,0,15);
	   		    	    	$uname3 .= "...";
	   		    		 }
								 
								 $blockinfo['content'] .= '<tr><td><img src="' . $phpbb_root_path . 'pnimages/arrow_rs.gif" alt=""></td><td><font size="1">';
								 if ($vars['pn_pm']) {
								$blockinfo['content'] .= '<a href="user.php?op=userinfo&amp;uname=' . $uname . '" title="' . $uname . '">';
								 } else {
								$blockinfo['content'] .= '<a href="' . $link_url . 'profile&amp;mode=viewprofile&u=' . $uname . '" title="' . $uname . '">';
								 }
								 $blockinfo['content'] .= (pnUserGetVar('uname') == $uname) ? pnVarPrepForDisplay($uname2) : pnVarPrepForDisplay($uname3) . '</a></font></td>';
								 
								 $uid = pnUserGetVar('uid');
	   		 			 	 $username = pnUserGetVar('uname');
								 
								 if ($username == $uname) {
					   		  	if ($vars['pn_pm']) {
							    		 $column = &$pntable['priv_msgs_column'];
	   		 			 		     $result2 = $dbconn->Execute("SELECT count(*) FROM $pntable[priv_msgs] WHERE $column[read_msg] ='0' and $column[to_userid]=".pnUserGetVar('uid'));
	   		 			 				 list($unread) = $result2->fields;
	   		 			 				 $result4 = $dbconn->Execute("SELECT count(*) FROM $pntable[priv_msgs] WHERE $column[to_userid]=" . pnUserGetVar('uid'));
	   		 			 				 list($total) = $result4->fields;
	   		 			 				 $result5 = $dbconn->Execute("SELECT pn_from_userid FROM $pntable[priv_msgs] WHERE $column[read_msg] ='0' and 
	   			 			    	 $column[to_userid]=" . pnUserGetVar('uid'));
										} else {
	   		               $column = &$pntable['priv_msgs_column'];
	  				 					 $result2 = $dbconn->Execute("SELECT count(*) FROM " . $table_prefix . "privmsgs WHERE (privmsgs_type='1' or privmsgs_type='5') and privmsgs_to_userid=" . pnUserGetVar('uid')); 
	      			 				 list($unread) = $result2->fields;
	   				 					 $result4 = $dbconn->Execute("SELECT count(*) FROM " . $table_prefix . "privmsgs WHERE (privmsgs_type='0' or privmsgs_type='5' or privmsgs_type='1') and privmsgs_to_userid=" . pnUserGetVar('uid')); 
	      			 				 list($total) = $result4->fields;
	       			 				 $result5 = $dbconn->Execute("SELECT pn_from_userid FROM " . $table_prefix . "privmsgs WHERE privmsgs_type='0' and privmsgs_to_userid=" . pnUserGetVar('uid'));
										}
	                  $blockinfo['content'] .= '<td>(';												     					
	                  if ($unread >0 ) {
											 // No sound file?
											 if (!empty($vars['pm_sound'])) {
											$blockinfo['content'] .= ($vars['pm_sound']) ? "<embed src=\"" . $phpbb_root_path . "pnimages/" . $vars['pm_sound'] . "\" width=50 height=20 HIDDEN=TRUE autostart=true autorestart=true loop=false>" : "";
											 }
	                     $blockinfo['content'] .= '<SCRIPT>';
	                     $blockinfo['content'] .= 'function doBlink() {';
	                     $blockinfo['content'] .= 'var blink = document.all.tags("BLINK");';
	                     $blockinfo['content'] .= 'for (var i=0; i<blink.length; i++)';
	                     $blockinfo['content'] .= 'blink[i].style.visibility = blink[i].style.visibility == "" ? "hidden" : ""';
	                     $blockinfo['content'] .= '} function startBlink() {';
	                     $blockinfo['content'] .= 'if (document.all)';
	                     $blockinfo['content'] .= 'setInterval("doBlink()",500)';
	                     $blockinfo['content'] .= '} window.onload = startBlink;';
	                     $blockinfo['content'] .= '</SCRIPT>';
	                     if ($vars['pn_pm']) {
	                        $blockinfo['content'] .= '<a href="' . $pn_link_url . 'Messages&amp;file=index" title="'._UNREAD_PRIVATEMSG.'">';
	                        $blockinfo['content'] .= '<font size=1><b><blink>' . pnVarPrepForDisplay($unread) . '</blink></font></b></a><font size=1>|</font>';
	                        $blockinfo['content'] .= '<a href="' . $pn_link_url . 'Messages&amp;file=index" title="'._AMT_PRIVATEMSG.'">';
	                     } else {
	                        $blockinfo['content'] .= '<a href="' . $link_url . 'privmsg&amp;folder=inbox" title="' . _UNREAD_PRIVATEMSG . '">';
	                        $blockinfo['content'] .= '<font size=1><b><blink>' . pnVarPrepForDisplay($unread) . '</blink></font></b></a><font size=1>|</font>';
	                        $blockinfo['content'] .= '<a href="' . $link_url . 'privmsg&amp;folder=inbox" title="' . _AMT_PRIVATEMSG . '">';
	                     }
	                     $blockinfo['content'] .= '<font size=1><b>' . pnVarPrepForDisplay($total) . '</b></font></a>)</td>';
	                  } else {
	                     if ($vars['pn_pm']) {
	                        $blockinfo['content'] .= '<a href="' . $pn_link_url . 'Messages&amp;file=index" title="'._UNREAD_PRIVATEMSG.'">';
	                        $blockinfo['content'] .= '<font size=1><b>' . pnVarPrepForDisplay($unread) . '</font></b></a><font size=1>|</font>';
	                        $blockinfo['content'] .= '<a href="' . $pn_link_url . 'Messages&amp;file=index" title="'._AMT_PRIVATEMSG.'">';
	                     } else {
	                        $blockinfo['content'] .= '<a href="' . $link_url . 'privmsg&amp;folder=inbox" title="' . _UNREAD_PRIVATEMSG . '">';
	                        $blockinfo['content'] .= '<font size=1><b>' . pnVarPrepForDisplay($unread) . '</font></b></a><font size=1>|</font>';
	                        $blockinfo['content'] .= '<a href="' . $link_url . 'privmsg&amp;folder=inbox" title="' . _AMT_PRIVATEMSG . '">';
	                     }
	                     $blockinfo['content'] .= '<font size=1><b>' . pnVarPrepForDisplay($total) . '</b></font></a>)</td>';
	                  }
	    	         } else {
	                  $blockinfo['content'].= '<td></td>';
	               }
	               if (UserUtil::isLoggedIn()) {
	               		$result = $dbconn->Execute("select pn_uid from " . $pntable[users] . " where pn_uname='" . $uname . "'");
	                  list($pn_uid) = $result->fields;
	                  if ($vars['pn_pm']) {
	                    $blockinfo['content'] .= "<td align=\"right\"><a href=\"" . $pn_link_url . "Messages&amp;file=index";
	                    $blockinfo['content'] .= "\" title=\"" . _UNREAD_PRIVATEMSG . "\"><img src=\"" . $phpbb_root_path . "pnimages/pm.gif\" title=\"" . _SEND_PM . "\" align=middle\" border=\"0\"></a></td>";
	                  } else {
	                    $blockinfo['content'] .= "<td align=\"right\"><a href=\"" . $link_url . "privmsg&amp;mode=post&amp;u=";
	                    $blockinfo['content'] .= $pn_uid . "\" title=\"" . _SEND_PM . "\"><img src=\"" . $phpbb_root_path . "pnimages/pm.gif\" title=\"" . _SEND_PM . "\" align=middle\" border=\"0\"></a></td>";
	                  }
	                  
	               }			 
	               $blockinfo['content'] .= '</tr>';
	            }
	            $blockinfo['content'] .= "</table></center>";
	         }
	      }
				
	      if ($vars['display_to_annon'] && !UserUtil::isLoggedIn() || UserUtil::isLoggedIn()) {
	         if ($numusers != 0) {	
	            $blockinfo['content'] .= '<center><table width="98%" border="0" cellpadding="2" cellspacing="1" >';
	            $blockinfo['content'] .= '<tr><td><center>' . _CURRENTLY . ' ' . pnVarPrepForDisplay($guests) . ' ';
	            $blockinfo['content'] .= _AND . ' ' . pnVarPrepForDisplay($users) . ' ' . _ONLINE . '</center></td></tr></table></center>';
	         } else {
	            $blockinfo['content'] .= '<center><table width="98%" border="0" cellpadding="2" cellspacing="1" >';
	            $blockinfo['content'] .= '<tr><td><center>' . _NOMEMBERS . '</center></td></tr></table><center>';
	         }
	      }
	
	      if (!UserUtil::isLoggedIn()) {
	         $blockinfo['content'] .= '<table width="98%" align="center" border="1" cellpadding="2" cellspacing="1">';
	         $blockinfo['content'] .= '<tr><td><center><img src="' . $phpbb_root_path . 'pnimages/' . $vars['info_icon'] . '" alt=""><br>' . _YOUAREANON . '</center></td></tr></table>';
	         if ($vars['display_login']) {
	            $blockinfo['content'] .= '<form action="user.php" method="post"><table width="98%" align="center" border="0" cellpadding="2" cellspacing="1">';
	            $blockinfo['content'] .= '<tr><td><center><b>' . _NICKNAME.'</b></center></td></tr>';
	            $blockinfo['content'] .= '<tr><td><center><input type="text" name="uname" size="14" maxlength="25"></center></td></tr>';
	            $blockinfo['content'] .= '<tr><td><center><b>' . _PASSWORD . '</b></center></td></tr>';
	            $blockinfo['content'] .= '<tr><td><center><input type="password" name="pass" size="14" maxlength="20"></center></td></tr>';
	            if (pnConfigGetVar('seclevel') != 'High' && $vars['remember_me']) {
	               $blockinfo['content'] .= '<tr><td><center><input type="checkbox" value="1" name="rememberme" />&nbsp;' . _REMEMBERME . '</center></td></tr>';
	            }
	            $blockinfo['content'] .= '<tr><td><center><input type="submit" value="' . _LOGIN . '"></center>';
	            $blockinfo['content'] .= '<input type="hidden" name="module" value="NS-User">';
	            $blockinfo['content'] .= '<input type="hidden" name="op" value="login">';
	            $blockinfo['content'] .= '<input type="hidden" name="url" value="' . $HTTP_SERVER_VARS['REQUEST_URI'] . '"></td></tr></table></form>';
	         }
	      }
	 			$numsections++;
		}
		// if ($vars['display_members']
		
		$content = themesideblock($blockinfo);
	}

	if ($write_to_cache and !empty($content)) {
	   // attempt to write to cache if not loaded before
		if (!file_exists($cachedir)) {
			mkdir($cachedir, 0777); # attempt to make the dir
		}
		if (!file_put_contents($cachefile, $content)) {
			//echo "<br />Could not save data to cache. Please make sure your cache directory exists and is writable.<br />";
		}
	}
	return $content;
}

/**
 * modify block settings
 */
function ZphpBB2_MultiBlockblock_modify($blockinfo)
{
	// Security check
	if (!SecurityUtil::checkPermission('ZphpBB2_Multiblock::', $blockinfo[bid]."::", ACCESS_EDIT)) {
      return false;
	}

	 // Get current content
	 $vars = pnBlockVarsFromContent($blockinfo['content']);

	 // Defaults
	 if (empty($vars)) {
      $vars['module_name'] 				      = "ZphpBB2";					 // Module directory name for ZphpBB2
      $vars['module_links']				  		= "0";						 // Use module links insted of index.php
      $vars['display_posts'] 				 		= "0";								 // Display the last forum posts in block
      $vars['sep_bar_psosts'] 			 		= "1";								 // Display separator bar
      $vars['title_posts'] 					= "1";								 // Display title
      $vars['last_X_posts'] 				 		= 			"5";					 // Show this many recent posts.
      $vars['last_X_scroll'] 				 		= "0";								 // Scroll last forum posts.
      $vars['scroll_speed'] 				 		= "2";								 // Scroll speed.
      $vars['scroll_height'] 				 		= "200";							 // Height of scroll area.
      $vars['scroll_images'] 				 		= "0";								 // Display images per post.
      $vars['display_date'] 				 		= "1";								 // Display date in post
      $vars['date_format'] 					= _DATEFORMAT;				 // Default date format
      $vars['display_time'] 				 		= "1";								 // Display time in post
      $vars['time_format'] 					= _TIMEFORMAT;				 // Default time format
      $vars['group_topics'] 				 		= "0";								 // Yes=1, to show the last X topics where was posted
      $vars['display_cat_posts'] 		 		= "0";								 // Display categories with posts 
      $vars['title_string_length'] 	 		= "20";								 // Title Length To Avoid Wrap (if above is set to 1)
      $vars['user_string_length'] 	 		= "15";								 // Limit Username Length To Avoid Wrap
      $vars['excluded_forums'][0] 	 		= "";									 // Forums to appear in the list
      $vars['display_stats'] 				 		= "0";								 // Display forum statistics
      $vars['sep_bar_stats'] 				 		= "1";								 // Display separator bar
      $vars['title_stats'] 					= "1";								 // Display title
      $vars['display_category'] 		 		= "0";								 // Display forum categories
      $vars['sep_bar_category'] 		 		= "1";								 // Display separator bar
      $vars['title_category'] 			 		= "1";								 // Display title
      $vars['category_length'] 			 		= "20";								 // Category title length
      $vars['include_category'][0] 	 		= "";									 // List of categories to display
      $vars['forum_drilldown'] 			 		= "0";								 // Drill down forum list within category
      $vars['forum_drilldown_max'] 	 		= "0";								 // Number of forum title to show 0 = all
      $vars['display_members'] 			 		= "0";								 // Display members online
      $vars['sep_bar_members'] 			 		= "1";								 // Display separator bar
      $vars['title_members'] 				 		= "1";								 // Display title
      $vars['display_login'] 				 		= "0";								 // Display Login Prompt
      $vars['remember_me'] 					= "0";								 // Show the remember me check box
      $vars['pn_pm'] 								= "0";								 // Yes=1, Use Zikula Private message notification
	  																											 // No=0, Use ZphpBB2 Private message notification.
      $vars['pm_sound'] 						    = "james_kirk.wav";		 // Sound to play when personal message arrives
      $vars['info_icon'] 						= "info.gif";					 // Image to display in the anonomious box
      $vars['display_to_annon'] 		 		= "1"; 	 			 				 // Yes=1, Displays users online to anonomious users.
      $vars['login_user_string_length'] = "15";								 // Limit Username Length To Avoid Wrap
			$vars['num_users'] 								= "10";								 // Maximum number of users to display

   }

	 if (empty($vars['excluded_forums'])) {
	 		$vars['excluded_forums'] = array();
	 }
 	 if (empty($vars['include_category'])) {
      $vars['include_category'] = array();
	 }


	 define('IN_PHPBB', true);
	 $phpbb_root_path = './modules/' . $vars['module_name'] . '/';
	 $table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

   if (file_exists($phpbb_root_path)) {
   		include($phpbb_root_path . 'extension.inc');
	    include_once($phpbb_root_path . 'includes/constants.'.$phpEx);

    	list($dbconn) = pnDBGetConn();
		
    	// Create forum list
	    $query = "SELECT f.forum_id, f.forum_name, c.cat_title FROM " . FORUMS_TABLE . " f LEFT JOIN " . CATEGORIES_TABLE . " c ON c.cat_id = f.cat_id ORDER BY c.cat_title, f.forum_name";
    	$result = $dbconn->Execute($query);

    	while (list($forum_id, $forum_name, $cat_title) = $result->fields) {
	       $result->MoveNext();
         $selected = in_array($forum_id, $vars['excluded_forums']) ? 1 : 0;
         $forums[] = array('id' => $forum_id, 'name' => $cat_title . ' / ' . $forum_name, 'selected' => $selected);
    	}
	    // Create category list
    	$query = "SELECT cat_id, cat_title FROM " . CATEGORIES_TABLE . " ORDER BY cat_title";
	    $result = $dbconn->Execute($query);
			
	    while (list($cat_id, $cat_title) = $result->fields)	{
	       $result->MoveNext();
    	   $selected = in_array($cat_id, $vars['include_category']) ? 1 : 0;
	       $category[] = array('id' => $cat_id, 'name' => $cat_title, 'selected' => $selected);
    	}

   } else {
	 		$templates[] = array();
   }
	 // Create output object
	 $output = new pnHTML();
      
   $output->SetOutputMode(_PNH_RETURNOUTPUT);
   $settings[] = array('optiontitle' => $output->BoldText("____________________________"));
   $settings[] = array('optiontitle' => $output->BoldText(_MULTIBLOCK_OPTIONS));

	 if (!file_exists($phpbb_root_path)) {
      $settings[] = array('optiontitle' => $output->BoldText(_MODULE_ERROR));
		  $settings[] = array('optiontitle' => $output->Text(_MODULE_NAME), 'optioncontent' => $output->FormText('module_name',pnVarPrepForDisplay($vars['module_name']),15,20) );
   } else {
		  $settings[] = array('optiontitle' => $output->Text(_MODULE_NAME), 'optioncontent' => $output->FormText('module_name',pnVarPrepForDisplay($vars['module_name']),15,20) );
		  $settings[] = array('optiontitle' => $output->Text(_MODULE_LINKS), 'optioncontent' => $output->FormCheckbox('module_links',pnVarPrepForDisplay($vars['module_links'])) );
	 	  $settings[] = array('optiontitle' => $output->Text(_MODULE_LINKS_EXPLAIN));
	 	  $settings[] = array('optiontitle' => $output->BoldText("____________________________"));
	 	  $settings[] = array('optiontitle' => $output->BoldText(_DISPLAY_POSTS), 'optioncontent' => $output->FormCheckbox('display_posts',pnVarPrepForDisplay($vars['display_posts'])) );
		  $settings[] = array('optiontitle' => $output->Text(_SEP_BAR), 'optioncontent' => $output->FormCheckbox('sep_bar_psosts',pnVarPrepForDisplay($vars['sep_bar_psosts'])) );
	 	  $settings[] = array('optiontitle' => $output->Text(_SHOW_TITLE), 'optioncontent' => $output->FormCheckbox('title_posts',pnVarPrepForDisplay($vars['title_posts'])) );
   		$settings[] = array('optiontitle' => $output->Text(_LAST_X_POSTS), 'optioncontent' => $output->FormText('last_X_posts',pnVarPrepForDisplay($vars['last_X_posts']),2,2) );
		  $settings[] = array('optiontitle' => $output->Text(_LAST_X_SCROLL), 'optioncontent' => $output->FormCheckbox('last_X_scroll',pnVarPrepForDisplay($vars['last_X_scroll'])) );
   		$settings[] = array('optiontitle' => $output->Text(_SCROLL_HEIGHT), 'optioncontent' => $output->FormText('scroll_height',pnVarPrepForDisplay($vars['scroll_height']),4,5) );
   		$settings[] = array('optiontitle' => $output->Text(_SCROLL_SPEED), 'optioncontent' => $output->FormText('scroll_speed',pnVarPrepForDisplay($vars['scroll_speed']),2,2) );
   		$settings[] = array('optiontitle' => $output->Text(_DISPLAY_DATE), 'optioncontent' => $output->FormCheckBox('display_date',pnVarPrepForDisplay($vars['display_date'])) );
	    $settings[] = array('optiontitle' => $output->Text(_DATE_FORMAT), 'optioncontent' => $output->FormText('date_format',pnVarPrepForDisplay($vars['date_format']),6,10) );
   		$settings[] = array('optiontitle' => $output->Text(_DISPLAY_TIME), 'optioncontent' => $output->FormCheckBox('display_time',pnVarPrepForDisplay($vars['display_time'])) );
			$settings[] = array('optiontitle' => $output->Text(_TIME_FORMAT), 'optioncontent' => $output->FormText('time_format',pnVarPrepForDisplay($vars['time_format']),6,10) );
	 		$settings[] = array('optiontitle' => $output->Text(_GROUP_TOPICS), 'optioncontent' => $output->FormCheckbox('group_topics',pnVarPrepForDisplay($vars['group_topics'])) );
   		$settings[] = array('optiontitle' => $output->Text(_TITLE_STRING_LENGTH), 'optioncontent' => $output->FormText('title_string_length',pnVarPrepForDisplay($vars['title_string_length']),2,2) );
   		$settings[] = array('optiontitle' => $output->Text(_USER_STRING_LENGTH), 'optioncontent' => $output->FormText('user_string_length',pnVarPrepForDisplay($vars['user_string_length']),2,2) );
			$settings[] = array('optiontitle' => $output->Text(_EXCLUDE_FORUMS), 'optioncontent' => $output->FormSelectMultiple('excluded_forums[]', $forums, true, 5) );
	 		$settings[] = array('optiontitle' => $output->BoldText("____________________________"));
 	 		$settings[] = array('optiontitle' => $output->BoldText(_DISPLAY_STATS), 'optioncontent' => $output->FormCheckbox('display_stats',pnVarPrepForDisplay($vars['display_stats'])));
 	 		$settings[] = array('optiontitle' => $output->Text(_SEP_BAR), 'optioncontent' => $output->FormCheckbox('sep_bar_stats',pnVarPrepForDisplay($vars['sep_bar_stats'])));
 	 		$settings[] = array('optiontitle' => $output->Text(_SHOW_TITLE), 'optioncontent' => $output->FormCheckbox('title_stats',pnVarPrepForDisplay($vars['title_stats'])));
	 		$settings[] = array('optiontitle' => $output->BoldText("____________________________"));
 	 		$settings[] = array('optiontitle' => $output->BoldText(_DISPLAY_CATEGORY), 'optioncontent' => $output->FormCheckbox('display_category',pnVarPrepForDisplay($vars['display_category'])));
 	 		$settings[] = array('optiontitle' => $output->Text(_SEP_BAR), 'optioncontent' => $output->FormCheckbox('sep_bar_category',pnVarPrepForDisplay($vars['sep_bar_category'])));
 	 		$settings[] = array('optiontitle' => $output->Text(_SHOW_TITLE), 'optioncontent' => $output->FormCheckbox('title_category',pnVarPrepForDisplay($vars['title_category'])));
			$settings[] = array('optiontitle' => $output->Text(_CATEGORY_LENGTH), 'optioncontent' => $output->FormText('category_length',pnVarPrepForDisplay($vars['category_length']),2,2) );
			$settings[] = array('optiontitle' => $output->Text(_INCLUDE_CATEGORY), 'optioncontent' => $output->FormSelectMultiple('include_category[]', $category, true, 5) );
			$settings[] = array('optiontitle' => $output->Text(_FORUM_DRILLDOWN), 'optioncontent' => $output->FormCheckbox('forum_drilldown',pnVarPrepForDisplay($vars['forum_drilldown'])));
			$settings[] = array('optiontitle' => $output->Text(_FORUM_DRILLDOWN_MAX), 'optioncontent' => $output->FormText('forum_drilldown_max',pnVarPrepForDisplay($vars['forum_drilldown_max']),2,2) );
  		$settings[] = array('optiontitle' => $output->BoldText("____________________________"));
	 		$settings[] = array('optiontitle' => $output->BoldText(_DISPLAY_MEMBERS), 'optioncontent' => $output->FormCheckbox('display_members',pnVarPrepForDisplay($vars['display_members'])) );	 
 	 		$settings[] = array('optiontitle' => $output->Text(_SEP_BAR), 'optioncontent' => $output->FormCheckbox('sep_bar_members',pnVarPrepForDisplay($vars['sep_bar_members'])));
 	 		$settings[] = array('optiontitle' => $output->Text(_SHOW_TITLE), 'optioncontent' => $output->FormCheckbox('title_members',pnVarPrepForDisplay($vars['title_members'])));
			$settings[] = array('optiontitle' => $output->Text(_INFO_ICON), 'optioncontent' => $output->FormText('info_icon',pnVarPrepForDisplay($vars['info_icon']),15,30) );
	 		$settings[] = array('optiontitle' => $output->Text(_DISPLAY_LOGIN), 'optioncontent' => $output->FormCheckbox('display_login',pnVarPrepForDisplay($vars['display_login'])) );
			$settings[] = array('optiontitle' => $output->Text(_REMEMBER_ME), 'optioncontent' => $output->FormCheckbox('remember_me',pnVarPrepForDisplay($vars['remember_me'])) );
			$settings[] = array('optiontitle' => $output->Text(_USE_PN_PM), 'optioncontent' => $output->FormCheckbox('pn_pm',pnVarPrepForDisplay($vars['pn_pm'])));
			$settings[] = array('optiontitle' => $output->Text(_USE_PM_SOUND), 'optioncontent' => $output->FormText('pm_sound',pnVarPrepForDisplay($vars['pm_sound']),15,30) );
 			$settings[] = array('optiontitle' => $output->Text(_DISPLAY_TO_ANNON), 'optioncontent' => $output->FormCheckbox('display_to_annon',pnVarPrepForDisplay($vars['display_to_annon'])));
 			$settings[] = array('optiontitle' => $output->Text(_USER_STRING_LENGTH), 'optioncontent' => $output->FormText('login_user_string_length',pnVarPrepForDisplay($vars['login_user_string_length']),2,2) );
 			$settings[] = array('optiontitle' => $output->Text(_NUM_USERS), 'optioncontent' => $output->FormText('num_users',pnVarPrepForDisplay($vars['num_users']),3,3) );
			$settings[] = array('optiontitle' => $output->BoldText("____________________________"));
   }

   $output->SetOutputMode(_PNH_KEEPOUTPUT);

   // Add row
   $output->SetInputMode(_PNH_VERBATIMINPUT);
   foreach ($settings as $option) {
      $output->TableAddRow($option, 'left');
   }
   $output->SetInputMode(_PNH_PARSEINPUT);

   // Return output
   return $output->GetOutput();
}


/**
 * update block settings
 */
function ZphpBB2_MultiBlockblock_update($blockinfo)
{
   list($vars['module_name'],
	 			$vars['module_links'],
        $vars['display_posts'],
	 			$vars['sep_bar_psosts'],
				$vars['title_posts'],
	 			$vars['last_X_posts'],
				$vars['last_X_scroll'],
				$vars['scroll_height'],
				$vars['scroll_speed'],
				$vars['scroll_images'],
				$vars['display_date'],
				$vars['date_format'],
				$vars['display_time'],
				$vars['time_format'],
	 			$vars['group_topics'],
	 			$vars['display_cat_posts'], 
	 			$vars['title_string_length'],
				$vars['user_string_length'],
				$vars['excluded_forums'],
				$vars['display_stats'],
	 			$vars['sep_bar_stats'],
				$vars['title_stats'],
				$vars['display_category'],
	 			$vars['sep_bar_category'],
				$vars['title_category'],
				$vars['category_length'],
				$vars['include_category'],
				$vars['forum_drilldown'],
				$vars['forum_drilldown_max'],
				$vars['display_members'],
	 			$vars['sep_bar_members'],
				$vars['title_members'],
				$vars['display_login'],
				$vars['remember_me'],
				$vars['pn_pm'],
				$vars['pm_sound'],
				$vars['info_icon'],
				$vars['display_to_annon'],
     		$vars['login_user_string_length'],
				$vars['num_users']) = 
	   		pnVarCleanFromInput('module_name',
														'module_links',							 
														'display_posts',
														'sep_bar_psosts',
														'title_posts',
														'last_X_posts',
														'last_X_scroll',
														'scroll_height',
														'scroll_speed',
														'scroll_images',
														'display_date',
														'date_format',
														'display_time',
														'time_format',
														'group_topics', 
														'display_cat_posts',
														'title_string_length',
														'user_string_length',
														'excluded_forums', 
														'display_stats',
														'sep_bar_stats',
														'title_stats',
														'display_category',
	 													'sep_bar_category',
														'title_category',
														'category_length',
														'include_category',
														'forum_drilldown',
														'forum_drilldown_max',
														'display_members',
	 													'sep_bar_members',
														'title_members',
														'display_login',
														'remember_me',
														'pn_pm',
														'pm_sound',
														'info_icon',
														'display_to_annon',
														'login_user_string_length',
														'num_users');
   $blockinfo['content'] = pnBlockVarsToContent($vars);

   return $blockinfo;
}

function get_PNpbpbb_db_stat($mode)
{
	switch( $mode )	{
	    case 'usercount':
			   $query = "SELECT COUNT(user_id) AS total
				           FROM " . USERS_TABLE . "
				           WHERE user_id <> " . ANONYMOUS;
			   break;

		  case 'newestuser':
			   $query = "SELECT user_id, username
				           FROM " . USERS_TABLE . "
				           WHERE user_id <> " . ANONYMOUS . "
				           ORDER BY user_id DESC
				           LIMIT 1";
			   break;

		  case 'postcount':
		  case 'topiccount':
			   $query = "SELECT SUM(forum_topics) AS topic_total, SUM(forum_posts) AS post_total
				           FROM " . FORUMS_TABLE;
			   break;
	}
	$result = zExecuteSQLarray($query);
	if (!$result) {
		return false;
	}
	$row = $result[0];
	switch ( $mode )	{
      case 'usercount':
			   return $row['total'];
			   break;
		  case 'newestuser':
			   return $row;
			   break;
		  case 'postcount':
			   return $row['post_total'];
			   break;
		  case 'topiccount':
			   return $row['topic_total'];
			   break;
	}
	return false;
}
