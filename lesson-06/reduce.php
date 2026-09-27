<?php

$prices = [
    100,
    200,
    300,
    400
];

$total = array_reduce($prices, function($carry , $item){
    return $carry + $item;
} , 0);
echo $total;

?>