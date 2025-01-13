<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
// exit(0);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['packageEditBtn'])) {
  $user_id = $_POST['user_id'];
  $destination = $_POST['destination'];
  $days = $_POST['days'];
  $price = $_POST['price'];
  // $stock_count = $_POST['stock_count'];
  // $p_status=$_POST['p_status'];
  $old_img = $_POST['old_img'];
  $pic = $_FILES['pic'];
  $image = '';
  if ($pic['name'] != '') {
    $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
    $image = time() . "." . $img_type;
    // $image
  } else {
    $image = $old_img;
  }

  $returnData = packageUpdate($user_id, $destination,$days, $price,$image);
  
  if ($returnData){

   {
    if ($pic['name'] != '') {
      if ($old_img != '')
        unlink('../assets/package_image/' . $old_img);
      move_uploaded_file($pic['tmp_name'], '../assets/package_image/' . $image);
    }
  }
    echo "<script>
    alert(' Package update successfully');
    window.location.href='package_list.php';
  </script>";
  } else {
    echo "<script>
    alert('Package update unsuccessfully');
    window.location.href='package_list.php';
    </script>";
  }
}
?>
