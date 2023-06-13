<?php
    $a = ['apple','banana','cat'];

    // echo $a[0];
    // echo $a[1];
    // echo $a[2];

    // for($i=0;$i<4;$i++){
    //     echo $a[$i];
    // }
    
    //陣列迭代
    foreach($a as $data){
        echo "<div>{$data}</div>";
    }