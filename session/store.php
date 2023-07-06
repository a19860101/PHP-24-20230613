<?php
    session_start();

    $_SESSION['USER'] = $_REQUEST['user'];

    // echo $_SESSION['USER'];

    header('location:index.php');