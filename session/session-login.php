<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page</title>
</head>
<body>
<center>
    <h1 style="background-color: gray; padding: 10px 0px; color: black;">Login Page</h1>
    <form style="background-color: #bbb7b7; padding: 20px 0px;" action="login.php" method="POST">
    
    <label for="username">Username: </label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password"><br><br>

    <button style="padding: 4px 10px; color:black;"  type="submit" name="loginBtn">Login</button>
    </form>
</center>
</body>
</html>