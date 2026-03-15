<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bca_3rd";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Connection Failed");
}

?>