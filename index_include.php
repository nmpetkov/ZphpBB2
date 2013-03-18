<?php
// This file must be included from within Zikula index.php
// $file, $type, $func are available from Zikula index.php
$pnadmin = FormUtil::getPassedValue('pnadmin', '', 'GETPOST');
if (empty($file)) {
    $file = $func;
}
$includetype = true;
if ($type == 'admin') {
    // standard module interface
    $includetype = false;
}
if ($file == 'posting') {
    $mode = FormUtil::getPassedValue('mode', '', 'GETPOST');
    if ($mode == 'topicreview' || $mode == 'smilies' || $mode == 'rules' || $mode == 'postimages') {
        $includetype = false;
    }
}
if ($file == 'quick_reply') {
    $qmode = FormUtil::getPassedValue('mode', '', 'GETPOST');
    if ($qmode == 'smilies' || $qmode == 'postimages') {
        $includetype = false;
    }
}
if ($includetype) {
    // direct file include
    if (empty($file) || $file == 'main') {
        $file = 'index';
    }

    $zview = Zikula_View_Theme::getInstance();

    $phpbb_root_path = __DIR__.'/vendor/phpBB2/';
    include $phpbb_root_path.'includezik.php';
    include $phpbb_root_path.$file.'.php';

    $zview->themefooter();
    System::shutdown();
}
