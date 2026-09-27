<?php
 $prices = [
    100 , 
    200, 
    300 ,
    400
 ];

 $increasedPrice = array_map(fn($price) => $price * 1.10 , $prices);

 foreach($increasedPrice as $price){
    echo $price;
    echo "<br>";
 }

 
?>