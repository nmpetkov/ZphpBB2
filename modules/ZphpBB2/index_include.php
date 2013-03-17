<?php
// This file must be included from within Zikula index.php
// $file, $type, $func are available from Zikula index.php
$pnadmin = FormUtil::getPassedValue('pnadmin', '', 'GETPOST');
$includetype = true;
if ($type == 'admin') {
    // standard module interface
    $includetype = false;
}
if ($includetype) {
    // direct file include
    if (empty($file)) {
        $file = $func;
    }
    if (empty($file) || $file == 'main') {
        $file = 'index';
    }
    $zview = Zikula_View_Theme::getInstance();
    include __DIR__.'/vendor/phpBB2/'.$file.'.php';
    $zview->themefooter();
    System::shutdown();
}
