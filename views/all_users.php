<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>

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

<h1>All users</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td>
                <a href="/user/<?php echo $user['id']; ?>">
                    <?php echo $user['username']; ?>
                </a>
            </td>
            <td><?php echo $user['firstName']; ?></td>
            <td><?php echo $user['lastName']; ?></td>
            <td>
                <a href="/editUser/<?php echo $user['id']; ?>">Edit</a> /
                <a href="#" onclick="removeUser('<?php echo $user['id']; ?>');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<br/>
<a href="/addUser">Add new user</a>
</body>
</html>