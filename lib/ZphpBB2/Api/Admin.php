<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Api_Admin extends Zikula_AbstractApi
{
    /**
     * Get available admin panel links
     *
     * @return array array of admin links
     */
    public function getlinks()
    {
        $links = array();
    
        if (SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN)) {
            $links[] = array(
                'url' => ModUtil::url('ZphpBB2', 'admin', 'main'),
                'text' => $this->__('Administration'),
                'class' => 'z-icon-es-gears');

            $links[] = array(
                'url' => ModUtil::url('ZphpBB2', 'admin', 'modifyconfig'),
                'text' => $this->__('Settings'),
                'class' => 'z-icon-es-config');

            $links[] = array(
                'url' => ModUtil::url('ZphpBB2', 'admin', 'export_form'),
                'text' => $this->__('Export'),
                'class' => 'z-icon-es-export');
        }
    
        return $links;
    }
}