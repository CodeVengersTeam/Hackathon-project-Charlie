<?php
if($_POST["s"]==1)
{
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$mobilenumber = $_POST["phonenumber"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$dateofbirth = $_POST["dob"];
$gender = $_POST["gender"];
$address1 = $_POST["add1"];
$address2 = $_POST["add2"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$pincode = $_POST["pincode"];
$payment = $_POST["payment"];
if($gender == "1")
{
    $gender = "M";
}
else if($gender == "2")
{
    $gender = "F";
}

else if($gender == "3")
{
    $gender = "O";
}
else{
    $gender = "NA";
}


}
?>