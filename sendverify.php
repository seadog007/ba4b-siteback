<?php
include "send.php";
$Name = $_POST["Name"];
$Time = time();
$Exp = time() + (60 * 60 * 2);
$Hash = md5(md5($Time . $Name));
echo $Name . "<br>" . $Time . "<br>" . $Exp . "<br>" . $Hash
?>