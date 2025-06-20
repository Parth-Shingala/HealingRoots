<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS Links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="s1.css">
    <style type="text/css">
    
      body { background-color: #FFF; font-family: sans-serif; }
      #wrapper { width: 800px; margin: 0 auto; }
      h1 { text-align: center; font-size: 2em; padding: 7px;margin-top: 7px;font-family: Lucida Handwriting;}
      h3{font-family: Georgia;}
      legend{font-family: Georgia;}
      p{font-family: Garamond;font-size: 24px;}
      label{font-family: Garamond;font-size: 19px;}
      #content {border: 2px solid rgb(12, 0, 0);border-radius: 15px; padding: 20px; }
      .clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
      .clearfix { display: inline-block; }
      /* Hides from IE-mac \*/
      * html .clearfix {height: 1%;}
      .clearfix {display: block;}
      /* End hide from IE-mac */
    </style>
    <title>Healing Roots</title>
    <script>
      function logout() {
        if (confirm("Are you sure you want to log out?")) {
          window.location.href = "logout.php";
        }
      }
  </script>
</head>

<body style="background-color: rgb(103, 194, 255);">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="mainindex.php"> <img src="images/parth.png" width="120px" height="48px"> </a>  <!--<a class="navbar-brand" href="#">Healing Roots</a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                
              </li>

              <li class="nav-item">
                <a class="nav-link" href="yoga.php">Yoga</a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Disease Treatments
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="asthma.php">Asthma</a>
                  <a class="dropdown-item" href="diabetes.php">Diabetes</a>
                  <a class="dropdown-item" href="depression.php">Depression</a>
                  <a class="dropdown-item" href="migraine.php">Migraine</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="appointments.php">Appointment Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="contacts.php">Contact</a>
              </li>


          </ul>
          
          <div class="mx-2">
            <?php
            session_start();
            if (!empty($_SESSION["id"])) {
              // User is logged in
              echo '<button class="btn btn-danger" id="logoutBtn" onclick="logout()">Log Out</button>';
            } else {
              // User is not logged in
              echo '<button class="btn btn-danger" id="loginBtn" data-toggle="modal" data-target="#loginModal">Login</button>';
              echo ' ';
              echo '<button class="btn btn-danger" id="signupBtn" data-toggle="modal" data-target="#signupModal">SignUp</button>';
            }
            ?>
          </div>
      </div>
  </nav>


   <!-- Login Modal -->
   <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login to Healing Roots</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  action="login.php" method="post" >
                <div class="form-group">
                  <label for="exampleInputEmail1">Username or Email</label>
                  <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usernameemail">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" class="form-control" id="username" value="" optional>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </div>
      </div>
    </div>
  </div>
 
  
  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get a Healing Roots Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="" action="registration.php" method="post" >
                <div class="form-group">
                  <label for="name" style="margin-top: 5%;">Name: </label>
                  <input type="text" name="name" id="name" class="form-control" required value="">
                  <label for="username" style="margin-top: 5%;">Username : </label>
                  <input type="text" name="username" id = "username" required value="" class="form-control"> <br>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                  <label for="cexampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="cexampleInputPassword1" name="confirmpassword">
                </div>
                 
                <button type="submit"  name="submit" class="btn btn-primary" >Creat Account</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </div>
      </div>
    </div>
  </div>



  <div id="wrapper">
    <h1>Naturopathy Website</h1>
    <div id="content">
      <div class="clearfix">
        <div class="left">
          <h3>Appointment Booking</h3>
          <p>This page allows you to book an appointment with a Naturopathy.</p>
          <form action="appointment.php" method="post">
            <fieldset>
              <legend>Appointment Details</legend>
              <label for="name">Name:</label>
              <input type="text" name="u_name" id="name" />
              <br>
              <label for="age">Age :</label>
              <input type="number" name="age" id="age">
              <br>
              <label for="gender">Gender :</label>
             <input type="radio" name="gender" id="gender" value="Male"> Male 
              <input type="radio" name="gender" id="gender" value="FeMale">Female 
               <input type="radio" name="gender" id="gender" value="Other">Other
              <br>
              <label for="lang">Language :</label>
               <input type="radio" name="lang" id="lang" value="English"> English
              <input type="radio" name="lang" id="lang" value="Hindi">Hindi 
              <br>
              <label for="dtype">Disease Type :</label>
              <input type="text" name="dtype" id="dtype">
              <br>
              <label for="date">Date:</label>
              <input type="date" name="a_date" id="date" />
              <br>
              <label for="time">Time:</label>
              <input type="time" name="a_time" id="time" />
              <br>
              <input type="submit" value="Book Appointment" id="submit" />
            </fieldset>
          </form>
      </div>
  </div>


    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2023-2024 Healing Roots, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>