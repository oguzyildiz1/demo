<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function writeLogs($file_loc){

    $file = fopen($file_loc,"a");
    if ($file){
        $content = "uri : " ."\n";
        fwrite($file, $content);
        fclose($file);
    }else {
        echo "unable to open file";
    }
}
