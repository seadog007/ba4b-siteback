<!DOCTYPE html>
<html lang="en">
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
  </head>

  <body>

<?php
include "config.php";
include "includes/setmail.php";
include "includes/bahaname.php";
$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
$con->query("SET NAMES utf8");
$mode = isset($_GET["mode"]) ? $_GET["mode"] : "" ;
$id = isset($_GET["id"]) ? $_GET["id"] : "" ;
$email = isset($_GET["email"]) ? $_GET["email"] : "" ;
$hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
$IP = $_SERVER['REMOTE_ADDR'];
$Time = time();
$Time = date("Y-m-d H:i:s",$Time); 
$ref_time = 3000;
if($mode=="baha"){
    $page="verify.php?baha"; 
    include "dist/navbar.php";
    echo '<div class="jumbotron" style="height:300px">
      <div class="container">
        <div class="f1 col-md-4 col-md-offset-4" align="center" valign="center">';
	if($id!=""&&$hash!=""){
		$sql = "SELECT `BAHA_ID`,`verifycomplete` FROM `verify` WHERE `BAHA_HASH`='" . $hash . "' order by 1 desc";
    	$result = @mysqli_query($con, $sql);
    	$data = $result->fetch_array();
    	if($data[0]==$id&&$data[1]==0){
    		$sql = "UPDATE `verify` SET  `verifycomplete` =  '1' WHERE  `BAHA_HASH`='" . $hash . "'";
    		mysqli_query($con, $sql);
    		if(firstlogin($id)){
    			$sql = "INSERT INTO `list` (`ID`, `BAHA_ID`, `BAHA_NAME`, `EMAIL`, `HASHED_MAIL`, `REGISTER_TIME`, `REGISTER_IP`, `MODIFY_TIME`, `MODIFY_IP`) VALUES (NULL, '" . $id . "','" . getbahaname($id) . "', '', '', '" . $Time . "', '" . $IP . "', '0000-00-00 00:00:00', '0.0.0.0')";
    			mysqli_query($con, $sql);
    		}
            echo '<p><br><br>驗證巴哈帳號成功，<br>即將跳轉到userman.php</p><script>setTimeout("location.href=\'userman.php?name=' . $id . '&hash=' . $hash . '\'",' . $ref_time . ');</script>';
    	}else if($data[0]==$id&&$data[1]==1){
    		echo '<p><br><br>已驗證過，<br>即將跳轉到userman.php</p><script>setTimeout("location.href=\'userman.php?name=' . $id . '&hash=' . $hash . '\'",' . $ref_time . ');</script>';
    	}else{
    		echo '<p><br><br>錯誤，<br>即將跳轉回首頁</p><script>setTimeout("location.href=\'index.php\'",' . $ref_time . ');</script>';
    	}
	}
}else if($mode=="email"){
    $page="verify.php?email";
    include "dist/navbar.php";
    echo '<div class="jumbotron" style="height:300px">
      <div class="container">
        <div class="f1 col-md-4 col-md-offset-4" align="center" valign="center">';
	if($id!=""&&$email!=""&&$hash!=""){
		$sql = "SELECT `BAHA_ID`,`EMAIL`,`verifycomplete` FROM `emailverify` WHERE `EMAIL_HASH`='" . $hash . "' order by 1 desc";
        $result = @mysqli_query($con, $sql);
        $data = $result->fetch_array();
        if($data[0]==$id&&$data[1]==$email&&$data[2]==0){
            $sql = "UPDATE `emailverify` SET  `verifycomplete` =  '1' WHERE  `EMAIL_HASH`='" . $hash . "'";
            @mysqli_query($con, $sql);
            if(firstlogin($id)){
                updatamail($id,$email,$IP);
            }
            echo '<p><br><br>已綁定Email帳號與巴哈帳號，<br>即將跳轉回首頁</p><script>setTimeout("location.href=\'index.php\'",' . $ref_time . ');</script>';
        }else if($data[0]==$id&&$data[1]==$email&&$data[2]==1){
            echo '<p><br><br>已綁定完成過，<br>即將跳轉回首頁</p><script>setTimeout("location.href=\'index.php\'",' . $ref_time . ');</script>';
        }else{
            echo '<p><br><br>錯誤，<br>即將跳轉回首頁</p><script>setTimeout("location.href=\'index.php\'",' . $ref_time . ');</script>';
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
</div>
</div>
</div>
<hr>
      <?php include "dist/footer.php" ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/shake.js"></script>
    <script src="dist/js/checkform.js"></script>
  </body>
</html>

