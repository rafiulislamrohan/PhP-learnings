<?php

    $status = "delivered";


    $message = match ($status){
        "pending" => "Your order is pending",
        "processing" => "Your order is now processing",
        "shipped" => "Your order has been shipped",
        "delivered" => "Your order has been delivered",
        "cancelled" => "your order has been cancelled",
        default => "Unknown Status"
    };

    echo $message; 

    // Switch

    switch ($status){
        case "pending":
            echo "Your order is pending";
            break;
        case  "processing":
            echo "Your order is now processing";
            break;
        case "shipped":
            echo "Your order has been shipped";
            break;
        case "delivered":
            echo "Your order has been delivered";
            break;
        case "cancelled":
            echo "Your order has been cancelled";
            break;
            
        default : "Unknown Status";   
    }
        



?>