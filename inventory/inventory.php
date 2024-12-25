<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; margin: 0; padding: 0;">

    <div style="text-align: center; padding: 20px; background-color: #4CAF50; color: white;">
        <h1>Product Management</h1>
    </div>

    <div style="padding: 20px; text-align: center;">
        <a href="dashboard.php" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-bottom: 20px; display: inline-block;">
            Add Product
        </a>
    </div>

    <table style="width: 80%; margin: 20px auto; border-collapse: collapse; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 12px; font-size: 16px; color: #333;">ID</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Product Name</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Description</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Image 1</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Image 2</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Price</th>
                <th style="padding: 12px; font-size: 16px; color: #333;">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `inventorytable`";
        $result = mysqli_query($con, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $productName = $row['product_name'];
                $productDescription = $row['product_description'];
                $productImage1 = $row['product_image1'];
                $productImage2 = $row['product_image2'];
                $productPrice = $row['product_price'];

                echo '<tr style="background-color: #fff; border-bottom: 1px solid #ddd;">
                        <td style="padding: 12px; text-align: center;">' . $id . '</td>
                        <td style="padding: 12px; text-align: center;">' . $productName . '</td>
                        <td style="padding: 12px; text-align: center; max-width: 250px; word-wrap: break-word;">' . $productDescription . '</td>
                        <td style="padding: 12px; text-align: center;"><img src="' . $productImage1 . '" width="100" height="100" style="border-radius: 5px;"></td>
                        <td style="padding: 12px; text-align: center;"><img src="' . $productImage2 . '" width="100" height="100" style="border-radius: 5px;"></td>
                        <td style="padding: 12px; text-align: center;">$' . $productPrice . '</td>
                        <td style="padding: 12px; text-align: center;">
                            <a href="update_product.php?updateid='.$id.'" style="padding: 6px 12px; background-color: #4CAF50; color: white; border-radius: 5px; text-decoration: none; margin-right: 10px;">Update</a>
                            <a href="delete.php?deleteid='.$id.'" style="padding: 6px 12px; background-color: #f44336; color: white; border-radius: 5px; text-decoration: none;">Delete</a>
                        </td>
                    </tr>';
            }
        }
        ?>
        </tbody>
    </table>

</body>
</html>
