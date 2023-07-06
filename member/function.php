<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(user,password,created_at)VALUES(?,?,?)';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user,$password,now()]);
    }