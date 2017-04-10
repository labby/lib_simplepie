<?php

/**
 *  @module      	Library SimplePie
 *  @version        see info.php of this module
 *  @author         cms-lab
 *  @copyright      2010-2017 cms-lab
 *  @license        see license included in the package
 *  @license terms  see info.php of this addon
 *  @platform       see info.php of this addon
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

/**
 *	install droplets
 *
 */ 
if (!function_exists('droplet_install')) {
    include_once LEPTON_PATH.'/modules/droplets/functions.php';
}

if (file_exists(LEPTON_PATH .'modules/lib_simplepie/install/droplet_simple_pie_list.zip')) {
droplet_install(LEPTON_PATH .'modules/lib_simplepie/install/droplet_simple_pie_list.zip', LEPTON_PATH . '/temp/unzip/');
droplet_install(LEPTON_PATH .'modules/lib_simplepie/install/droplet_simple_pie_detail.zip', LEPTON_PATH . '/temp/unzip/');
}	

/**
 *	remove install directory
 *
 */ 
if (file_exists(LEPTON_PATH .'modules/lib_simplepie/install/index.php')) { 
rm_full_dir(LEPTON_PATH."/modules/lib_simplepie/install");
}

?>
