<html>



<?php

if(isset($_GET['songTitle'])){
  $song = $_GET['songTitle']; //some_value
  $song2 = str_replace("'", "", $song);
  //echo $song2;
}

?>

<audio src=<?php echo $song2;?> autoplay="true">
<div style="border: 1px solid black ; padding: 1px ;">
Sorry, your browser does not support the <audio> tag.
</div>
</audio>



<?php


echo "Hello, this is song";
##<embed src="/Sit Next to Me.m4a" autostart="true" loop="true">
##<embed src=“pathname/filename”>
##<audio src="Sit Next to Me.m4a" autostart="true"></audio>
/*
<audio>
  <source src="Sit Next to Me.m4a" type="audio/m4a">
Your browser does not support the audio element.
</audio>

*/
?>

<html/>