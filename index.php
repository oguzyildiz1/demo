<?php 

require_once "controllers/functions.php";

// echo $_SERVER['REQUEST_URI'];
// define(PHP_URL_PATH, 1);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // slices the query string and path string
//creating routes

$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',  
];

// test -----
// ---- open and log the ouput to text file


// eğer route varsa array içinde
if (array_key_exists($uri, $routes))
{
    // sayfaları çağır
    require 'controllers/'. $routes[$uri]; 
} else {
    // sayfa yoksa
    http_response_code(404); // set the status of response code

    echo "Sayfa bulunamadı";

    die();
}









// ------- if block for controlling -----------
// $uri = $_SERVER['REQUEST_URI'];

// dd(parse_url($uri));


/*
if ($uri === '/')
{
    require "controllers/index.php";
} else if ($uri === '/about')
{
    require "controllers/about.php";
} else if ($uri === '/contact')
{
    require "controllers/contact.php";
}
*/



;?>