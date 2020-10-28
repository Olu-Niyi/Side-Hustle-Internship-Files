<?php
$servername = "localhost";
$username="root";
$password="";
$dbName="connect1";

//create connection
$con = mysqli_connect($servername, $username, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}
echo "connection success!";
?>

