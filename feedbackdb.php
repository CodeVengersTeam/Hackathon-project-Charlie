<?php
if($_POST["s"]==1)
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $orderid = $_POST["orderid"];
    $deliveryspeed = $_POST["deliveryspeed"];
    $deliveryexp = $_POST["deliveryexp"];
    $packaging = $_POST["packaging"];
    $quality = $_POST["quality"];
    $comments = $_POST["comments"];
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


// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "charliestore";

// create a connection
$con = mysqli_connect($servername, $username, $password, $database);                 

if(!$con)
{
    echo "Unsuccessful";
}

$sql= "INSERT INTO feedback (username,email,phone,orderid,deliveryspeed,deliveryexp,packaging,quality, comments) VALUES ('$name','$email','$phone','$orderid','$deliveryspeed','$deliveryexp','$packaging','$quality','$comments')";



mysqli_query($con,$sql);
echo "data inserted successfully<BR>";
mysqli_close($con);


?>