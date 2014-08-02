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

<div class="modal fade" id="D1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">效果介紹</h4>
      </div>
      <div class="modal-body">
         <p><br>使用此插件可以替換原本巴哈的半付費頭像<br>
              <img src="dist/img/eff1.png" alt="效果圖"></img><br>
              可以綁定巴哈帳號與<a href="http://en.gravatar.com/">Gravatar</a><br>
            </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
      </div>
    </div>
  </div>
</div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <center><h2>效果介紹</h2></center>
            <p><br>使用此插件可以替換原本巴哈的半付費頭像<br>
              可以綁定巴哈帳號與<a href="http://en.gravatar.com/">Gravatar</a><br>
            </p>
            <button class="btn btn-default" data-toggle="modal" data-target="#D1">
            看更多 »
            </button>
        </div>
        <div class="col-md-4">
            <center><h2>如何使用</h2></center>
            <p><br>首先，你必須要有一個巴哈帳號(被打<br>
            然後安裝我們的userscript，<br>
            並且綁定巴哈帳號與Email。<br>
            有沒有很簡單呢？<br>
            趕快來試試吧</p>
            <a class="btn btn-default" href="use.php">
            看更多 »
            </a>
        </div>
        <div class="col-md-4">
            <center><h2>公告專區</h2></center>
            <br>
            <p>2014/8/3  內部測試?<br></p>
            <p>2014/8/4  正式啟用?<br></p>
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