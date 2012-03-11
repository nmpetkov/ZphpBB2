<?php
/**
 * PNphpBB2 Module
 */ 

/**
 * the main user function
 * 
 * @return       output       The main module page
 */
function PNphpBB2_user_main()
{
    if (!pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_OVERVIEW)) {
        return pnVarPrepHTMLDisplay(_MODULENOAUTH);
    }

	// @nikp N.Petkov: Zikula 1.3
	define('LOADED_AS_MODULE', '1'); // Old-old style of loading modules
	//include 'modules/PNphpBB2/index.php';
	include dirname(__FILE__).'/index.php';
}
