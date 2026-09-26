<?php
$a = 24;
$b = "24";
$c = 24.0;
$d = true;
$e = null;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

var_dump($a == $b);
var_dump($a === $b);
var_dump($a == $c);
var_dump($a === $c);


// the double (== ) assignment operator is used verify the content is they are same or not , triple assignment operator does the same thing but it also checks the type of the content   

?>