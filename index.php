<?php 

require "controllers/functions.php";


// echo $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // slices the query string and path string

//creating routes
$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/test' => 'test.php'
];

// eğer route varsa array içinde
if (array_key_exists($uri, $routes))
{
    // sayfaları çağır
    require "controllers/" . $routes[$uri];
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