<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>巴哈頭像大改造 | Better Avatar for Bahamut</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="jumbotron.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  
<?php
include "config.php";
$page="verify.php";
include "dist/navbar.php";
$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
$IP = $_SERVER['REMOTE_ADDR'];
$Time = time();
$Time = date("Y-m-d H:i:s",$Time); 
echo '<div class="jumbotron"><div class="container"><p align="center" valign="center"><br><br>';
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
    			echo '<meta http-equiv="refresh" content="5; url=userman.php?name=' . $id . '&hash=' . $hash . '"></head><body>驗證巴哈帳號成功，<br>即將跳轉到userman.php';
    			include "dist/footer.php";
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
?></p></div>
    </div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script></body></html>
