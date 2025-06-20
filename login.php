<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];

// Check for special username and password
$is_admin = false;
if ($usernameemail == "admin" && $password == "admin123") {
  $is_admin = true;
}

  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password==$row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];

      date_default_timezone_set('Asia/Kolkata');
      
      // Insert login data into the user_login table
      $user_id = $row['id'];
      $username = $row['username'];
      $date = $row['login_date'];
      $password_hash = password_hash($password, PASSWORD_DEFAULT);
      $login_time = date('Y-m-d H:i:s');
      $login_date = date('Y-m-d');
      mysqli_query($conn, "INSERT INTO user_login (user_id, username, password_hash, login_time , login_date) VALUES ('$user_id', '$username', '$password_hash', '$login_time','$login_date')");
      
// Redirect to admin.php if special username and password were entered
if ($is_admin) {
  header("Location: admin.php");
  exit();
}
      header("Location: index.php");
    }
    else{
      echo "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo "<script> alert('User Not Registered'); </script>";
  }
}
?>
