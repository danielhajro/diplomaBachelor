<?php
  @include_once 'connect.php';


  if (isset($_POST['deleteRow'])) {
    $rowId = $_POST['rowId'];

  
    $sql = "DELETE FROM fatura WHERE fatura_id = $rowId";

    if (mysqli_query($conn, $sql)) {
        
        echo '<script> setTimeout(function() {
            alert("U Fshi!");
            window.location.href = "admin_page.php";
        }, 1000); 
    </script>';
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }


    mysqli_close($conn);
}
?>
