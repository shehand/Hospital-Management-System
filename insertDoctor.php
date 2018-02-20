<?php
	/*Create a connection with the data base*/
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("hospital_management_system") or die ("Error Occures");
	
	error_reporting(0);
	
	$eid = $_POST["eid"];
	$ename = $_POST["ename"];
	$tnum = $_POST["tnum"];
	$gndr = $_POST["gender"];
	$dob = $_POST["dob"];
	$slr = $_POST["slr"];
	$isDoc = $_POST["isDoc"];
	$isCon = $_POST["isCon"];
	
	if($_POST["submit"]) {
		$sql_1 = "INSERT INTO employee VALUES ('$eid','$ename','$tnum','$gndr','$dob','$slr','$eid')";
		$sql_2 = "INSERT INTO con_doc VALUES ('$eid','$isDoc','$isCon')";
		$sql_3 = "INSERT INTO elog VALUES('$eid','$eid')";
		
		if(mysql_query($sql_1)) {
			if(mysql_query($sql_2)) {
				if(mysql_query($sql_3)) {
						echo "Data Inserted Successfully!";
				}
			}
			else {
				echo "Something wrong with your flag insertion";
			}
		}
		else {
			echo "Oops ! Something went wrong.Try again";
		}
	}
	else {
	}
?>

<html>

	<head>
		<title>Insert New Doctor/Consultant</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Insert Doctor/Consultant</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
		
							<form action="insertDoctor.php" method="POST">
								<h1>Insert Doctor/Consultant Details</h1>
								
								<p> 
                                    <label data-icon="u">Employee ID :</label>
                                    <input id="eid" name="eid" required="required" type="text" placeholder="Insert employee ID" />
                                </p>
								<p> 
                                    <label data-icon="u">Employee Name :</label>
                                    <input name="ename" required="required" type="text" placeholder="Insert employee name" />
                                </p>
								<p> 
                                    <label data-icon="u">Phone Number :</label>
                                    <input name="tnum" required="required" type="text" placeholder="Insert employee phone number" />
                                </p>
								<p> 
                                    <label data-icon="u">Gender :</label>
                                    <input name="gender" required="required" type="text" placeholder="Insert gender < M or F >" />
                                </p>
								<p> 
                                    <label data-icon="u">Date of Birth :</label>
                                    <input name="dob" required="required" type="text" placeholder="Insert employee birth date" />
                                </p>
								<p> 
                                    <label data-icon="u">is Doctor :</label>
                                    <input name="isDoc" required="required" type="text" placeholder="Is a Doctor < Y or N >" />
                                </p>
								<p> 
                                    <label data-icon="u">is Consultant :</label>
                                    <input name="isCon" required="required" type="text" placeholder="Is a Consultant < Y or N>" />
                                </p>
								<p> 
                                    <label data-icon="u">Salary :</label>
                                    <input name="slr" required="required" type="text" placeholder="Insert salary" />
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="submit" value="Submit"/> 
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>