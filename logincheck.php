<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

		
@include_once 'connect.php';  

        session_start();
        if(isset($_REQUEST['submit_log'])){
            $logid=mysqli_real_escape_string($conn,$_REQUEST['logId']);
            $emrilog=mysqli_real_escape_string($conn,$_REQUEST['emrilog']);
            $passID=$_REQUEST['passID'];
            
            $select = "SELECT * FROM customer WHERE cus_id='$logid' && cus_password='$passID' && cus_Fname='$emrilog'";

            $result=mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_array($result);
                $_SESSION['cus_Fname']= $emrilog;
                $_SESSION['cus_id']=$logid;
                header('location:user_page.php');
            }else{
                echo '<script>alert("Incorrect name,id or password")</script>';
            }
        }




?>

</body>
</html>