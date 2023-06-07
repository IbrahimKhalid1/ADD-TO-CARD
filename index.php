<?php include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="arno-senoner-oCXVxwTFwqE-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">bag 1</h5>
                            <p class="card-text">Price 450</p>
                            <button type="submit" name="ADD_TO_CART" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="bag 1">
                            <input type="hidden" name="price" value="450">
                        </div>
                    </div>
                </form>
            </div>




            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="arno-senoner-ZT16YkAYueo-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">bag 2</h5>
                            <p class="card-text">Price 650</p>
                            <button type="submit" name="ADD_TO_CART" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="bag 2">
                            <input type="hidden" name="price" value="650">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="sun-lingyan-_H0fjILH5Vw-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">bag 3</h5>
                            <p class="card-text">Price 750</p>
                            <button type="submit" name="ADD_TO_CART" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="bag 3">
                            <input type="hidden" name="price" value="750">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>