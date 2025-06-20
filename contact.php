<?php
// Database configuration
$dbHost     = 'localhost'; // Enter your database server name here
$dbUsername = 'root'; // Enter your database username here
$dbPassword = ''; // Enter your database password here
$dbName     = 'reglog'; // Enter your database name here

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into database
    $sql = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Your Data is Submitted'); </script>";
        exit();
        header("Location: contact.html");
    }

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
