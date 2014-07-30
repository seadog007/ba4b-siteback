<?php
	/**
	 * The config file for "Better Avatar for Bahamut"(BA4B) web application.
	 * 「巴哈頭像大改造」(BA4B)專案的網頁網站的設定檔案
	 * 
	 * Partially from WordPress's wp-config-sample.php | 部份參考自WordPress的wp-config-sample.php
	 * 
	 * Please fill in according to facts. XD | 請照實填寫喔XD
	 * After editing, Please rename this file to config.php. | 編輯後，請把檔案名稱改成config.php。
	 */
	 
     
	// System Settings - System related settings.
	// 系統設定 - 系統相關設定。
    
	// The root URL of this application. Include "http://"" and last "/". | 這個程式的根目錄的URL 包含"http://"跟最後的"/""
	define("SYS_URL","URL_here");
    
	// Message Bot Settings - This is the account used to send verification messages. (Please use bahamut mobile version.)
	// 訊息bot設定 - 這個帳號會被用來傳送確認訊息。 （請使用手機版本的巴哈姆特）
	
	// Your bot account's bahamut ID | 你的訊息bot帳號的ID
	define("BOT_ID","bahamut_id_here");
    // Your bot account's bahamut nickname | 你的訊息bot帳號的暱稱
	define("BOT_NICK","bahamut_nick_here");
	// Bahamut session cookie (Get this from MB_BAHARUNE cookie) | 巴哈姆特的登入狀態cookie（請從MB_BAHARUNE這個cookie項目取得）
	define("BOT_RUNE","bahamut_session_cookie_here");
	
	
	// MySQL Database Settings - The place where the datas are stored. (Get these from your web host or administrator.)
	// MySQL資料庫設定 - 存放各種資料的地方。 （請從你的網頁空間資料或系統管理員取得。）
	
	// The MySQL Database name for BA4B | 存放BA4B資料的MySQL資料庫名稱
	define("DB_NAME","database_name_here");
	// MySQL Database Username | MySQL資料庫使用者名稱
	define("DB_USER","username_here");
	// MySQL Database Password | MySQL資料庫密碼
	define("DB_PASS","password_here");
	// MySQL Host Address | MySQL主機位址
	define("DB_HOST","localhost");
	
	
	// That's end. | 結束了啦XD

?>
