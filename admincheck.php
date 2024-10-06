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
        if(isset($_REQUEST['submit_logadm'])){
            $logidadm=mysqli_real_escape_string($conn,$_REQUEST['logadmin']);
            $admuser=mysqli_real_escape_string($conn,$_REQUEST['admuser']);
            $passadmin=$_REQUEST['passadmin'];
            
            $select = "SELECT * FROM admini WHERE adm_id='$logidadm' && adm_password='$passadmin' && adm_username='$admuser' ";

            $result=mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_array($result);
                $_SESSION['adm_username']= $admuser;
                header('location:admin_page.php');
            }else{
                echo '<script>alert("Incorrect name,id or password")</script>';
            }
        }




?>

</body>
</html>