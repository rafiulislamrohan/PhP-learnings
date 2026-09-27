<?php
$products = [
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
    ],
    [
        "name" => "Wallet",
        "price" => 799,
        "stock" => 20
    ]
];
// Part A - Use count() to display the number of products.
$totalProducts = count($products);

echo "Total Products :" . $totalProducts;
echo "<br>";
echo "<br>";
// Part B - Use foreach to display every product.
foreach($products as $product){
    echo "Product Title : " . $product["name"];
    echo "<br>";
    echo "Price : " . $product["price"];
    echo "<br>";
    echo "Stock : " . $product["stock"];

    echo "<br>";echo "<br>";
}

// Part C - Use array_filter() to find products with:



$filtered = array_filter($products , function($prod){
    return $prod["price"] > 1000;
});

foreach($filtered as $filteredprod){
    echo "Product title : " . $filteredprod["name"];
    echo "<br>";
    echo "Price : " . $filteredprod["price"];
    echo "<br>";
    echo "Stock : " . $filteredprod["stock"];
    echo "<br>";
    echo "<br>";
}

// Part D - Use another array_filter() to find products where:



$filterStock = array_filter($products , function($prod){
    return $prod["stock"] > 0;
});

foreach($filterStock as $filteredStock){
    echo "Product title : " . $filteredStock["name"];
    echo "<br>";
    echo "Price : " . $filteredStock["price"];
    echo "<br>";
    echo "Stock : " . $filteredStock["stock"];
    echo "<br>";
      echo "<br>";
   
   
};


// Part E - Use array_map() to extract only product names.

$prodName = array_map(fn($value) => $value, $products);

foreach($prodName as $prodName){
    echo $prodName["name"];
    echo "<br>";
}

// Part F -Use array_reduce() to calculate the total value of all inventory:


$totalInventoryValue = array_reduce($products , function($item , $carry ){
    $item += ($carry["price"] * $carry["stock"]);
    return $item;
} , 0);





echo "Total Inventory Value: " . $totalInventoryValue;



   

?>