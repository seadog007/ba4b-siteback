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

    <?php $page="use.php"; include "dist/navbar.php" ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p id="content" align="center" valign="center"><br>驗證您的巴哈帳號</p>

        <br>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <center>
        <form action="sendverify.php" method="POST" onSubmit="return checkform()">
        <input type="text" class="form-control" id="Name" name="Name" placeholder="您的巴哈帳號">
        <br>
        <input type="submit" class="btn btn-primary" id="verify" value="驗證">
      </center>
      </form>
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
