<?php
include "connect.php";
/** @var mysqli $conn */

$book_code = $_POST['book_code'];
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$cost = $_POST['cost'];
$ISBN_No = $_POST['ISBN_No'];

$sql = "INSERT INTO books (book_code, book_name, author_name, cost, ISBN_No)
        VALUES ('$book_code', '$book_name', '$author_name', '$cost', '$ISBN_No')";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Added</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

<?php
if(mysqli_query($conn, $sql))
    {
        echo "<h1>Book added successfully!!</h1>";
        echo "<br><br>";

        echo "<a href='book.php' class='view-button'> Add Another Book </a>";
        echo "<br>";

        echo "<a href='view.php' class='view-button'> View Books </a>";

        echo "<a href='search.php' class='view-button'>Search Books</a>";

        echo "<a href='update.php' class='view-button'>Update Book</a>";
    }
else
    {
        echo "Error: " . mysqli_error($conn);
    }
?>

</div>
</body>
</html>