<?php
	/*creating a connection with the database*/
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("hospital_management_system") or die("Error Occures");
	
	error_reporting(0);
	$username = $_POST["user"];
	$password = $_POST["pass"];
	
	$pID="";
	$pss="";
	/*Assign username and password from the given table if there is*/
	$tmp = "SELECT * FROM plog WHERE patient_ID='$username'";
	$getData = mysql_query($tmp);
	while($assData=mysql_fetch_assoc($getData)) {
		$pID = $assData["patient_ID"];
		$pss = $assData["password"];
	}
	
	$sql_1 = "SELECT patient_ID,patient_name,phone_number,DOB,gender,ward_ID FROM patient WHERE patient_ID='$username'";
	$sql_2 = "SELECT tID,tname,results,s_date,e_date FROM treatment WHERE patient_ID='$username'";
	
	$records_1 = mysql_query($sql_1);
	$records_2 = mysql_query($sql_2);
	
	if($username==$pID && $password==$pss) {
?>	
		<html>
			<head>
				<title>User LoggedIn Interface</title>
				<link rel="stylesheet" type="text/css" href="template.css" />
			</head>
			
			<body>
				<div class="template">
					<header>
						<h1 style="text-align:center;font-sizse:45px">User LogIn Interface</h1>
					</header>
					
					<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
						
						<tr>
						
							<th>Patient ID</th>
							<th>Patient Name</th>
							<th>Phone Numebr</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Ward ID</th>
						</tr>	
					<?php
						
						while($row = mysql_fetch_assoc($records_1)){
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
					
					<header>
						<h2 style="font-size:20px;text-align:center">Patient Treatment and Test Details</h2>
					</header>
					<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
							
							<tr>
							
								<th>Treatment ID</th>
								<th>Treatment Name</th>
								<th>Result</th>
								<th>Star Date</th>
								<th>End Date</th>
							</tr>	
						<?php
							
							while($row = mysql_fetch_assoc($records_2)){
								echo "<tr>";
								echo "<td>".$row['tID']."</td>";
								echo "<td>".$row['tname']."</td>";
								echo "<td>".$row['results']."</td>";
								echo "<td>".$row['s_date']."</td>";
								echo "<td>".$row['e_date']."</td>";
								echo "</tr>";
							}
							echo "<table>";
							mysql_close();
							
						?>
					<footer>
						<div>
							<a href="mainPage.php"><button>Log Out</button></a>
						</div>
						Copyrigth &copy; Group No:25
					</footer>
				</div>
			</body>
		</html>
<?php
	}
	else {
		echo "ERROR";
	}
?>