<?php 

$test = ["foo", "exx", "bar"];


require "demo.view.php";

$test[] = $_POST["username"] ?? $_POST["username"];

print_r($test);

exit();
if (isset($_POST["username"])) 
{
    print_r($_POST);
    $test[]= $_POST["username"];
}


;?>