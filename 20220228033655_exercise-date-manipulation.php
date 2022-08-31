<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

showTitle('Exercise 1');
echo date(DATE_RFC2822);

showTitle('Exercise 2 - Show Day');
echo date("d");

showTitle('Exercise 3 - Show Month');
echo date("m");
echo "<br>";
echo date("M");
showTitle('Exercise 4 - Show Year');
echo date("Y");

showTitle('Exercise 5 - Show Day, Month, Year');
echo date("d,m,Y");
echo "<br>";
echo date("d,M,Y");

showTitle('Exercise 6 (Add 1 month to the constant date)');
$date = date("y-m-d");


echo date('Y-m-d', strtotime($date. ' + 30 days'));

showTitle('Exercise 7 (Number of days since 31 December 1973)');
$date1 =  date("d-m-y");



$date2 = "31-12-1973";


$diff = (strtotime($date1) - strtotime($date2))/86400;
echo $diff."days";

showTitle('Exercise 8');
echo date("D,d M Y");