<?php 

session_start();

if(isset($_SESSION['logged'])){
    header('Location: panel.php');
    exit();
}

if (isset($_POST['email'])) {
    $correctInput = true;

    $email = $_POST['email'];
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {
        $correctInput = false;
        $_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
    }

    $login = $_POST['login'];

    if ((strlen($login) < 3) || (strlen($login) > 20)) {
        $correctInput = false;
        $_SESSION['e_login'] = 'Login musi posiadać od 3 do 20 znaków!';
    }

    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 != $password2) {
        $correctInput = false;
        $_SESSION['e_password'] = "Podane hasła nie są identyczne!";
    }

    require_once "connect.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    $result = $connection->query("SELECT id FROM users WHERE email='$email'");

    if ($correctInput == true) {
        if ($connection->query("INSERT INTO users VALUES(NULL, '$login', '$password1', '$email')")) {
            $_SESSION['registrationcompleted'] = true;
            header('Location: login.php');
        }
        exit();
    }
    $connection->close();
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
                <form method="post">
                    <?php 
                    if (isset($_SESSION['e_email'])) {
                        echo $_SESSION['e_email'];
                        unset($_SESSION['e_email']);
                    }
                    ?> <br />
                    <div class="formColumn">E-mail</div>
                    <input type="text" name="email">
                    <br />
                    <?php 
                    if (isset($_SESSION['e_login'])) {
                        echo $_SESSION['e_login'];
                        unset($_SESSION['e_login']);
                    }
                    ?> <br />
                    <div class="formColumn">Login</div>
                    <input type="text" name="login">
                    <br />
                    <?php 
                    if (isset($_SESSION['e_password'])) {
                        echo $_SESSION['e_password'];
                        unset($_SESSION['e_password']);
                    }
                    ?> <br />
                    <div class="formColumn">Hasło</div>
                    <input type="password" name="password1">
                    <br /><br />
                    <div class="formColumn">Powtórz hasło</div>
                    <input type="password" name="password2">
                    <br /><br />
                    <input type="submit" value="Utwórz konto">
                </form>
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