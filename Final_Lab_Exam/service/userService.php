<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "Database connection is error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "Database connection is error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "Database connection is error";
		}

		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(empty($user)){
			return "none";
		}else{
			return $user['type'];
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "Database connection is error";
		}

		$sql = "insert into users values('{$user['name']}','{$user['email']}', '{$user['username']}','{$user['password']}','author')";
		if(mysqli_query($conn, $sql)){
			return "Success";
		}else{
			return $sql;
		}
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "Database connection is error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function checkEmail($email)
	{
		$conn = dbConnection();
		$sql = "select * from users where username='{$email}'";
		if(mysqli_query($conn, $sql)){
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user)){
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}

	}
?>