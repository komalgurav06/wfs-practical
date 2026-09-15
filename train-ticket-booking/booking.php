<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Ticket Booking</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Train Ticket Booking Form</h2>
<div class="container">
<form action="insert.php" method="POST">

<label> Client Name: </label>
<input type="text" name="client_name" required>
<br><br>

<label>Source: </label>
<input type="text" name="source" required>
<br><br>

<label>Destination: </label>
<input type="text" name="destination" required>
<br><br>

<label>Address: </label>
<textarea name="address" required></textarea>
<br><br>

 <label>No. of Passengers:</label>
 <input type="number" name="passengers" min="1" required>
 <br><br>

 <label>Travelling Date:</label>
 <input type="date" name="travelling_date" required>
 <br><br>

 <label>Train Number:</label>
 <input type="text" name="train_number" required>
 <br><br>

 <button type="submit">Book Ticket</button>

</form>
</div>
</body>
</html>