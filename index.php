<?php
include "DB_connection.php";
include "data/setting.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to <?= $setting['school_name'] ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="reshh.jpg">
</head>

<body class="body-home">
	<div class="black-fill"><br /> <br />
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-light  " id="homeNav" style="border-radius: 20px 20px 20px 20px ;">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="reshh.png" width="40">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>


						</ul>
						<ul class="navbar-nav me-right mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="login.php">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>



			<center class="pt-4 mt-4 pb-2 mb-2">
				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="3000">
							<img src="../school-management-system/img/joy.jpg" height="370px;  class=" d-block w-100 " alt=" ..." style="border-radius: 20px 20px 20px 20px ; opacity: 0.8; ">
						</div>
						<div class="carousel-item" data-bs-interval="3000">
							<img src="../school-management-system/img/students.jpg" height="370px;  class=" d-block w-100" alt="..." style="border-radius: 20px 20px 20px 20px ; opacity: 0.8">
						</div>
						<div class="carousel-item" data-bs-interval="3000">
							<img src="../school-management-system/img/school4.jpg" height="370px; " class="d-block w-80" alt="..." style="border-radius: 20px 20px 20px 20px ; opacity: 0.8">
						</div>
						<div class="carousel-item">
							<img src="../school-management-system/img/student2.jpg" height="370px; " class="d-block w-80" alt="..." style="border-radius: 20px 20px 20px 20px ; opacity: 0.8">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</center>

		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>