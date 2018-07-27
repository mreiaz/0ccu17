<?php
$stupidhash = '0ea7410f8c47cf5f242117842ed415ad';
$logform = "<center><p>&nbsp;</p><p><img src='hashtag.png'></p><table border='1'><tr><td><form method='post'><input type='text' placeholder='username' name='username'><input type='password' placeholder='password' name='password'><input type='submit' value='Submit'></form></tr></td></table></center>";
if(isset($_POST['username']) AND isset($_POST['password'])){

$passhash=md5($_POST['password']);
if($passhash == $stupidhash){
die('LearninG_HOW_T0_jUGGl3_from_a_cl0wN');
}else{
echo '<p><center><table border=\'1\'><tr><td>'.$passhash.' is not '.$stupidhash.'</tr></td></table></center></p>';
echo $logform;
die(' ');
}


}else{
	echo $logform;
}
?>