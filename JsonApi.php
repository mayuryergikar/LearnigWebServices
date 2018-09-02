<html>
	<head>
		<title>JSON TEST</title>
	</head>
	<body>
	<?php
		
		include("config.php");
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else{
		
			$result=mysql_query("SELECT * FROM tb_student",$db);
			
			$friendsarray=array();
		
			while($row=mysql_fetch_assoc($result)){
				$friendsarray[]=$row;
			}
		
			echo json_encode($friendsarray);
		}
		
	?> 
	</body>
</html>