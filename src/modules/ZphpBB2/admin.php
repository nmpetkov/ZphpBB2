<?php
//PNphpBB2

include ("includezik.php"); # @nikp N.Petkov: Zikula 1.3

include($phpbb_root_path . 'extension.inc');

/* if (!pnSecAuthAction(1, 'ZphpBB2::', '::', ACCESS_ADMIN)) {
   pnredirect("index.$phpEx");
} */
$remove_pnphpbb = pnVarCleanFromInput('remove');

if ( $remove_pnphpbb )
{
  $ok_to_remove_pnphpbb2 =  pnVarCleanFromInput('ok_to_remove_pnphpbb2');
  $remove_cancel =  pnVarCleanFromInput('cancel');

  if ( $remove_pnphpbb && $ok_to_remove_pnphpbb2 == "whynot" && !$remove_cancel )
  {
	  include($phpbb_root_path . "install/remove_pnphpbb2.$phpEx");
	  /* exit; @nikp N.Petkov */
  }
  else
  {
    pnredirect("index.$phpEx");
 	  exit;
  }
}

$pnadmin = FormUtil::getPassedValue('pnadmin', '', 'GETPOST'); # @nikp N.Petkov: Zikula 1.3

if (ereg("admin_",$pnadmin))
{
  include($phpbb_root_path . "admin/" . $pnadmin . "." .$phpEx);
 /* exit; @nikp N.Petkov */
}
else		
{
  include($phpbb_root_path . "admin/index." . $phpEx);
  /* exit; @nikp N.Petkov */
}
