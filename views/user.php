<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['username']; ?> - Profile</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../public/js/main.js"></script>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Avatar</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['firstName']; ?></td>
        <td><?php echo $data['lastName']; ?></td>
        <td>
            <?php
                $userAvatar = $data['avatar'] == '' || $data['avatar'] == null ?
                    'default-avatar.jpg' : $data['avatar'];
            ?>
            <img src="../public/uploads/<?php echo $userAvatar; ?>" width="200" height="200" />
        </td>
    </tr>
    </tbody>
</table>

<div>
    <a href="/editUser/<?php echo $data['id']; ?>">Edit User</a> |
    <a href="#" onclick="removeUser('<?php echo $data['id']; ?>');">Delete User</a>
</div>

</body>
</html>