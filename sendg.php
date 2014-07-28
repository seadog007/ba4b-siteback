<?php
include 'config.php';

Send($_GET["To"],$_GET["Subject"],$_GET["Content"],$_GET["BotNick"]);
//Send("pcchou","函數","函數測試","聽說這裡可以亂塞東西//////");
function Send($to,$sbj,$content,$BOTNick){
// Request: My API (http://mailbox.gamer.com.tw/m/send2.php)
 
$ch = curl_init("http://mailbox.gamer.com.tw/m/send2.php");
curl_setopt($ch, CURLOPT_POST, TRUE);
 
// Headers
 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Cookie: MB_BAHAID=" .BOT_ID . "; MB_BAHARUNE=" . BOT_RUNE . "; MB_BAHANICK=" . $BOTNick,
        "Host: mailbox.gamer.com.tw",
        "Origin: http://mailbox.gamer.com.tw",
));
 
// Body
 
$body_parameters = array(
        "to" => $to,
        "sbj" => $sbj,
        "content" => $content,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body_parameters));
 
// Send synchronously
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
 
// Failure
if ($result === FALSE)
{
        echo "cURL Error: " . curl_error($ch);
}
 
// Success
else
{
        echo "Request completed: " . $result;
}

curl_close($ch);
}
?>