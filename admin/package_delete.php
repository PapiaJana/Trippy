 <?php
// include('admin_function.php');

// $user_id=$_REQUEST['uid'];

// $call=packageDelete($user_id);
// if($call){
// 	echo "<script>
// 			alert('Package Delete Successful.');
// 			window.location.href='package_list.php';
// 		  </script>";
// }else{
// 	echo "<script>
// 			alert('Package Delete Unuccessful.');
// 			window.location.href='package_list.php';
// 		  </script>";
// }


?> 
<?php
include("admin_function.php");

// if (isset($_REQUEST['uid'])) {
//     $user_id = $_REQUEST['uid'];
//     echo "
//     <script>
//         if (confirm('Are you sure you want to delete this package?')) {
//              window.location.href = 'package_delete.php?confirm=1&uid={$user_id}';
//         } else {
//             window.location.href = 'package_list.php';
//         }
//     </script>";
// }

if (isset($_GET['uid'])) {
    $user_id = $_GET['uid'];
    $call = packageDelete($user_id);

    if ($call) {
        echo "<script>
        alert('Package deleted successfully');
        window.location.href='package_list.php';
        </script>";
    } else {
        echo "<script>
        alert('Failed to delete package');
        window.location.href='package_list.php';
        </script>";
	}
}
?>