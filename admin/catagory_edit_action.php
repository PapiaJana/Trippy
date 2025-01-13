<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
// exit(0);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['categoryEditBtn'])) {
  $user_id = $_POST['user_id'];
  $category = $_POST['category'];
//   $days = $_POST['days'];
//   $price = $_POST['price'];
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

  $returnData = categoryUpdate($user_id, $category,$image);
  
  if ($returnData){

   {
    if ($pic['name'] != '') {
      if ($old_img != '')
        unlink('../assets/catagory/' . $old_img);
      move_uploaded_file($pic['tmp_name'], '../assets/catagory/' . $image);
    }
  }
    echo "<script>
    alert(' Category update successfully');
    window.location.href='category_list.php';
  </script>";
  } else {
    echo "<script>
    alert('Category update unsuccessfully');
    window.location.href='category_list.php';
    </script>";
  }
}
?>
