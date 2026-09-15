<?php
include "connect.php";
/** @var mysqli $conn */

$sql = "SELECT * FROM train_bookings";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Train Bookings</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>View Train Bookings</h2>

    <table border="1" cellpaddind="10">
        <tr>
            <th>ID</th>
            <th>Client Name</th>
            <th>Sourec</th>
            <th>Destination</th>
            <th>Address</th>
            <th>Passengers</th>
            <th>Travelling Date</th>
            <th>Train Number</th>
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result))
            {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['client_name']; ?></td>
            <td><?php echo $row['source']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['passengers']; ?></td>
            <td><?php echo $row['travelling_date']; ?></td>
            <td><?php echo $row['train_number']; ?></td>
        </tr>

        <?php
            }
        ?>

    </table>
    <br><br>

    <div class="navigation">
    <a class="nav-button" href="booking.php">Book New Ticket</a>
    </div>  
</body>
</html>