<?php
define('__ROOT__', __DIR__);

require_once __DIR__ . '/services/router.php';

//Routing
Route('GET', '/users/all', 'UserController@getAllUsers');
Route('GET', '/user/{id}', 'UserController@getUser');