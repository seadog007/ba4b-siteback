<?php
include 'config.php';
//Send("收件人","主旨","內容","機器人暱稱");
function Send($to,$sbj,$content,$BOT_Nick){
// Request: My API (http://mailbox.gamer.com.tw/m/send2.php)
 
$ch = curl_init("http://mailbox.gamer.com.tw/m/send2.php");
curl_setopt($ch, CURLOPT_POST, TRUE);
 
// Headers
 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Cookie: MB_BAHAID=" . BOT_ID . "; MB_BAHARUNE=" . BOT_RUNE . "; MB_BAHANICK=" . $BOT_Nick,
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
        return 0;
}
 
// Success
else
{
        return 1;
}

curl_close($ch);
}

function SendS($to,$sbj,$content){
    return Send($to,$sbj,$content, BOT_NICK);
}
?>
