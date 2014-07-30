<?php
include "config.php";
$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
if($mode=="baha"){
	if($id!=""&&$hash!=""){
		$sql = "SELECT `BAHA_HASH`,`verifycomplete` FROM `verify` WHERE `BAHA_ID`='" . $id . "'";
    	$result = @mysqli_query($con, $sql);
    	$data = $result->fetch_array();
    	if($data[0]==$hash&&$data[1]==0){
    		$sql = "UPDATE `verify` SET  `verifycomplete` =  '1' WHERE  `BAHA_ID`='" . $id . "'";
    		$result = @mysqli_query($con, $sql);
    	}else if($data[1]==1){
    		die("已驗證過");
    	}else{
    		die("錯誤");
    	}
	}
}else if($mode=="email"){
	if($id!=""&&$email!=""&&$hash!=""){
		$sql = "SELECT `EMAIL_HASH`,`verifycomplete` FROM `emailverify` WHERE `BAHA_ID`='" . $id . "'";
    	$result = @mysqli_query($con, $sql);
    	$data = $result->fetch_array();
    	if($data[0]==$hash&&$data[1]==0){
    		$sql = "UPDATE `emailverify` SET  `verifycomplete` =  '1' WHERE  `BAHA_ID`='" . $id . "'";
    		$result = @mysqli_query($con, $sql);
    	}else if($data[1]==1){
    		die("已驗證過");
    	}else{
    		die("錯誤");
    	}
	}
}
?>