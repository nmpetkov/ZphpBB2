<?php
// some needed variables common for all called files from site index.php
// include this at the front of each of them

if (!defined("LOADED_AS_MODULE")) die ("You can't access this file directly...");
define('IN_PHPBB', true);

global $ModName, $ModUrl, $phpbb_root_path;
$ModName = basename( dirname( __FILE__ ) );
$ModUrl = $modinfo['url'];	// N.Petkov: Zikula 1.3 module url
$phpbb_root_path = './modules/' . $ModName . '/';

global $minmax;
$minmax = FormUtil::getPassedValue('minmax', 0, 'GETPOST'); # ZphpBB2
if ($minmax==1) {
	PageUtil::registerVar('sitemaxstate', false, 1); #ZphpBB2: to be available in theme, to mimic maximized forum
}
