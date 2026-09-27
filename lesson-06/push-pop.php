<?php
    $cart = [
        "Umbrella",
        "Watch"
    ];

    array_push($cart ,"Bag");

    foreach($cart as $cartItem){
        echo $cartItem;
        echo "<br>";
    }
    echo "<br>";
    array_pop($cart);
    foreach($cart as $cartItem){
        echo $cartItem;
        echo "<br>";
    }

?>