<?php 

	function connectDB(){
		// CONNECTING TO DB
		$cox = mysqli_connect("localhost", "snoopblog", "qwerty10i","mynewdb1000") 
						or die("There was a problem while connecting");	
		return $cox;
	}
	
	function printTable($sql, $cox, $headers){
		$result = mysqli_query($cox, $sql) or die("There was a problem while executing the sql statement");
		
		echo "<table border='1'> <tr>";
		foreach ($headers as $header){
			echo "<th> $header </th>";			
		}
		echo "</tr>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			for($i=0; $i<sizeof($headers); $i++){
				echo "<td> $row[$i] </td>";					
			}
			echo "</tr>";	
		}		
		echo "</table>";
	}


?>