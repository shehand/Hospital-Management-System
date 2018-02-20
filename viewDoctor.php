<?php
	/*create a coonection with the database*/
	mysql_connect("localhost","root","") or die("Error Occures") ;
	mysql_select_db("hospital_management_system") or die("Error Occures");
	$sql = "SELECT * FROM employee";
	$records = mysql_query($sql);
?>

<html>

	<head>
		<title>View Details of a Doctor</title>
	</head>
	
	<body>
	
		<h1 style="font-size:45px;text-align:center">View Doctor/Consultant Details</h1>
		<table width="600" cellpadding="1" border="1" cellspacing="1" align="center">
		
			<tr>
			
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Salary</th>
			</tr>
			
			<?php
			
				while($row = mysql_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['eID']."</td>";
				echo "<td>".$row['eName']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['DOB']."</td>";
				echo "<td>".$row['salary']."</td>";
				echo "</tr>";
			}
			echo "<table>";
			mysql_close();
			
			?>
		
		
		</table>
		
	</body>
</html>