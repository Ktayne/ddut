<?php
require_once 'header.php';

if (isset($_SESSION['user'])) {
    destroySession();
    header("Location: ./index.php");
    echo "<br><div>You have been logged out. Please
         <a data-transition='slide'
           href='index.php'>click here</a>
           to refresh the screen.</div>";
} else echo "<div>You cannot log out because
             you are not logged in</div>";

require_once 'footer.php'
?>
