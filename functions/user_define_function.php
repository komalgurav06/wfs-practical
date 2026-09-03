<?php 
    Function DisplayAddress()       //Function Defination
    {
        echo "Ms. Neha Patel";
    }
    DisplayAddress();       //Calling Function
?>
<br><hr>

<?php
    Function add($a, $b)        //Function Defination
    {
        $c = $a + $b;
        echo "Addition is : ". $c;
    }
    add(10, 20);        //Calling Function
?>
<br><hr>

<?php
    Function sum($a, $b)
    {
        $c = $a + $b;
        return $c;
    }
    echo "Sum : ". sum(50, 20);
?>
<br><hr>

<?php 
    Function Area($r, $pi = 3.14)
    {
        $A = $pi * $r * $r;
        return $A;
    }
        $r = 3;
        echo "Area of Circle with $r is : ". Area($r);
?>