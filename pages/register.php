<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

<h2>User Registration</h2>

<form action="../actions/register_action.php" method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Submit</button>
<button type="reset">Reset</button>

</form>

<a href="login.php">Already registered? Login</a>

</div>

</body>
</html>