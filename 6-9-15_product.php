<html>
<head>
	<style>
	.overlay{
		display:none;
position: absolute;
top: 0%;
left: 0%;
width: 100%;
height: 100%;
background-color: black;
z-index:1001;
-moz-opacity: 0.8;
opacity:.80;
filter: alpha(opacity=80);
	}
	.signup{
		display: none;dsf
		position: absolute;
		top: 15%;
		left: 20%;
		width: 60%;
		height: 80%;
		padding: 6px;
		border: 6px solid orange;
		background-color: white;
		z-index:1002;
		overflow: auto;
	}
	.signup_con{align-self: bottom;
		display: none;
		width: 100%;
		height: 90%;
		background-color: lightgreen;
	}
	.sign_close{
		text-align: right;
		width: 100%;
		height: 10%;
		background-color: lightblue;
	}
	.sign_close a{
		color: black;
	  font-size: 20px;
	  text-decoration: none;
	}
/* styles for the temparary cart*/
.temp_cart{
	text-align: center;
	display: flex;
	flex-wrap: wrap;
	display: none;
	position: absolute;
	top: 11.5%;
	left: 55%;
	width: 500px;
	z-index: 1000;
	height: 350px;
	border: 1px solid black;
	overflow: auto;
	background-color: F5F5F5;
}
.temp_cart a{
	text-decoration: none;
	font-size: 30px;
}
.temp_close{
  order: 1;
  top:0;
  height:15%;
  width: 100%;
	background-color: lightblue;
  text-align: center;

  }
	.temp_close a{
		margin-left: 200px;
		align-items: right;
		font-size: 30px;
		text-decoration: none;
	}
.temp_cont{
	height: 70%;
	width: 100%;
	background-color: lightgreen;
}
	</style>
<script src="jquery-1.11.3.min.js"></script>
<meta charset="utf-8">
<link href="grid.css" rel="stylesheet" type="text/css">
<link href="w3.css" rel="stylesheet" type="text/css">
<meta  name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen and (max-width:800px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:1440px)" href="desk.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:1440px)" href="head_foot.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:801px) and (max-width:1440px)" href="product.css">
 <title>90cart</title>
<style>
</style>
</head>
<body>

<div class="head">
	<div class="main_cont">
  		<div class="logo_cont">
			<div class="logo"><img src="k.png"></div>
   		</div>

  		<div class="empty_cont">
  				<div class="empty"></div>
  		</div>
  		<div class="acc_cart">
  				<div class="account"><a id="a" href="#"  onclick = "signup();">Login</a></div>
  				<div class="cart" onmouseover="temp_cart();" onmouseout="close_temp();">My cart</div>
  		</div>
			<div id="mnav">
			<ul id="nav">
        <li><a href="#">Clothing</a>
              <ul>
<li><a href="#">jean</a></li>
<li><a href="#">cotton jean</a></li>
<li><a href="#">body fit</a></li>
  </ul>
      </li>
														<li><a href = "javascript:void(0)" onclick = "">clothing</a>
																	<ul>
						<li><a href="#">jean</a></li>
					<li><a href="#">cotton jean</a></li>
						<li><a href="#">body fit</a></li>
											</ul>
													</li>
													<li><a href="#">General Stores</a>
																	<ul>
																				<li><a href="#">rice</a></li>
																				<li><a href="#">dall</a></li>
																				<li><a href="#">sugar</a></li>
																				<li><a href="#">oil</a></li>
																	</ul>
													</li>
												<li><a href="#">Food</a>
																<ul>
																				<li><a href="#">curry puff</a></li>
																				<li><a href="#">egg puff</a></li>
															</ul>
											</li>
			</ul>
		</div>
                 <div class="search_cont"><div class="search"><input type="text"></div></div>

	</div>

</div>
<div class="content">
  	<div class="container">
  			<div class="filters">
					<p>price </p><br><p>price </p><br><p>price </p><br><p>price </p>
  			</div>
  			<div class="product" id="hk"><div id="first_load"></div></div>
				<div id="light" class="add_item"><div class="close"> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none'">close</a></div><div class="data_con" id="bulb"></div></div>
<div class="overlay" id="overlay"></div><div class="signup" id="signup"><div class="sign_close"><a href="#" onclick="signup_cls();">Close</a></div> <div id="signup_con" class="signup_con"></div></div>
<div class="temp_cart" id="temp_cart" onmouseover="temp_cart();" onmouseout="close_temp();"><div class="temp_close">Items in the cart<a href="#" onclick="close_temp();">close</a></div><div class="temp_cont"></div><a href="#" onclick="cart();">view cart</a></div>
	  <script type="text/javascript">
		function signup(){
			document.getElementById('signup').style.display='block';
			document.getElementById('overlay').style.display='block';
			document.getElementById('signup_con').style.display='block';
			$("#signup_con").load('signup.php');
		}
		function signup_cls(){
			document.getElementById('signup').style.display='none';
			document.getElementById('overlay').style.display='none';
			document.getElementById('signup_con').style.display='none';
		}
			var z=0;
			var t=0;
			var sam=0;
		window.onload = hai;
		function hai(){
			$("#first_load").load('kk.php?name='+t);
			  var data=document.cookie;
					alert(data);
		}

		function loadmore(){

			$('#hk').append($('<div class="pro"> </div>'));
			var bc=document.querySelectorAll('.pro');
			bc[z].id=z;

		}
		 $(window).scroll(function() {
       if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {

if(sam==0){
				 if(t<=20){
				 loadmore();
				 t=t+8;
$("#"+z).load('kk.php?name='+ t);
	z++;}
	else{
		$('#hk').append($('<p>end of the page</p>'));
		sam++
	}
       }
		 }
    });

//add new item script

var chek=0;
var arr=[];
  function add_item(id){
    var id_no=id;
    document.getElementById('light').style.display='block'
    $("#bulb").load('add_item.php?name='+id_no);
    arr[arr.length]=id_no;

		a = new Date(new Date().getTime() +1000*60*60*24*365);
document.cookie = 'mycookie="+arr+"; expires='+a.toGMTString()+';';
		document.getElementById(id).disabled = true;
		document.getElementById(id).title = "disabled";
		document.getElementById(id).value = "Item in cart";
		var data=document.cookie;
			alert(data);
    }
//temp cart
function temp_cart(){
	document.getElementById('temp_cart').style.display='block';
}
function close_temp(){
	document.getElementById('temp_cart').style.display='none';
}
function cart(){
	 window.location.href = 'cart_test.php?name='+ arr;
}
    </script >


</div>
</div>
</div>
<div class="fotter"></div>
</body>
</html>
