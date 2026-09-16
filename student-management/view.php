<?php

include "connect.php";
/** @var mysqli $conn */

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Students Records</h2>
    <table>
        <tr>
            <th>Roll NO.</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Phone Number</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";

                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['phone_number'] . "</td>";

                echo "</tr>";
            }
        ?>
    </table>

    <a href="student.php" class="view-btn">Add Student</a>
</div>
</body>
</html>