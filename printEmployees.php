<?php 
		require 'databaseScript.php';
		$cox = connectDB();
		
		$sql = "SELECT student_id, first_name, last_name FROM  users";
		$headers = array("Id", "First Name", "Last Name");
		printTable($sql, $cox, $headers);				
		
		$sql = "SELECT program_id, name FROM  programs";
		$headers = array("Id", "Name");
		printTable($sql, $cox, $headers);
	?>