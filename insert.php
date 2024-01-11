<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "runmequick";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// echo "connected";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else if( isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // // Validate and sanitize the inputs (e.g., prevent SQL injection)
    // $username = htmlspecialchars($username);
    // $email = htmlspecialchars($email);
    // $password = htmlspecialchars($password);

    // // Hash the password for security
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Replace with your actual database credentials
    

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM user WHERE email='$email' ";
    $result = $conn->query($checkEmailQuery);
    if ($result->num_rows > 0) {
        echo "Email already exists. Please use a different email.";
        exit();
    }

    $checkUsernameQuery = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($checkUsernameQuery);
    if ($result->num_rows > 0) {
        echo "Username already exists. Please use a different username.";
        exit();
    }

    // Insert new user into the database
    $insertQuery = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "Registration successful!";
        readfile("./login.html");
        
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    
} else{
    echo "failed";
}
$conn->close();
?>