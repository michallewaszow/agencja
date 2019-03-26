<?php 

session_start();

if (!isset($_SESSION['logged'])) {
	header('Location: login.php');
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <li><a href="panel.php"><i class="icon-user"></i></a>
                    <ul>
                        <li><a href="panel.php">Moje konto</a></li>
                        <li><a href="#">Oferty</a></li>
                        <li><a href="logout.php">Wyloguj się</a></li>
                    </ul>
                </li>
            </ol>
            <div style="clear: both;"></div>
        </div>
        <div class="content">
            <?if(isset($message)){
                echo $message;
                } ?>
            <div class="text">
                Moje zapytania:
                <table id="requesttable" class="table table-bordered table-striped">
                    <tr>
                        <th>Rok produkcji samochodu</th>
                        <th>Marka samochodu</th>
                        <th>Model samochodu</th>
                        <th>Rodzaj samochodu</th>
                        <th>Rodzaj paliwa</th>
                        <th>Pojemność silnika</th>
                        <th>Liczba drzwi</th>
                    </tr>
                    <?php 
                        require_once "loadData.php";
                    ?>
                </table>
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