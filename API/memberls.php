<?php
include '../config.php';

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());

$sql = "SELECT `BAHA_ID`,`HASHED_MAIL` FROM `list` ORDER BY `ID`;";
$result = mysqli_query($con, $sql);

$var = array();

while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;
}
echo '{"list":'.json_encode($var).'}';
