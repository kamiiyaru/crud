<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include './system/favicon.php'; ?>
	<title>edit user</title>
</head>
<body>
	<?php 

	include './system/connect.php';

	$query = "SELECT * from user";

	$data = mysqli_query($conn, $query);

	$row = mysqli_fetch_array($data);

	echo "<form action='./system/edit.php?id=".$row['id']."' method='post' class='form w3-center'>
		<p style='padding-top: 10px;'>nama depan : </p>
		<input type='text' name='nama_depan' required>

		<p>nama belakang : </p>
		<input type='text' name='nama_belakang' required>
	
		<p>email : </p>
		<input type='email' name='email' required>

		<p>pass : </p>
		<input type='password' name='password' required><br>

		<input type='submit' value='Submit' class='submit' style='margin-top: 20px;display: flex;'>

	</form>";
	 ?>
	 <a href="view_data.php"><button style="margin-top: 30px;">cancel</button></a>
</body>
</html>