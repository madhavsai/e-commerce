
<?php

	if(!isset($_COOKIE["product_ids"])){
	  setcookie("product_ids","0",time() + (86400 * 3000),'/');
	}

$cookie_name="product_ids";
include "new_item_db.php";
$ha=$_GET["name"];
$value=$_COOKIE["product_ids"];
$varable=explode(",",$value);
array_push($varable,$ha);
$h1=implode(",",$varable);
setcookie($cookie_name,$h1,time() + (86400 * 30),'/');
$qury_sel="select * from `product` where product_id=$ha";
$res_sel =mysql_query($qury_sel);
while($fet_sel =mysql_fetch_array($res_sel)){ ?>

  <div class="con_1">
    <div class="imgsrc">
  <img alt="apple" src="<?php echo $fet_sel['imagee'];?>"></div>
  <div class="con_2">
    <div class="pro_name"><?php echo $fet_sel['name'];?> has been added in cart</div>
  <div class="price"><b>Rs:<?php echo $fet_sel['price'];?></b></div>
  <a href="#" onclick="cart();" >view cart</a>
</div>

  </div>

<?php }
//$h=explode(",",$ha);
 ?>
