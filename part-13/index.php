<?php



echo ' Concept of foreach ' . '<br/>';





$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];



foreach ($array as $value) {

    echo $value . 'X10=' . $value * 10 . '<br/>';
}
