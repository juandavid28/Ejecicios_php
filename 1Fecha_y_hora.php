<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo "Today is " . date("Y/m/d") . "<br>";
     echo "Today is " . date("Y.m.d") . "<br>";
     echo "Today is " . date("Y-m-d") . "<br>";
     echo "Today is " . date("l");
    ?>
    <br>
    &copy; 2010-<?php echo date("Y");?>

    <br>
    <hr>
    <br>

    <?php
     echo "La hora es " . date("h:i:sa");
    ?>

    <br>
    <hr>
    <br>

    <?php
     date_default_timezone_set("America/New_York");
     echo "La hora es " . date("h:i:sa");
    ?>

    <br>
    <hr>
    <br>

    <?php
     $d=mktime(9, 40, 54, 7, 25, 2023);
     echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
    ?>

    <br>
    <hr>
    <br>

    <?php
     $d=strtotime("05:30pm July 24 2023");
     echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
    ?>

    <br>
    <hr>
    <br>

    <?php
     $d=strtotime("tomorrow");
     echo date("Y-m-d h:i:sa", $d) . "<br>";

     $d=strtotime("next Saturday");
     echo date("Y-m-d h:i:sa", $d) . "<br>";

     $d=strtotime("+3 Months");
     echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

    <br>
    <hr>
    <br>

    <?php
     $startdate = strtotime("Saturday");
     $enddate = strtotime("+6 weeks", $startdate);

     while ($startdate < $enddate) 
     {
         echo date("M d", $startdate) . "<br>";
         $startdate = strtotime("+1 week", $startdate);
     }
    ?>

    <br>
    <hr>
    <br>
    
    <?php
     $d1=strtotime("August 20");
     $d2=ceil(($d1-time())/60/60/24);
     echo "Quedan " . $d2 ." días hasta el 13 de agosto.";
    ?>
</body>
</html>