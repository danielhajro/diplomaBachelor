<!DOCTYPE html>
<html>

<body>
	<center>
		<?php

		
@include_once 'connect.php'; 
	
		$admid=$_REQUEST['admid'];
		$username= $_REQUEST['username'];
        $passadm=$_REQUEST['passadm'];
        
		
		
		$sql = "INSERT INTO admini VALUES ('$admid','$username','$passadm')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
                header('location: adminlogin.php');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
