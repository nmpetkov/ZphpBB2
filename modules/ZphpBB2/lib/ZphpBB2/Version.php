<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Version extends Zikula_AbstractVersion
{
    public function getMetaData()
    {
        $meta = array();
        $meta['displayname']    = 'ZphpBB2';
        $meta['oldnames']       = array('PNphpBB2');
        $meta['url']            = 'forum';
        $meta['description']    = $this->__('Zikula Forum based on phpBB2');
        $meta['version']        = '2.1.0';
        $meta['capabilities']   = array(HookUtil::SUBSCRIBER_CAPABLE => array('enabled' => true));
        $meta['securityschema'] = array('ZphpBB2::' => '::');
        $meta['core_min']       = '1.3.0';

        return $meta;
    }

    protected function setupHookBundles()
    {
        // Register hooks
        $bundle = new Zikula_HookManager_SubscriberBundle($this->name, 'subscriber.zphpbb2.ui_hooks.items', 'ui_hooks', $this->__('ZphpBB2 Items Hooks'));
        $bundle->addEvent('display_view', 'zphpbb2.ui_hooks.items.display_view');
        $bundle->addEvent('form_edit', 'zphpbb2.ui_hooks.items.form_edit');
        $this->registerHookSubscriberBundle($bundle);
    }
}