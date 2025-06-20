<?php
require 'config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  
  $sql = "DELETE FROM appointments WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Appointment cancelled successfully";
  } else {
    echo "Error cancelling appointment: " . mysqli_error($conn);
  }
} else {
  echo "Invalid appointment ID";
}

mysqli_close($conn);
?>
