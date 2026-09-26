<?php

    $isLoggedIn = true;
    $isAdmin = true;

    if(!$isLoggedIn){
        echo "Please login first";
    }elseif($isLoggedIn){
        if($isAdmin){
            echo "Welcome to Admin panel";
        }else{
            echo "Welcome to your account";
        }
    }

?>