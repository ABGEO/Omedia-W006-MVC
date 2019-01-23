<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new user</title>
</head>
<body>
<h1>Add new user</h1>

<form action="/addUserToDB" method="post" enctype="multipart/form-data">
    <label for="username">Username</label> <br/>
    <input type="text" id="username" name="username">

    <br/><br/>

    <label for="firstName">First Name</label> <br/>
    <input type="text" id="firstName" name="firstName">

    <br/><br/>

    <label for="lastName">Last Name</label> <br/>
    <input type="text" id="lastName" name="lastName">

    <br/><br/>

    <label for="avatar">Upload avatar</label> <br/>
    <input type="file" id="avatar" name="avatar">

    <br/><br/>

    <hr/>

    <input type="submit" value="Add user">
</form>

</body>
</html>