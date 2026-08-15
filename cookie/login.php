<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>
<body>
<center>
<form action="view.php" method="POST">

   <label for="username">Username:</label>
   <input type="text" 
          name="txtuser" 
          value="<?php if(isset($_POST['txtuser']))
                      {echo $_COOKIE['txtuser'];}?>"required> 
    <br><br>

   <label for="password">Password: </label>
   <input type="password" 
          name="pass" 
          value="<?php if(isset($_POST['pass']))
                      {echo $_COOKIE['pass'];}?>"required>
    <br><br>

   <input type="checkbox" name="remember">Remember Me <br><br>

   <button type="submit" name=btnlogin>Login</button>

</form>
</center>
</body>
</html>