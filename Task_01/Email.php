<?php
if(isset($_GET['myemail']))
{
	$email=$_GET['myemail'];
	if($email=="")
	{
		echo "Invalid";
	}
	else
	{
		echo $email;
	}

}
?>


<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Email <br>
		<input type="email" name="myemail" placeholder="example@any.com"><br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>