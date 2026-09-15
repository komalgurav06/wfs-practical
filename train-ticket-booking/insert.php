<?php
include "connect.php";
/** @var mysqli $conn */

$client_name = $_POST['client_name'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$address = $_POST['address'];
$passengers = $_POST['passengers'];
$travelling_date = $_POST['travelling_date'];
$train_number = $_POST['train_number'];

$sql = "INSERT INTO train_bookings
        (client_name, source, destination, address, passengers, travelling_date, train_number)
        VALUES
        ('$client_name', '$source', '$destination', '$address', '$passengers', '$travelling_date', '$train_number')";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="message-container">

<?php

if (mysqli_query($conn, $sql)) {
    echo "<div class='success-message'>";
    echo "Ticket booked successfully!";
    echo "</div>";
    echo "<a class='nav-button' href='booking.php'>Book Another Ticket</a><br>";
    
    echo "<a class='nav-button' href='view.php'>View Bookings</a>";
} else {
    echo "<div class='error-message'>";
    echo "Error: " . mysqli_error($conn);
    echo "</div>";
}

?>

</div>

</body>
</html>