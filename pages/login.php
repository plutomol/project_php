<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

<h2>User Login</h2>

<form action="../actions/login_action.php" method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Submit</button>
<button type="reset">Reset</button>

</form>

<a href="register.php">Create new account</a>

</div>

</body>
</html>