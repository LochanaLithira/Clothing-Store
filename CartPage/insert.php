<?php

require_once 'config.php';

$fName=$_POST["First_Name"];
$lName=$_POST["Last_Name"];
$streetAdd=$_POST["Street_Address"];
$_city=$_POST["City"];
$_country=$_POST["Country"];
$_postalCode=$_POST["Postal_Code"];
$_phone=$_POST["Phone"];
$email_=$_POST["Email"];
$price=$_POST["Price"];

$sql = "INSERT INTO `order_details` (First_Name, Last_Name, Street_Address, City, Country, Postal_Code, Phone, Email, Price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $fName, $lName, $streetAdd, $_city, $_country, $_postalCode, $_phone, $email_, $price);

if ($stmt->execute()) {
    echo "Order Placed successfully";
    header("Location: ./cart.php");
} else {
    echo "Error: " . $stmt->error;
}

 ?>