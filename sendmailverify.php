<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include "includes/sendmail.php";

$Name = $_POST["Name"];
$Email = $_POST["Email"];

if(preg_match("/[a-zA-Z0-9]{1,12}/",$Name) && preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/",$Email)){
$Time = time();
$Exp = time() + (60 * 60 * 2);
$Time = date("Y-m-d H:i:s",$Time); 
$Exp = date("Y-m-d H:i:s",$Exp); 
$Hash = md5(md5($Time . $Email));
$IP = $_SERVER['REMOTE_ADDR'];
//echo $Name . "<br>" . $Time . "<br>" . $Exp . "<br>" . $Hash;

$con=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or print("Failed to connect to MySQL: " . mysqli_connect_error());
                                                         // Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	$sql = "INSERT INTO `emailverify` (`ID`, `BAHA_ID`, `EMAIL`, `EMAIL_HASH`, `TIME`, `EXPIRE_TIME`, `IP`, `verifycomplete`) VALUES (NULL, '" . $Name . "', '" . $Email . "', '" . $Hash . "', '" . $Time . "', '" . $Exp . "', '" . $IP . "', '0');";
	mysqli_query($con,$sql);
	mysqli_close($con);
	if(pSendMail($Email,"BA4B服務驗證信",$Name . "你好，這裡是BA4B服務中心，<br>請進入網址：" . SYS_URL . "verify.php?mode=email&id=" . $Name . "&hash=" . $Hash . "<br>來完成驗證…<br>BA4B團隊 各種感謝你XD") == 1) {
		echo '寄信成功，請至你的Email信箱檢查收信！' ;
	}else{
		echo '哭哭';
	}
}

}else{
    trigger_error('Don\'t try SQL Injection!');
}

?>
