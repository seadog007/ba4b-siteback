<?php
include 'config.php';

//parse_str(implode('&', array_slice($argv, 1)), $_GET);

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$name = $_GET["name"];

if (!$con) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

if (preg_match("/[a-zA-Z0-9]/",$name)) {
    $sql = "SELECT HASHED_MAIL FROM list WHERE BAHA_ID='" . $name . "' LIMIT 1";
    $result = mysqli_query($con, $sql);
    $data = $result->fetch_array();
    $hash = $data[0];
    
    $imgf = 'http://www.gravatar.com/avatar/' . $hash . '?s=40';
    
    $img = imagecreatefromstring(file_get_contents($imgf));
    imagesavealpha($img, true);
    header('Content-Type: image/png');
    imagepng($img);
    imagedestroy($img);
} else {
    trigger_error('Don\'t try SQL Injection!');
}
?>
