<?php
include 'dbconnection.php';

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone_number = $_POST['phone_number'];
$opt_phone_number = $_POST['opt_phone_number'];

// Prepare and execute SQL statement
$sql = "INSERT INTO users (first_name, last_name, email, password, phone_number, opt_phone_number)
        VALUES ('$first_name', '$last_name', '$email', '$password', '$phone_number', '$opt_phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
