<?php
//PNphpBB2

include ("includezik.php"); # @nikp N.Petkov: Zikula 1.3

include($phpbb_root_path . 'extension.inc');

if (!SecurityUtil::checkPermission('ZphpBB2::', '::', ACCESS_ADMIN)) {
   System::redirect(ModUtil::url('ZphpBB2', 'admin', 'main'));
}

$remove_pnphpbb = FormUtil::getPassedValue('remove');

if ( $remove_pnphpbb )
{
  $ok_to_remove_pnphpbb2 =  FormUtil::getPassedValue('ok_to_remove_pnphpbb2');
  $remove_cancel =  FormUtil::getPassedValue('cancel');

  if ( $remove_pnphpbb && $ok_to_remove_pnphpbb2 == "whynot" && !$remove_cancel )
  {
	  include($phpbb_root_path . "install/remove_pnphpbb2.$phpEx");
	  exit; // also for ZphpBB2
  }
  else
  {
    System::redirect("index.$phpEx");
 	  exit;
  }
}

if (empty($pnadmin)) $pnadmin = FormUtil::getPassedValue('pnadmin', '', 'GETPOST'); # @nikp N.Petkov: Zikula 1.3

if (ereg("admin_",$pnadmin))
{
  include($phpbb_root_path . "admin/" . $pnadmin . "." .$phpEx);
  exit;
}
else		
{
  include($phpbb_root_path . "admin/index." . $phpEx);
  exit;
}
