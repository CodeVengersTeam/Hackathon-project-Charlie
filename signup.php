<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>form testing</title>
</head>
<body>

<?php
if($_POST["signup"] == 1)
{

?>

<div class="container">
<form action="db.php" method="POST">
    
    <table>
        <tr>
            <td>
                First Name
            </td>
            <td>
            <input type="text" placeholder="First Name" name="firstname" >
            </td>
        </tr>
        <tr>
            <td>
                Middle Name
            </td>
            <td>
            <input type="text"  placeholder="Middle Name" name="middlename" >
            </td>
        </tr>
        <tr>
            <td>
                Last Name
            </td>
            <td>
            <input type="text"  placeholder="Last Name" name="lastname" >
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
            <input type="email"  placeholder="Your email" name = "email" >
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
            <input type="password"  placeholder="Your password" name = "password" >
            </td>
        </tr>
        <tr>
            <td>
                Confirm Password
            </td>
            <td>
            <input type="password"  placeholder="Confirm password" name = "confirmpassword" >
            </td>
        </tr>
        <tr>
            <td>
                 Gender
            </td>
            <td>
            <input type="radio" value=1 name = "gender" >Male
            <input type="radio" value=2  name = "gender" >Female
            <input type="radio" value=3  name = "gender" >Non Binary
            <input type="radio" value=4  name = "gender" >Prefer Not to Mention
            </td>
        </tr>
        <tr>
            <td>
                Phone Number
            </td>
            <td>
            <input type="text"  name = "phonenumber" >
            </td>
        </tr>
        <tr>
            <td>
                Date of Birth
            </td>
            <td>
            <input type="date" placeholder="MM/DD/YYYY" name = "dob">
            </td>
        </tr>
        <tr>
            <td>
                Address Line 1
            </td>
            <td>
            <input type="text"  name = "add1">
            </td>
        </tr>
        <tr>
            <td>
                Address Line 2
            </td>
            <td>
            <input type="text" name = "add2">
            </td>
        </tr>
        <tr>
            <td>
            Address Line 3
            </td>
            <td>
            <input type="text"  name = "add3">
            </td>
        </tr>
        <tr>
            <td>
                City
            </td>
            <td>
            <input type="text" name = "city">
            </td>
        </tr>
        <tr>
            <td>
                State
            </td>
            <td>
            <input type="text" name = "state">
            </td>
        </tr>
        <tr>
            <td>
                Country
            </td>
            <td>
            <input type="text" name = "country">
            </td>
        </tr>
        <tr>
            <td>
                Pin Code
            </td>
            <td>
            <input type="text" name = "pincode">
            </td>
        </tr>
        <tr>
            <td>
                Preferred Payment Method
            </td>
            <td>
                <select>
                    <option>Paytm</option>
                    <option>Cash on Delivery</option>
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Gpay</option>
                </select>
            
            </td>
        </tr>
        <tr>
        <td><input type="submit"  value="Signup"></td>
        </tr>
    </table>
    
</form>

</div>

<?php

}
else 
{
    header("Location: login.php");
}

?>

</body>
</html>
