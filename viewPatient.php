<?php
	/*create a connection with the database*/
	mysql_connect("localhost","root","") or die("Error occures");
	mysql_select_db("hospital_management_system") or die("Error occures");
	
	$sql = "SELECT * FROM patient";
	$records = mysql_query($sql);
?>

<html>

	<head>
		<title>View User Details</title>
	</head>
	
	<body>
		<h1 style="text-align:center;font-size:45px">View Patient Details</h1>
		
		<table width="600" cellpadding="1" border="1" cellspacing="1" align="center">
		
			<tr>
			
				<th>Patient ID</th>
				<th>Patient Name</th>
				<th>Phone Numebr</th>
				<th>DOB</th>
				<th>Gender</th>
				<th>Ward ID</th>
			</tr>
			
			<?php
			
				while($row = mysql_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['patient_ID']."</td>";
				echo "<td>".$row['patient_name']."</td>";
				echo "<td>".$row['phone_number']."</td>";
				echo "<td>".$row['DOB']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['ward_ID']."</td>";
				echo "</tr>";
			}
			echo "<table>";
			mysql_close();
			
			?>
		
		
		</table>
	</body>
</html>