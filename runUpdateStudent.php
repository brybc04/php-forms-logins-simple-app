<?php 

$cox = mysqli_connect("localhost", "snoopblog", "qwerty10i","mynewdb1000") 
			or die("There was a problem connecting");
	
	
	$sql = "UPDATE users SET 
                        id='$_POST[id]',
                        first_name='$_POST[fname]',
			last_name = '$_POST[lname]',
			address ='$_POST[address]', 
			phone_number ='$_POST[phoneNumber]',
			gender ='$_POST[gender]', 
			email ='$_POST[email]',
			birth_date ='$_POST[birthDate]'
			WHERE id='$_POST[id]'";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Student updated";
         header("refresh:1; url=selectStudent1.php");
	
	
	mysqli_close($cox);	
	
?>