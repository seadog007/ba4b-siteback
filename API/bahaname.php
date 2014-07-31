<?php
function getbahamembername($user){
$ch = curl_init("http://home.gamer.com.tw/homeindex.php?owner=".$user);
curl_setopt($ch, CURLOPT_POSTFIELDS, "--__X_PAW_BOUNDARY__--\r\n");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
if ($result === FALSE){
}else{
  if(preg_match_all('/<span class="TS2">.+<\/span>/',$result,$matches)||$user==""){
  	echo $matches[0][1];
    preg_replace('/<span class="TS2">/','',$matches[0][1]);
    preg_replace('/<\/span>/','',$matches[0][1]);
    	return $matches[0][1];
	}else{
		return "N/A";
	}
}
}
?>
