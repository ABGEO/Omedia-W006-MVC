<?php

require_once __ROOT__ . '/services/db_connection.php';

function modelGetAllUsers()
{
    $query = "SELECT * FROM users;";

    return get($query);
}