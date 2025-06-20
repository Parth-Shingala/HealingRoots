<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">
    <title>Healing Roots</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS Links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <script>
      function logout() {
        if (confirm("Are you sure you want to log out?")) {
          window.location.href = "logout.php";
        }
      }
  </script>
</head>
<body style="background-color: rgb(164, 214, 239);">
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
 
   <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Login to Healing Roots</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="login.php" method="post">
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
 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Get a Healing Roots Account</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form class="" action="registration.php" method="post">
           <div class="form-group">
             <label for="name" style="margin-top: 5%;">Name: </label>
             <input type="text" name="name" id="name" class="form-control" required value="">
             <label for="username" style="margin-top: 5%;">Username : </label>
             <input type="text" name="username" id="username" required value="" class="form-control"> <br>
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               name="email">
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

           <button type="submit" name="submit" class="btn btn-primary">Creat Account</button>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
  <!-- About Us Section -->
  <section class="container my-5">
    <h1 class="text-center mb-5" style="font-family: Lucida Handwriting;font-weight: bold;">About Us</h1>
    <div class="row">
      <div class="col-md-6">
        <img src="images/photo1.png" alt="Naturopathy Wellness" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h2 style="font-family: Georgia;">Our Mission</h2>
        <p style="font-family: Garamond;font-size: x-large;">At Healing Roots, our mission is to help people achieve optimal health and wellness through natural and holistic approaches. We believe that the body has an innate ability to heal itself, and our goal is to support and facilitate that healing process.</p>
        <h2 style="font-family: Georgia;">Our Team</h2>
        <p style="font-family: Garamond; font-size: x-large;">We have a team of highly skilled and experienced naturopathic doctors who are dedicated to providing personalized care to each and every one of our patients. Our team includes:</p>
        <ul style="font-family: Lucida Handwriting;font-size: x-large;">
          <li>VED BARBHAYA, CEO</li>
          <li>GAURAV DHOKIYA, CO-FOUNDER </li>
          <li>PARTH SHINGALA, CO-FOUNDER </li>
          <li>Dr. ALKA SONI, ND </li>
        </ul>
      </div>
    </div>
  </section>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2023 Healing Roots, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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