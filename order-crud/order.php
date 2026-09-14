<?php 
include "connect.php";
/** @var mysqli $conn */

if(isset($_POST['place_order']))
    {
        $item_name = $_POST['item_name'];
        $item_type = $_POST['item_type'];
        $quantity = $_POST['quantity'];

        $order_no = rand(1000, 9999);

        $sql = "INSERT INTO orders (order_no, item_name, item_type, quantity)
                VALUES ('$order_no', '$item_name', '$item_type', '$quantity')";

        if(\mysqli_query($conn, $sql))
            {
                echo "<p class='sucess'>Order placed successfully! Your Order Number is: $order_no</p>";
            }
        else
            {
                echo "<p class='error'>Order not placed.</p>";
            }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form method="POST">
     <h2>Order Management System</h2>

    <label>Item Name</label>
    <input type="text" name="item_name" required>

    <label>Item Type</label>
    <select type="text" name="item_type" required>
        <option value="">Select Item Type</option>
        <option value="Food">Food</option>
        <option value="CLothes">Clothes</option>
        <option value="Other">Other</option>
    </select>

    <label>Quantity</label>
    <input type="number" name="quantity" min="1" required>

    <button type="submit" name="place_order">Place Order</button>
    </form>
    <br>

    <a href="view.php">View Order</a>
    </div>
</body>
</html>