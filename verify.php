<?php
include "config.php";
$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
$IP = $_SERVER['REMOTE_ADDR'];
$Time = time();
$Time = date("Y-m-d H:i:s",$Time); 
if($mode=="baha"){
	if($id!=""&&$hash!=""){
		$sql = "SELECT `BAHA_ID`,`verifycomplete` FROM `verify` WHERE `BAHA_HASH`='" . $hash . "'";
    	$result = @mysqli_query($con, $sql);
    	$data = $result->fetch_array();
    	if($data[0]==$id&&$data[1]==0){
    		$sql = "UPDATE `verify` SET  `verifycomplete` =  '1' WHERE  `BAHA_HASH`='" . $hash . "'";
    		@mysqli_query($con, $sql);
    		if(firstlogin($id)){
    			$sql = "INSERT INTO `list` (`ID`, `BAHA_ID`, `EMAIL`, `HASHED_MAIL`, `REGISTER_TIME`, `REGISTER_IP`, `MODIFY_TIME`, `MODIFY_IP`) VALUES (NULL, '" . $id . "', '', '', '" . $Time . "', '" . $IP . "', '0000-00-00 00:00:00', '0.0.0.0')";
    			@mysqli_query($con, $sql);
    		}
    	}else if($data[1]==1){
    		die("已驗證過");
    	}else{
    		die("錯誤");
    	}
	}
}else if($mode=="email"){
	if($id!=""&&$email!=""&&$hash!=""){
		$sql = "SELECT `BAHA_ID`,`verifycomplete` FROM `emailverify` WHERE `EMAIL_HASH`='" . $hash . "'";
    	$result = @mysqli_query($con, $sql);
    	$data = $result->fetch_array();
    	if($data[0]==$id&&$data[1]==0){
    		$sql = "UPDATE `emailverify` SET  `verifycomplete` =  '1' WHERE  `EMAIL_HASH`='" . $hash . "'";
    		@mysqli_query($con, $sql);
    	}else if($data[1]==1){
    		die("已驗證過");
    	}else{
    		die("錯誤");
    	}
	}
}
function firstlogin($id){
	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
	$sql = "SELECT `ID` FROM `list` WHERE `BAHA_ID`='" . $id . "'";
    $result = @mysqli_query($con, $sql);
    $data = $result->fetch_array();
    if($data[0]==""){
    	return true;
    }else{
    	return false;
    }
}
?>