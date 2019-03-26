<?php 

session_start();

if(isset($_SESSION['logged'])){
    header('Location: panel.php');
    exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Internetowa multiagencja ubezpieczeniowa</title>
    <meta name="description" content="Agencja zajmująca się sprzedażą ubezpieczeń" />
    <meta name="keywords" content="ubezpieczenia komunikacyjne, sprzedaż ubezpieczeń, OC, AC, internetowy kalkulator ubezpieczeń" />
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
                        <li><a href="login.php">Zaloguj się</a></li>
                        <li><a href="registration.php">Zarejestruj się</a></li>
                    </ul>
                </li>
            </ol>
            <div style="clear: both;"></div>
        </div>
        <div class="content">
            <div id="form">
                <?php if(isset($_SESSION['buyRedirected'])){
                    echo "<div style='color: red'> Musisz być zalogowany, żeby wysłać formularz kupna OC.</div> <br/ ><br/ >";
                    unset($_SESSION['buyRedirected']);
                    }
                ?>
                <form action="loginscript.php" method="post">
                    <div class="loginLabel">Login</div>
                    <div class="loginInput"><input type="text" name="login"></div>
                    <br />
                    <div class="loginLabel">Hasło</div>
                    <div class="loginInput"><input type="password" name="password"></div>
                    <br />
					<input type="submit" value="Zaloguj się">
				</form>
				<form action="registration.php">
					<input type="submit" value="Utwórz konto">
				</form>
				
                <?php 
                if(isset($gratulations)){
                    echo $gratulations;
                }
				if (isset($_SESSION['blad'])) {
					echo $_SESSION['blad'];
				}
				?>
            
            </div>
			
        </div>

    </div>
    <script src="jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function() {
            var NavY = $('.nav').offset().top;

            var stickyNav = function() {
                var ScrollY = $(window).scrollTop();

                if (ScrollY > NavY) {
                    $('.nav').addClass('sticky');
                } else {
                    $('.nav').removeClass('sticky');
                }
            };

            stickyNav();

            $(window).scroll(function() {
                stickyNav();
            });
        });
    </script>
</body>

</html> 