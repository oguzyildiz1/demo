<?php 
    $test3 = function ($a, $b, $fn) {
        $arr = [];
        $sonuc = $a / $b;
        // dd($sonuc);
        if ($fn($sonuc)) {
            $arr[] = $sonuc;
            // dd($arr);
        }

        return $arr;
    };

    $filteredarr = $test3(4, b: 2, fn: function($xxx){
        return false;
    });


    $heading = "Test Sayfası";

    require "views/index.view.php";


?>