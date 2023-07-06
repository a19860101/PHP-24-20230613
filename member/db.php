<?php
function pdo(){
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pw = 'root';
    $db_name = 'php-24-20230613';
    $db_charset = 'utf8mb4';

    // data source name
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";

    try{
        $pdo = new PDO($dsn,$db_user,$db_pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        // var_dump($e);
        echo $e->getMessage();
    }
}
function now(){
    date_default_timezone_set('Asia/Taipei');
    $now = date('Y-m-d H:i:s');
    return $now;
}