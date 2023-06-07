<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table ">
                    <thead class="text-center">
                        <?php
                        $total = 0; ?>
                        <tr>
                            <th scope="col">Serial number</th>
                            <th scope="col">Item name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Item Quantity</th>
                        </tr>

                    </thead>

                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $total + $value['price'];
                                echo "<tr>
                        <td>1</td>
                        <td>$value[Item_Name]</td>
                        <td>$value[price]</td>
                        <td><input type ='number' value='$value[Quantity]' min = '1' max='10'</td>
                        <form action='manage_cart.php' method='POST'>
                        <td><button name='Remove_Item' class='btn btn-sm btn-outlin e-danger'>Remove</button>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                        </td>
                        </tr>";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light round p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <button class="btn btn-primary btn-block">
                        PURCHASE
                    </button>
                </div>
            </div>
        </div>

    </div>


</body>

</html>