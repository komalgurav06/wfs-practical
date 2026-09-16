<?php

include "connect.php";
/** @var mysqli $conn */

$roll_no = $_POST['roll_no'];
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$phone_number = $_POST['phone_number'];

$sql = "INSERT INTO students (roll_no, name, age, city, phone_number)
        VALUES ('$roll_no', '$name', '$age', '$city', '$phone_number')";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container"> 

<?php

if (mysqli_query($conn, $sql)) {
    echo "<h2>Student Record Inserted Successfully</h2>";
    echo "<a href='student.php' class='view-btn'>Add Another Student</a>";
    echo "<a href='view.php' class='view-btn'>View Students</a>";
} else {
    echo "<h2>Error: " . mysqli_error($conn) . "</h2>";
}

?>

</div>

</body>
</html>