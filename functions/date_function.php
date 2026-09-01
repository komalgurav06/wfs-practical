<?php
    date_default_timezone_set('Asia/Kolkata');
    echo date("d/m/y"). "<br/>";
    echo date("j"). "<br/>";
    echo date("I"). "<br/>";
    echo date("n"). "<br/>";
    echo date("g"). "<br/>";
    echo date("D/M/Y"). "<br/>";
    echo date("I-F-y"). "<br/>";
    echo date("d/m/y h :i :s :a"). "<br/>";
?>

<br><br>

<?php
    echo "<pre>";
    print_r(getdate());
    echo "</pre>";
?>

<?php
    if(checkdate(8,3,1985))
        {
            echo "Date is valid";
        }
    else
        {
            echo "Date is not valid";
        }
?>

<br><br>

<?php
    date_default_timezone_set('Asia/Kolkata');
    echo "Current Time : " .time();
?>

<br><br>

<?php
    $d = mktime(7, 12, 50, 7, 21, 2021); //h,m,s,m,d,y
    echo "Created date is " .date("Y-m-d h:i:s", $d);
?>