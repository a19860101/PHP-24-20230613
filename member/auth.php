<?php
    include('function.php');
    $result = auth($_REQUEST);
    extract($result);

    
    if($errCode == 0){
        echo "<script>alert('{$status}')</script>";
        header('refresh:2;url=index.php');
    }else{
        echo "<script>alert('{$status}')</script>";
        header('refresh:0;url=register.php');
    }