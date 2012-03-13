<?php
/**
 * Zikula Application Framework
 *
 * ZphpBB2
 *
 * @version $Id: pnadmin.php 173 2011-02-05 17:28:35Z Petzi-Juist $
 * @copyright 2010 by Petzi-Juist
 * @link http://www.petzi-juist.de
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

/**
 * function main
 */
function ZphpBB2_admin_main() // ready
{
    return ZphpBB2_admin_view();
}

/**
 * function view
 */
function ZphpBB2_admin_view() // ready
{
    // Security check
    if (!SecurityUtil::checkPermission('ZphpBB2::', "::", ACCESS_EDIT)) {
        return LogUtil::registerPermissionError();
    }
die();
	//System::redirect(ModUtil::url('ZphpBB2', 'admin', 'main', array('file' => 'admin', 'pnadmin' => 'admin'));

    return;
}
