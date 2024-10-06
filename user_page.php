<?php
@include_once 'connect.php'; 
session_start();
if(!isset($_SESSION['cus_Fname'])){
    header('location:login.php');
}
require_once 'connect.php';
$sql="SELECT * FROM produkt";
$all_product1= $conn ->query($sql);
$all_product2=$conn ->query($sql);
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Document</title>

    <script type="text/javascript">
        $(document).ready(function(){

            var html=`<tr>
                <td>
                    <select name="produktii[]" class="produktii" onchange="getProductPrice(this)">
                        <option value="0">-</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($all_product1)) {
                            ?>
                            <option value="<?php echo $row["produkt"] ?>"><?php echo $row["produkt"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
                <td><input type="text" name="cmimii[]" class="cmimii" readonly></td>
                <td><input type="text" name="sasiaa[]" class="form-control sasiaa" required></td>
                <td><input type="text" name="totalii[]" class="totalii" readonly></td>
                        <td><input type="button" onclick="removeRow(this)" value="Hiq" name="remove" id="remove" class="btn btn-danger"></td>
                    </tr>`;

            var x=1;
            $("#add").click(function(){
                $("#table_field").append(html);
            });
            $("#table_field").on('click','#remove',function(){
                $(this).closest('tr').remove();
                updateTotalSum();   
            });
        });
        


    </script>




</head>
<body>
<header class="header12">
        <nav class="navbar1">
            <img src="photo/pngwing.com (12).png" alt="">
            <ul class="nav-menu1">
                <li class="nav-item1">
                    <a href="produkte.php" class="nav-linkk klikuar">Produkte</a>
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
  <center><h2>Mireserdhe, <?php echo $_SESSION['cus_Fname'] ?>  </h2></center>
    <div class="container">
    <form action="porosia.php" method="POST" class="insert-form" id="myForm">
    <hr>
    <h1 class="text-center">Shto Produkte</h1>
    <hr>
    <div class="input-field">
        <table class="table table-bordered" id="table_field">
            <tr>
                <th>Produkti</th>
                <th>Cmimi</th>
                <th>Sasia</th>
                <th>Totali</th>
            </tr>
            <tr>
                <td>
                    <select name="produktii[]" class="produktii" onchange="getProductPrice(this)">
                        <option value="0">-</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($all_product2)) {
                            ?>
                            <option value="<?php echo $row["produkt"] ?>"><?php echo $row["produkt"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
                <td><input type="text" name="cmimii[]" class="cmimii" readonly></td>
                <td><input type="text" name="sasiaa[]" class="form-control sasiaa" required></td>
                <td><input type="text" name="totalii[]" class="totalii" readonly></td>
                <td><input type="button" value="Shto" name="add" id="add" class="btn btn-success"></td>
            </tr>
        </table>
        <center>
        <span id="totalSum">Shuma Totale: 0</span>
        <input type="submit" value="Porosit Dhe Printo" onclick="tableToExcel()" name="porosia" class="btn btn-primary" id="porosia">
        </center>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<script src="tables.js"></script>
<script>
    function getProductPrice(select) {
        const row = $(select).closest("tr");
        const selectedProduct = $(select).val();
        const priceInput = row.find(".cmimii");

        $.get("get_product_price.php", { product: selectedProduct })
            .done(function (price) {
                priceInput.val(price);
            })
            .fail(function (error) {
                console.error("Error fetching product price:", error);
            });
    }

    
</script>

<script>
function calculateRowTotal(row) {
    const priceInput = row.querySelector(".cmimii");
    const quantityInput = row.querySelector(".sasiaa");
    const totalInput = row.querySelector(".totalii");
    const price = parseFloat(priceInput.value) || 0;
    const quantity = parseInt(quantityInput.value) || 0;
    const total = price * quantity;
    totalInput.value = total.toFixed(0);
    updateTotalSum(); 
}

function updateTotalSum() {
    const totalInputs = document.querySelectorAll(".totalii");
    let sum = 0;
    totalInputs.forEach(input => {
        const value = parseFloat(input.value) || 0;
        sum += value;
    });
    const totalSumElement = document.getElementById("totalSum");
    totalSumElement.textContent = "Shuma Totale: " + sum.toFixed(0);
}


function handleInput(event) {
    const row = event.target.closest("tr");
    calculateRowTotal(row);
}


function removeRow(row) {
    const totalInput = row.querySelector(".totalii");
    const value = parseFloat(totalInput.value) || 0;
    
 
    row.parentNode.removeChild(row);
     updateTotalSum();
}
document.querySelector("#table_field").addEventListener("input", function(event) {
    if (event.target && event.target.matches(".sasiaa")) {
        handleInput(event);
    }
});

updateTotalSum();

</script>


</body>
</html>