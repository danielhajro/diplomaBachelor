<?php

@include 'connect.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_desc =$_POST['product_desc'];
   $product_cat=$_POST['product_cat'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'photo/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO produkt(produkt, produkt_persh, prod_cmim, foto, kategoria) VALUES('$product_name', '$product_desc','$product_price','$product_image','$product_cat')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
    $delete = "DELETE FROM produkt WHERE id_prod = '$id'";
    $resultdel=mysqli_query($conn,$delete);
    if ($resultdel) {
      $message[]= 'Product deleted successfully.';
  } else {
      $message[] ='Could not delete product';
};
}

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
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
   <link rel="stylesheet" href="style.css">

</head>
<body>
<header class="header12">
        <nav class="navbar1">
            <img src="photo/pngwing.com (12).png" alt="">
            <ul class="nav-menu1">
                <li class="nav-item1">
                    <a href="admin_page.php" class="nav-linkk ">Fatura</a>
                </li>
                <li class="nav-item1">
                    <a href="product_edit.php" class="nav-linkk ">Produktet</a>
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

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Shto Produkt</h3>
         <input type="text" placeholder="Emri i Produktit" name="product_name" class="box">
         <input type="text" placeholder="Cmimi" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="text" placeholder="Pershkrimi i produktit" name="product_desc" class="box">
         <input type="text" placeholder="Kategoria" name="product_cat" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM produkt");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>product descript</th>
            <th>product category</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="photo/<?php echo $row['foto']; ?>" height="100px" alt=""></td>
            <td><?php echo $row['produkt']; ?></td>
            <td><?php echo $row['prod_cmim']; ?>/-</td>
            <td><?php echo $row['produkt_persh']; ?></td>
            <td><?php echo $row['kategoria']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id_prod']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="product_edit.php?delete=<?php echo $row['id_prod']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>