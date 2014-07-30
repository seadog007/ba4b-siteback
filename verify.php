<?php
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
if($mode=="baha"){
	if($id!=""&&$hash!=""){
		echo $mode . "<br>";
		echo $id . "<br>";
		echo $hash . "<br>";
	}
}else if($mode=="email"){
	if($id!=""&&$email!=""&&$hash!=""){
		echo $mode . "<br>";
		echo $id . "<br>";
		echo $email . "<br>";
		echo $hash . "<br>";
	}
}else{
	die("0");
}
?>