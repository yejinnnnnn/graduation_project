<?php
$sname= "192.168.0.13";
$uname= "dbuser";
$password="암호암호";

$db_name = "dbtest";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn){
    echo("Connection failed!");

}
?>