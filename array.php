<?php
    $a = ['apple','banana','cat'];

    // echo $a[0];
    // echo $a[1];
    // echo $a[2];

    // for($i=0;$i<4;$i++){
    //     echo $a[$i];
    // }
    
    //陣列迭代
    // foreach($a as $data){
    //     echo "<div>{$data}</div>";
    // }

    // 關聯陣列(含有鍵值的陣列)

    // $user = ['鍵key'=>'值value'];
    $user = [
        'id'=>'1',
        'name'=>'John',
        'mail'=>'john@gmail.com'
    ];

    // var_dump($user);
    // echo $user['id'];
    // echo $user['name'];
    // echo $user['mail'];

    // foreach($user as $u){
    //     echo $u;
    // }

    foreach($user as $key => $value){
        echo "<div>{$key}:{$value}</div>";
    }