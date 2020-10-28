<?php
$servername = "localhost";
$username="root";
$password="";
$dbName="connect1";

//create connection
try{
    $con = new PDO("MYSQL:HOST=$servername; dbname=$dbName", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection Success";
}
catch (PDOException $e){
    echo "Error in connection" . $e->getMessage();
}
?>