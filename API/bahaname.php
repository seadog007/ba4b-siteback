<?php
function bahamembername($user){
$ch = curl_init("http://home.gamer.com.tw/homeindex.php?owner=".$user);
curl_setopt($ch, CURLOPT_POSTFIELDS, "--__X_PAW_BOUNDARY__--\r\n");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
if ($result === FALSE){
}else{
	if(@preg_match("/<span class="TS2">.{1,}<\/span>/",$result,$matches)||$user==""){
		echo $matches;
	}else{
		return "N/A";
	}
}
}
?>
