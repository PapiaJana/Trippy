<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!----------------CSS Link--------------->
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="style1.css"> -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <!----------------Icon Link--------------->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <!----------------Bootstrap Link--------------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous">
  <!----------------Font Awsome Link--------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <style>
    body {
      background-image: url("../img/admin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .login {
      border: 2px solid white;
      padding: 30px;
      margin: 30px;
      margin-left: 40px;
      border-radius: 7px;
      box-shadow: 5px 5px 5px white;
    }
  </style>
</head>
<body>
  <div>

     <form action="admin_login_action.php" class="col-md-4 login" method="post">
      <h1> Admin Pannel</h1>
      <h6>Continue with Login </h6>
      <!-- Email input -->
      <div class="form-outline ">
        <input type="email" id="form2Example1" class="form-control" name="email" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline ">
        <input type="password" id="form2Example2" class="form-control" name="password" />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" name="adminloginbtn" value="Sign in"></button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
        <p>or sign up with:</p>
        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="JS/script.js"></script>

  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>