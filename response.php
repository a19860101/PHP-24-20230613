<?php
    // 超級全域變數
    // var_dump($_POST);
    // var_dump($_GET);
    // var_dump($_REQUEST);
    /* 
        除了搜尋用get，表單都使用post
        一般連結用get
    */

    // echo '帳號:'.$_REQUEST['user'];
    // echo '<br>';
    // echo '密碼:'.$_REQUEST['pw'];

    extract($_REQUEST);

    echo '帳號:'.$user;
    echo '<br>';
    echo '密碼:'.$pw;
    echo '<br>';
    echo '生日:'.$birth;
    echo '<br>';
    echo '性別:'.$gender;
    echo '<br>';
    echo '學歷:'.$edu;
    echo '<br>';
    echo '興趣:'.implode(',',$hobby);