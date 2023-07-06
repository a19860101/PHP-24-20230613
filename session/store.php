<?php
    session_start();

    // $_SESSION['USER'] = $_REQUEST['user'];
    $_SESSION['USER'] = $_REQUEST;

    // echo $_SESSION['USER'];

    header('location:index.php');