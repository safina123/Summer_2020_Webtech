<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$email = $_POST['email'];
		$usertype= $_POST['usertype'];
		
		if(empty($id) || empty($password) || empty($confirmPassword) || empty($email) || empty($usertype) )
		{
			echo "null submission".'<a href="Homepage.html"><u>Home</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="Hompage.html"><u>Home</a>';
			}
			else
			{
				$user = [
						'uname'=>$uname,
						'password'=>$password,
						'email'=>$email,
						'name'=>$name,
					];

			$_SESSION['id'] 		= $id;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;
			$_SESSION['name'] 		= $name;

			setcookie('id', $id, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			echo "Problem";

			header('location: login.html');
			}
		}

	}else{
		//header("location: login.html");
		echo "Not Set";
	}
?>
