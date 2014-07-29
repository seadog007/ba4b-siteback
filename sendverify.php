<?php
include "send.php";
$Name = $_POST["Name"];
if(preg_match($Name, "[^a-zA-Z0-9]")||strlen($Name)>d13){
	echo "Error"
}else{
	$Time = time();
	$Exp = time() + (60 * 60 * 2);
	$Hash = md5(md5($Time . $Name));
	echo $Name . "<br>" . $Time . "<br>" . $Exp . "<br>" . $Hash
}
?>
