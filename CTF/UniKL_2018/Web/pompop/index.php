<?php

if(!isset($_COOKIE["authm"]) or empty($_COOKIE["authm"])){
$date_of_expiry = time() + 60 * 60 * 24 * 1;
setcookie('authm', 'VGhyZmc=', $date_of_expiry, "/");
}else{
	#nothing
}

#echo $_COOKIE["authm"];

if(isset($_COOKIE["authm"]) AND !empty($_COOKIE["authm"])){

if(strtolower($_COOKIE['authm'])=='tnf6dme='){
die('B1skut_is_forev3r_and_ETERNAL');
}else{
	echo 'Unauthorized user.';
}

}else{
	echo 'Unauthorized user.';
}


?>