<?php
include("admin_function.php");
$con = mysqli_connect("localhost", "root", "", "travel");
if (!$conn) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$service= mysqli_real_escape_string($conn, $_POST['service']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$old_img = mysqli_real_escape_string($conn, $_POST['old_img']);

// $old_img = $_POST['old_img'];
// $pic = $_FILES['pic'];
// $image = $old_img;


// if ($pic['name'] != '') {
//     $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
//     $image = time() . "." . $img_type;
// } else {
//     $image = $old_img;
// }
$sql2 = "SELECT * FROM service WHERE  service='$service'";
$query2 = mysqli_query($conn, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

if ($row > 0) {
    echo "<script>alert('This package is already exit');window.location.href='dashboard.php';</script>";
} else {
$img_name=$_FILES['pic']['name'];
$img_tmpname=$_FILES['pic']['tmp_name'];
$folder = "../assets/service_image/" . $img_name;

if (move_uploaded_file($img_tmpname, $folder)) {
    echo "<h3>&nbsp; Image uploaded successfully!</h3>";
} else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
}

    $sql = "INSERT INTO service(service,description,image) VALUES('" . $service. "','" . $description . "','" . $img_name . "')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Add Service Successfully');window.location.href='service_list.php';</script>";
    } else {
        echo "<script>alert('Sorry,Add service UnSuccessful');window.location.href='service_list.php';</script>";
    }
}