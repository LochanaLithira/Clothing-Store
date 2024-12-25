<?php
include 'connect.php';

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']); // Corrected variable name
    

    // Add validation here if necessary

    $sql = "INSERT INTO `messages` (name, email, message) 
            VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Message sent successfully"; // Output a message on successful send
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
    <title>Contact Venom</title>
    <link rel="stylesheet" href="contactstyles.css">
</head>
<body>  
    <h1>Send Your Message</h1>
    <div class="container">
        <form method="post" action="contact.php"> <!-- Corrected action to contact.php -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" placeholder="What you have to share with us?" name="message"></textarea> <!-- Changed input type to textarea for message -->
            </div>
           
            <button type="submit" class="btn btn-primary" name="send">SEND</button> <!-- Corrected type to submit -->
        </form>
    </div>
</body>
</html>
