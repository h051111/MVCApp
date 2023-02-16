<?php

/* Every URL is redirected here using .htaccess.
   This is where we decide which controller should be used. */

$controllers = [  //Store a controller associated with each endpoint
    "/" => "IndexController",
    "/users" => "UserController",
    "/advertisements" => "AdvertisementController",
    "/asd" => "asdcontroller"
];

$endpoint = $_SERVER['REQUEST_URI'];  //Get the endpoint the client is trying to access

if(!array_key_exists($endpoint, $controllers)){
    header("Location: /");  //If the endpoint is invalid, we redirect the user to /
}

$controllerFile = "Application/Controller/" . $controllers[$endpoint] . ".php";
if(is_readable($controllerFile)) {  //Check if the file is valid
    require_once($controllerFile);  //Include that controller's class file
    $controller = new $controllers[$endpoint];  //Instantiate the controller based on its name
    $controller->handler();  //Call its handler function
}
else{
    header("Location: /");  //If the endpoint is invalid, we redirect the user to /
}
