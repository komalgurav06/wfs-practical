<?php
session_start();

if(isset($_POST['logoutBtn']))
{
    session_destroy();
    header("location:session-login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session View</title>
</head>
<body>

<form action="" method="POST">
    <?php
        if(isset($_SESSION['username']))
        {
            echo "Welcome ".$_SESSION['username'];
        }
    ?>
    <br><br>

    <input type="submit" name="logoutBtn" value="Logout">

</form>    
</body>
</html>