<?php
@include_once 'connect.php'; 
session_start();
if(!isset($_SESSION['adm_username'])){
    header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<header class="header12">
        <nav class="navbar1">
            <img src="photo/pngwing.com (12).png" alt="">
            <ul class="nav-menu1">
                <li class="nav-item1">
                    <a href="admin_page.php" class="nav-linkk klikuar">Fatura</a>
                </li>
                <li class="nav-item1">
                    <a href="product_edit.php" class="nav-linkk">Produktet</a>
                </li>
                <li class="nav-item1">
                    <a href="logout.php" class="nav-linkk">Log out</a>
                </li>
            </ul>
            <div class="hamburger1">
                <span class="bar1"></span>
                <span class="bar1"></span>
                <span class="bar1"></span>
            </div>
        </nav>
    </header>
    <center>
        <h2>Welcome Admin <?php echo $_SESSION['adm_username'] ?></h2>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "biomarket");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}    

        $sql="SELECT * FROM fatura";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='custom-table'>";
            echo "<div class='table-row header-row'>";
            echo "<div class='table-cell'>Fatur_ID</div>";
            echo "<div class='table-cell'>Produkti</div>";
            echo "<div class='table-cell'>Sasia</div>";
            echo "<div class='table-cell'>Cus_id</div>";
            echo "<div class='table-cell'>Fshi</div>";
            echo "</div>";
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='table-row'>";
                echo "<div class='table-cell'>" . $row['fatura_id'] . "</div>";
                echo "<div class='table-cell'>" . $row['produkti'] . "</div>";
                echo "<div class='table-cell'>" . $row['sasia'] . "</div>";
                echo "<div class='table-cell'>" . $row['cus_id'] . "</div>";
                echo "<div class='table-cell'>";
                echo "<form method='POST' action='delete_row.php'>";
                echo "<input type='hidden' name='rowId' value='" . $row['fatura_id'] . "'>";
                echo "<button type='submit' class='delete-button' name='deleteRow'>Fshi</button>";
                echo "</form>";
                echo "</div>";
        
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "No data found.";
        }
        mysqli_close($conn);
        ?>
        
        
        
        
        
        
        
        
        
        <style>
    .custom-table {
        display: table;
        width: 100%;
    }

    .table-row {
        display: table-row;
    }

    .header-row {
        background-color: #f2f2f2;
    }

    .table-cell {
        display: table-cell;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    .table-row:hover {
        background-color: #f5f5f5;
    }
    .delete-button{
        background-color: crimson;
        border: none;
        border-radius: 5px;
        padding: 3px 15px;
    }
    .delete-button:hover{
        background-color: #431531;
        transition: 0.2s;
    }

</style>

        

    </center>
</body>
</html>