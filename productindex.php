<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productindex.css">
    <title>Product Index</title>
</head>
<body>
    <div class="container"> 
        <div class="tile1">
            <h1>
                Add Products
                <form action="addproduct.php" method="POST">
                <input type="hidden" name="addproduct" value=1>
                <input class="productbutton"type="submit" value="Add Product">
            </form>
            </h1>
        </div>
        <div class="tile2">
            <h1>
                View Products
            </h1>
        </div>
        <div class="tile3">
            <h1>
                Delete Products
            </h1>
        </div>
    </div>
</body>