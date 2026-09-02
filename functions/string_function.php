<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
<center>
    <h2>----String Function----</h2>
    <br />
    <form action="" name="form1" method="POST">
        <table>
            <tr>
                <td>Enter Value: </td>
                <td>
                    <input type="text" name="txtvalue" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnsubmit" value="Submit">
                </td>
            </tr>
        </table>
    </form>


<?php

    if(isset($_POST['btnsubmit']))
        {
            $value=$_POST['txtvalue'];
            echo chr(97). '<br>';
            echo ord("B"). '<br>';
            echo ord($value). '<br><hr>';

            echo strtolower($value). '<br>';
            echo strtoupper($value). '<br>';
            echo strlen($value). '<br><hr>';

            echo ltrim($value). '<br>';
            echo rtrim($value). '<br>';
            echo trim($value). '<br><hr>';

            echo substr($value, 6). '<br>';
            echo substr($value, -4). '<br>';
            echo substr($value, 3, 10). '<br>';
            echo substr($value, 0, 5). '<br>';
            echo substr($value, -3). '<br><hr>';

            $a = "Hello World!";
            $b = "Hello";
            if(strcmp ($a, $b) == 0)
                {
                    echo "String are equal".'<br>';
                }
            elseif(strcmp ($a, $b) < 0)
                {
                    echo "$a is less than $b".'<br>';
                }
            elseif(strcmp ($a, $b) > 0)
                {
                    echo "$a is greater than $b".'<br>';
                }

            $c = "HELLO";
            $d = "hello";
            if(strcasecmp ($c, $d) == 0)
                {
                    echo "String are equal" .'<br>';
                }
            elseif(strcmp ($c, $d) < 0)
                {
                    echo "c is less than d" .'<br>';
                }
            elseif(strcmp ($c, $d) > 0)
                {
                    echo "c is greater than d" .'<br>';
                }
        }
?>
</center>
</body>
</html>