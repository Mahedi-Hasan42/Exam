<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form method="post">
		<fieldset style=" background: skyblue;">
			<legend><h1 style="font-family: Algerian; color: blue ;">Login</h1></legend>
			<b>User Name:</b><br>
			<input type="title" name="id"><br><br>
			<b>Password:<b><br>
			<input type="Password" name="pass"><br><br>
			<input type="checkbox" name="">
			Remember Me<br><br>
			<button name="login">Login</button>

			<button formaction="Registration.php">Registration</button><a>
		</fieldset>
	</form>
	<?php if (isset($_SESSION['reg'])) {
		echo '<script>alert("Registration Success!!")</script>';
		session_unset();
	} 
	?>
	<?php
	if (isset($_POST['login']))
	{
		if(empty($_POST['id']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		else if(empty($_POST['pass']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		else if($_POST['id']=="admin" && $_POST['pass']=="admin")
		{
			$_SESSION['current_user']=$_POST['id'];
			header("Location: ../New folder/profile.php");
			exit;
		}
		else
		{
			echo '<script>alert("Login Failled!!")</script>';
		}
	}
	?>

</body>
</html>