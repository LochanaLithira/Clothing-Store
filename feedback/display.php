<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Management</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .add-feedback-button {
            margin-bottom: 10px;
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-feedback-button:hover {
            background-color: #45a049;
        }
        .update-button, .delete-button {
            text-decoration: none;
            padding: 4px 8px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .update-button:hover, .delete-button:hover {
            background-color: #007bb7;

            
        }
    </style>
    <link rel="stylesheet" href="feedbackstyle.css">
</head>
<body>



<table>
    <thead>
        <tr>
            <th scope="col">SI No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Feedback</th>
            <th scope="col">Rating</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM `feedbacktable`";
    $result = mysqli_query($con, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $feedback = $row['feedback'];
            $rating = $row['rating'];

            echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $feedback . '</td>
                    <td>' . $rating . '</td>
                    <td>
                        <button class="update-button"><a href="update.php?updateid='.$id.'">Update</a></button>
                        <button class="delete-button"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                </tr>';
        }
    }
    ?>
    </tbody>
</table>

</body>
</html>
