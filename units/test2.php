<?php

$test2 = function ($a, $b, $fn) {
    $arr = [];
    $sonuc = $a / $b;
    if ( $sonuc > 1 ) {
        $fn($sonuc) {
            $arr[] = $sonuc;
        } 
    }

    return $arr;
};

$filtereda = $test2(3, 2, function($xxx){
    return 
});
