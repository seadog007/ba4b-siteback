Better Avatar for Bahamut(BA4B) 網站
====================================

這個repo是給BA4B的網站使用的，內容包括有介紹用…等（抱歉，[海豹](https://github.com/seadog007)大弄的…），也有php後端的東西。

這個文件會告訴你如何建制一個BA4B的網站（雖然我真的不知道為什麼你要這麼做），以及API的使用。

![Screenshot啦](http://i.imgur.com/cmWRoWE.png)

建制部份
========
環境需求
--------
**珍惜生命，遠離Windows(等等，被[海豹](https://github.com/seadog007)打臉了啦)**

* PHP 5
* MySQL Server（MariaDB更好）
* Web Server (eg. Nginx, Apache 2, lighttpd…等)

**珍惜生命，遠離IIS**

建制方法
--------
1. 先下載這個repo。
  * Git clone(HTTPS/SSH當然都可以囉)
  * [zip download](https://github.com/ba4b/ba4b-siteback/archive/master.zip)
  * 等等之類的…
2. 用你的MySQL編輯工具建立資料庫。
3. 然後依照[config.sample.php]的指示修改設定檔，並且更名成[config.php]。
  * 巴哈帳號的cookie可以透過Firefox或Chrome的開發者工具取得，並且請使用手機版的…
4. 打開dist/下的dbstruct.sql，用它來建立資料庫結構。
5. 恭喜完工wwwww

然後還是建議大家主要使用http://ba4b.net就好…

API使用
=======
請看圖表：

| API網址 | GET | 傳回 |
---------|-----|------
| API/memberls.php | 無 | JSON格式的全部會員+md5後的email列表 |
| API/ismember.php | name=巴哈帳號 | 1或0，是否為註冊過本服務的帳號 |
| API/img_s.php | name=巴哈帳號 | PNG格式的40x40圖 |
| API/img.php | name=巴哈帳號 | PNG格式的110x110圖 |
| API/isbaha.php | name=巴哈帳號 | 1或0，是否為巴哈帳號 |
| API/query.php | name=巴哈帳號 | md5後的email列表 |

