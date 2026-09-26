<?php

$products = [
    [
        "name" => "Umbrella",
        "price" => 1299,
        "quantity" => 2

    ],
    [
        "name" => "Watch",
        "price" => 999,
        "quantity" =>1
    ],
    [
        "name" => "Bag",
        "price" =>2499,
        "quantity" => 1
    ]
];

$grandTotal = 0;

foreach($products as $product){
    
    echo "Product :" .$product["name"];
    echo "<br>";
    echo "Price : ".$product["price"];
    echo "<br>";
    echo "Quantity : ".$product["quantity"];
    echo "<br>";
    $subtotal = $product["price"] * $product["quantity"];
    echo "subtotal : " . $subtotal;
    echo "<br>";
    echo "<br>";
    
    $grandTotal += $subtotal;
   
}
 echo "--------------------------";
 echo "<br>";
 echo "<br>";
 echo " Grand Total :" .$grandTotal;

?>