<?php
	require_once 'files.php';
	require_once 'config.php';

	/******File Handling*******/

	extract($_POST);
	$repeat=false;
	//print_r($all_user);
	$myfile = fopen(USERFILE, "r") or die("File does not exist");
	$all_user = get_user_info(USERFILE);
	//print_r($all_user);
	foreach($all_user as $key=>$item){
		if ($key==$username){
			$repeat=true;
		}
	}
	/*could use fread()*/
	if(!$repeat){
		$str="";
	while($line=fgets($myfile)){
		//Convert to array by " " 
		$str.= $line;
	}
	$userscore=0;
	$subscore=0;
	$code=password_hash($password, PASSWORD_DEFAULT);
	$str.= "\n".$username." ".$code." ".$class." ".$userscore." ".$subscore;
	update_file(USERFILE,$str);
	header('Location: '.accountcreated.'.'.php);
	}
	if($repeat){
	header('Location: '.repeatuser.'.'.php);
}
?>