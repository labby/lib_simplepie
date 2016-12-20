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



$module_directory = 'lib_simplepie';
$module_name      = 'SimplePie Library';
$module_function  = 'library';
$module_version   = '1.4.3.0';
$module_platform  = '2.x';
$module_delete	  =  true;
$module_author    = 'cms-lab';
$module_license   = '<a href="/library/LICENSE.txt" target="_blank">Custom License</a>';
$module_license_terms   = '-';
$module_description = 'This module installs basic files <a href="http://simplepie.org/" target="_blank">Simple Pie</a>.';
$module_guid      = '26b3891e-0cf1-49c5-87ad-18708dcd7439';
$module_home      = 'http://cms-lab.com';

?>