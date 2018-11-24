<?php
	
	//the db file 
	require 'databaseScript.php';

	//for validation
	if(isset($_POST['username']) && isset($_POST['passw'])){
		$userName = $_POST['username'];
		$password = $_POST['passw'];		
		
		$cox = connectDB();

		$sql = "SELECT full_name FROM users1 WHERE username='$userName' 
				and password=SHA('$password')"; // hashing password

		$result = mysqli_query($cox, $sql);
			if($row = mysqli_fetch_array($result)){
				echo "Hello $row[0], You're now logged in  ";

				// setting cookie to access next page
				setcookie('username',"$userName");
							echo '<a href="yourProfile.html">Click here</a> to continue.. <br> <br>';
							echo '<a href="logout.php">Logout ..</a>';
			
			} else {
				echo "Wrong username/password"; 
				echo '<a href="homepages.html">Click here</a>';
			}
			
			} else {
				// redirect
				header("Location: loginForm.html");		
			}

	//setcookie('username',"$userName", time()-1);
	echo $_COOKIE['username'];
	
