<?php
//print_r($_GET);
if(isset($_GET['gender']))
{
	$gender=$_GET['gender'];
	echo $gender;
}
else
{
	//print_r($_GET);
	//echo $_GET['submit'];
	if(isset($_GET['submit']))
	{
		echo "Please select a gender";
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<form>
		<fieldset>
		<legend> GENDER </legend><br>
			<input type="radio" name="gender" value="Male" >  Male 
			<input type="radio" name="gender" value="Female" > Female
			<input type="radio" name="gender" value="Other" > Other 
			<tr>
				<td>
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
		</fieldset>
	</form>
</table>
</body>
</html>