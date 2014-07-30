<?php
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
if($mode=="baha"){
echo $mode . "/n";
echo $id . "/n";
echo $hash . "/n";
}else if($mode=="email"){
echo $mode . "/n";
echo $id . "/n";
echo $email . "/n";
echo $hash . "/n";
}else{
	die("0");
}
?>