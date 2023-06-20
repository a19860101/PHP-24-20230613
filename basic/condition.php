<?php
    $x = 0;

    // if
    // if($x > 0){
    //     echo 'success';
    // }

    // if...else
    // if($x > 0){
    //     echo 'success';
    // }else{
    //     echo 'Error';
    // }

    // if...else if
    // if($x > 0){
    //     echo '正';
    // }elseif($x < 0){
    //     echo '負';
    // }

    //if...else if...else
    // if($x > 0){
    //     echo '正';
    // }elseif($x < 0){
    //     echo '負';
    // }else{
    //     echo 'ERRORRRRRR!';
    // }

    // 三元運算子

    // echo $x > 0 ? '正確' : '錯誤';

    $result = $x > 0 ? '正確' : '錯誤';
    // echo $result;

    // 條件 ? 條件成立的動作:條件不成立的動作;

    $result;
    if($x > 0){
        $result = '正確';
    }else{
        $result = '錯誤';
    }
    // echo $result;

    // switch

    switch($x){
        case 0:
            echo 0;
            break;
        case 10:
            echo 10;
            break;
        case 100:
            echo 100;
            break;
        default:
            echo 'default';

    }