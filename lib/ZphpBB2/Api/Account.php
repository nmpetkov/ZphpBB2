<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */

class ZphpBB2_Api_Account extends Zikula_AbstractApi
{
    /**
     * Return an array of items to show in the your account panel
     *
     * @return   array
     */
    public function getall($args)
    {
        $items = array();

        // Create an array of links to return
        if (SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_READ)) {
            $items[] = array('url' => ModUtil::url('ZphpBB2', 'user', 'profile', ARRAY('mode' => 'editprofile')),
                    'module'  => 'ZphpBB2',
                    'title'   => $this->__('Profile in forum'),
                    'icon'    => 'user.png');

        }

        // Return the items
        return $items;
    }
}
