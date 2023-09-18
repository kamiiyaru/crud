<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add user</title>
</head>
<body>
<?php 
session_start();

    include 'connect.php';

    $nama_dpn = $_REQUEST['nama_depan'];
    $nama_blkg = $_REQUEST['nama_belakang'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO user (nama_depan, nama_belakang, email, password) VALUES ('$nama_dpn', '$nama_blkg', '$email', '$password')";  

    if ($conn->query($sql) === TRUE) {
        $_SESSION["submited"] = "data inserted";
    }

$conn->close();

header('location: ../index.php')
?>


</body>	
</html>