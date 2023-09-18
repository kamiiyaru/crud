<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include './system/favicon.php'; ?>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="./style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>main file</title>
</head>
<body>

	<div class="monkeh">
		<h1>Storing Form data in Database</h1>
	</div>
		<a href="view_data.php"><button>view</button></a>
	<form action="./system/new_data.php" method="post" class="form w3-center">
		<p style="padding-top: 10px;">nama depan : </p>
		<input type="text" name="nama_depan" required>

		<p>nama belakang : </p>
		<input type="text" name="nama_belakang" required>
	
		<p>email : </p>
		<input type="email" name="email" required>

		<p>pass : </p>
		<input type="password" name="password" required><br>

		<input type="submit" value="Submit" class="submit">
	</form>

<?php 
if (isset($_SESSION["submited"])) {
        echo "<p>{$_SESSION["submited"]}</p>";
        // Hapus pesan sesi setelah ditampilkan
        unset($_SESSION["submited"]);
    }
 ?>

</body>
</html>