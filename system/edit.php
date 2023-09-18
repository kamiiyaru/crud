<?php 
session_start();
	include 'connect.php';

	$id = $_GET['id'];
    $nama_dpn = $_REQUEST['nama_depan'];
    $nama_blkg = $_REQUEST['nama_belakang'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "UPDATE user set nama_depan = '$nama_dpn', nama_belakang = '$nama_blkg', email = '$email', password = '$password' where id = $id";

    $pip = mysqli_query($conn, $sql);

    if ($pip) {
        $_SESSION['edit_message'] = "data <b>$id</b> is changed with value : <br>nama depan : $nama_dpn<br>nama blkg : $nama_blkg<br>email : $email";
    }

    header('location: ../view_data.php');

 ?>