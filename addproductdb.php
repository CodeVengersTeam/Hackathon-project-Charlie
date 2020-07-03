<?php

if($_POST["addproduct"]==1)
{
$productname = $_POST["productname"];
$priceperunit = $_POST["priceperunit"];
$manufacturingdate = $_POST["manufacturingdate"];
$inventoryquantity = $_POST["inventoryquantity"];
$productimage = $_POST["productimage"];
$tags = $_POST["tags"];



$servername = "localhost";
$username = "root";
$password = "";
$database = "charliestore";

// create a connection
$con = mysqli_connect($servername, $username, $password, $database);                 

$sql ="INSERT INTO products (productname,productimage, priceperunit, inventoryquantity, manufacturingdate, tags) VALUES 
('$productname','$productimage' , '$priceperunit', '$inventoryquantity', '$manufacturingdate', '$tags')";
mysqli_query($con,$sql);
echo "data inserted successfully<BR>";
mysqli_close($con);



}
?>