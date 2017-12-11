<?php

/*$router->define([
'' => 'controllers/index.php',
'about' => 'controllers/about-us.php',
'contact' => 'controllers/contact-us.php',
'names' => 'controllers/add-names.php',
]);*/

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->post('users', 'UserController@store');
// dd($router->routes);
$router->get('users', 'UserController@index');
