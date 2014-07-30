<?php
require("./phpmailer/class.phpmailer.php");
include 'config.php';

function pSendMail($to,$sbj,$content){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->Host = SMTP_HOST;      
    $mail->Port = SMTP_PORT;  
    $mail->From = SMTP_EMAIL;
    $mail->FromName = SMTP_NICK;    
    
    $mail->IsHTML(true);
    
    $mail->AddAddress($to,'親愛der用戶');
    $mail->AddReplyTo(SMTP_EMAIL,"Squall.f");
    
    $mail->Subject = $sbj;
    $mail->Body = $content;
    
    if(!$mail->Send()){
        echo "哭哭" . $mail->ErrorInfo;
        return 0;
    }else{
        return 1;
    }
}
?>
