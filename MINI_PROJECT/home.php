<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<center>
		 <legend><b>ONLINE HEALTH CARE</b></legend><br>
		  <legend><b>Blood Sector</b></legend>
		</center><br>


	<center>
			WELCOME <?php
			session_start();
			echo $_SESSION['username'];


			?>
		</center><br>

		<Center>
			
			<a href="viewdonor.php"><u>View Donor List</a>&nbsp &nbsp
		
			<a href="viewreceiver.php"><u>View Receiver List</a>&nbsp &nbsp

		</center>

		<br>


<center>
		<table border="1">
		<tr>
			<td>Blood Group</td>
			<td>Blood Donnor</td>
			
			


		</tr>

			<tr>
			<td>A+</td>
			<td>50</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>A-</td>
			<td>36</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>B+</td>
			<td>60</td>
			
		
		</tr>
		</tr>

			<tr>
			<td>B-</td>
			<td>25</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>O+</td>
			<td>30</td>
			
		
		</tr>

			<tr>
			<td>O-</td>
			<td>28</td>
			
		
		</tr>

			<tr>
			<td>AB+</td>
			<td>50</td>
			
		
		</tr>

			<tr>
			<td>AB-</td>
			<td>16</td>
			
		
		</tr>
	</center>
</table>

<br>

<a href="logout.php"><u>Logout</a>

</fieldset>

</body>
</html>