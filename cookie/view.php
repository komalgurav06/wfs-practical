<?php

if(isset($_POST['btnlogin']))
{
    if(isset($_POST['remember']))
    {
        setcookie("username", $_POST['txtuser'], time() +3600);
        setcookie("password", $_POST['pass'], time() +3600);

        echo "Cookie Set Successfully.!!";
    }  
    else
    {
        setcookie("username","");
        setcookie("password","");

        echo "Cookie Not Set!";
    }  
}    

if(isset($_POST['btndelete']))
{
    setcookie("username","", time() -3600);
    setcookie("password","", time() -3600);

    echo "Cookie Successfully Deleted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<p><a href="login.php">Go To Login Page</a></p> <br><br>

<form action="" method="POST">
    <button type="submit" name="btndelete">Delete Cookie</button>
</form>   

</body>
</html>