<?php
include("admin_function.php");
if (isset($_GET['uid'])) {
    $user_id = $_GET['uid'];
    $call = serviceDelete($user_id);

    if ($call) {
        echo "<script>
        alert('Service deleted successfully');
        window.location.href='service_list.php';
        </script>";
    } else {
        echo "<script>
        alert('Failed to delete service');
        window.location.href='service_list.php';
        </script>";
	}
}
?>