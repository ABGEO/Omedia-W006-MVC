<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'MYSQLPassword!2#');
define('DB', 'omediaTraining_mvc');

/**
 * @return mysqli
 */
function connect()
{
    $conn = mysqli_connect(HOST, USER, PASS, DB);

    if (!$conn)
        exit("Connection Error: " . mysqli_error($conn));

    return $conn;
}

/**
 * @param $query
 * @return array|null
 */
function get($query)
{
    $conn = connect();
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_all($result, 1);

    mysqli_close($conn);

    return $data;
}

function set($query)
{

}

function update($query)
{

}

function remove($table, $id)
{

}