<?php

    $age = 24;
    $isStudent = true;
    $hasId = true;

    var_dump($age>18);
    var_dump($isStudent === true);
    var_dump($age > 18 && $isStudent === true);
    var_dump( $age >18 && $hasId === true);
    var_dump($isStudent === true || $hasId === true)

?>