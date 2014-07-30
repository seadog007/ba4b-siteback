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
	$IP = $_SERVER['REMOTE_ADDR'];
	//echo $Name . "<br>" . $Time . "<br>" . $Exp . "<br>" . $Hash;

	$con=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or print("Failed to connect to MySQL: " . mysqli_connect_error());
	                                                         // Check connection
	/*if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{*/
		$sql = "INSERT INTO `verify` (`ID`, `BAHA_ID`, `BAHA_HASH`, `TIME`, `EXPIRE_TIME`, `IP`, `verifycomplete`) VALUES (NULL, '" . $Name . "', '" . $Hash . "', '" . $Time . "', '" . $Exp . "', '" . $IP . "', '0');";
		mysqli_query($con,$sql);
		mysqli_close($con);
		SendS($Name,"BA4B服務驗證信","你好，這裡是BA4B服務中心，%0D%0A請進入網址：" . SYS_URL . "verify.php?mode=baha&id=" . $Name . "&hash=" . $Hash . "%0D%0A來完成驗證…%0D%0ABA4B團隊 各種感謝你XD");
    //}
//}
