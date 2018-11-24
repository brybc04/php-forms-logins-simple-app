<?php 	
	$id = $_GET['id'];
	
	//init con 
	$cox = mysqli_connect("localhost", "snoopblog", "qwerty10i", "mynewdb1000") 
			or die("There was a problem connecting");	
	
	$sql = " DELETE FROM users WHERE id=$id";
	
	//error or success
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Student Deleted ";
	//redirect after finishing task
    header("refresh:1; url=selectStudent1.php");
	//manual closing db after exec
	mysqli_close($cox);	
	
	
?>