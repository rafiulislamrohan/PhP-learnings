<?php

    $productPrice = 1299;
    $quantity = 3;
    $isLoggedIn = true;
    $isMember = true;
    $discount = 10;


    $subtotal = $productPrice * $quantity;


    echo "Product price : " . $productPrice;
    echo "<br>";
    echo "Quantity : " . $quantity;
    echo "<br>";
    echo "Subtotal : " . $subtotal;  
    echo "<br>";
    if(!$isLoggedIn && !$isMember || !$isLoggedIn || !$isMember ){
        echo "No Discount available for logged out user";
        echo "<br>";
        echo "subtotal : " . $subtotal; 
    }elseif($isLoggedIn && $isMember){
        echo $discount . "% is added for logged in user";
        echo "<br>";
        $discountAmount = ($subtotal /100 )* $discount;
        echo "Discount Amount " . $discountAmount; 
        echo "<br>";
        $finalPrice = $subtotal -  $discountAmount;
        echo "Final Price : " . $finalPrice  ; 
    }


     



?>