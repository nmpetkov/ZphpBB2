<?php
// some needed variables common for all called files from site index.php
// include this at the front of each of them

include_once 'modules/ZphpBB2/lib/ZphpBB2/Util.php';

define('IN_PHPBB', true);

global $phpbb_root_path;
$phpbb_root_path = 'modules/ZphpBB2/vendor/phpBB2/';

global $minmax;
$minmax = FormUtil::getPassedValue('minmax', 0, 'GETPOST'); # ZphpBB2
if ($minmax==1) {
	PageUtil::registerVar('sitemaxstate', false, 1); #ZphpBB2: to be available in theme, to mimic maximized forum
}

// to prevent errors when included from function
global $template;

// SEO
$page_title = ModUtil::getVar ('ZphpBB2', 'page_title', '');
if ($page_title) {
    PageUtil::setVar('title', $page_title);
}
$page_description = ModUtil::getVar ('ZphpBB2', 'page_description', '');
if ($page_description) {
    PageUtil::setVar('description', $page_description);
}
$page_robots = ModUtil::getVar ('ZphpBB2', 'page_robots', '');
if ($page_robots) {
    $sm = ServiceUtil::getManager();
    $sm['zikula_view.metatags']['robots'] = $page_robots;
}
