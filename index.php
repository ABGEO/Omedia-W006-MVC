<?php
define('__ROOT__', __DIR__);

require_once __DIR__ . '/services/router.php';

//Routing
Route('GET', '/addUser', 'UserController@addUser');
Route('POST', '/addUserToDB', 'UserController@addUserToDB');
Route('GET', '/users/all', 'UserController@getAllUsers');
Route('GET', '/user/{id}', 'UserController@getUser');
Route('GET', '/editUser/{id}', 'UserController@editUser');
Route('POST', '/saveUserInfo', 'UserController@saveUserInfo');