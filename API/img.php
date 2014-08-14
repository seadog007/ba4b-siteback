<?php
include '../config.php';

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
$name = isset($_GET["name"]) ? $_GET["name"] : "" ;

if (preg_match("/[a-zA-Z0-9]/",$name)) {
    $sql = "SELECT `HASHED_MAIL` FROM `list` WHERE `BAHA_ID`='" . mysqli_real_escape_string($con,$name) . "' LIMIT 1";
    $result = mysqli_query($con, $sql);
    $data = $result->fetch_array();
    $hash = $data[0];

    $imgf = 'http://www.gravatar.com/avatar/' . $hash . '?s=110';

    $img = imagecreatefromstring(file_get_contents($imgf));
    imagesavealpha($img, true);
    header('Content-Type: image/png');
    imagepng($img);
    imagedestroy($img);
} else {
    trigger_error('Don\'t try SQL Injection!');
}
