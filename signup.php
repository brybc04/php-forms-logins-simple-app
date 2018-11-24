<html>
	<head> 
		<title>Sign Up</title>
	</head>
<body>
<br>
	<?php

		if($_SERVER['REQUEST_METHOD']=='POST'){
			require 'databaseScript.php';
			$cox = connectDB();
			//validation and triming of whitespaces
			if(isset($_POST['fname'])&&isset($_POST['uname'])&&isset($_POST['passw'])&&isset($_POST['passw2'])){
				$fullName = mysqli_real_escape_string($cox, trim($_POST['fname']));
				$userName = mysqli_real_escape_string($cox, trim($_POST['uname']));
				$password = mysqli_real_escape_string($cox, trim($_POST['passw']));
				$password2 = mysqli_real_escape_string($cox, trim($_POST['passw2']));
			//
			if($password == $password2){				
				$insert = "INSERT INTO users1 (username, password, full_name) 
							VALUES ('$userName', SHA('$password'), '$fullName')";
							
				$result = mysqli_query($cox, $insert) or die("There was a problem executing the query on the database");
					
				echo "Your account was successfully created ";
			} else {				
				echo "<p style='color:red'>Passwords don't match</p>";
			}
			}
		}
	?>	
	<p><a href="homepages.html">Click here!</a> to Log in in your account <p> <br>
</body>
</html>


