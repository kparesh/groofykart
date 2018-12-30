<?PHP


if (isset($_COOKIE['counter'])) {
	echo 'entered';
	while($_COOKIE['counter']>0){
		/*$name ='item' . $_COOKIE['counter'];
	
    unset($_COOKIE[$name]);
    setcookie($name,'', time() - 3600, '/'); // empty value and old timestamp*/
		$counterval= $_COOKIE['counter'] - 1;
	setcookie("counter",$counterval,time() + (86400 * 30), "/");
	
	
	echo "hh";
	}
}
?>