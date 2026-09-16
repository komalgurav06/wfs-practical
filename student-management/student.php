<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h2>Student Management System</h2>

    <form action="insert.php" method="post">

        <label>Roll No:</label>
        <input type="number" name="roll_no" required>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>City:</label>
        <input type="text" name="city" required>

        <label>Phone Number:</label>
        <input type="text" name="phone_number" maxlength="10" required>

        <button type="submit">Insert Student</button>

    </form>

    <a href="view.php" class="view-btn">View Students</a>
    <a href="update.php" class="view-btn">Update Student</a>
</div>

</body>
</html>