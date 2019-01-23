<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['username']; ?> - Edit</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>Edit user <?php echo $data['username']; ?></h1>

<form action="/saveUserInfo" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label for="username">Username</label> <br/>
    <input type="text" id="username" name="username" value="<?php echo $data['username']; ?>">

    <br/><br/>

    <label for="firstName">First Name</label> <br/>
    <input type="text" id="firstName" name="firstName" value="<?php echo $data['firstName']; ?>">

    <br/><br/>

    <label for="lastName">Last Name</label> <br/>
    <input type="text" id="lastName" name="lastName" value="<?php echo $data['lastName']; ?>">

    <br/><br/>

    <?php
    $userAvatar = $data['avatar'] == '' || $data['avatar'] == null ?
        'default-avatar.jpg' : $data['avatar'];
    ?>
    <label>Avatar</label><br/>
    <img src="../public/uploads/<?php echo $userAvatar; ?>" width="200" height="200"/>

    <br/><br/>

    <label for="avatar">Upload new avatar</label> <br/>
    <input type="file" id="avatar" name="avatar">

    <br/><br/>

    <hr/>

    <input type="submit" value="Save info">
</form>

</body>
</html>