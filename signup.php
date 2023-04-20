<?php
require_once 'header.php';
?>
<script>
    function checkUser(user) {
        if (user.value == '') {
            $('#used').html('&nbsp;')
            return
        }

        $.post
        (
            'checkuser.php',
            {user: user.value},
            function (data) {
                $('#used').html(data)
            }
        )
    }
</script>

<?php
$error = $user = $pass = "";
if (isset($_SESSION['user']))
    destroySession();

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Не все поля были введены';
    else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");

        if ($result->rowCount())
            $error = 'Это имя пользователя уже занято<br><br>';
        else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die("<h4>Аккаунт '$user' создан</h4>Пожалуйста залогиньтесь");
            require_once 'footer.php';
        }
    }
}
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" action="signup.php"><?php $error ?>
                <div class="registration">

                        <div class="mb-3">
                            <label class="form-label"><h5>Пожалуйста, введите ваши данные
                                    для регистрации</h5></label>
                        </div>

                        <div class="mb-3, col-sm-6">
                            <label class="form-label">Имя пользователя</label>
                            <input type="text" class="form-control" maxlength="16" name="user" value=""
                                   onBlur='checkUser(this)'>
                            <div id="used">&nbsp;</div>
                        </div>
                        <div class="mb-3, col-sm-6">
                            <label class="form-label">Пароль</label>
                            <input type="password" class="form-control" maxlength="16" name="pass" value="">
                        </div>
                        <div class="mb-3, col-sm-6" , style="margin-top: 20px">
                            <label class="form-label"> </label>
                            <input type="submit" class="btn btn-primary" value="Зарегистрироваться">
                        </div>

                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<?php
require_once 'footer.php';
?>
