<?php
session_start();
 if (!isset($_SESSION['username'])) {
   echo '<script type="text/javascript">alert("Please First Login.....");window.location.href="login_admin.php";</script>';
 }
include("admin_function.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
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
      .box{
        border: 1px solid black;
        box-shadow: 10px 5px 5px gray ;
        padding: 15px;
        margin: 15px 25px;
      }
      .box a{
        text-decoration: none;
        color: black;
      }
      .box button{
        padding: 9px;
        background-color:orange;
        border-radius: 5px;
      }
      .container1{
            display: inline-block;
      }
      /* * {
    border: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Lato", sans-serif;
} */

/* body {
    background: linear-gradient(to left, rgb(238, 91, 91), rgb(8, 8, 44));
} */

.container {
    margin: 5px;
    padding: 0;
    height: 100vh;
    width: 250px;
    position: fixed;
    background-color: #333;

    overflow: auto;
}
.container h1{
  color: #fff;
  font-weight: bolder;
  padding-left: 13px;
  padding-top: 10px;
}

/*adding styles to links */
.container a {
    text-decoration: none;
    display: block;
    padding: 18px;
    color: #fff;
    font-weight: bolder;
    font-size: 20px;
}

.container a.active {
    background-color: orange;
    color: black;
}

/* .container>a:hover:not(.active) {
    background-color: #403b3b;
} */

div.content {
    margin-left: 230px;
    padding: 40px 40px;
    height: 100vh;
}

@media screen and (max-width:500px) {
    .container {
        width: 100%;
        height: auto;
        position: relative;
    }

    .container a {
        float: left;
    }

    div.content {
        margin-left: 0;
        background-color: rgb(242, 242, 110);
    }
}

@media screen and (max-width:300px) {
    .container a {
        text-align: center;
        float: none;
    }
}
    </style>
</head>



<body>
    <div class="container">
        <!--container class will contain the links-->
        <h1><span style="color: orange;">T</span>RIPPY</h1><hr>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href="user_list.php">User List</a>
        <a href="category_list.php">Category List</a>
        <a href="package_list.php">Package List</a>
        <a href="service_list.php">Service List</a>
        <a href="book_list.php">Book List</a>
        <a href="contact_list.php">Contact List</a>
       
    </div>
    <div class="content">
    <span>  <h2 class="mb-4 text-dark fs-5 fw-5"><span style="color: orange;">T</span>rippy Admin Pannel</h2> </span>
    <div class="container1">
  <div class="row">
    <div class="box">
    <h2>  User List</h2>
      <h6>count:7</h6>
     <a href="user_list.php"> <button>Go to the user list</button></a>
    </div>
    <div class="box">
    <h2>  Package List</h2>
      <h6>count:12</h6>
     <a href="package_list.php"> <button>Go to the package list</button></a>
    </div>
    <div class="box">
    <h2> Book List</h2>
      <h6>count:10</h6>
     <a href="book_list.php"> <button>Go to the book list</button></a>
    </div>
    <div class="box">
    <h2> Contact  List</h2>
      <h6>count:10</h6>
     <a href="contact_list.php"> <button>Go to the contact list</button></a>
    </div>
  </div>
</div>
    </div>
</body>

</html>
  <!-- <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">User List</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <p>Count: 6</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div> -->


    <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="JS/script.js"></script>

    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>



</html>