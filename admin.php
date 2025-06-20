<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-W/98G9A/JO1WlCLzvDgQ5+E5m5ue5WdA8Ov7V29vmRt1ID7VbbxJzexiKjRoiukzHvoS72WdysZjEmiZ2M4c3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-891lLpSfn1Yj4zC4jGjKxaTd4VqBxI2PjlN0b0+LjrJLsAfc/6T0e6v9U6Y/NMPrD+BcGdVlLl+j+pt7fjftGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-l8JFbOyv+o3QZX5+3q8fJWVZvFtR9mV7+PEhNchWKhMvJf/ee+RO7PvBzAVZPfKZJ0cG1T6T72N9A7ChNfN8Wg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      body {
        background-color:#8ac4e2;
        
      }
      .container {
        margin: 0 auto;
        max-width: 1200px;
      }
      h1 {
        margin-bottom: 30px;
        text-align: center;
        font-weight: bold;
        font-size: 40px;
      }
      .table {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
      }
      .table th,
      .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
      }
      .table th {
        font-weight: bold;
        background-color: #f2f2f2;
        text-align: center;
      }
      .table td {
        text-align: center;
        vertical-align: middle;
      }
      .table td a {
        color: #dc3545;
        font-weight: bold;
      }
      .table td a:hover {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Admin Panel</h1>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Disease Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            require 'config.php';
            $sql = "SELECT * FROM appointments";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["u_name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["lang"] . "</td>";
                echo "<td>" . $row["dtype"] . "</td>";
                echo "<td>" . $row["a_date"] . "</td>";
                echo "<td>" . $row["a_time"] . "</td>";
                echo "<td><a href='cancel.php?id=" . $row["id"] . "'>Cancel</a></td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='8'>No appointments found</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
   