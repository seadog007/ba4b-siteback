<?php
include "includes/sendmail.php";
include "includes/bahaname.php";

$email = isset($_POST["email"]) ? $_POST["email"] : "" ;
$hash = isset($_POST["hash"]) ? $_POST["hash"] : "" ;
$name = isset($_POST["name"]) ? $_POST["name"] : "" ;
$Time = time();
$Exp = $Time + (60 * 60 * 2);
$Time = date("Y-m-d H:i:s",$Time);
$Exp = date("Y-m-d H:i:s",$Exp);
$Ehash = md5(md5($Time . $email));
$IP = $_SERVER['REMOTE_ADDR'];
if(preg_match("/[a-zA-Z0-9]{1,12}/",$name)&&preg_match("/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/",$email)){
    $con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
    $sql = "SELECT `BAHA_HASH`,`verifycomplete` FROM `verify` WHERE `BAHA_ID`='" . addslashes($name) . "' order by `ID` desc LIMIT 1";
    $result = @mysqli_query($con, $sql);
    $data = $result->fetch_array();
    if($data[0]==$hash&&$data[1]==1){
           $sql = "INSERT INTO `emailverify` (`ID`, `BAHA_ID`, `EMAIL`, `EMAIL_HASH`, `TIME`, `EXPIRE_TIME`, `IP`, `verifycomplete`) VALUES (NULL, '" . addslashes($name) . "', '" . addslashes($email) . "', '" . addslashes($Ehash) . "', '" . addslashes($Time) . "', '" . addslashes($Exp) . "', '" . addslashes($IP) . "', '0');";
        mysqli_query($con,$sql);
        mysqli_close($con);
        if(pSendMail($email,"BA4B服務驗證信", getbahaname($name) . "您好，這裡是BA4B服務中心，<br>請進入網址：<br>" . SYS_URL . "verify.php?mode=email&id=" . $name . "&email=" . $email . "&hash=" . $Ehash . "<br>完成驗證…<br>驗證網址有效期限為兩小時，<br>如發現頁面過期即有可能是超過驗證有效期限。<br>BA4B工作團隊 感謝您！<br>（備註：如果您沒有申請BA4B服務，請不要回覆此信件）") == 1) {
            echo '寄信成功，<br>請至您的Email信箱檢查收信！' ;
        }else{
            echo '哭哭';
        }
    }else{
        echo '<p>參數錯誤</p>';
    }
}else{
    trigger_error('Don\'t try SQL Injection!');
}
