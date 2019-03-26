<?php 
	session_start();

	if(!isset($_SESSION['logged'])){
		$_SESSION['buyRedirected'] = true;
		header('Location: login.php');
		exit();
	}

	if(isset($_POST['productionYear'])){
		require_once "connect.php";
		$connection = new mysqli($host, $db_user, $db_password, $db_name);

		$productionYear = $_POST['productionYear'];
		$carBrand = $_POST['carBrand'];
		$carModel = $_POST['carModel'];
		$carType = $_POST['carType'];
		$fuelType = $_POST['fuelType'];
		$engineSize = $_POST['engineSize'];
		$doorsQuantity = $_POST['doorsQuantity'];
		$userId = $_SESSION['id'];

		$connection->query("INSERT INTO offers VALUES(null, $productionYear, '$carBrand', '$carModel', '$carType', '$fuelType', '$engineSize', $doorsQuantity, $userId)");

	}
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Internetowa multiagencja ubezpieczeniowa</title>
	<meta name="description" content="Agencja zajmująca się sprzedażą ubezpieczeń" />
	<meta name="keywords"
		content="ubezpieczenia komunikacyjne, sprzedaż ubezpieczeń, OC, AC, internetowy kalkulator ubezpieczeń" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<span style="color:#bca991; float: left;">lewaszow</span>
				<span style="color:#c1736a; float: left;">ubezpieczenia.com</span>
				<div style="clear:both"></div>
			</div>
		</div>
		<div class="nav">
			<ol>
				<li><a href="index.php"><i class="icon-home-outline"></i></a></li>
				<li><a href="kupoc.php"><i class="icon-basket"></i></a>
					<ul>
						<li><a href="kupoc.php">Kup OC</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="icon-mail"></i></a></li>
				<li><a href="login.php"><i class="icon-user"></i></a>
					<ul>
						<li><a href="login.php">Moje konto</a></li>
						<li><a href="#">Oferty</a></li>
					</ul>
				</li>
			</ol>
			<div style="clear: both;"></div>
		</div>
		<div class="content">
			<div id="form">
				<form method="post">
					<div class="formColumn">Rok produkcji samochodu</div>
					<div class="inputRow"><input type="text" name="productionYear"></div>
					<br /><br />
					<div class="formColumn">Marka samochodu</div>
					<div class="inputRow"><input type="text" name="carBrand"></div>
					<br /><br />
					<div class="formColumn">Model samochodu</div>
					<div class="inputRow"><input type="text" name="carModel"></div>
					<br /><br />
					<div class="formColumn">Rodzaj samochodu</div>
					<div class="inputRow"><input type="text" name="carType"></div>
					<br /><br />
					<div class="formColumn">Rodzaj paliwa</div>
					<div class="inputRow"><input type="text" name="fuelType"></div>
					<br /><br />
					<div class="formColumn">Pojemność silnika</div>
					<div class="inputRow"><input type="text" name="engineSize"></div>
					<br /><br />
					<div class="formColumn">Liczba drzwi</div>
					<div class="inputRow"><input type="text" name="doorsQuantity"></div>
					<br /><br />
					<input type="submit" value="Wyślij">
				</form>
			</div>
		</div>

	</div>
	<script src="jquery-3.3.1.min.js"></script>

	<script>

$(document).ready(function(){
			var navY = $('.nav').offset().top;
			
			var stickyNav = function(){
				var scrollY = $(window).scrollTop();
				
				if(scrollY > navY)
				{
					$('.nav').addClass('sticky');
					$('.content').css('padding-top', '70px');
				}
				else
				{
					$('.nav').removeClass('sticky');
					$('.content').css('padding-top', '10px');
				}
			};
			
			stickyNav();
			
			$(window).scroll(function(){
				stickyNav();
			});
		});

	</script>
</body>

</html>