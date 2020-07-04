<?php
if()
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $orderid = $_POST["orderid"];
    if( $deliveryspeed == "1")
    {
        $deliveryspeed = "P";
    }
    elseif( $deliveryspeed == "2")
    {
        $deliveryspeed = "BA";
    }
    elseif( $deliveryspeed == "3")
    {
        $deliveryspeed = "A";
    }
    elseif( $deliveryspeed == "4")
    {
        $deliveryspeed = "AA";
    }
    else{
        $deliveryspeed = "E";
    }
?>