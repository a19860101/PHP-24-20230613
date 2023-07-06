<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(user,password,created_at)VALUES(?,?,?)';
        if(chkUser($user) != 0){
            return chkUser($user);
        }
        try{
            $stmt = pdo()->prepare($sql);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([$user,$password,now()]);
            return [
                'errCode' => 0,
                'status' => '註冊成功'
            ];
        }catch(PDOException $e){
            echo $e->getMessage();
            return [
                'errCode' => 1,
                'status' => '註冊失敗'
            ];
        }
    }
    function chkUser($user){
        $sql = 'SELECT * FROM users WHERE user = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user]);
        if($stmt->rowCount() > 0){
            return [
                'errCode' => 2,
                'status' => '帳號重複，請重新註冊'
            ];
        }else{
            return 0;
        }
    }
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE user = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            return [
                'errCode' => 3,
                'status' => '帳號不存在，請重新註冊或登入'
            ];
        }
        if(password_verify($password,$user['password'])){
            $_SESSION['AUTH'] = $user;
            return [
                'errCode' => 0,
                'status' => '登入成功'
            ];
        }else{
            return [
                'errCode' => 2,
                'status' => '帳號或密碼錯誤'
            ];
        }
    }