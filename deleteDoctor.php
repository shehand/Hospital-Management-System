<?php
	
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("hospital_management_system") or die ("Error Occures");
	error_reporting(0);
	
	$eid = $_POST["eid"];
	
	if($_POST["delete"]) {
		$sql = "DELETE FROM employee WHERE eID='$eid'";
		
		if(mysql_query($sql)) {
			echo "Deletion Success";
		}
		else {
			echo "Insert Employee ID";
		}
	}
	else {
	}
	
?>

<html>

	<head>
		<title>Delete Doctor/Consultant Details</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
	
	<body>
		<div class="container">
			<header><h1>Delete Doctor/Consultant</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
						
							<form action="deleteDoctor.php" method="POST">
								<h1> Delete </h1>
								<p> 
                                    <label data-icon="u">Employee ID :</label>
                                    <input id="eid" name="eid" required="required" type="text" placeholder="Insert employee ID" />
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="delete" value="Delete"/> 
								</p>
								
							</form>
							
					</div>
				</div>
			</section>
		</div>
	</body>
</html>