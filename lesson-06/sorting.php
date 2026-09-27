<?php

$prices = [
    1299,
    499,
    2499,
    999,
    799
];


 sort($prices);
 foreach($prices as $price ){
    echo $price;
    echo "<br>";
 }
 echo "<br>";
 rsort($prices);
 foreach($prices as $price){
    echo $price;
    echo "<br>";
 }

?>