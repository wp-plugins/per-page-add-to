<?php
function PerPageATHInstallStep2(){
	$configdir = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'evonapluginconfig';
	$htmlfile = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'evonapluginconfig'.DIRECTORY_SEPARATOR.'everyheadpage.html';
	if(!is_dir($configdir)){
		mkdir($configdir, 0775);
	}  
	if(!file_exists($htmlfile)){
	  if($htmlcreatehandle = fopen($htmlfile, 'x')){
		  fwrite($htmlcreatehandle, "");
		  fclose($htmlcreatehandle);
	  }
  }
}
function PerPageATHDeinstallStep2(){
	$configdir = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'evonapluginconfig';
	$htmlfile = $configdir.DIRECTORY_SEPARATOR.'everyheadpage.html';
	unlink($htmlfile);
	$scanned_directory = array_diff(scandir($configdir), array('..', '.'));
	if(empty($scanned_directory)){
		rmdir($configdir);
	}
}
?>