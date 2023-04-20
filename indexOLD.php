<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ДДЮТ Кировского р-на</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrap.css">


</head>
<?php
$user = "Ktayne";
?>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(текущая)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Контакты</a>
                </li>
            </ul>
        </div>
        <?php
        echo <<<_NAV_NAME
            <span  class="navbar-text" style="padding-right: 20px">Вы $user</span>
_NAV_NAME;

        ?>

    </nav>
</header>

<div class="container-fluid" style="text-align: center">
    <h1>Привет, вы на сайте ДДЮТ</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <p style="text-align: center">Приветствуем Вас!</p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <?php
        echo "<a class='text-light' href='/index.php'>ДДЮТ Кировского района Санкт-Петербурга</a>" . " © " . date('Y');
        ?>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>
</html>