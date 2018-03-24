<html>
<?php
session_start();
?>
<head>  <link href="8/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="8/js-image-slider.js" type="text/javascript"></script>
  <link href="generic.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript">
      imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
  </script>
<script src="jquery-1.11.3.min.js"></script>
<script src="head.js"></script>
<meta charset="utf-8">
<link href="grid.css" rel="stylesheet" type="text/css">
<link href="w3.css" rel="stylesheet" type="text/css">
<meta  name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen and (max-width:800px)" href="style.css">
<link href="//fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:2440px)" href="head_foot.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:2440px)" href="product.css">
 <title>Jangalala</title>
</head>
<body>
  <header>
  <div class="head">
  	<div class="main_cont">
    		<div class="logo_cont">
  			<div class="logo"><a href="home.php"><img src="logo.jpg"></a></div>
     		</div>
    		<div class="acc_cart" >
    				<div class="account" id="umenuhand" onmouseover="umenushow();" onmouseout="goneumenu();"><a id="sinlink" href="#"  onclick = "signup();"><i class="fa fa-user" style="font-size:20px"></i><br><span id="loginuser"><?php
  					if(!isset($_COOKIE["uname"])){
  						echo "Login/Signup";
  					}else{
  						echo $_SESSION['user_id'];
  					}
  					?></span></a>
  					<div class="umenu" id="umenu" onmouseover="umenushow();" onmouseout="goneumenu();">

  						<div class="umenus"><a href="ProfileE.php">Edit Profile</a></div>
  						<div class="umenus"><a href="order.php">Orders</a></div>
  							<div class="umenus"><a href=# onclick="logout();">Logout</a></div>
  					</div>
  				</div>
    				<div class="cart" ><span id="mycart">
  						<button onclick="location.href='cart.php';"><i class="fa fa-shopping-cart" style="font-size:24px"></i>Cart(<?php
  					if(isset($_COOKIE["product_ids"])){
  						$value=$_COOKIE["product_ids"];
  							$varable=explode(",",$value);
  							$cartp=count($varable,1);
  							if($cartp==1){
  								echo 1;
  							}else if($cartp==2){echo 2;}
  							else if($cartp>2){
  								echo count($varable);
  							}
  					}
  					else{
  						  setcookie("product_ids","1",time() + (86400 * 30),'/');
  							echo "0";
  					}
  						 ?>) </button></span></div>
    		</div>
  			<div id="mnav">
  			<ul id="nav">

  														<li><a href="product.php">Vegetables</a>
  													</li>

  												<li><a href="#" onclick="del_order();"class="delivery">Delivery&nbspservices</a>
  											</li>
  			</ul>
  		</div>
      <div class="delivery_con" id="delcont"><form method="POST" onSubmit="return login_db()" action="javascript:return login_db();">
        Delivery Services<i class="fa fa-remove" style="font-size:24px;margin-left:80px;cursor:pointer;" onclick="del_ordercls();"></i>
        <div class="rserve"><center><textarea rows="6" cols="10" placeholder="type u r requirments" class="rt" id="rqproducts"></textarea></center><span class="clr" id="requesterror"></span></div>
          <div class="rserve"><center><textarea rows="6" cols="10" placeholder="enter address details" class="rt" id="rqaddressval" ></textarea><br><span class="clr" id="addresserror"></span><br></center></div>
   <center><input type="submit" value="order" onclick="return order()"></center>
 </div>
                   <div class="search_cont"><img src="safe.png"></div>
  <div class="help_cont"><div class="help"><i class="fa fa-headphones" style="font-size:24px"></i>&nbspHelp is <br>&nbsphere<br> 9059955522</div></div>
  	</div>
  </div><div class="singup_suck" id="singup_suck"><p id="suck"></p><button onclick="suck_cls();">ok</button></div>  <div class="overlay" id="overlay"></div>
<div class="signup" id="signup"><div class="sign_close"><a href="#" onclick="signup_cls();"><i class="fa fa-close" style="font-size:36px"></i></a></div> <div id="signup_con" class="signup_con"></div></div>
<div class="plogin" id="plogin" onclick="plogcls();"><button onclick="plogcls();">ok</button></div>
  <div class="suckorder" id="suckorder"><p id="suckor">Your order is Placed successfully</p><button onclick="location.href='order.php'">ok</button></div>

  </header>
<div class="overlay" id="overlay"></div><div class="signup" id="signup"><div class="sign_close"><a href="#" onclick="signup_cls();">Close</a></div> <div id="signup_con" class="signup_con"></div></div>

<div class="body_home">
      <div id="sliderFrame">
          <div id="slider">
              <a href="http://www.jangalala.com" target="_blank">
                  <img src="c4.jpg" alt="#cap1" />
              </a>
              <img src="c1.jpg" alt="#cap0" />
              <img src="c2.jpg" alt="#cap3" />
              <img src="c3.jpg" alt="#cap4" />
              <img src="c4.jpg" alt="#cap2" />
          </div>
          <div style="display: none;">
              <div id="cap1">
                 <a href="http://www.jangalala.com/">  Welcome to jangalala.com</a>.
              </div>
              <div id="cap0">
                 <a href="product.php">Order today</a>.
              </div>
              <div id="cap2">
                  <a href="product.php">Free Delivery Services</a>
              </div>
              <div id="cap3">
                   <a href="product.php">Get fresh Vegetables</a>
              </div>
              <div id="cap4">
                  <a href="product.php">Tomorrow Early Morning</a>
              </div>
          </div>
      </div>
<br><br><br>
<center><a href="product.php"><img src="21.png"  ></a></center><br><br>
<center><a href="product.php"><img src="prs.png" ></a></center>
<div class="fotter">
  <div class="ft">
   <div class="empty"></div>
    <div class="fs" id="pad">About us&nbsp</div>
    <div class="fs" id="pad">Contact Us</div>
  </div>
  <div class="ft">
    <div class="empty"></div>
    <div class="fs">Help</div>
    <div class="fs">Terms & Condtions</div>
    <div class="empty"></div>
    <div class="fs" id="copyrights">  &#169; jangalala 2016</div>
  </div>
  <div class="ft"><br>
    <img src="icons\f.png" height="42px" width="42px" align="left"></img>
    <img src="icons\t.png" height="42px" width="42px"  align="left"id="img_t"></img>
    <img src="icons\g.png" height="42px" width="42px"  align="left"id="img_g"></img>
    <img src="icons\wa.ico" height="42px" width="42px"  align="left"id="img_g"></img>
  </div>
</div>

</div>
<script type="text/javascript">
//this is for the drop down menu for user who login
var ucookie=document.cookie;
var n=ucookie.search("uname");
if(n==-1){
  $("#umenuhand").removeAttr("onmouseover");
  $("#umenuhand").removeAttr("onmousout");
}
else {
$("#sinlink").removeAttr("onclick");
$("#sinlink").attr({
          "href" : "profile.php",
      });
    }
</script >
</body>
</html>
