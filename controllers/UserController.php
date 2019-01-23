<?php
require_once __ROOT__ . '/models/User.php';
require_once __ROOT__ . '/services/template_engine.php';

/**
 * @return mixed
 */
function getAllUsers()
{
    $users = modelGetAllUsers();

    return render('all_users.php', $users);
}

/**
 * @param $userID
 * @return mixed
 */
function getUser($userID)
{
    $user = modelGetUser($userID);

    return render('user.php', $user[0]);
}