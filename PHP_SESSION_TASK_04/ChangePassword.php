<?php
if(isset($_POST['submit']))
{
	if($_COOKIE['password']==$_POST['npassword'])
	{
		if($_POST['cpassword']==$_POST['ncpassword'])
		{
			setcookie('password', $_POST['cpassword'], time()+3600, '/');
			header('location: login.html');
		}
		else
		{
			echo "Both Password Doesn't Match";
		}
	}
	else
	{
		echo "Current Password Doesn't Match";
	}
}
?>