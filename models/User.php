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

/**
 * @param $data
 * @param $identifier
 * @return bool|mysqli_result
 */
function modelEditUser($data, $identifier)
{
    $query = "UPDATE users SET ";

    $count = count($data);
    $iterator = 0;
    foreach ($data as $k => $v) {
        $iterator++;

        $separator = $iterator == $count ? ' ' : ', ';

        $query .= sprintf("`%s` = '%s' %s", $k, $v, $separator);
    }

    $query .= sprintf("WHERE id = %d;", $identifier);

    return update($query);
}