<?php
include 'connect.php';
$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    $sql = "UPDATE `feedbacktable` SET name='$name', email='$email', feedback='$feedback', rating='$rating' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data successfully updated.";
        // Optionally, redirect to the display page after updating
        // header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

// Fetch existing feedback data to populate the form fields
$sql_select = "SELECT * FROM `feedbacktable` WHERE id=$id";
$result_select = mysqli_query($con, $sql_select);
if ($result_select && mysqli_num_rows($result_select) > 0) {
    $row = mysqli_fetch_assoc($result_select);
    $name = $row['name'];
    $email = $row['email'];
    $feedback = $row['feedback'];
    $rating = $row['rating'];
} else {
    echo "No feedback found with the provided ID.";
    // Optionally, handle this case based on your requirements
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Feedback</title>
    <link rel="stylesheet" href="feedbackstyle.css">

</head>
<body>  
    <h1>Update Feedback</h1>
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
                <label>Feedback</label>
                <textarea class="form-control" placeholder="Enter Your Feedback" name="feedback"><?php echo $feedback; ?></textarea>
            </div>
            <div class="form-group">
                <label>Rating</label>
                <select class="form-control" name="rating">
                    <option value="1" <?php if ($rating == 1) echo 'selected'; ?>>1</option>
                    <option value="2" <?php if ($rating == 2) echo 'selected'; ?>>2</option>
                    <option value="3" <?php if ($rating == 3) echo 'selected'; ?>>3</option>
                    <option value="4" <?php if ($rating == 4) echo 'selected'; ?>>4</option>
                    <option value="5" <?php if ($rating == 5) echo 'selected'; ?>>5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
