<?php
#print_r($_POST);
if(isset($_POST['Submit']))
{
	if($_COOKIE['email']==$_POST['email'])
	{
			header('location: SetNewPass.html');
	}
	else
	{
		echo "Error";
	}
}
else
{
	echo "Error";
}
?>