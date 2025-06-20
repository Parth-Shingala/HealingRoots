<?php
require 'config.php';
// Create a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reglog";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Check if the user is logged in
if (empty($_SESSION["id"])) {
  // User is not logged in, redirect to mainindex.html and display an alert message
  echo "<script> alert('To book an appointment, you first need to login to the site.'); window.location.href='mainindex.html';</script>";
  exit;
}

// Retrieve the values submitted in the form
$name = $_POST['u_name'];
$age = $_POST['age'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$lang = isset($_POST['lang']) ? $_POST['lang'] : '';
$dtype = $_POST['dtype'];
$date = $_POST['a_date'];
$time = $_POST['a_time'];

// Insert the values into the appointments table
if (empty($name) || empty($age) || empty($dtype) || empty($date) || empty($time)) {
      echo "<script> alert('Please fill all the required fields'); </script>";
  } else {
$sql = "INSERT INTO appointments (u_name, age, gender, lang, dtype, a_date, a_time)
VALUES ('$name', '$age', '$gender', '$lang', '$dtype', '$date', '$time')";

if (mysqli_query($conn, $sql)) {
  echo "<script> alert('Appointment booked successfully!'); window.location.href='booked.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 

  }
// Close the connection
//mysqli_close($conn);
?>
