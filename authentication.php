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
    $email = $_POST['email'];
    $password = $_POST['password'];
  

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Authentication Successful";
        echo "<script>window.location.href = 'dashboard.html';</script>";
    } else {
        // Email does not exist in the database
        echo "Please input right email and password";
    }

    
} else{
    echo "failed";
}
$conn->close();
?>