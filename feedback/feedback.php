<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']); // New field for rating
    
    // Add validation here if necessary

    $sql = "INSERT INTO `feedbacktable` (name, email, feedback, rating) 
            VALUES ('$name', '$email', '$feedback', '$rating')";
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: display.php');
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
    <title>Product Feedback</title>
    <link rel="stylesheet" href="feedbackstyle.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>  
    <h1>Submit Your Feedback</h1>
    <div class="container">
        <form method="post" action="feedback.php"> <!-- Changed action to feedback.php -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
            </div>
            <div class="form-group">
                <label>Feedback</label>
                <textarea class="form-control" placeholder="Enter Your Feedback" name="feedback"></textarea>
            </div>
            <div class="form-group">
                <label>Rating</label>
                <select class="form-control" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
