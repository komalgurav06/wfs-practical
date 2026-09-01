<?php 
$Name = $_POST['txtname'];
$Address = $_POST['txtadd'];
$City = $_POST['selcity'];
$Gender = $_POST['gender'];

$Hobbies = "";
if(isset($_POST['reading']))
{
    $Hobbies = $_POST['reading'];
}

if(isset($_POST['playing']))
{
    $Hobbies = $_POST['playing'];
}

if(isset($_POST['dancing']))
{
    $Hobbies = $_POST['dancing'];
}

$DOB = $_POST['date'];
$Mobile = $_POST['mobile'];
$Email = $_POST['email'];

if(empty($Name))
{
    echo "Name can't be empty <br>";
}
elseif(!preg_match('/^(a-z)*(a-z)$/', $Name))
{
    echo "Name must be in small letter <br>";
}

if(empty($DOB))
{
    echo "DOB can't be empty <br>";
}
elseif(!preg_match('/^(0[1-9]|[12][0-9]|3[01]) [-\/\.](0[1-9]|1[012]) [-\/\.](19|20)[0-9]{2}$/', $DOB))
{
    echo "Date must be in dd-mm-yyyy format <br>";
}

if(empty($Mobile))
{
    echo "Mobile number can't be empty <br>";
}
elseif(!preg_match('/^[0-9]{10}$/', $Mobile))
{
    echo "Mobile number must be in 10 digit <br>";
}

if(isset($_POST['txtsubmit']))
    {
        echo "Name:-$Name"."<br>";
        echo "Address:-$Address"."<br>";
        echo "City:-$City"."<br>";
        echo "Gender:-$Gender"."<br>";
        echo "Hobbies:-$Hobbies"."<br>";
        echo "DOB:-$DOB"."<br>";
        echo "Mobile:-$Mobile"."<br>";
        echo "Email Id:-$Email"."<br>";
        echo "Record Inserted Successfully";
    }
?>