<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=catagoryDelete($user_id);
if($call){
	echo "<script>
			alert('User Delete Successful.');
			window.location.href='category_list.php';
		  </script>";
}else{
	echo "<script>
			alert('User Delete Unuccessful.');
			window.location.href='category_list.php';
		  </script>";
}


?>