<?php

require_once __ROOT__ . '/services/db_connection.php';

/**
 * @return array|null
 */
function modelGetAllUsers()
{
    $query = "SELECT * FROM users;";

    return get($query);
}

/**
 * @param $userID
 * @return array|null
 */
function modelGetUser($userID)
{
    $query = "SELECT * FROM users WHERE id = {$userID};";

    return get($query);
}