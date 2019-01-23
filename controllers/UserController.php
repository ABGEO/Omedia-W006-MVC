<?php
require_once __ROOT__ . '/models/User.php';
require_once __ROOT__ . '/services/template_engine.php';

/**
 * @return mixed
 */
function addUser()
{
    return render('add_user.php');
}

/**
 * @return mixed
 */
function addUserToDB()
{
    if (isset($_POST)) {
        $username = htmlentities($_POST['username']);
        $firstName = htmlentities($_POST['firstName']);
        $lastName = htmlentities($_POST['lastName']);
        $avatar = '';

        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check) {
            $fileTmpPath = $_FILES['avatar']['tmp_name'];
            $fileName = $_FILES['avatar']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $uploadFileDir = __ROOT__ . '/public/uploads/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path))
                $avatar = $newFileName;
        }

        $response = modelAddUser([
            'username' => $username,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'avatar' => $avatar
        ]);

        $status = $response ? 'success' : 'error';

        header(sprintf("Location: /users/all?status=%s", $status));
    } else {
        exit ('Invalid data!');
    }
}

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

/**
 * @param $userID
 * @return mixed
 */
function editUser($userID)
{
    $user = modelGetUser($userID);

    return render('edit_user.php', $user[0]);
}

function saveUserInfo()
{
    if (isset($_POST)) {
        $id = htmlentities($_POST['id']);
        $username = htmlentities($_POST['username']);
        $firstName = htmlentities($_POST['firstName']);
        $lastName = htmlentities($_POST['lastName']);
        $avatar = '';

        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check) {
            $fileTmpPath = $_FILES['avatar']['tmp_name'];
            $fileName = $_FILES['avatar']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $uploadFileDir = __ROOT__ . '/public/uploads/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path))
                $avatar = $newFileName;
        }

        $response = modelEditUser([
            'username' => $username,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'avatar' => $avatar
        ], $id);

        $status = $response ? 'success' : 'error';

        header(sprintf("Location: /editUser/%d?status=%s", $id ,$status));
    } else {
        exit ('Invalid data!');
    }
}