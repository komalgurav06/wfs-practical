<?php
include "connect.php";
/** @var mysqli $conn */

$book = null;

if(isset($_POST['search']))
    {
        $book_code = $_POST['book_code'];

        $sql = "SELECT * FROM books
                WHERE book_code = '$book_code'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
            {
                $book = mysqli_fetch_assoc($result);
            }
        else
            {
                $message = "Book not found.";
            }
    }

if(isset($_POST['update']))
    {
        $book_code = $_POST['book_code'];
        $book_name = $_POST['book_name'];
        $author_name = $_POST['author_name'];
        $cost = $_POST['cost'];
        $ISBN_No = $_POST['ISBN_No'];

        $sql = "UPDATE books SET
                book_name = '$book_name',
                author_name = '$author_name',
                cost = '$cost',
                ISBN_No = '$ISBN_No'
                WHERE book_code = '$book_code'";
        
        if(mysqli_query($conn, $sql))
            {
                $message = "Book Updated Successfully!";
            }
        else
            {
                $message = "Error: " . mysqli_error($conn);
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h1>Update Book</h1>

    <?php
        if(isset($message))
            {
                echo "<p>" . $message . "</p>";
            }
    ?>

    <form method="POST">
        <label>Book Code: </label>
        <input type="number" name="book_code"
               value="<?php echo isset($book['book_code']) ? $book['book_code'] : ''; ?>" 
               required>
        <button type="submit" name="search">Search Book</button>
    </form>

    <?php 
        if($book != null)
            {
    ?>

    <form method="POST">

        <input type="hidden" name="book_code"
                value="<?php echo $book['book_code']; ?>">

            <label>Book Name:</label>
            <input type="text" name="book_name"
                   value="<?php echo $book['book_name']; ?>" required>

            <label>Author Name:</label>
            <input type="text" name="author_name"
                   value="<?php echo $book['author_name']; ?>" required>

            <label>Cost:</label>
            <input type="number" name="cost" step="0.01"
                   value="<?php echo $book['cost']; ?>" required>

            <label>ISBN No:</label>
            <input type="text" name="ISBN_No"
                   value="<?php echo $book['ISBN_No']; ?>" required>

            <button type="submit" name="update">Update Book</button>

    </form>

    <?php
        }
    ?>

    <a href="book.php" class="view-button"> Add Book </a>
    
    <a href="view.php" class="view-button"> View Books </a>
</div>
</body>
</html>