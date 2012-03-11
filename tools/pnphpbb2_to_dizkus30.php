<?
/*
 PHP script to take data from PNphpBB2 (PNphpBB2-1.2i-patch4-RC2) to a fresh install of Dizkus 3.0.
 
 @mjturn MJ Turner - author, 2009-11-12
 This code is published here:
 http://community.zikula.org/module-Forum-viewtopic-topic-57286-start-0.htm
*/

$DBhost = "localhost";
$DBuser = "your-db-user-name";
$DBpass = "your-db-password";
$DBname = "your-db-name";

$prefix = "zk";

/* Connecting, selecting database */
$link = mysql_connect($DBhost, $DBuser, $DBpass) or
                           die("Could not connect");
// print "Connected successfully";
mysql_select_db($DBname) or die("Could not select database");

  // Categories
  $sql="SELECT cat_id, cat_title, cat_order
        FROM ".$prefix."_phpbb_categories";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($cat_id, $cat_title, $cat_order) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_categories
                       (cat_id, cat_title, cat_order)
                VALUES (".$cat_id.", '".addslashes($cat_title)."', '".$cat_order."')";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added categories...\n";

  // Forums
  $sql="SELECT forum_id, cat_id, forum_name, forum_desc, forum_order,
               forum_posts, forum_topics, forum_last_post_id
        FROM ".$prefix."_phpbb_forums";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($forum_id, $cat_id, $forum_name, $forum_desc, $forum_order,
               $forum_posts, $forum_topics, $forum_last_post_id) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_forums
                       (forum_id, cat_id, forum_name, forum_desc, forum_order,
               forum_posts, forum_topics, forum_last_post_id)
                VALUES (".$forum_id.", ".$cat_id.", '".addslashes($forum_name)."', '".addslashes($forum_desc)."', ".$forum_order.", ".$forum_posts.", ".$forum_topics.", ".$forum_last_post_id.")";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added forums...\n";

  // Posts
  $sql="SELECT post_id, topic_id, forum_id, poster_id, post_time, poster_ip
        FROM ".$prefix."_phpbb_posts";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($post_id, $topic_id, $forum_id, $poster_id, $post_time, $poster_ip) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_posts
                       (post_id, topic_id, forum_id, poster_id, post_time, poster_ip)
                VALUES (".$post_id.", ".$topic_id.", ".$forum_id.", ".$poster_id.", '".date('Y-m-d H:i', $post_time)."', '".$poster_ip."')";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added posts...\n";

  // Posts text
  $sql="SELECT post_id, post_text
        FROM ".$prefix."_phpbb_posts_text";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($post_id, $post_text) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_posts_text
                       (post_id, post_text)
                VALUES (".$post_id.", '".addslashes($post_text)."')";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added posts text...\n";

  // Topics
  $sql="SELECT topic_id, forum_id, topic_title, topic_poster, topic_time,
               topic_views, topic_replies, topic_status, topic_last_post_id
        FROM ".$prefix."_phpbb_topics";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($topic_id, $forum_id, $topic_title, $topic_poster, $topic_time,
           $topic_views, $topic_replies, $topic_status, $topic_last_post_id) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_topics
                       (topic_id, forum_id, topic_title, topic_poster, topic_time,
               topic_views, topic_replies, topic_status, topic_last_post_id)
                VALUES (".$topic_id.", ".$forum_id.", '".addslashes($topic_title)."', ".$topic_poster.", '".date('Y-m-d H:i', $topic_time)."', ".$topic_views.", ".$topic_replies.", ".$topic_status.", ".$topic_last_post_id.")";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added topics...\n";

  // topic subscription
  $sql="SELECT W.topic_id, W.user_id, T.forum_id
        FROM ".$prefix."_phpbb_topics_watch AS W, ".$prefix."_phpbb_topics AS T
        WHERE W.topic_id = T.topic_id";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($topic_id, $user_id, $forum_id) = $row;

      $query = "INSERT INTO ".$prefix."_dizkus_topic_subscription
                       (topic_id, user_id, forum_id)
                VALUES (".$topic_id.", ".$user_id.", ".$forum_id.")";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    } print "Added topic subscription...\n";

  // Users
  $sql="SELECT user_id, user_posts, user_rank
        FROM ".$prefix."_phpbb_users";

  $result = mysql_query($sql);
  if ($result && mysql_numrows($result) > 0)
    while ($row = mysql_fetch_array($result)) {

      list($user_id, $user_posts, $user_rank) = $row;

    if ($user_id > 0) {
      $query = "INSERT INTO ".$prefix."_dizkus_users
                       (user_id, user_posts, user_rank)
                VALUES (".$user_id.", ".$user_posts.", ".$user_rank.")";
      $res = mysql_query($query);
      if (!$res) {
         echo "Could not successfully run query ($query) from DB: " . mysql_error();
         exit;
      }

    }
    } print "Added users...\n";

print "Done.\n";
?>