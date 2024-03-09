<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "point_of_sale";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from AJAX request
$productName = $_POST['productName'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// Insert data into Products table
$sql = "INSERT INTO Products (product_name, price, quantity_available) VALUES ('$productName', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
