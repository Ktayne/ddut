<?php
session_start();
require_once 'header.php';

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding: 20px">
            <?php
            if ($loggedin) {
                echo "<p>Приветствуем $user</p>";
            } else {
                echo "<p>Авторизируйтесь $user</p>";
            }
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
require_once 'footer.php';
?>



