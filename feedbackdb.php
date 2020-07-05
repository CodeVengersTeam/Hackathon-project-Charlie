<?php
if($_POST["s"]==1)
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $orderid = $_POST["orderid"];
    $deliveryspeed = $_POST["deliveryspeed"];
    $$deliveryexp = $_POST["deliveryexp"];
    $packaging = $_POST["packaging"];
    $quality = $_POST["quality"];
    
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

    if( $deliveryexp == "1")
    {
        $deliveryexp = "P";
    }
    elseif( $deliveryexp == "2")
    {
        $deliveryexp = "BA";
    }
    elseif( $deliveryexp == "3")
    {
        $deliveryexp = "A";
    }
    elseif( $deliveryexp == "4")
    {
        $deliveryexp = "AA";
    }
    else{
        $deliveryexp = "E";
    }

    if( $packaging == "1")
    {
        $packaging = "P";
    }
    elseif( $packaging == "2")
    {
        $packaging = "BA";
    }
    elseif( $packaging == "3")
    {
        $packaging = "A";
    }
    elseif( $packaging == "4")
    {
        $packaging = "AA";
    }
    else{
        $packaging = "E";
    }

    if( $quality == "1")
    {
        $quality = "P";
    }
    elseif( $quality == "2")
    {
        $quality = "BA";
    }
    elseif( $quality == "3")
    {
        $quality = "A";
    }
    elseif( $quality == "4")
    {
        $quality = "AA";
    }
    else{
        $quality = "E";
    }

?>