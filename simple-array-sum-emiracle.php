<?php
//given an array
$array = array(1,2,3,4,5,6);

//we set the initial sum to 0
$sum = 0;

//use a for loop to increment the sum
for ($i=0; $i < count($array); $i++) { 
    $sum = $sum+$array[$i];
}


//echo new sum
echo $sum;