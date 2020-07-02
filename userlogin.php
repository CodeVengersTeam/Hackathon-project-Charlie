
<form action="index2.php"  method="POST">
<table>
<tr>
<td>
Email:
</td>
<td>
<input type="email" placeholder="Email" name="email">

</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" placeholder="Password" name="password">

</td>
</tr>

<tr>
<td><input type="submit" value="login">

</td></tr>
</table>
<input type="hidden" name="s" value=1>

</form>
<form action="signup.php" method="POST">
    <input type="hidden" name="signup" value=1>
    <input type="submit" value="Signup">
</form>

