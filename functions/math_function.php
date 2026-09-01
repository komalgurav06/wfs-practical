<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <center>
        <h2>Math Function</h2>
        <br />
        <form action="math_function.php" method="POST" name="form1">
        <table>
            <tr>
                <td>Enter Value: </td>
                <td>
                    <input type="text" name="txtnumber" required>
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
        $value = $_POST['txtnumber'];
        echo "abs : ". abs($value).'<br>';
        echo "ceil : ". ceil($value).'<br/>';
        echo "floor : ". floor($value).'<br/>';
        echo "round : ". round($value).'<br/>';

        $a = 5;
        $b = 2;
        $c = fmod($a, $b);
        echo "fmod of $a and $b is ". ($c).'<br/><hr>';

        echo "Minimum : ". min(10,40,50,5,90).'<br/>';
        echo "Maximum : ". max(10,40,50,5,90).'<br><hr>';

        echo "Power of (2,3) is ". pow(2,3).'<br/>';
        echo "Power of (-2,3) is ". pow(-2,3).'<br/><hr>';

        echo"Square Root of $value : ". sqrt($value).'<br><hr>';

        $d = rand();
        echo "rand() : ". $d.'<br/>';

        $e = rand(1, 50);
        echo "rand(1,50) : ". $e.'<br/>';
    }
    ?>

    </center>
</body>
</html>