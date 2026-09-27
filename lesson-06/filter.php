<?php
$prices = [
    500,
    1200,
    800,
    2500,
    300,
    1800
    
    ];

    $price = array_filter($prices , function($value){
        return $value > 1000;
          
    });
    foreach($price as $price){
          echo $price;
          echo "<br>";
    };

  

    


?>