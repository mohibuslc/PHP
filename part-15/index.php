<?php


        function map($n){

            return($n * $n* $n);


        }
$a = [ 1,2,3,5,6,7,8] ; 
$b =array_map('map', $a);


print_r($b);

?>