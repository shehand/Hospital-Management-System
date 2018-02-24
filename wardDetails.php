<?php
	/*create a connection with the database*/
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("hospital_management_system") or die("Error Occures");
	error_reporting(0);
	
	$sql = "SELECT * FROM ward";
	$records = mysql_query($sql);
?>

<html>

	<head>
		<title>Ward Details</title>
		<link rel="stylesheet" type="text/css" href="template.css" />
				
	</head>

	<body>
		<div class="template">
			<header>
				<h1 style="text-align:center; font-size:45px;color:white">Ward Details</h1>
			</header>
			<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
			
				<tr>
					<th>Ward Name</th>
					<th>Ward ID</th>
				
				</tr>
				
				<?php
					while($row = mysql_fetch_assoc($records)) {
						echo "<tr>";
						echo "<td>".$row['ward_name']."</td>";
						echo "<td>".$row['ward_ID']."</td>";
						echo "</tr>";
					}
					echo "<table>";
					mysql_close();
				?>
			
			</table>
			
			<footer>
				<div>
					<a href="mainPage.php"><button>Back to Main Page</button></a>
				</div>
				Copyrigth &copy; Group No:25
			</footer>
		</div>
	</body>
</html>