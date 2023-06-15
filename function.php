<?php
    function fn1(){
        return 'fn1';
    }

    function title($str){
        echo "HELLO {$str}";
    }


    function tw_us($dollar, $exc = 30){
        return $dollar / $exc;
    }

    echo tw_us(10000);
