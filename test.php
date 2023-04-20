<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .affix {
            bottom: 0;
        }
        footer{
            margin-left: -15px;
            text-align: center;
            height: 45px;
            width: 100%;
            color:#fff;
            background-color:#2196F3;
        }
    </style>
</head>
<body>
<header>
    <!--Навигационная панель-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <a class="navbar-brand">
            <img src="media/pictures/ddut_logo.png" width="90" height="60" style="padding-left: 30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
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
    </nav>
</header>


<div class="container-fluid" style="color:#fff;background-color:#2196F3;height:150px;">
    <h1>Пример работы плагина</h1>
    <h3>Пролистайте информацию на странице</h3>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
            <h1>Много бесполезного текста...</h1>
            <h1>специально для появления скролла.</h1>
            <h1>Много бесполезного текста...</h1>
            <h1>специально для появления скролла.</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <footer data-spy="affix" data-offset-bottom="0">
        <p>Все права защищены</p>
    </footer>
</div>





</body>
</html>