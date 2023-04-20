<?php
require_once 'header.php';
?>

<?php
$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == '' || $pass == '')
        $error = "Заполнены не все поля";
    else {
        $result = queryMysql("SELECT user, pass FROM members
                  WHERE user='$user' AND pass='$pass'");

        if ($result->rowCount() == 0)
            $error = "Invalid login attempt";
        else{
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("Location: ./index.php");

            require_once "footer.php";
            die();

//            die("Вы зарегистрированы. Пожалуйста <a data-transition='slide'
//            href='members.php?view=$user'>нажмите сюда</a> для продолжения</div>");
        }
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" action="login.php">
                <div class="registration">
                    <div class="mb-3">
                        <label class="form-label"><h5>Пожалуйста введите ваши данные для входа</h5></label>
                    </div>
                    <div>
                        <span class="error, form-label"><?php $error ?></span>
                    </div>
                    <div class="mb-3, col-sm-6">
                        <label class="form-label">Ползователь:</label>
                        <input type="text" class="form-control" maxlength="16" name="user" value="">
                    </div>
                    <div class="mb-3, col-sm-6">
                        <label  class="form-label">Пароль:</label>
                        <input type="password" class="form-control" maxlength="16" name="pass" value="">
                    </div>
                    <div class="mb-3, col-sm-6" , style="margin-top: 20px">
                        <input type="submit" class="btn btn-primary" value="Войти">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>





<?php
require_once "footer.php";
?>

