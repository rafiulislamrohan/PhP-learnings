<?php

    function calculateTotal(float $price , int $quantity){
        return $price * $quantity;
    }

    $total = calculateTotal(1299 , 3);
    echo $total

?>