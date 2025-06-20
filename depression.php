<!Doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">
  <title>Healing Roots</title>

  </style>
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

<body class="body" style="background-color: rgb(251, 186, 186);">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="mainindex.php"> <img src="images/parth.png" width="120px" height="48px"> </a>
    <!--<a class="navbar-brand" href="#">Healing Roots</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
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

    <div class="container my-4" style="background-color: rgb(208, 248, 172);">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h1 style="color: rgb(255, 123, 123);margin-left: 60px;font-family: Lucida Handwriting;">
                  Depression
                  </h1>     
            </div>
            <div class="col-md-5">
                <img class="img" src="images/disease/Depression.jpg" alt="" style="height: 205px;width: 370px;margin-top: 35px;">    
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h5 style="color: rgb(57, 83, 255); font-family: Garamond; text-align: justify; font-weight: 100;margin-top: 20px;font-size: 25px;">
                    Why Naturopathy is the best solution to depression: Seeking medical assistance for depression can do more harm than good. Using chemically charged medicines to alter brain chemicals that produce an uplifting effect is usually temporary and addictive at the same time. Dependence on medication creates yet another issue of grave concern that can take a toll at a different plane on the concerned individual if not enhancing the chronic depressive state a notch or two further.</h5>
            </div>
            <div class="order-md-2" style="padding: 10px;">
              <h5 style="color: rgb(57, 83, 255); font-family: Garamond; text-align: justify;margin-top: 20px;font-size: 23px;">
                Naturopathy on the other hand, is recognized and upheld for using completely non intrusive and non invasive methods to eradicate depression right from its roots. Usage of soothing and calming techniques like Shirodrara, yogic kriya, acupressure, mud packs and a range of massages along with diet therapy causes significant changes in the brains chemistry without the involvement of drugs or other invasive means. The concerned individuals are relieved of their depressive state with the help of deeper understanding of their selves and becoming capable of handling their stressors without being stressed.</h5>
          </div>
          <div class="order-md-2" style="padding: 10px;">
            <h5 style="color: rgb(57, 83, 255); font-family: Garamond; text-align: justify;margin-top: 20px;font-size: 23px;">
                The processes used in naturopathy have been very successful in combating depression at all levels and is presently sought by people all over the world for its unique benefits. </h5>
        </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="images/disease/depresion1.jpg" alt="" style="margin-bottom: px;margin-top: 50px;">
                 
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h4 style="text-align: justify; color: blue;">
                    
                    </h4> 
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="images/" alt="">   
            </div>
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