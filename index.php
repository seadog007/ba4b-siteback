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

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<!--[if IE]>
	  <script>
	    alert("宇智波IE退散\n本站拒絕IE用戶");
	    document.location.href = "http://killie.tw/";
	  </script>
    <![endif]-->
    <?php $page="index.php"; include "navbar.php" ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <a href="https://github.com/ba4b"><img style="position: absolute; top: 150; right: 0; border: 0; width: 149px; height: 149px;" src="http://aral.github.com/fork-me-on-github-retina-ribbons/right-green@2x.png" alt="Fork me on GitHub"></a>
        <h1>巴哈頭像大改造<br>　　Better Avatar for Bahamut</h1>
        <p><h3 style="text-align:right;">一個連接Gravatar跟巴哈帳號的橋樑服務（瀏覽器插件）。</h3></p>
        <p><br>這是由一些非常閒的人所發起的計劃，<br>原因就只是因為巴哈的勇造太醜了…XD</p>
        <a href="use.php"><p class="btn btn-success btn-lg" data-toggle="modal" data-target="#basicModal">立即使用！ &raquo;</p></a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <h2><center>效果介紹</center></h2>
            <p></p>
        </div>
        <div class="col-md-4">
            <h2><center>如何使用</center></h2>
        </div>
        <div class="col-md-4">
            <h2><center>軟體授權</center></h2>
            <p>本程式所有部份皆採：<br>
              <a href="http://opensource.org/licenses/MIT">The MIT License</a><br>
              （MIT 許可證）<br>
              授權，你可以依照授權條款來對本軟體修改、編輯、轉載…等<br>
              不過，我們更希望你可以前往<a href="https://github.com/ba4b">我們的GitHub專案</a><br>來進行改良、或是提出建議！</p>
        </div>

      </div>
<br><br>
      <hr>
      <?php include "footer.php" ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
