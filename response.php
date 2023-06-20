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

    function check($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    extract($_REQUEST);
    if($user == ''){
        echo '請輸入帳號';
        echo '<br>';
    }else{
        $user = check($user);
        echo '帳號:'.$user;
        echo '<br>';
    }
    if($pw == ''){
        echo '請輸入密碼';
        echo '<br>';
    }else{
        $pw = check($pw);
        echo '密碼:'.$pw;
        echo '<br>';
    }
    echo '生日:'.$birth;
    echo '<br>';
    if(!isset($gender)){
        echo '請輸入性別';
        echo '<br>';
    }else{
        echo '性別:'.$gender;
        echo '<br>';
    }
    /*
        if(!$gender)
        if(!isset($gender))
        if($gender == null)
        if($gender == '')
        if(empty($gender))
    */

   
    echo '學歷:'.$edu;
    echo '<br>';
    echo '興趣:'.implode(',',$hobby);