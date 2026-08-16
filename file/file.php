<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload & Download</title>
</head>
<body>
<center>

<form action="" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td>
            <input type="file" name="myfile" required><br><br>
        </td>
    </tr>
    
    <tr>
        <td>
            <input type="submit" name="upload" value="upload">
        </td>
    </tr>
</table>
</form>

<?php
    if(isset($_POST['upload']))
    {
        $file_name=$_FILES['myfile']['name'];
        $tmp_path=$_FILES['myfile']['tmp_name'];
        $folder="uploads/";
        $target_path=$folder.$file_name;

        if(file_exists($target_path))
        {
            echo "File already exists. Please upload a different file";
        }

        else
        {
            if(move_uploaded_file($tmp_path, $target_path))
            {
                echo "File uploaded Successfully! <br><br>";
                echo "<a href='$target_path' download> click here to download $file_name</a>";
            }
            else
            {
                echo "File upload failed.";
            }
        }
         
        echo "<br><br><a href= > Upload another file</a>";
    }    
?>

</center>
</body>
</html>