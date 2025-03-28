<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <style>
        *{
            margin: 10px 10px;
        }
    </style>
</head>
<body>
    
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <label for="username">User name</label>
        <input name="username" />
        <br><br>

        <label for="password">password</label>
        <input name="password" type="password"/>
        <br><br>

        <label for="email">Email</label>
        <input name="email" type="email"/>
        <br><br>

        <label for="role">Role</label>
        <input name="role" />
        <br><br>


        <label for="profile_picture">Profile picture:</label>
        <input type="file" name="profile_picture" id= "profile_picture" required>
        <br><br>

        <button type="submit" name="submit" id="submit">Upload</button>

    </form>

</body>
</html>
