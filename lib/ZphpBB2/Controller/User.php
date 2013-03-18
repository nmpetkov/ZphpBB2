<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Controller_User extends Zikula_AbstractController
{
    private $phpBBfile;

    /**
     * Main user function
     *
     * @param array $args Arguments.
     */
    public function main($args)
    {
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_READ), LogUtil::getErrorMsgPermission());
        
        return $this->index($args);
    }

    public function index($args) {
        $this->phpBBfile = 'index';
        return $this->phpBBcall($args);
    }

    public function viewforum($args) {
        $this->phpBBfile = 'viewforum';
        return $this->phpBBcall($args);
    }

    public function viewtopic($args) {
        $this->phpBBfile = 'viewtopic';
        return $this->phpBBcall($args);
    }

    public function posting($args) {
        $this->phpBBfile = 'posting';
        return $this->phpBBcall($args);
    }

    public function quick_reply($args) {
        $this->phpBBfile = 'quick_reply';
        return $this->phpBBcall($args);
    }

    public function uacp($args) {
        $this->phpBBfile = 'uacp';
        return $this->phpBBcall($args);
    }

    public function printview($args) {
        $this->phpBBfile = 'printview';
        return $this->phpBBcall($args);
    }

    public function search($args) {
        $this->phpBBfile = 'search';
        return $this->phpBBcall($args);
    }

    public function tellafriend($args) {
        $this->phpBBfile = 'tellafriend';
        return $this->phpBBcall($args);
    }

    public function privmsg($args) {
        $this->phpBBfile = 'privmsg';
        return $this->phpBBcall($args);
    }

    public function login($args) {
        $this->phpBBfile = 'login';
        return $this->phpBBcall($args);
    }

    public function profile($args) {
        $this->phpBBfile = 'profile';
        return $this->phpBBcall($args);
    }

    public function memberlist($args) {
        $this->phpBBfile = 'memberlist';
        return $this->phpBBcall($args);
    }

    public function viewonline($args) {
        $this->phpBBfile = 'viewonline';
        return $this->phpBBcall($args);
    }

    public function groupcp($args) {
        $this->phpBBfile = 'groupcp';
        return $this->phpBBcall($args);
    }

    public function modcp($args) {
        $this->phpBBfile = 'modcp';
        return $this->phpBBcall($args);
    }

    public function download($args) {
        $this->phpBBfile = 'download';
        return $this->phpBBcall($args);
    }

    public function faq($args) {
        $this->phpBBfile = 'faq';
        return $this->phpBBcall($args);
    }

    public function phpBBcall($args)
    {
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_READ), LogUtil::getErrorMsgPermission());

        ob_start();
        $phpbb_root_path = 'modules/ZphpBB2/vendor/phpBB2/';
        include $phpbb_root_path.'includezik.php';
        include $phpbb_root_path.$this->phpBBfile.'.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->view->assign('content', $content);
        return $this->view->fetch('user/call.tpl');
    }

    public function message($args)
    {
        $this->view->assign('content', $args['message']);
        return $this->view->fetch('user/call.tpl');
    }
}