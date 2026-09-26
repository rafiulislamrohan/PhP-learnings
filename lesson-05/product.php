<?php

$products =[
     [
    "name" => "Umbrella",
    "price" => 1299,
    "stock" => 10
    ],
    [
    "name" => "Watch",
    "price" => 999,
    "stock" => 5
    ],  
    [
    "name" => "Bag",
    "price" => 2499,
    "stock" => 0

]

];

foreach($products as  $product){
    echo "Product Name : " . $product["name"] ;
    echo "<br>";
    echo "Price : " .$product["price"];
    echo "<br>";
    echo "Stock : " . $product["stock"];
    echo "<br>";
    if($product["stock"] != 0){
        echo "Status : Available";
    }else{
        echo "Status : Out of stock";
    }
    echo "<br>";
    echo "<br>";

   
   
}

?>