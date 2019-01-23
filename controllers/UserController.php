<?php
require_once __ROOT__ . '/models/User.php';
require_once __ROOT__ . '/services/template_engine.php';

function getAllUsers()
{
    $users = modelGetAllUsers();

    render('all_users.php', $users);
}