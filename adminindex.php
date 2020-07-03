<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminindex.css" type="text/css">
    <title>Admin Index</title>
</head>
<body>

<?php
if ($_POST["loginsuccess"] == 1)
{

?>
    <div class="container">
        <div class="tile1">
            <h1>View Customers</h1>
        </div>

            
            <a class="tile2" href="productindex.php"><h1>Products</h1></a>

        <div class="tile3">
            <h1>View Orders</h1>
        </div>
        <div class="tile4">
            <h1>Add Admin</h1>
        </div>
    </div>



    <?php
}
else
{
    header("Location: adminlogin.php");
}


?>

</body>
</html>