Better Avatar for Bahamut(BA4B) 網站
====================================

這個 repo 是給 BA4B 的網站使用的，內容包括有介紹用…等（抱歉，[海豹](https://github.com/seadog007)大弄的…），也有 php 後端的東西。

這個文件會告訴你如何建置一個 BA4B 的網站（雖然我真的不知道為什麼你要這麼做），以及 API 的使用。

![Screenshot 啦](http://i.imgur.com/cmWRoWE.png)

建置部份
========
環境需求
--------
**珍惜生命，遠離 Windows(等等，被[海豹](https://github.com/seadog007)打臉了啦)**

* PHP 5
* MySQL Server（MariaDB 更好）
* Web Server (eg. Nginx, Apache 2, lighttpd…等)

**珍惜生命，遠離 IIS**

建置方法
--------
1. 先下載這個 repo。
  * Git clone(HTTPS/SSH 當然都可以囉)
    * 請務必要連著 includes/PHPMailer 這個 submodule 一起 clone.
    * 你可以在 git clone 後面加上 --resursive
  * 等等之類的…
2. 用你的 MySQL 編輯工具建立資料庫。
3. 然後依照 [config.sample.php] 的指示修改設定檔，並且更名成 [config.php]。
  * 巴哈帳號的 cookie 可以透過 Firefox 或 Chrome 的開發者工具取得，並且請使用手機版的…
4. 打開 dist/ 下的 dbstruct.sql，用它來建立資料庫結構。
5. 恭喜完工wwwww

然後還是建議大家主要使用 [http://ba4b.net](http://ba4b.net) 就好…

API 使用
=======
請看圖表：

| API網址 | GET Var | 傳回 |
---------|-----|------
| API/memberls.php | 無 | JSON 格式的全部會員 + md5 後的 email 列表 |
| API/ismember.php | name=巴哈帳號 | 1或0，是否為註冊過本服務的帳號 |
| API/img_s.php | name=巴哈帳號 | PNG 格式的 40x40 圖 |
| API/img.php | name=巴哈帳號 | PNG 格式的 110x110 圖 |
| API/isbaha.php | name=巴哈帳號 | 1或0，是否為巴哈帳號 |
| API/query.php | name=巴哈帳號 | md5 後的 email 列表 |

