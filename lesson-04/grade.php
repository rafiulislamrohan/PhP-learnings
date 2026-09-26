<?php
$score = 85;


if($score >= 80){
    echo "A+";
}elseif($score >= 70){
    echo "A";
}elseif($score >= 60){
    echo "A-";
}elseif($score >= 50){
    echo "B";
}elseif($score >= 40){
    echo "C";
}else{
    echo "Fail";
}

?>