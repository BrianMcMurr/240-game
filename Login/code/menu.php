<?php
require_once 'files.php';
require_once 'config.php';
echo "<pre>";
extract($_POST);
session_start(); 
$username = $_SESSION['$username'];
echo('welcome '.$username."\nyour highscore is ".gethighscore($username));
function gethighscore($username){
	$all_user = get_user_info(USERFILE);
	foreach($all_user as $key=>$item){
		if ($key==$username){
			return $item['userscore'];
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Welcome to Music Math</title>
	</head> 
	<style type="text/css">
			body{
				font-family: Monaco; //change everything after sans to change font
			}    
	</style>
	<body>
		<fieldset>
	
		<legend>Welcome To Music Math</legend>
		
		<!-- change runner.php to actaulyl redierct page -->
			
			<a href="runner.php">
			<input type="image" id="sart" alt="start" src="Start.png" height="120" width="160">
			</a>
			
			<a href="Login.php">
			<input type="image" id="logout" alt="logout" src="quit.png" height="100" width="150">	
			</a>
		</fieldset>
	</body>
</html>
<?php
	$all_user = get_user_info(USERFILE);
	$namesandscores= array();
	foreach($all_user as $key=>$item){
		$namesandscores[$key]=$item['userscore'];

	}
	arsort($namesandscores);
	foreach ($namesandscores as $key => $val) {
    		echo "$key = $val\n";
	}		

	function checkmax($key, $us, $array){
		$changed=false;
		for($i=0;$i<5;$i++){
			if($us>$top5num[$i]&&!$changed){
				$recheckname=$top5name[$i];
				$rechecknum=$top5num[$i];
				$top5num[$i]=$us;
				$top5name[$i]=$key;
				$changed=true;
				return checkmax($recheckname,$rechecknum,$array);
			}
		}
		return $array;
	}

?>	
	
