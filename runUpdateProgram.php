<?php 

$cox = mysqli_connect("localhost", "root", "","mynewdb1000") 
			or die("There was a problem connecting");
	
	
	$sql = "UPDATE program SET 
            program_id='$_POST[id]',
            program_name='$_POST[fname]',
            program_length = '$_POST[lname]',
            program_description ='$_POST[address]' 
            WHERE program_id='$_POST[id]'";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Program Updated";
         header("refresh:1; url=selectProgram.php");
         
	mysqli_close($cox);	
	
?>
