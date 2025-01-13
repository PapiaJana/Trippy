<?php
include("admin_function.php");
$user_id = base64_decode($_GET['uid']);
//echo $user_id;
$data = getContactDetails($user_id);
//echo"<pre>";
//print_r($data);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <title>contact</title>
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="admin_style.css">
  <style>
     .contact{
      border: 2px solid black;
     }
  </style>
</head>

<body>
<center><h1>Reply to customer</h1></center>
  <div class="row " style="padding: 3rem;">

    <div class="col-md-6 contact">
      <form action="contact_edit_action.php" class="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo $data['c_id'] ?>">
        <div class="ml-4">
          <input id="name" name="name" class="form-control my-4 shadow" type="text" placeholder="Enter your name"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?php echo $data['name'] ?>" />
          <input id="email" name="email" class="form-control my-4 shadow" type="email" placeholder="Enter your email" value="<?php echo $data['email'] ?>" />
          <input id="phone_no" name="phone_no" class="form-control my-4 shadow" type="tel" placeholder="Phone Number" value="<?php echo $data['phone_no'] ?>" />
          <textarea id="massage" name="massage" class="form-control my-4 shadow" type="textarea" placeholder="Message"
            style="height: 50"><?php echo htmlspecialchars($data['massage']); ?></textarea>
          <textarea id="adminreply" name="adminreply" rows="3" class="form-control my-4 shadow" type="textarea" placeholder="Message"
            style="height: 50"></textarea>
          <input type="submit" value="Send" name="contactEditbtn" onclick="">
        </div>
    </div>
    <div class="col-md-6">
      <img src="../img/email.png" alt="" style="height: 500px;width:600px;" />
    </div>
  </div>
  </form>
  </div>
  </div>
  <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>

  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
  <script>