//this is for the drop down menu for user who login
var ucookie=document.cookie;
var n=ucookie.search("uname");
var buyitemid;
var buyitemqan;
var buyitemprice;
//for the user menu
    function umenushow(){
    	document.getElementById('umenu').style.display='block';
    		}
    		function goneumenu(){
    			document.getElementById('umenu').style.display='none';
    		}
//founction for the logout
function logout(){
  $.post("logout.php",
    {
    },
    function(data, status){
      if(data=="ok"){
        location.reload();
      }
      else{
        alert("An Error occured");
      }
    });
}
//this is for the signup open and close div only
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
//add new item script
var chek=0;
var arr=[];
  function add_item(id){
$("#mycart").load(location.href + " #mycart");
    var id_no=id;
    document.getElementById('light').style.display='block';
		arr[arr.length]=id_no;
    $("#bulb").load("add_item.php?name="+ id_no + "&vlues_product=" + arr);
		document.getElementById(id).disabled = true;
		document.getElementById(id).title = "disabled";
		document.getElementById(id).value = "Item in cart";
		$("#mycart").load(location.href + " #mycart");
    }
//temp car
function cart(){
	 window.location.href = 'cart.php?name='+arr;
}
//sticky header
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){
			  $('.head').addClass("sticky");
        $('header').addClass("sticky");
				document.getElementById('nav').style.display='none';
    }
    else{

        $('header').removeClass("sticky");
				  $('.head').removeClass("sticky");
				   $('#nav').slideDown(100);
					 	document.getElementById('nav').style.display='block';

    }
});
//for the sticky header
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){
			  $('.head').addClass("sticky");
        $('header').addClass("sticky");
				document.getElementById('nav').style.display='none';
    }
    else{

        $('header').removeClass("sticky");
				  $('.head').removeClass("sticky");
				   $('#nav').slideDown(100);
					 	document.getElementById('nav').style.display='block';

    }
});
function buy_item(id){
buyitemid=id.replace("buy","");
buyitemqtemp=buyitemid.concat("qan");
buyitemqan=document.getElementById(buyitemqtemp).value;
temp=buyitemid.concat("price");
buyitemprice=document.getElementById(temp).innerHTML;
var username=document.getElementById("loginuser").innerHTML;
if(username == "Login/Signup"){
  document.getElementById('overlay').style.display='block';
      document.getElementById('plogin').style.display='block';
  document.getElementById('msg').innerHTML ="Please login to Place order";
}
else{
  document.getElementById('overlay').style.display='block';
      document.getElementById('addcontainer').style.display='block';
}
}
function plogcls(){
  document.getElementById('overlay').style.display='none';
			document.getElementById('plogin').style.display='none';
       signup();
}
function addresschek(){
  if(document.getElementById("addbox").value==""){
    document.getElementById("addresserror").innerHTML="Please Enter your address.";
  }
  else{
    var orderadd=document.getElementById("addbox").value;
    var sendtotalp=buyitemqan*buyitemprice;
    $.post("cart_ins.php",
      {
        pids: buyitemid,
          quantity:buyitemqan,
          address:orderadd,
          total:sendtotalp
      },
      function(data, status){
        if(data=="ok"){
          document.getElementById('addcontainer').style.display='none';

        document.getElementById("suckorder").style.display='block';
        }
      });
  }
}
//for the address container clsose
function addcontainer_cls(){
    document.getElementById('addcontainer').style.display='none';
    location.reload();
}
//for the delivery
function del_order(){
  var username=document.getElementById("loginuser").innerHTML;
  if(username == "Login/Signup"){
    document.getElementById('overlay').style.display='block';
        document.getElementById('plogin').style.display='block';
    document.getElementById('msg').innerHTML ="Please login to Place order";
  }
  else{
    document.getElementById('overlay').style.display='block';
    document.getElementById("delcont").style.display='block';
  }
}
function del_ordercls(){
  document.getElementById('overlay').style.display='none';
  document.getElementById("delcont").style.display='none';
}
//for the deliver validation
function order(){
	var l,l1=0;
  if(document.getElementById("rqproducts").value=="")
  {
  l=1;
  }
  if(document.getElementById("rqaddressval").value=="")
  {
  l1=1;
}
	if(l && l1==1){
	document.getElementById("requesterror").innerHTML="type your requirment";

	  document.getElementById("addresserror").innerHTML="Please enter address details";
		return false;
	}
	if(l || l1==1){
		if(l==1){
			document.getElementById("requesterror").innerHTML="type your requirment";
			return false;
		}
		else {
				document.getElementById("requesterror").innerHTML="";

		}
if(l1==1){
	document.getElementById("addresserror").innerHTML="Please enter address details";
	return false;
}
else {
		document.getElementById("addresserror").innerHTML="";
}
	}
	else{
	  document.getElementById("addresserror").innerHTML="";
	  document.getElementById("requesterror").innerHTML="";
		var name=document.getElementById("rqproducts").value;
		var add=document.getElementById("rqaddressval").value;

		$.post("delver_order.php",
			{
				name: name,
					add:add
			},
			function(data, status){
				if(data=="ok"){
          document.getElementById("delcont").style.display='none';
			  document.getElementById("suckorder").style.display='block';
         return;
				}else{
          document.getElementById("delcont").style.display='none';
        document.getElementById("suckorder").style.display='block';
				}

			});

	}


}
