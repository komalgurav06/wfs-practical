<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    echo count($cars) .'<br>';
?>
<br><hr>

<?php
    $cars = array("BMW", "AUDI", "MARYUTI");
    list($name1, $name2, $name3) = $cars;
    echo $name1. '<br>';
    echo $name2. '<br>';
    echo $name3;
    //print_r($cars);
?>
<br><hr>

<?php
    $MyArray = array("priya", "riya", "siya");

    if(in_array("priya", $MyArray))
        {
            echo "String Found in Array <br>";
        }
    else
        {
            echo "String Not Found in Array <br>";
        }

    $MyArray1 = array(11, 12, 13);

    if(in_array("11", $MyArray1, true))
        {
            echo "String Found in Array <br>";
        }    
    else
        {
            echo "String Not Found in Array <br>";
        }

    $MyArray2 = array(11, 12, 13);

    if(in_array("11", $MyArray2, false))
        {
            echo "String Found in Array <br>";
        }
    else
        {
            echo "String Not Found in Array <br>";
        }
?>
<br><hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    echo current($cars). "<br>";
    echo next($cars)."<br>";
    echo prev($cars)."<br>";
    echo end($cars);
?>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    foreach($cars as $key => $value)
    {
        echo $key . " = " . $value . "<br>";
    }
?>
<br><hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    $colors = array("BLACK", "WHITE", "BLUE");
    $models = array_merge($cars, $colors);
    Print_r($models);
?>
<br><hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    print_r($cars);
    $rev = array_reverse($cars);
    Print_r($rev);
?>
