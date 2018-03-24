//script fot the subtotal
  var productids=["1"];
  var priceofsub=["1"];
  var qantity=["1"];
  function chenged(id){
  var idval=id;
  var dataval=document.getElementById(idval).value;
  var pid=idval.replace("text","");
  var pricedid=pid.concat("price");
  var  price= document.getElementById(pricedid).innerHTML;
  var subtotalprice=price*dataval;
  var newres = idval.replace("text","subtot");
  document.getElementById(newres).innerHTML=subtotalprice;
  $("#newres").load(location.href + " #newres");
totalprice();
  }
  //function for the getting the product ids to js
  function getids(id){
  	var blength=productids.length;
    productids[blength]=id;
    totalprice();
    }
function totalprice(){
 var arraylen=productids.length;
 var priid,pricedpid;
   var  priceofp;
   var priceoftotal=0;
var i;
//for the subtotal values
  for(i=1;i<arraylen;i++)
  {
  priid=productids[i];
    pricedpid=priid.concat("subtot");
    oldstring=document.getElementById(pricedpid).innerHTML;
priceofsub[i]=parseInt(oldstring,10);
}
//for the quantity ids
  for(i=1;i<arraylen;i++)
  {
    priid=productids[i];
    pricedpid=priid.concat("text");
  qantity[i]= document.getElementById(pricedpid).value;
  }
//for the caluculate the totalprice
for(i=1;i<arraylen;i++)
{
  priceoftotal=priceofsub[i]+priceoftotal;
}
document.getElementById("totalval").innerHTML=priceoftotal;
}
//place order script
function placeorder(){
  var username=document.getElementById("loginuser").innerHTML;
  if(productids.length==1){
  
  }
  else{
  if(username == "Login/Signup"){
    document.getElementById('overlay').style.display='block';
        document.getElementById('plogin').style.display='block';
    document.getElementById('msg').innerHTML ="Please login to Place order";
  }
  else{
    document.getElementById('overlay').style.display='block';
        document.getElementById('addcontainer').style.display='block';

/*
    */
  }
}
  return false;
}
function jkpk(){
  if(document.getElementById("addbox").value==""){
    document.getElementById("addresserror").innerHTML="Please Enter your address.";
  }
  else {
    var orderadd=document.getElementById("addbox").value;
    var sendpids=productids.toString();
    var sendqantity=qantity.toString();
    var totalget=document.getElementById("totalval").innerHTML;
sendtotalp=parseInt(totalget,10);
    $.post("cart_ins.php",
      {
        pids: sendpids,
          quantity:sendqantity,
          total:sendtotalp,
          address:orderadd
      },
      function(data, status){
        if(data=="ok"){
          document.getElementById('addcontainer').style.display='none';
        document.getElementById("suckorder").style.display='block';
        }
      });

  }
}
function noitemcls(){
  location.reload();
}
function plogcls(){
  document.getElementById('overlay').style.display='none';
			document.getElementById('plogin').style.display='none';
			 location.reload();
}
function removeme(id){
  var removetemp=id.replace("icon","");
  $.post("remove.php",
    {
      pids: removetemp
    },
    function(data, status){
      if(data=="ok"){
        location.reload();
      }
    });

}
