<html>
<head>
  <link href="grid.css" rel="stylesheet" type="text/css">
  <link href="w3.css" rel="stylesheet" type="text/css">
  <meta  name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
</head>
<body>
  <div class="container">
<?php
include "new_item_db.php";
$qury_sel="select * from `products`.`product`";
$res_sel =mysql_query($qury_sel);

while($fet_sel =mysql_fetch_array($res_sel))
{?>

  <div class="w3-card-4">
                <div class="w3-card-2">
                <img alt="apple" src="<?php echo $fet_sel['imagee'];?>">
                </div>
                <div class="text_k"><?php echo $fet_sel['name'];?>
                </div>
                <div class="text_kk">Rs:<?php echo $fet_sel['price'];?>
                </div>
                <div class="add_cart">
                Quantity :<input type="text" value="1" class="input_type"><input type="submit" value="Add to Cart" class="but" id="<?php echo $fet_sel['product_id'];?>">
                <input type="submit" value="Add to Wishlist" class="butt">

                <input type="submit" value="Buy Now" class="butto"></form>
              </div>

  </div>

<?php }?>
</div>
</body>
</html>
