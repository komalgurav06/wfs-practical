<?php
session_start();

if(isset($_POST['loginBtn']))
{
    $Name=$_POST['username'];
    $Pass=$_POST['password'];

    if($Name=="komalgurav" && $Pass=="4449")
        {
            $_SESSION['username']=$Name;
            header("location:session-view.php");
        }
    else
        {
            echo "Wrong Username & Password..!!";
        }
}
?>