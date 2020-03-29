<?php
	require_once 'files.php';
	require_once 'config.php';

	/******File Handling*******/

	extract($_POST);

	//print_r($all_user);
	$myfile = fopen(USERFILE, "r") or die("File does not exist");

	/*could use fread()*/
	$str="";
	while($line=fgets($myfile)){
		//Convert to array by " " 
		$str.= $line;
	}
	$str.= "\n".$username." ".$password." ".$class;
	update_file(USERFILE,$str);
	header('Location: '.Login.'.'.php);






?>
