<?php
session_start();

if (!isset($_SESSION['login_user'])) {
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Dashboard</h1>
	<p>Selamat Datang, <?= $_SESSION['login_user'];?></p>
	<hr>
	<a href="halaman.php" type="button" class="btn btn-outline-success">Lihat Data Seminar</a>
	<a href="logout.php" type="button" class="btn btn-outline-danger">Logout</a>
</body>
</html>