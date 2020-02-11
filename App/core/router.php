<?php

class Router{

public $routes = [];

function __construct($routes)
{

$this->routes = $routes;

}

public static function loadname($fileName){

    require $fileName;


$router = new self($routes);

return $router;

}

public function getUri($uri){

    
if(array_key_exists($uri, $this->routes))

{
    
return $this->routes[$uri];

}
}
}

