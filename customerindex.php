<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerindex.css" type="text/css">
    <title>Document</title>
</head>
<body>

<?php
if ($_POST["loginsuccess"] == 1)
{

?>
    <div class="container">
    <a class="tile1" href="customerviewproduct.php">Buy</a>
        <div class="tile2">
            <h1>View Orders</h1>
        </div>
        <a class="tile3" href="cart.php">Cart</a>
        <a class="tile4" href="feedback.php">Customer Feedback</a>
    </div>

<?php
}
else
{
    header("Location: customerlogin.php");
}


?>

</body>
</html>