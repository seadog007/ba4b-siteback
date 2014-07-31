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

    <?php $page="userman.php"; include "dist/navbar.php" ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="height:300px">
      <div class="f1 col-md-4 col-md-offset-4" align="center" valign="center" style="top:0px;">
          <p><br>驗證您的E-mail位置</p>
          <br>

        <?php
        include "config.php";

        $hash = isset($_GET["hash"]) ? $_GET["hash"] : "" ;
        $name = isset($_GET["name"]) ? $_GET["name"] : "" ;
        if(preg_match("/[a-zA-Z0-9]{1,12}/",$name)){
          $con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
          $sql = "SELECT `BAHA_HASH`,`verifycomplete` FROM `verify` WHERE `BAHA_ID`='" . $name . "'";
          $result = @mysqli_query($con, $sql);
          $data = $result->fetch_array();
          if($data[0]==$hash&&$data[1]==1){
            echo '<form action="javascript:sub2()" method="POST" onSubmit="return isEmail()"><input type="text" class="form-control" id="email" name="email" placeholder="您的E-mail位置"><input type="hidden" name="name" id="name" value="' . $name . '"><input type="hidden" name="hash" id="hash" value="' . $hash . '"><br><input type="submit" class="btn btn-primary" id="verify" value="立即驗證"></form>';
          }else{
            echo '<p>參數錯誤</p>';
          }
        }else{
          echo '<p>不允許直接存取</p>';
        }
        ?>
        </div>
        <div class="f2 col-md-4 col-md-offset-4" align="center" valign="center" style="right:-500px; opacity:0; top:-100px;">
          <br>
          <p id="msg"></p>
          <br>
        </div>
      </div>
    </div>
      <hr>
      <?php include "dist/footer.php"?>
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