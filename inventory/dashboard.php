<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $productName = mysqli_real_escape_string($con, $_POST['product_name']);
    $productDescription = mysqli_real_escape_string($con, $_POST['product_description']);
    $productPrice = mysqli_real_escape_string($con, $_POST['product_price']);

    // Handle image upload
    $targetDir = "uploads/";
    $targetFile1 = $targetDir . basename($_FILES["product_image1"]["name"]);
    $targetFile2 = $targetDir . basename($_FILES["product_image2"]["name"]);
    move_uploaded_file($_FILES["product_image1"]["tmp_name"], $targetFile1);
    move_uploaded_file($_FILES["product_image2"]["tmp_name"], $targetFile2);

    // Add validation here if necessary

    $sql = "INSERT INTO `inventorytable` (product_name, product_description, product_image1, product_image2, product_price) 
            VALUES ('$productName', '$productDescription', '$targetFile1', '$targetFile2', '$productPrice')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Product added successfully!');</script>";
        header('Location: inventory.php');
        exit();
    } else {
        die('Error: ' . mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="productstyle.css">

</head>
<body>  
    <h1 >Add Product Details</h1>
    <div class="container">
        <form method="post" action="dashboard.php" enctype="multipart/form-data"> <!-- Changed action to dashboard.php and added enctype for file upload -->
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name">
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" placeholder="Enter Product Description" name="product_description"></textarea>
            </div>
            <div class="form-group">
                <label>Product Image 1</label>
                <input type="file" class="form-control" name="product_image1">
            </div>
            <div class="form-group">
                <label>Product Image 2</label>
                <input type="file" class="form-control" name="product_image2">
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
