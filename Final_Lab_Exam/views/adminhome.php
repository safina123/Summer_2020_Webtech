<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Welcome to Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/registration.php">Create New User</a> |
	<a href="../views/users.php">User List</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>