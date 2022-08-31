<?php
function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

showTitle('Exercise 1 - Sort Alphabetically');
 sort($colors);
 for($i=0;$i<sizeof($colors);$i++){
     echo $colors[$i];
     echo "<br>";
 }



showTitle('Exercise 2: Make them UPPERCASE');
for($i=0;$i<sizeof($colors);$i++){
   echo strtoupper($colors[$i]);
    //echo (array_change_key_case($colors,CASE_UPPER));
    echo "<br>";

}




showTitle('Exercise 3: Merge 2 Arrays');

$otherColors = array(
    'green',
    'blue',
    'black'
);
  $newArray= array_merge($colors,$otherColors);
for($i=0;$i<sizeof($newArray);$i++){
    echo $newArray[$i];
    echo "&nbsp";

}

