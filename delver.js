function close()
{
	document.getElementById('container').style.display='none';
	location.href="home.php";
}
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
				login_chek();
				}else{
					alert("order error");
				}

			});

	}


}
function login_chek(){
location.href = "home.php";

}
