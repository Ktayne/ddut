<?php
session_start();
require_once 'functions.php';
$userstr = 'Здраствуй путник!';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = 'Logged in as: $user';
} else {
    $loggedin = FALSE;
    $user = '';
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ДДЮТ Кировского р-на</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">


</head>

<header>
    <!--Навигационная панель-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <a class="navbar-brand">
            <img src="media/pictures/ddut_logo.png" width="90" height="60" style="padding-left: 30px"
                 alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Главная</a> <!--<span class="sr-only">(текущая)</span></a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Контакты</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                    if ($loggedin) {
                        echo "$user ";
                        echo "<a href='logout.php'>Выйти</a>";
                    }
                    else
                        echo "<a href='login.php'>Войти</a>/<a href='signup.php'>Зарегестрироваться</a>";

                ?>
            </span>
        </div>

    </nav>
</header>
