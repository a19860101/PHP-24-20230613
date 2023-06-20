<?php
    // 註解 Ctrl + / 
    // echo 'Hello PHP';
    // echo "Hello PHP";

    // 變數
    $title = 'PHP';
    /* 
        變數命名規則
        1. 不可使用數字開頭
        2. 盡可能不要使用底線開頭(易跟超級全域變數混淆)
        3. 大小寫有別
        4. 只可使用底線
    */

    
    // echo 'Hello $title';
    // echo "Hello $title";
    // echo "Hello {$title}";
    // echo 'Hello {$title}';
    // echo "Hello ".$title;
    // echo 'Hello '.$title;

    // 資料型態
    
    // 字串 String
    $a = 'HELLO';
    
    // 整數 Int
    $b = 123;

    // 浮點數 Float
    $b2 = 3.14;

    // 布林 Boolean
    $c = false; //true,false

    // 陣列 Array

    // $d = array();
    // $d[0] = 'Apple';
    // $d[1] = 'Banana';
    // $d[2] = 'Cat';

    $d=['Apple','Banana','Cat'];

    // print_r($d);
    // var_dump($d);

    // 函式 Function
    function e(){
        return 'php';
    }
    // echo e();
    // var_dump(e());

    // 類別 Class
    class Test {}
    $test_1 = new Test;
    var_dump($test_1);

?>