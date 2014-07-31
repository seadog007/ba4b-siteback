<?php
echo "";
function getbahaname($userid){
  	$chh = curl_init("http://home.gamer.com.tw/homeindex.php?owner=" . $userid);
	curl_setopt($chh, CURLOPT_RETURNTRANSFER, TRUE);
	$res = curl_exec($chh);
	if($res === FALSE){

	}else{
  		if(preg_match_all('/<span class="TS2">.+<\/span>/',$res,$match)){
    		$match[0][1]=preg_replace('/<span class="TS2">/i','',$match[0][1]);
    		$match[0][1]=preg_replace('/<\/span>/i','',$match[0][1]);
    	  	return $match[0][1];
		}else{
			return "N/A";
		}
	}
	curl_close($chh);
}
?>