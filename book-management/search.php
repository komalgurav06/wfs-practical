<?php
include "connect.php";
/** @var mysqli $conn */

$search = "";

if(isset($_POST['search']))
    {
        $search = $_POST['search'];

        $sql = "SELECT * FROM books 
                WHERE book_name LIKE '%$search%'
                OR author_name LIKE '%$search%'";

        $result = mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Search Books</h1>

        <form method="POST">

            <label>Enter Book Name or Author Name: </label>
            <input type="text" name="search" required>

            <button type="submit">Search</button>
        </form>

        <?php
            if(isset($result))
            {
                if(mysqli_num_rows($result) > 0)
                    {
                        echo "<table>";

                        echo "<tr>";
                        echo "<th>Book Code</th>";
                        echo "<th>Book Name</th>";
                        echo "<th>Author Name</th>";
                        echo "<th>Cost</th>";
                        echo "<th>ISBN No</th>";
                        echo "</tr>";
                        
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
                            echo "</table>";
                    }
                    else
                        {
                            echo "<p> No Book found.</p>";
                        }
            }
        ?>

        <a href="book.php" class="view-button"> Add Book </a>

        <a href="view.php" class="view-button"> View All Books </a>

        <a href="update.php" class="view-button"> Update Book </a>

    </div>
</body>
</html>