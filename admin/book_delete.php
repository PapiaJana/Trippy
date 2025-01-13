<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=bookingDelete($user_id);
if($call){
	echo "<script>
			alert('Booking Delete Successful.');
			window.location.href='book_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Booking Delete Unuccessful.');
			window.location.href='book_list.php';
		  </script>";
}


?>