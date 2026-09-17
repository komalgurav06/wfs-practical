<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <h1>Book Management System</h1>
        
        <form action="insert.php" method="POST">

        <label>Book Code: </label>
        <input type="number" name="book_code" required>

        <label>Book Name: </label>
        <input type="text" name="book_name" required>

        <label>Author Name: </label>
        <input type="text" name="author_name" required>

        <label>Cost: </label>
        <input type="number" name="cost" step="0.01" required>

        <label>ISBN No: </label>
        <input type="text" name="ISBN_No" required>

        <button type="submit">Add Book</button>

        </form>

        <a href="view.php" class="view-button"> View Books </a>
    </div>
</body>
</html>