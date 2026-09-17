<?php
include "connect.php";
/** @var mysqli $conn */

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Book Records</h1>

        <table>
            <tr>
                <th>Book Code</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Cost</th>
                <th>ISBN No</th>
            </tr>

            <?php
                while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['book_code'] . "</td>";
                        echo "<td>" . $row['book_name'] . "</td>";
                        echo "<td>" . $row['author_name'] . "</td>";
                        echo "<td>" . $row['cost'] . "</td>";
                        echo "<td>" . $row['ISBN_No'] . "</td>";
                        echo "</tr>";
                    }
            ?>

        </table>

        <a href="book.php" class="view-button"> Add Another Book </a>

        <a href="search.php" class="view-button">Search Books</a>

        <a href="update.php" class="view-button">Update Book</a>
    </div>
</body>
</html>