<?php

echo "Product : Umbrella";
echo "<br>";
echo "Price : " . $price = 1299 ;
echo "<br>";
echo "Quantity : " . $quantity = 2;
echo "<br>";
echo "Discount Rate " . $discountRate = 10 ;

function calculateSubtotal($price, $quantity){
    return $price * $quantity;

}



function calculateDiscount($subtotal, $discountRate){
    return  ($subtotal /100 * $discountRate);
    

}

function calculateFinalPrice($subtotal, $discount){

    return $subtotal - $discount;

}

$subtotal = calculateSubtotal($price , $quantity);
$discount = calculateDiscount($subtotal , $discountRate);
$TotalfinalPrice = calculateFinalPrice($subtotal , $discount);



echo "<br>";
echo "Final Price " . $finalPrice = $TotalfinalPrice;













?>