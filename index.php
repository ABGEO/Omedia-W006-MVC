<?php
define('__ROOT__', __DIR__);

require_once __DIR__ . '/services/router.php';

//Routing
Route('GET', '/user/all', 'UserController@getAllUsers');