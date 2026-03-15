<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['email'])){
header("Location: login.php");
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Landing Page</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

<h3>Please find your registered information as follows:</h3>

<ul>

<li>Name: <?php echo $user['name']; ?></li>

<li>Email: <?php echo $user['email']; ?></li>

<li>Password: <?php echo $user['password']; ?></li>

</ul>
<a href="../actions/logout.php">Logout</a>

</div>

</body>
</html>