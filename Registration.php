<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post">
		<fieldset style=" background: sandybrown;">
			<legend><h1 style="font-family: Cooper Black; color: green ;">Registration</h1></legend>
			<b>First name:</b><br>
			<input type="title" name="f_name"><br><br>
			<b>Last name:</b><br>
			<input type="title" name="l_name"><br><br>
			<b>Enter Password:</b><br>
			<input type="Password" name="e_pass"><br><br>
			<b>Recheck Password:</b><br>
			<input type="Password" name="rc_pass"><br><br>
			<b>Email:</b><br>
			<input type="Email" name="email"><br>
			<br>
			<button name="register">Register</button>
			<button formaction="Login.php">Login</button>
		</fieldset>
	</form>

	<?php
	if (isset($_POST['register']))
	{
		if(empty($_POST['f_name']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		else if(empty($_POST['l_name']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		else if(empty($_POST['e_pass']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		else if(empty($_POST['rc_pass']))
		{
			echo '<script>alert("Error!! Please fillup.")</script>';
		}
		
		else
		{
			$_SESSION['reg']=$_POST['f_name'];
			header("Location: ../New folder/Login.php");
		}
	}
	?>

</body>
</html>