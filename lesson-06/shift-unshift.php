<?php
$queue = [
    "Customer A",
    "Customer B",
    "Customer C"
];

array_unshift($queue , "Customer Z");

foreach($queue as $customer){
    echo $customer;
    echo "<br>";
};
echo "<br>";

array_shift($queue);

foreach($queue as $customer){
    echo $customer;
    echo "<br>";
}
?>