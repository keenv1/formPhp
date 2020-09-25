<?php require 'config/app.php' ?>
<!doctype html>
<html lang="<?php echo $config['lang']?>" dir="<?php echo $config['dir']?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--	bootstarp-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--	css-->
	<link rel="stylesheet" href="stayle/stayle.css">
	<title><?php echo $config['webName'] .'|'. $title?></title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar position-relative navbar-expand-lg bg-dark  navbar-dark fixed-top shadow-sm  scrolling-navbar">
	<div class="container">
		<a class="navbar-brand" href="#">OMaR</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-5">
				<li class="nav-item">
					<a class="nav-link" href="">الصفحه الرئيسية
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >تسجيل</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >تسجيل دخول</a>
				</li>
				<span class="lineNavbar"></span>
				<li class="nav-item">
					<a class="nav-link" href="#" >مفضلة</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >اعلان</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >مساعدة</a>
				</li>
			</ul>
		</div>
	</div>

</nav>
<div class="container">
<!-- Navbar -->