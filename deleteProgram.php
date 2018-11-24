
<?php 	
	
	$id = $_GET['id'];
	
	// initiate connection
	$cox = mysqli_connect("localhost", "root", "","mynewdb1000") 
			or die("There was a problem connecting");	
	
	//deleting by user_id
	$sql = " DELETE FROM program WHERE program_id=$id";
	
	//success or error deleting
	$result = mysqli_query($cox, $sql) or die("There was a problem deleting");
	
	echo "Program Deleted ";

	//after deleting it will rederect to orginal page
	 header("refresh:1; url=selectProgram.php");
	
	 //Closes a previously opened database connection.
	mysqli_close($cox);	
	
?>
