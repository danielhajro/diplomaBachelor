
<?php
@include_once 'connect.php'; 

$productName = $_GET['product'];


$query = "SELECT prod_cmim FROM produkt WHERE produkt = '$productName'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $productPrice = $row['prod_cmim'];
    echo $productPrice;
} else {
    echo "0";
}

$conn->close();
?>
