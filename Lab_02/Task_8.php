
  <?php  
       
       $arr = array;

        array(1, 2, 3, 'A')
        array(1, 2, 'B', 'C')
        array(1, 'D', 'E', 'F')
     
        for ($i = 0; $i < count($arr); $i++) {

             for ($j = 0; $j < count($arr[$i]); $j++) {
                print $arr[$i][$j];
                }

                }

        
        ?>  




















<?php

// Declare the 2D array
$arr = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F'),

// Print the shapes
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}