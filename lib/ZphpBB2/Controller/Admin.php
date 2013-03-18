<?php
/**
 * ZphpBB2 Zikula Module
 *
 * @copyright Nikolay Petkov
 * @license GNU/GPL
 */
class ZphpBB2_Controller_Admin extends Zikula_AbstractController
{
    private $phpBBfile;

    /**
     * Main administration function
     */
    public function main()
    {
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN), LogUtil::getErrorMsgPermission());

        return $this->view->fetch('admin/main.tpl');
    }

    public function admin($args)
    {
        $this->phpBBfile = 'admin';
        return $this->phpBBcall($args);
    }

    public function phpBBcall($args)
    {
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN), LogUtil::getErrorMsgPermission());

        $url = System::getCurrentUri();
        return $this->view->fetch('admin/call.tpl');
    }

    public function modifyconfig()
    {
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN));

        $vars = ModUtil::getVar($this->name);
        // some default settings
        if (empty($vars['table_prefix'])) {
            $vars['table_prefix'] = 'phpbb_';
        }

        $this->view->setCaching(false);
        $this->view->assign($vars);

        return $this->view->fetch('admin/modifyconfig.tpl');
    }

    public function updateconfig()
    {
        $this->checkCsrfToken(); // confirm the forms authorisation key
		$this->throwForbiddenUnless(SecurityUtil::checkPermission($this->name . '::', '::', ACCESS_ADMIN));

        // get current module variables
        $vars = ModUtil::getVar($this->name);

        // get module variables from form
        $modvars = array();
        $modvars['table_prefix'] = FormUtil::getPassedValue('table_prefix', 'phpbb_', 'POST');
        $modvars['page_title'] = FormUtil::getPassedValue('page_title', '', 'POST');
        $modvars['page_description'] = FormUtil::getPassedValue('page_description', '', 'POST');
        $modvars['page_robots'] = FormUtil::getPassedValue('page_robots', '', 'POST');

        // table prefix change
        if ($vars['table_prefix'] && $vars['table_prefix']<>$modvars['table_prefix']) {
            // table prefix is changed
            $mandatoryinprefix = 'phpbb';
            if (strpos($modvars['table_prefix'], $mandatoryinprefix) === false) {
                return LogUtil::registerError($this->__('Error: table prefix must contain fragment <b>phpbb</b>.'));
            }
            // ok, let's change in db
            $connection = Doctrine_Manager::getInstance()->getCurrentConnection();
            $stmt = $connection->prepare("SHOW TABLES LIKE '%" . $vars['table_prefix'] . "_%'");
            try {
                $stmt->execute();
            } catch (Exception $e) {
                return LogUtil::registerError(__('Error: ') . $e->getMessage());
            }
            $items = $stmt->fetchAll(Doctrine_Core::FETCH_NUM);
            $tablenames = ZphpBB2_Util::getTableNames();
            foreach ($items as $item) {
                $table_stem = ZphpBB2_Util::getTableStem($item[0], $vars['table_prefix']);
                if (in_array($table_stem, $tablenames)) {
                    $stmt = $connection->prepare('RENAME TABLE ' . $item[0] . " TO " . $modvars['table_prefix'] . $table_stem);
                    try {
                        $stmt->execute();
                    } catch (Exception $e) {
                        return LogUtil::registerError(__('Error: ') . $e->getMessage());
                    }
                }
            }
        }

        // update module variables
		$this->setVars($modvars);

        // the module configuration has been updated successfuly
        LogUtil::registerStatus($this->__('Done! Module configuration updated.'));

        return System::redirect(ModUtil::url($this->name, 'admin', 'main'));
    }

    public function export_form()
    {
		$this->throwForbiddenUnless(SecurityUtil::checkPermission($this->name . '::', '::', ACCESS_ADMIN));

        $this->view->setCaching(false);

        return $this->view->fetch('admin/export.tpl');
    }

    public function export_perform()
    {
        $this->checkCsrfToken(); // confirm the forms authorisation key
		$this->throwForbiddenUnless(SecurityUtil::checkPermission($this->name . '::', '::', ACCESS_ADMIN));

        return System::redirect(ModUtil::url($this->name, 'admin', 'main'));
    }
}