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

/**
 * @param $query
 * @return bool|mysqli_result
 */
function update($query)
{
    $conn = connect();
    $result = mysqli_query($conn, $query);

    mysqli_close($conn);

    return $result;
}

function remove($table, $id)
{

}