<?php
$val = $_GET['term'];


if(isset($_COOKIE['counter'])){ 
$counterval= $_COOKIE['counter'] + 1;
	setcookie("counter",$counterval,time() + (86400 * 30), "/");
	
	$name ='item' . $counterval;
setcookie($name,$val,time() + (86400 * 30), "/");	
echo $name;
	
}



?>