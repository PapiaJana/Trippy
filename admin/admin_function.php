<?php
include('../db_connection.php');

function getAllUsers()
{
	global $conn;
	$sql = "SELECT * FROM `registration`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}

function userDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `registration` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}

function getUserDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `registration` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function UserUpdate($user_id, $fname,$lname, $email,$image)
{
	global $conn;
	$sql = "UPDATE `registration` SET fname='".$fname."',lname='" . $lname . "', email='" . $email . "',image='".$image."' WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}   
// ===============contact======================== 
function getAllContact(){
	global $conn;
	$sql = "SELECT * FROM `contact`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}

 }
 function contactDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `contact` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
 function getContactDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `contact` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
 function ContactUpdate($user_id, $name, $email, $phone_no,$massage)
{
	global $conn;
	$sql = "UPDATE `contact` SET name='".$name."', email='" . $email . "',phone_no='" . $phone_no . "',massage='".$massage."' WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}  
// ===============package========================
 function getAllPackage(){
	global $conn;
	$sql = "SELECT * FROM `package`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}

 }
 
 function getPackageDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `package` WHERE p_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function packageDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `package` WHERE p_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function packageUpdate($user_id, $destination,$days, $price,$image)
{
	global $conn;
	$sql = "UPDATE `package` SET destination='".$destination."',days='" . $days . "', price='" . $price . "',image='".$image."' WHERE p_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
 function getupdateContact($user_id, $name,$email,$phone_no,$massage){
	global $conn;
	$sql = "UPDATE `contact` SET name='".$name."',email='" . $email. "', phone_no='" . $phone_no . "',massage='" . $massage . "' WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
 }
 function getAllbooking()
{
	global $conn;
	$sql = "SELECT * FROM `book`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function bookingDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `book` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
// ===========================service===============================
function getAllService(){
	global $conn;
	$sql = "SELECT * FROM `service`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}

 }

 function serviceDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `service` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
// ===============================================================
function getAllCategory(){
	global $conn;
	$sql = "SELECT * FROM `catagory`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}

 }

 function catagoryDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `catagory` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getCategoryDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `catagory` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function categoryUpdate($user_id, $category,$image)
{
	global $conn;
	$sql = "UPDATE `catagory` SET category='".$category."',image='".$image."' WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}

?>