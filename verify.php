<meta charset="utf-8">
<?php
include "config.php";
include "setmail.php";
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
    			echo '<meta http-equiv="refresh" content="5; url=userman.php?name=' . $id . '&hash=' . $hash . '"></head><body>';
                echo '<div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>驗證巴哈帳號成功，<br>即將跳轉到userman.php';
    		}
    	}else if($data[1]==1){
    		echo '<meta http-equiv="refresh" content="5; url=index.php"></head><body><div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>已驗證過';
    	}else{
    		echo '<meta http-equiv="refresh" content="5; url=index.php"></head><body><div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>錯誤';
    	}
        include "dist/footer.php";
	}
}else if($mode=="email"){
    echo '<div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>';
	if($id!=""&&$email!=""&&$hash!=""){
		$sql = "SELECT `BAHA_ID`,`EMAIL`,`verifycomplete` FROM `emailverify` WHERE `EMAIL_HASH`='" . $hash . "'";
        $result = @mysqli_query($con, $sql);
        $data = $result->fetch_array();
        if($data[0]==$id&&$data[1]==$email&&$data[2]==0){
            $sql = "UPDATE `emailverify` SET  `verifycomplete` =  '1' WHERE  `EMAIL_HASH`='" . $hash . "'";
            @mysqli_query($con, $sql);
            if(firstlogin($id)){
                updatamail($id,$email,$IP);
                echo '<meta http-equiv="refresh" content="5; url=index.php"></head><body>驗證Email帳號成功，<br>即將跳轉回首頁';
            }
        }else if($data[2]==1){
            echo '<meta http-equiv="refresh" content="5; url=index.php"></head><body><div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>已驗證過';
        }else{
            echo '<meta http-equiv="refresh" content="5; url=index.php"></head><body><div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>錯誤';
        }
	}
}
function firstlogin($id){
	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
	$sql = "SELECT `EMAIL` FROM `list` WHERE `BAHA_ID`='" . $id . "'";
    $result = @mysqli_query($con, $sql);
    $data = $result->fetch_array();
    if($data[0]==""){
    	return true;
    }else{
    	return false;
    }
}
?>
