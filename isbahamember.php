<?php
$ch = curl_init("http://home.gamer.com.tw/homeindex.php?owner=".$_GET["user"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, "--__X_PAW_BOUNDARY__--\r\n");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);

if ($result === FALSE){
}else{
	if(@preg_match("/巴哈姆特系統訊息/",$result)){
		echo "0";
	}else{
		echo "1";
	}
}

curl_close($ch);
?>
