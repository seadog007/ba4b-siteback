<?php
include "send.php";
include "isbahamember.php";

$Name = $_POST["Name"];
if((@preg_match("/[^a-zA-Z0-9]/",$Name) || strlen($Name) >= 13 || $Name == "") && isbahamember($Name)){
	die("0");
}//else{
	$Time = time();
	$Exp = time() + (60 * 60 * 2);
	$Time = date("Y-m-d H:i:s",$Time); 
	$Exp = date("Y-m-d H:i:s",$Exp); 
	$Hash = md5(md5($Time . $Name));
	echo $Name . "<br>" . $Time . "<br>" . $Exp . "<br>" . $Hash;

	$con=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or print("Failed to connect to MySQL: " . mysqli_connect_error());
	                                                         // Check connection
	/*if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{*/
		$sql="INSERT INTO `verify` (`ID`, `BAHA_ID`, `HASH`, `TIME`, `EXPIRE_TIME`) VALUES (NULL, '" . $Name . "', '" . $Hash . "', '" . $Time . "', '" . $Exp . "');";
		mysqli_query($con,$sql);
		mysqli_close($con);
		send($Name,"主旨","請進入" . SYS_URL . "verify.php?hash?" . $Hash);
	//}
//}
?>
