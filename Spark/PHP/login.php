<?php
include 'dbconnection.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute SQL statement
$sql = "SELECT password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found with this email";
}

$conn->close();
?>