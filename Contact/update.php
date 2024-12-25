
<?php
include 'connect.php';

if(isset($_POST['send'])){
    $id = $_GET['updateid']; // Fetching ID from URL parameter

    // Retrieving data from form
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Constructing SQL query to update record
    $sql = "UPDATE `messages` SET name='$name', email='$email', message='$message' WHERE id=$id";

    // Executing the query
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data updated successfully";
    } else {
        die(mysqli_error($con)); // Displaying error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Message</title>
    <link rel="stylesheet" href="contactstyles.css">
</head>
<body>  
    <h1>Update Message</h1>
    <div class="container">
        <form method="post" action="update.php?updateid=<?php echo $_GET['updateid']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" placeholder="Enter Your Message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="send">Update</button>
        </form>
    </div>
</body>
</html>











