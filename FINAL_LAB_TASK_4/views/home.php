<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New User</a> |
	<a href="../views/users.php">User List</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>