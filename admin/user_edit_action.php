<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
// exit(0);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['userEditBtn'])) {
  $user_id = $_POST['user_id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $old_img = $_POST['old_img'];
  $pic = $_FILES['pic'];
  $image = ' ';

  if ($pic['name'] != '') {
    $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
    $image = time() . "." . $img_type;
  }
   else {
    $image = $old_img;
  }
  

  $returnData = UserUpdate($user_id, $fname, $lname, $email, $image);
  if ($returnData) {
    {
    if ($pic['name'] != '') {
      if ($old_img != '')
        unlink('../assets/user_image/' .$old_img);
      move_uploaded_file($pic['tmp_name'], '../assets/user_image/' . $image);
    }
  }
    echo "<script>
    alert(' User update successfully');
    window.location.href='user_list.php';
  </script>";
  } else {
    echo "<script>
    alert('User update unsuccessfully');
    window.location.href='user_list.php';
    </script>";
  }
}
?>
