<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userlogin.css">
    <title>User Login</title>
</head>
<body>

<form action="authenticate.php"  method="POST">
<table>
<tr >
<td class="email">
Email:
</td>
<td class="emailinput">
<input type="email" placeholder="Email" name="email">

</td>
</tr>
<tr>
<td class="password">
Password:
</td>
<td class="passwordinput">
<input type="password" placeholder="Password" name="password">

</td>
</tr>

<tr>
<td class="loginbutton"><input class="logininput" type="submit" value="Login">
</td>
</form>
<td class="signupbutton">
    <form action="signup.php" method="POST">
        <input type="hidden" name="signup" value=1>
        <input class="signupinput" type="submit" value="Signup">
        <input  type="hidden" name="s" value=1>
    </form>
</td>
</tr>
</table>
