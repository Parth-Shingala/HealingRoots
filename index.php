<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
  echo
  "<script> alert('Login Successful');</script>";
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
  <?php 
    echo
    "<script> alert('Welcome $row[name] to HealingRoots');window.location.href = 'mainindex.php';</script>";
   ?>
  </body>
 
</html>