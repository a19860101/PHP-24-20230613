<?php
    $drinks = ['熟成紅茶','熟成歐蕾','熟成冷露','春芽冷露'];
    $beans = [
        'name' => '阿拉比卡',
        'area' => '高海拔',
        'shape'=> '圓形'
    ];

    //count() 計算陣列數量

    // echo count($drinks);
    // echo count($beans);

    // implode() 陣列->字串

    // echo implode('、',$drinks);
    // echo implode(',',$beans);

    // explode() 字串->陣列
    // $str = '生活,科技,健康,政治';
    // $strArray = explode(',',$str);
    // var_dump($strArray);

    // extract() 解構
    // echo $beans['name'];
    // echo $beans['area'];
    // echo $beans['shape'];

    // extract($beans);
    // echo $name;
    // echo $area;
    // echo $shape;

    // compact()
    $server = 'Apache';
    $language = 'php';
    $database = 'MySQL';
    // $test = [$server, $language, $database];
    $test = compact('server','language','database');
    var_dump($test);