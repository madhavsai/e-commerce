<html>
<?php
session_start();
?>
<head>
<script src="jquery-1.11.3.min.js"></script>
<script src="head.js"></script>
<meta charset="utf-8">
<link href="w3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="profile.css">
<meta  name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<link href="//fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:2440px)" href="desk.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:2440px)" href="head_foot.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:2440px)" href="product.css">
 <title>90cart</title>
</head>
<body>
  <header>
  <div class="head">
  	<div class="main_cont">
    		<div class="logo_cont">
  			<div class="logo">90Cart</div>
     		</div>
    		<div class="empty_cont">
    				<div class="empty"></div>
    		</div>
    		<div class="acc_cart" >
    				<div class="account" id="umenuhand" onmouseover="umenushow();" onmouseout="goneumenu();"><a id="sinlink" href="#"  onclick = "signup();"><span><?php
  					if(!isset($_COOKIE["uname"])){
  						echo "Login/Signup";
  					}else{
  						echo $_SESSION['user_id'];
  					}
  					?></span></a>
  					<div class="umenu" id="umenu" onmouseover="umenushow();" onmouseout="goneumenu();">

  						<div class="umenus"><a href="ProfileE.php">Edit Profile</a></div>
  						<div class="umenus"><a href="Orders.php">Orders</a></div>
  						<div class="umenus"><a href="Wishlist.php">Wishlist</a></div>
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
  														<li><a href=#></a>
  													</li>
  													<li><a href="#" class="delivery">Delivery&nbspvservices</a>
  													</li>
  												<li><a href="#"></a>
  											</li>
  			</ul>
  		</div>
                   <div class="search_cont"><div class="search"><input type="text" placeholder="Search all products..."><button><i class="fa fa-search" style="font-size:15px"></i>
  </button></div></div>
  	</div>
  </div><div class="singup_suck" id="singup_suck"><p id="suck"></p><button onclick="suck_cls();">ok</button></div>
  </header><div class="overlay" id="overlay"></div><div class="signup" id="signup"><div class="sign_close"><a href="#" onclick="signup_cls();">Close</a></div> <div id="signup_con" class="signup_con"></div></div>

<div class="content">

  			<div class="filters">
					<div class="mp"><h6><a id="a0">My Profile</a></h6></div>
					<div class="mn"><h6><a id="a1">Profile Info</a></h6></div>
	       	<div class="mn"><h6><a id="a2">Change Password</a></h6></div>
	       	<div class="mn"><h6><a id="a3">My Order</a></h6></div>
	    		<div class="mn"><h6><a id="a4">My Wishlist</a></h6></div>
	    		<div class="mn"><h6><a id="a5">Reviews & Rating</a></h6></div>
					<div class="mn"><h6><a id="a6">Deactivate Account</a></h6></div>
					<div class="mn"><h6><a id="a7">Logout</a></h3></div>
					<div class="space"align="center"></div>
					<div class="space"align="center"></div>
  			</div>
  			<div class="product" id="hk">
          							<div class="prof_head">Change Password</div>
          							<div class="prof_continer">
          								<form method="post" onSubmit="return cal();" action="javascript:return cal();">
          								<form method="get" action="ProfileE.php">
          						<div id="s"><span id="ud">Old Password&nbsp&nbsp:</span></div><div id="s1"><input type="text" id="uid" ><br><span id="suid" class="spn"></span></div><br>


          						<br><br>
          						<div id="s"><span id="ud">New Password&nbsp&nbsp:</span></div><div id="s1"><input type="text" id="eid" ><br><span id="seid" class="spn"></span></div><br>

          <br><br>
          						<div id="s"><span id="ud">Conform Password&nbsp&nbsp:</span></div><div id="s1"><input type="text" id="mid"><br><span id="smid" class="spn"></span></div><br>
          						<br><br>
          						<div id="s"><center></center></div>
          						<div class="prof_foot"><input type="submit" value="Change" onclick="return fun2()" id="s3"></div>
          						</div>


        </div>
</div>
</div>
<div class="fotter"></div>
</body>
</html>
