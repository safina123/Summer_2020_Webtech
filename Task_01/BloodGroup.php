<?php

if (isset($_GET['bg'])) {
	echo $_GET['bg'];
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
			Blood Group
			<select name="bg">
				<option>A+</option>
				<option>B+</option>
				<option>O+</option>
				<option>AB+</option>
				<option>A-</option>
				<option>B-</option>
				<option>O-</option>
				<option>AB-</option>
			</select>
			<tr>
			<td>
			<input type="submit" name="Submit">
		</td>
		</tr>

		</fieldset>
	</form>
</table>
</body>
</html>