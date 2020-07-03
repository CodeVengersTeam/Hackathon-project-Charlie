<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Product Inventory</title>
</head>
<body>

<?php
if($_POST["Add to Inventory"] == 1)
{

?>

<form action="productdb.php" method="POST">
<div>
    <div>
        <label for="productname">Product Name</label>
        <input type="text" name="productname">
    </div>
    <div>
        <label for="priceperpiece">Price per Piece</label>
        <input type="text" name="priceperpiece">
    </div>
    <div>
        <label for="numberofpieces">Number of Pieces</label>
        <input type="text" name="numberofpieces">
    </div>
    <div>
        <label for="manufcturingdate">Manufacturing Date</label>
        <input type="date" name="manufcturingdate">
    </div>
    <div>
        
        <input type="submit"  value="Add to Inventory">
    </div>
   
</div>
</form>



<?php

}

?>

</body>
</html>
