<?php

include "connect.php";
/** @var mysqli $conn */

$order = null;

if (isset($_POST['search'])) {

    $order_no = $_POST['order_no'];

    $sql = "SELECT * FROM orders WHERE order_no = '$order_no'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $order = mysqli_fetch_assoc($result);
    } else {
        echo "<p class='error'>Order not found.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Order</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>View Order</h2>

    <form method="POST">

        <label>Enter Order Number</label>

        <input type="number" name="order_no" required>

        <button type="submit" name="search">
            Search Order
        </button>

    </form>

    <?php if ($order != null) { ?>

        <h3>Order Details</h3>

        <p><b>Order Number:</b> <?php echo $order['order_no']; ?></p>

        <p><b>Item Name:</b> <?php echo $order['item_name']; ?></p>

        <p><b>Item Type:</b> <?php echo $order['item_type']; ?></p>

        <p><b>Quantity:</b> <?php echo $order['quantity']; ?></p>

    <?php } ?>

    <br>

    <a href="order.php">Place New Order</a>

</div>

</body>

</html>