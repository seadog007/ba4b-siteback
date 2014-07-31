<?php

function getbahaname($userid){
  	$chh = curl_init("http://home.gamer.com.tw/homeindex.php?owner=" . $userid);
	curl_setopt($chh, CURLOPT_POSTFIELDS, "--__X_PAW_BOUNDARY__--\r\n");
	curl_setopt($chh, CURLOPT_RETURNTRANSFER, TRUE);
	$res = curl_exec($chh);
	curl_close($chh);
	if ($res === FALSE){
	}else{
  		if(preg_match_all('/<span class="TS2">.+<\/span>/',$res,$match)){
    		preg_replace('/<span class="TS2">/','',$match[0][1]);
    		preg_replace('/<\/span>/','',$match[0][1]);
    	  	return $match[0][1];
		}else{
			return "N/A";
		}
	}
}

?>