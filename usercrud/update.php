<?php
include 'connect.php';
$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data successfully updated.";
        // Optionally, redirect to the display page after updating
        // header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

// Fetch existing data to populate the form fields
$sql_select = "SELECT * FROM `crud` WHERE id=$id";
$result_select = mysqli_query($con, $sql_select);
if ($result_select && mysqli_num_rows($result_select) > 0) {
    $row = mysqli_fetch_assoc($result_select);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
} else {
    echo "No data found with the provided ID.";
    // Optionally, handle this case based on your requirements
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
    <link rel="stylesheet" href="userstyles.css">
</head>
<body>  
    <h1>Update User Information</h1>
    <div class="container">
        <form method="post" action="update.php?updateid=<?php echo $id; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" value="<?php echo $mobile; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value="<?php echo $password; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
