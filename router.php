<?php
$uri = $_SERVER['REQUEST_URI'];
dump_Die(parse_url($uri));
// if($uri === '/demo/indextemp.php'){
//     require 'controllers/index.php';
// }
// else if($uri === '/demo/controllers/about.php'){
//     require 'controllers/about.php';

// }
// else if($uri === '/demo/controllers/contact.php'){
//     require 'controllers/contact.php';
// }

// in associative array
// $routes=[
//     '/' => 'controllers/index.php';
//     '/about' => 'controllers/about.php';
//     '/contact' => 'controllers/contact.php';
// ] -->
function abort($code=404){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
function routeToController($uri,routes){
    if (array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
    else{
    abort(404);
    }
}
routeToController($uri,$routes);
// this function checks if the array got a key of the given name that exists

?>