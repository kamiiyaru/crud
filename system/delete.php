<?php 
session_start();
	$id_user = $_GET['id'];
	include 'connect.php';
	$sql = "DELETE FROM user WHERE id = $id_user ";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		$_SESSION['delete_message'] = "data deleted id = $id_user";
	}

	if (!$result) {
		mysql_error();
	}
	mysqli_close($conn);
	header('location: ../view_data.php');

 ?>