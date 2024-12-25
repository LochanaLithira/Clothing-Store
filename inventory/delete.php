<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `inventorytable` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: inventory.php');
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
