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
    <!--[if IE]>
      <script>
        alert("宇智波IE退散\n本站拒絕IE用戶");
        document.location.href = "http://killie.tw/";
      </script>
    <![endif]-->
    <?php
$page = "index.php";
include "dist/navbar.php";
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <a href="https://github.com/ba4b"><img style="position: absolute; top: 150; right: 0; border: 0; width: 149px; height: 149px;" src="http://aral.github.com/fork-me-on-github-retina-ribbons/right-green@2x.png" alt="Fork me on GitHub"></a>
        <h1>巴哈頭像大改造<br>　　Better Avatar for Bahamut</h1>
        <p><h3 style="text-align:right;">一個連接Gravatar跟巴哈帳號的橋樑服務（瀏覽器插件）。</h3></p>
        <p><br>這是由一些非常閒的人所發起的計劃，<br>原因就只是因為巴哈的勇造太醜了…XD</p>
            <div class="btn-group">
                <a href="use.php"><button class="btn btn-success btn-lg" type="button">立即使用！ »</button></a>
            </div>
      </div>
    </div>

<!--<div class="modal fade" id="D3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">軟體授權</h4>
      </div>
      <div class="modal-body">
        <p>本程式所有部份皆採：<br>
              <a href="http://opensource.org/licenses/MIT">The MIT License</a><br>
              （MIT 許可證）<br>
              授權，你可以依照授權條款來對本軟體修改、編輯、轉載…等<br>
              不過，我們更希望你可以前往<a href="https://github.com/ba4b">我們的GitHub專案</a><br>來進行改良、或是提出建議！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>-->

    <div class="container">
      <div class="row">
            <center><h1>效果介紹</h1></center>
            <p style="font-size:20px;">只要安裝好程式，並且在本網站註冊，就能在巴哈上看到你在Gravatar設定的頭像喔！（待更新）</p>
        </div>
      </div>
<br><br>
      <hr>
      <?php
include "dist/footer.php";
?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
