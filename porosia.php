<?php
@include_once 'connect.php'; 
        session_start();

        if(isset($_POST['porosia']) || isset($logg)  ){
            $produktii=$_POST['produktii'];
            $sasiaa=$_POST['sasiaa'];
            $logg=$_SESSION['cus_id'];
            $alert_messages = array();

            foreach ($produktii as $key => $value) {
                $save = "INSERT INTO fatura(produkti, sasia, cus_id) VALUES ('" . $value . "', '" . $sasiaa[$key] . "', '$logg')";
                if (empty($_POST['produktii'])) {
                    $errors['produktii'] = 'Produkti required';
                }
                if (mysqli_query($conn, $save)) {
                    $alert_messages[] = 'Porosia u dergua';
                } else {
                    $alert_messages[] = "ERROR: Hush! Sorry $save. " . mysqli_error($conn);
                }
            }
            
            // Display unique alert messages
            foreach (array_unique($alert_messages) as $message) {
                echo '<script>alert("' . $message . '")</script>';
            }
            
        echo '<script>
            setTimeout(function() {
                window.location.href = "user_page.php";
            }, 200);
          </script>';

    }

?>