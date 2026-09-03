<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    Print_r($cars);
?>
<br><hr>

<?php 
    $numbers = array(4, 6, 2, 22, 11, 's', 't', "abc", "xyz");
    sort($numbers);
    Print_r($numbers);
?>
<br><hr>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
    print_r($cars);
?>
<br><hr>

<?php
    $numbers = array(4, -6, 2, 2, 2.2, 11, 's', 's', 't', "abc", "XYZ", "xyz");
    rsort($numbers);
    Print_r($numbers);
?>
<br><hr>

<?php
    $age = array("Peter" => "35", "Ben" => "10", "Joe" => "43");
    asort($age);
    Print_r($age);
?>
<br><hr>

<?php 
    $str = "Hello Welcome To The World of PHP";
    echo substr ($str, 0, 5). "<br>";
    echo substr ($str, -3). "<br>";
    echo substr ($str, 6). "<br>";
    echo substr ($str, -6). "<br>";
    echo substr ($str, 6, 10). "<br>";
?>
