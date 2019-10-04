<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "cart");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
        
//        INSERT INTO tbl_order (itemname, itemquantity, itemprice, itemid)
//values ('$i_name','$i_quantity','$i_price','$i_id')";
        
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>KC Cafe</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <section>
        <div id="main" style="">

            <a href="index.php" id="main_name">KC Cafeteria</a>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="about.html" id="mainn_nname">About us</a>
            &nbsp;
            &nbsp;

            <a href="faq.html" id="mainn_nname">FAQ</a>
            &nbsp;
            &nbsp;

            <a href="logout.php" id="mainnn_nnname">Log Out</a>

        </div>
        <!--
            <ul>
                <nav>
                    <li>
                        <a href="#" id="nav_faq">Menu</a>
                    </li>
                    <li>
                        <a href="about.html" id="uma">About</a>
                    </li>
                    <li>
                        <a href="faq.html" id="uma">FAQ</a>
                    </li>

                    <li>
                        <a href="#" id="uma" onclick="openNav()">Cart <i class="fa fa-shopping-bag"></i></a>
                    </li>
                </nav>
            </ul>
-->
    </section>
    <br />
    <div class="container">
        <br />


        <?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
        <!--        w:350 h:220-->
        <div class="col-md-4">
            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                <div style="border:3px solid #5f0038; background-color:whitesmoke; border-radius:2px; padding:16px;" align="center">

                    <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" style="width: 350px;height: 220px;" /><br />

                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>

                    <h4 class="text-danger">₹ <?php echo $row["price"]; ?></h4>

                    <input type="text" name="quantity" value="1" class="form-control" />

                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                    <input type="submit" name="add_to_cart" style="margin-top:5px; " class="btn btn-success" value="Add to Cart" />

                </div>
            </form>
        </div>
        <?php
					}
				}
			?>
        <div style="clear:both"></div>
        <br />
        <h3>Order Details</h3>
        <form method="post" action="buyme.php">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>₹ <?php echo $values["item_price"]; ?></td>
                        <td>₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">₹ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="5" align="right"> <input type="Submit" value="Confirm" class="btn btn-primary">
                        </td>
                    </tr>
        </form>
        <!--                    <input type="Submit" value="Submit" class="btn btn-primary">-->
        <!--
                <?php
					}
					?>
-->

        </table>
    </div>
    </div>
    </div>
    <br />
</body>

</html>