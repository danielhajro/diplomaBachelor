<!DOCTYPE html>
<html>

<body>
	<center>
		<?php

		
@include_once 'connect.php'; 
		
		
	if($_SERVER['REQUEST_METHOD']== 'POST'){

	
		$emri = $_REQUEST['emri'];
		$mbiemri = $_REQUEST['mbiemri'];
		$qyteti = $_REQUEST['qyteti'];
		$numri = $_REQUEST['numri'];
        $password=$_REQUEST['password'];
        
		
		
		$sql = "INSERT INTO customer(cus_Fname,cus_Lname,cus_City,cus_phone,cus_password) VALUES ('$emri','$mbiemri','$qyteti','$numri','$password')";
		
		if(mysqli_query($conn, $sql)){
			$nrid=mysqli_insert_id($conn);
			echo "<h3>data stored in a database successfully. YOUR ID IS $nrid";
			echo "<a href='login.php'</a>";	
               
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
	}
		?>

	</center>
</body>

</html>
