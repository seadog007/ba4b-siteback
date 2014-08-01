<?php

function isbahamember($user){
$ch = curl_init("http://home.gamer.com.tw/homeindex.php?owner=".$user);
curl_setopt($ch, CURLOPT_POSTFIELDS, "--__X_PAW_BOUNDARY__--\r\n");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
if ($result === FALSE){
}else{
    if(@preg_match("/巴哈姆特系統訊息/",$result)||$user==""){
        return 0;
    }else{
        return 1;
    }
}
}
echo isbahamember(isset($_GET["name"]) ? $_GET["name"] : "");
?>