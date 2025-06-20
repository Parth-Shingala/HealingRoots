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

<body class="body" style="background-color: rgb(251, 186, 236);">
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


    <div class="container my-4" style="background-color: rgb(136, 164, 239);">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h3 style="font-family: Garamond;text-align: justify;">
                    Bhujangasana, also known as Cobra Pose, is a yoga asana that can help individuals with bronchial asthma by strengthening the 
                    chest and opening up the lungs, which can improve breathing and lung function.
                    <h4 style="color:rgb(10, 10, 219); text-align: justify;font-family: Garamond;">
                    Lie down on your stomach with your legs extended behind you and your hands placed palms down under your shoulders.
                    As you inhale, slowly lift your head and chest off the ground, using your hands to support your weight. Keep your elbows close 
                    to your sides and your shoulders relaxed.
                    Keep your gaze forward and maintain the pose for a few breaths, gradually increasing the duration as you become more comfortable.
                    Exhale as you lower yourself back down to the ground.
                    </h4>
                    </h3>                
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="images/yoga/y1.png" alt="" style="margin-top: 5%;">
                 
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h3 style="text-align: justify;font-family: Garamond;">
                Setu Bandhasana, also known as Bridge Pose, is a yoga asana that can be beneficial for individuals with Diabetes Mellitus as it 
                stimulates the abdominal organs, which can help regulate blood sugar levels.</h3>
                <h4 style="text-align: justify;font-family: Garamond;color:rgb(10, 10, 219);">
                    To perform Setu Bandhasana:
                    Lie down on your back with your knees bent and your feet flat on the ground. Your feet should be hip-width apart and your arms 
                    should be placed alongside your body with your palms facing down.
                    As you inhale, slowly lift your hips off the ground, pressing your feet and arms down into the ground for support.
                    Tuck your chin into your chest and roll your shoulders onto your back, creating a bridge shape with your body.
                    Hold the pose for a few breaths, gradually increasing the duration as you become more comfortable.
                    Exhale as you lower your hips back down to the ground
                </h4>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="images/yoga/y2.png" alt="">
                 
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 style="font-family: Garamond;">Adho Mukha Svanasana , also known as Downward-Facing Dog Pose </h2>
                <h4 style="color:rgb(10, 10, 219); text-align: justify;font-family: Garamond;">It is a yoga asana that can be beneficial for individuals with depression as it helps to stretch 
                    the spine and increase blood flow to the brain, which can improve mood and reduce stress.
                    To perform Adho Mukha Svanasana:
                    Start on your hands and knees in a tabletop position, with your wrists directly under your shoulders and your knees directly under 
                    your hips.
                    Tuck your toes under and lift your hips up and back, straightening your arms and legs to form an inverted V shape with your body.
                    Press your hands and feet firmly into the ground, lifting your sitting bones towards the ceiling.
                    Draw your shoulder blades down and away from your ears, relaxing your neck and looking towards your navel.
                    Hold the pose for several breaths, gradually increasing the duration as you become more comfortable.
                    To release, exhale and lower your knees back down to the ground.
                </h4>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="images/yoga/y3.png" alt="">
                 
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h3 style=" text-align: justify;font-family: Garamond; ">
                    Balasana, also known as Child's Pose. It is a yoga asana that can be beneficial for individuals with migraines as it helps to 
                    calm the mind.
                </h3>
                <h4 style="text-align: justify;color:rgb(10, 10, 219);;font-family: Garamond; ">
                    To perform Balasana:
                    Begin on your hands and knees in a tabletop position, with your wrists directly under your shoulders and your knees directly 
                    under your hips.
                    Slowly lower your hips back towards your heels, extending your arms out in front of you.
                    Rest your forehead on the ground or on a prop such as a pillow or block, allowing your neck to relax.
                    Take slow, deep breaths, focusing on the sensation of the breath moving in and out of your body.
                    Hold the pose for several breaths or as long as feels comfortable.
                    To release, slowly come back up to a tabletop position.
                </h4>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="images/yoga/y4.png" alt="" style="margin-left: 5%; font-family: Garamond;margin-bottom: 5%;">
                 
            </div>
        </div>
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <h3 style=" font-family: Garamond;text-align: justify;">
                        High blood pressure, also known as hypertension, can be a serious health condition that requires medical attention.
                        <h4 style="color:rgb(10, 10, 219);font-family: Garamond; text-align: justify;">
                            To perform Shavasana:
                            Lie down on your back on a yoga mat or comfortable surface.
                            Allow your arms to rest alongside your body, with your palms facing up.
                            Close your eyes and take slow, deep breaths, focusing on the sensation of the breath moving in and out of your body.
                            Allow your body to completely relax, letting go of any tension in your muscles.
                            If your mind begins to wander, gently bring your focus back to your breath.
                            Remain in the pose for several minutes or as long as feels comfortable.
                            To release, slowly begin to deepen your breath and bring your awareness back to your surroundings.
                        </h4>
                        </h3>                
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="images/yoga/y5.jpg" alt="" style="margin-top: 5%;">
                     
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