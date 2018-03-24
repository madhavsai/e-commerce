<html>
<?php
session_start();
?>
<head>
<script src="jquery-1.11.3.min.js"></script>
<script src="head.js"></script>
<meta charset="utf-8">
<meta  name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
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
  <div class="addcontainer" id="addcontainer">
    <div class="addhead">
      Your order Delivery Address <i class="fa fa-close" style="font-size:20px;cursor:pointer;margin-left:10px;" onclick="addcontainer_cls();"></i>
    </div>
    <textarea rows="6" cols="40" id="addbox" class="textaa"><?php
    if($_SESSION['addres']==null)
    {

    }
    else{
        echo $_SESSION["addres"];
    }?></textarea>
    <input type="button" value="ok" onclick="addresschek();" id="addchek"><br><span id="addresserror"></span>
  </div>
  </header>
<div class="plogin" id="plogin"><button onclick="plogcls();">ok</button></div>
  <div class="suckorder" id="suckorder"><p id="suckor">Your order is Placed successfully</p><button onclick="location.href='order.php'">ok</button></div>

<div class="content">
  	<div class="container">
  			<div class="filters">
          <div class="vegpack">
            <img src="images/im.jpg">
            <h2>Items in Combo Pack</h2>
            <ol>
              <h3><li>Onions(300g)</li></h3>
              <h3><li>Tomato(300g)</li></h3>
              <h3><li>chili(200g)</li></h3>
              <h3><li>Ginger(150g)</li></h3>
              <h3><li>Coriander-leaves</li></h3>
              <h3><li>Curry-leaves</li></h3>
            </ol>
          </div>
  			</div>
  			<div class="product" id="hk">
<div class="combo_load" id="comboload"></div>
          <div id="first_load"></div>

        </div>
				<div id="light" class="add_item"><div class="close"> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none'"><i class="fa fa-remove" style="font-size:24px"></i></a></div><div class="data_con" id="bulb"></div></div>
<div class="overlay" id="overlay"></div><div class="signup" id="signup"><div class="sign_close"><a href="#" onclick="signup_cls();">Close</a></div> <div id="signup_con" class="signup_con"></div></div>
</div>
</div>
</div>
<div class="fotterr">
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
    <div class="fs" id="copyrights">  &#169; Jangalala 2016</div>
  </div>
  <div class="ft"><br>
    <img src="icons\f.png" height="42px" width="42px" align="left"></img>
    <img src="icons\t.png" height="42px" width="42px"  align="left"id="img_t"></img>
    <img src="icons\g.png" height="42px" width="42px"  align="left"id="img_g"></img>
    <img src="icons\wa.ico" height="42px" width="42px"  align="left"id="img_g"></img>
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
  var z=0;
  var t=24;
  var sam=0;
window.onload = hai;
function hai(){
var k=0;
    $("#comboload").load('loader1.php?name='+k);
  $("#first_load").load('loader.php?name='+t);
}
function loadmore(){
  $('#hk').append($('<div class="pro"> </div>'));
  var bc=document.querySelectorAll('.pro');
  bc[z].id=z;
}
 $(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
if(sam==0){
     if(t<=40){
     loadmore();
     t=t+8;
$("#"+z).load('loader.php?name='+ t);
z++;}
else{
$('#hk').append($('<span class="endp">End of the page</span>'));
sam++
}
}
 }
 });
</script >
</body>
</html>
