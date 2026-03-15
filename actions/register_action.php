<?php

include("../includes/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if($conn->query($sql)){
    header("Location: ../pages/login.php");
}
else{
    echo "Error";
}

?>