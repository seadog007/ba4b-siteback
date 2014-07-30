<?php
if($_GET["mode"]=="baha"){
echo $_GET["mode"] . "/n";
echo $_GET["id"] . "/n";
echo $_GET["hash"] . "/n";
}else if($_GET["mode"]=="email"){
echo $_GET["mode"] . "/n";
echo $_GET["id"] . "/n";
echo $_GET["email"] . "/n";
echo $_GET["hash"] . "/n";
}else{
	die("0");
}
?>