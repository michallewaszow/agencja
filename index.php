<?php 

	session_start();

	if(!isset($_SESSION['logged'])){
		header('Location: guest.php');
		exit();
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
			<div class="text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac velit ipsum. Praesent nisl tortor,
			suscipit et elementum eu, finibus nec tellus. In sapien metus, venenatis sit amet imperdiet et, pulvinar sit
			amet nisl. Nunc volutpat, eros eu placerat semper, ligula arcu maximus lectus, vitae mollis metus lectus
			eget nibh. Nullam dolor lectus, rhoncus scelerisque nisi vitae, molestie ultricies felis. Fusce blandit
			lobortis suscipit. Donec id urna nec justo mattis mollis quis in dolor.
			<br />
			<br />
			Vivamus et gravida lacus. Morbi pulvinar posuere nisl nec pellentesque. Cras vitae dolor porttitor,
			tincidunt lorem ut, sagittis mauris. Pellentesque dapibus luctus sem eu iaculis. Etiam tincidunt diam
			dignissim libero varius, gravida lacinia massa ultrices. Praesent bibendum erat vel ligula porttitor
			laoreet. Maecenas urna metus, mollis eu vulputate ac, elementum quis risus. Vestibulum tincidunt libero eget
			euismod venenatis. Nullam orci lectus, condimentum ac dictum ut, rhoncus vitae massa. Nulla vestibulum sem
			id convallis interdum. Sed sit amet velit nec magna rhoncus convallis sed eu elit. In gravida elit rhoncus
			lectus pharetra, posuere feugiat nisi pellentesque. Suspendisse posuere tellus a vulputate ultrices. Aenean
			et libero nec dolor feugiat porta id non tellus.
			<br />
			<br />
			Nulla vulputate luctus sapien, non bibendum metus vestibulum eu. Aliquam erat volutpat. Sed in mauris enim.
			Fusce id diam vitae massa aliquam consectetur at quis justo. Praesent ultrices nunc lectus, a lacinia ligula
			placerat at. Pellentesque eros turpis, feugiat ut dignissim sed, lobortis fringilla dui. Nunc tincidunt
			blandit velit vitae mattis. In lacinia nisi bibendum, facilisis orci in, efficitur leo. Maecenas feugiat
			porta ultricies. Aenean in consectetur orci. Suspendisse tellus lorem, scelerisque ut maximus eu, iaculis
			sit amet ante.
			<br />
			<br />
			Nulla commodo nisl sed dui maximus dictum. Quisque ultricies vulputate purus id molestie. Fusce nec justo
			dolor. Donec iaculis accumsan urna eu lobortis. Aliquam interdum sagittis eros sit amet porta. Suspendisse
			potenti. Pellentesque dolor diam, pellentesque nec faucibus at, commodo id lacus. Interdum et malesuada
			fames ac ante ipsum primis in faucibus. Praesent ultrices, lacus non lobortis fermentum, elit elit venenatis
			enim, vitae eleifend nisi eros aliquet magna. Vivamus finibus mauris eget ipsum sodales faucibus. Ut dapibus
			purus sed neque varius dapibus. Cras facilisis scelerisque ante, in tincidunt dui viverra sit amet.
			<br />
			<br />
			Mauris tortor quam, aliquam nec est vitae, congue ornare nulla. Etiam vehicula metus posuere enim imperdiet
			tristique. Nulla facilisi. Fusce accumsan quam non ultrices scelerisque. Proin volutpat magna augue, id
			convallis magna auctor sed. Fusce dictum, ante a luctus lacinia, turpis metus dictum mauris, eu laoreet
			massa ipsum cursus massa. Proin aliquam ligula nulla, nec mattis justo faucibus sed. Morbi eu mi at magna
			aliquet posuere sit amet eget est. Nam blandit, lectus in dapibus luctus, justo purus rutrum tortor, sit
			amet pellentesque ipsum elit ac mi. Aenean sed nisi ut erat ullamcorper dictum. Cras et nibh massa.
			<br />
			<br />
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac velit ipsum. Praesent nisl tortor,
			suscipit et elementum eu, finibus nec tellus. In sapien metus, venenatis sit amet imperdiet et, pulvinar sit
			amet nisl. Nunc volutpat, eros eu placerat semper, ligula arcu maximus lectus, vitae mollis metus lectus
			eget nibh. Nullam dolor lectus, rhoncus scelerisque nisi vitae, molestie ultricies felis. Fusce blandit
			lobortis suscipit. Donec id urna nec justo mattis mollis quis in dolor.
			<br />
			<br />
			Vivamus et gravida lacus. Morbi pulvinar posuere nisl nec pellentesque. Cras vitae dolor porttitor,
			tincidunt lorem ut, sagittis mauris. Pellentesque dapibus luctus sem eu iaculis. Etiam tincidunt diam
			dignissim libero varius, gravida lacinia massa ultrices. Praesent bibendum erat vel ligula porttitor
			laoreet. Maecenas urna metus, mollis eu vulputate ac, elementum quis risus. Vestibulum tincidunt libero eget
			euismod venenatis. Nullam orci lectus, condimentum ac dictum ut, rhoncus vitae massa. Nulla vestibulum sem
			id convallis interdum. Sed sit amet velit nec magna rhoncus convallis sed eu elit. In gravida elit rhoncus
			lectus pharetra, posuere feugiat nisi pellentesque. Suspendisse posuere tellus a vulputate ultrices. Aenean
			et libero nec dolor feugiat porta id non tellus.
			<br />
			<br />
			Nulla vulputate luctus sapien, non bibendum metus vestibulum eu. Aliquam erat volutpat. Sed in mauris enim.
			Fusce id diam vitae massa aliquam consectetur at quis justo. Praesent ultrices nunc lectus, a lacinia ligula
			placerat at. Pellentesque eros turpis, feugiat ut dignissim sed, lobortis fringilla dui. Nunc tincidunt
			blandit velit vitae mattis. In lacinia nisi bibendum, facilisis orci in, efficitur leo. Maecenas feugiat
			porta ultricies. Aenean in consectetur orci. Suspendisse tellus lorem, scelerisque ut maximus eu, iaculis
			sit amet ante.
			<br />
			<br />
			Nulla commodo nisl sed dui maximus dictum. Quisque ultricies vulputate purus id molestie. Fusce nec justo
			dolor. Donec iaculis accumsan urna eu lobortis. Aliquam interdum sagittis eros sit amet porta. Suspendisse
			potenti. Pellentesque dolor diam, pellentesque nec faucibus at, commodo id lacus. Interdum et malesuada
			fames ac ante ipsum primis in faucibus. Praesent ultrices, lacus non lobortis fermentum, elit elit venenatis
			enim, vitae eleifend nisi eros aliquet magna. Vivamus finibus mauris eget ipsum sodales faucibus. Ut dapibus
			purus sed neque varius dapibus. Cras facilisis scelerisque ante, in tincidunt dui viverra sit amet.
			<br />
			<br />
			Mauris tortor quam, aliquam nec est vitae, congue ornare nulla. Etiam vehicula metus posuere enim imperdiet
			tristique. Nulla facilisi. Fusce accumsan quam non ultrices scelerisque. Proin volutpat magna augue, id
			convallis magna auctor sed. Fusce dictum, ante a luctus lacinia, turpis metus dictum mauris, eu laoreet
			massa ipsum cursus massa. Proin aliquam ligula nulla, nec mattis justo faucibus sed. Morbi eu mi at magna
			aliquet posuere sit amet eget est. Nam blandit, lectus in dapibus luctus, justo purus rutrum tortor, sit
			amet pellentesque ipsum elit ac mi. Aenean sed nisi ut erat ullamcorper dictum. Cras et nibh massa.
			</div>
		</div>

	</div>
	<script src="jquery-3.3.1.min.js"></script>

	<script>

		$(document).ready(function () {
			var NavY = $('.nav').offset().top;

			var stickyNav = function () {
				var ScrollY = $(window).scrollTop();

				if (ScrollY > NavY) {
					$('.nav').addClass('sticky');
				} else {
					$('.nav').removeClass('sticky');
				}
			};

			stickyNav();

			$(window).scroll(function () {
				stickyNav();
			});
		});

	</script>
</body>

</html>