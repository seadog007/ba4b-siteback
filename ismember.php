<?php
include 'config.php';


$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$name = $_GET["name"];

if (!$con) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

if (preg_match("/[a-zA-Z0-9]/",$name)) {
    $sql = "SELECT EXISTS(SELECT BAHA_ID FROM list WHERE BAHA_ID='" . $name . "' LIMIT 1)";
    $result = mysqli_query($con, $sql);
    $data  = $result->fetch_array();
    echo $data[0];
} else {
    trigger_error('Don\'t try SQL Injection!');
}

?>
