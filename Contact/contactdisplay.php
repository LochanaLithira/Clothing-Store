<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages</title>
    <style>
        table {
            width: 50%;
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
        .add-user-button {
            margin-bottom: 10px;
            text-decoration: none;
        }
        .update-button, .delete-button {
            text-decoration: none;
        }
    </style>

    <link rel="stylesheet" href="displaystyles.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th scope="col">SI No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM `messages`";
    $result = mysqli_query($con, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];

            echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $message . '</td>
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
