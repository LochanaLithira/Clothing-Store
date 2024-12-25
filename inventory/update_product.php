<?php
include 'connect.php';

// Check if updateid is set and is a valid integer
if (isset($_GET['updateid']) && is_numeric($_GET['updateid'])) {
    $id = $_GET['updateid'];

    if (isset($_POST['submit'])) {
        $productName = $_POST['product_name'];
        $productDescription = $_POST['product_description'];
        $productPrice = $_POST['product_price'];

        // Prevent SQL injection by using prepared statements
        $sql = "UPDATE `inventorytable` SET product_name=?, product_description=?, product_price=? WHERE id=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ssdi", $productName, $productDescription, $productPrice, $id);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            echo "Data successfully updated.";
            // Optionally, redirect to the display page after updating
        header('location:inventory.php');
        } else {
            echo "Error updating data: " . mysqli_error($con);
        }
    }

    // Fetch existing product data to populate the form fields
    $sql_select = "SELECT * FROM `inventorytable` WHERE id=?";
    $stmt_select = mysqli_prepare($con, $sql_select);
    mysqli_stmt_bind_param($stmt_select, "i", $id);
    mysqli_stmt_execute($stmt_select);
    $result_select = mysqli_stmt_get_result($stmt_select);
    if ($result_select && mysqli_num_rows($result_select) > 0) {
        $row = mysqli_fetch_assoc($result_select);
        $productName = $row['product_name'];
        $productDescription = $row['product_description'];
        $productPrice = $row['product_price'];
    } else {
        echo "No product found with the provided ID.";
        // Optionally, handle this case based on your requirements
    }
} else {
    echo "Invalid product ID.";
    // Optionally, handle this case based on your requirements
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="productstyle.css">
    <head>
    
</head>

</head>
<body>  
    <h1>Update Product</h1>
    <div class="container">
        <form method="post" action="update_product.php?updateid=<?php echo $id; ?>">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" value="<?php echo isset($productName) ? htmlspecialchars($productName) : ''; ?>">
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" placeholder="Enter Product Description" name="product_description"><?php echo isset($productDescription) ? htmlspecialchars($productDescription) : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price" value="<?php echo isset($productPrice) ? htmlspecialchars($productPrice) : ''; ?>">
            </div>
            <!-- Add fields for image update if necessary -->
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
