<?php
//name
if (isset($_POST['submit'])) 
	{
		# code...
		echo $_POST['name'];
	}
	
	
//email

if (isset($_POST['submit'])) 
	{
		# code...
		echo $_POST['email'];
	}

//gender

if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "please select a gender";
	}
	if (isset($_POST['gender'])) 
	{
		# code...
		echo $_POST['gender'];
	}

//Date of Birth

if (isset($_POST['submit'])) 
	{
		# code...
		echo $_POST['day'];
		echo $_POST['month'];
		echo $_POST['year'];
	}

//Degree

if(isset($_POST['submit']))
{
	if (isset($_POST['degree1'])) 
	{
		# code... 
		echo $_POST['degree1'];
	}
	if (isset($_POST['degree2'])) 
	{
		# code... 
		echo $_POST['degree2'];
	}
	if (isset($_POST['degree3'])) 
	{
		# code... 
		echo $_POST['degree3'];
	}
	if (isset($_POST['degree4'])) 
	{
		# code... 
		echo $_POST['degree4'];
	}
}

//Blood group

if (isset($_POST['bloodgroup'])) 
{
	 echo $_POST['bloodgroup'];
}

//choose file

if (isset($_POST['submit'])) 
{
	# code...
	echo "uploded";
}

?>