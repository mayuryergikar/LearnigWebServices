<?php

	include("config.php");
	
	$name1=$_POST["std_name"];
	$address=$_POST["std_address"];
	$mobile=$_POST["std_mobileno"];
	$qualification=$_POST["std_qualification"];
	
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
		}
		else{
		$sql = "INSERT INTO tb_student (std_name,std_address,std_mobileno,std_qualification) VALUES ('$name1','$address',$mobile,'$qualification')";
		if (mysql_query($sql,$db)) {
		echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysql_error($db);
		}
	}
?>