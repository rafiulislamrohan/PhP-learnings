<?php
    echo  "price : " . $price = 1299;
    echo "<br>";
    echo "quantity : " .$quantity = 3;
    echo "<br>";
    echo  "subtotal : " . $subtotal = $price * $quantity;
    echo "<br>";
    echo  "discount  : " . $discount = ($subtotal /100) * 10;
    echo "<br>";
    echo "finalprice : " .$finalprice = $subtotal - $discount;
?>