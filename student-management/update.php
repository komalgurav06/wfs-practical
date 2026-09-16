<?php
include "connect.php";
/** @var mysqli $conn */

if(isset($_POST['update']))
    {
        $roll_no = $_POST['roll_no'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $phone_number = $_POST['phone_number'];
    
        $sql = "UPDATE students SET name='$name', age='$age', city='$city', phone_number='$phone_number'
                WHERE roll_no='$roll_no'";

        if(mysqli_query($conn, $sql))
            {
                header("Location: view.php");
                exit();
                
            }
        else
            {
                $message = "Error: " . mysqli_error($conn);
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Update Student</h2>

        <?php
            if(isset($message))
                {
                    echo "<p class='message'>$message</p>";
                }
        ?>

        <form method="POST">

            <label>Roll No: </label>
            <input type="number" name="roll_no" required>

            <label>Name: </label>
            <input type="text" name="name" required>

            <label>Age: </label>
            <input type="number" name="age" required>

            <label>City: </label>
            <input type="text" name="city" required>

            <label>Phone Number: </label>
            <input type="text" name="phone_number" required>

            <button type="submit" name="update">Update Student</button>

        </form>

        <a href="view.php" class="view-btn">View Students</a>
    </div>
</body>
</html>