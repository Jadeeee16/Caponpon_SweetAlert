<?php
    session_start();
    session_unset();
    session_destroy(); //deletes the session stored on the server

    header('Location: login.php');
    exit();


?>