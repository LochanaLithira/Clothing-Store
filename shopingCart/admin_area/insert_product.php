<?php
include('shopingCart\admin_area\includes\connect.php');



if(isset($_POST['insert_product'])){

    $product_id = $_POST['product_id'];
    $product_title = $_POST['keyword'];
    $details = $_POST['details'];
    $price = $_POST['price'];

  
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];

    $tmp_image1 = $_FILES['image1']['tmp_name'];
    $tmp_image2 = $_FILES['image2']['tmp_name'];

    if($product_id=='' || $product_title=='' || $details=='' || $price=='' || $image1=='' || $image2==''){
        echo "<script>alert('Please insert all the data')</script>";
        exit();
    }else{
       
        move_uploaded_file($tmp_image1, "./product_images/$image1");
        move_uploaded_file($tmp_image2, "./product_images/$image2");

    
        $insert_product = "INSERT INTO products (product_id, product_title, product_description, product_image1, product_image2, product_price) VALUES ('$product_id', '$product_title', '$details', '$image1', '$image2', '$price')";
        $result_query = mysqli_query($con, $insert_product);
        
        if($result_query){
            echo "<script>alert('Product Imported Successfully')</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Manager Dashboard</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminstyles.css">
</head>
<body>
<section id="header">
    <a href="#"><img src="img/logo.png" ID="logoid" class="logo"></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.html">ADMIN HOME</a></li>
            <li><a href="insert_product.php">INVENTORY</a></li>
            <li><a href="about.html">PAYMENTS</a></li>
            <li><a href="contact.html">ORDERS</a></li>
            <li><a href="cart.html">USERS</a></li>
            <li><a href="cart.html">LOGOUT</a></li>
        </ul> 
    </div>
 </section>
 <div class="container">
  <h2>Add New Product</h2>
  <form action="submit_product.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="product_id" class="label">Product ID:</label>
      <input type="text" id="product_id" name="product_id" class="input" required>
    </div>
    <div class="form-group">
      <label for="keyword" class="label">Product Title:</label>
      <input type="text" id="keyword" name="keyword" class="input" required>
    </div>
    <div class="form-group">
      <label for="image1" class="label">Product Image 1:</label>
      <input type="file" id="image1" name="image1" accept="image/*" class="input" required>
    </div>
    <div class="form-group">
      <label for="image2" class="label">Product Image 2:</label>
      <input type="file" id="image2" name="image2" accept="image/*" class="input" required>
    </div>
    <div class="form-group">
      <label for="details" class="label">Product Details:</label>
      <textarea id="details" name="details" class="input" required></textarea>
    </div>
    <div class="form-group">
      <label for="price" class="label">Product Price:</label>
      <input type="number" id="price" name="price" class="input" required>
    </div>
    <button type="submit" name="insert_product" class="submit-btn">Submit</button>
  </form>
</div>
</body>
</html>
