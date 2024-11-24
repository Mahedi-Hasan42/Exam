<?php
echo '<script>alert("Login Success!!")</script>';
session_start(); // Start session to access user data

// Redirect to login if not logged in
if (!isset($_SESSION['current_user'])) {
    header("Location: ../New folder/Login.php");
    exit;
}

$user = $_SESSION['current_user']; // Get current logged-in user
?>


<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
<h2>Profile</h2>
<p><strong>Email:</strong> <?php //echo htmlspecialchars($user['email']); ?></p>
<!-- Updated logout link -->
<button><a href="Login.php">Logout</a></button>
</body>
</html>
