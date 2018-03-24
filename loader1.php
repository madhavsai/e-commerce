<?php

if(!isset($_COOKIE["product_ids"])){
  setcookie("product_ids","0",time() + (86400 * 30),'/');
}
$q = $_GET["name"];
include "new_item_db.php";
$qury_sel="select * from `product` limit 24 offset $q";
$res_sel =mysql_query($qury_sel);


$value=$_COOKIE["product_ids"];
$varable=explode(",",$value);


while($fet_sel =mysql_fetch_array($res_sel))
{?>
  <div class="c3-card-4">
                <div class="c3-card-2">
                <img alt="combo"src="images/im.jpg"><span class="pluse">+</span>
                <img id="lod" alt="apple" src="<?php echo $fet_sel['imagee'];?>">
                </div>
                <div class="g_pro_name"><?php echo $fet_sel['name'];?> (300g)
                </div>
                <div class="g_pro_price">Rs:<span id="<?php echo $fet_sel['product_id'];?>price"><?php echo $fet_sel['price'];?></span>
                </div>
                <div class="add_cart" title="Click to buy">
                Quantity :<input type="text" value="1" class="input_type" id="<?php echo $fet_sel['product_id'];?>qan">


                <input type="submit" value="Buy Now" class="butto" id="<?php echo $fet_sel['product_id'];?>buy" onclick="return buy_item(this.id)">

                <?php
                $but_id=$fet_sel['product_id'];
                if (in_array($but_id, $varable)){?>
                    <input type="submit" value="Item in cart" title="Item already in cart" class="but" id="<?php echo $fet_sel['product_id'];?>" disabled>
              <?php  }
                else{ ?>
                    <input type="submit" value="Add to Cart" class="but" id="<?php echo $fet_sel['product_id'];?>" onclick="add_item(this.id)">

              <?php  }
  ?>

              </form>
              </div>

  </div>

<?php }?>
