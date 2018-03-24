
function fun2()
{
  var f1,f2,f3,f4,f5,f7=0;
if(document.getElementById("uid").value=="")
{
 f1=1;
}
if(document.getElementById("eid").value=="")
{
f2=1;
}
if(document.getElementById("mid").value=="")
{
f3=1;
}
if(document.getElementById("sid").value=="")
{
f4=1;
}
if(document.getElementById("gid").value=="")
{
f5=1;
}


if(f1 && f2 && f3 && f4 && f5==1){
document.getElementById("suid").innerHTML="Please enter User id";
document.getElementById("seid").innerHTML="Please enter email id";
document.getElementById("smid").innerHTML="Please enter mobilejjjjj number";
document.getElementById("ssid").innerHTML="Please enter gender";
document.getElementById("sgid").innerHTML="Please enter address";
document.getElementById("sunid").innerHTML="Please enter user id";
return false;
}
if(f1 || f2 || f3 || f4 || f5==1){

if(f1==1){
document.getElementById("suid").innerHTML="Please enter User id";
return false;
}
else{
  document.getElementById("suid").innerHTML="";
}
if(f2==1){
document.getElementById("seid").innerHTML="Please enter email id";
return false;
}
else{
document.getElementById("seid").innerHTML="";
}
if(f3==1){
  document.getElementById("smid").innerHTML="Please enter mobile sdffdsf number";
  return false;
}
else{
document.getElementById("smid").innerHTML="";
}
if(f4==1){
document.getElementById("ssid").innerHTML="Please enter gender";
return false;
}
else{
document.getElementById("ssid").innerHTML="";
}
if(f5==1){
document.getElementById("sgid").innerHTML="Please enter address";
return false;

}
else{
document.getElementById("sgid").innerHTML="";
}
}
else{
  document.getElementById("suid").innerHTML="";
  document.getElementById("seid").innerHTML="";
  document.getElementById("smid").innerHTML="";
  document.getElementById("ssid").innerHTML="";
  document.getElementById("sgid").innerHTML="";

  var name=document.getElementById("uid").value;
  var email=document.getElementById("eid").value;
  var mobile=document.getElementById("mid").value;
  var gender=document.getElementById("sid").value;
  var add=document.getElementById("gid").value;

  $.post("val_update.php",
    {
        name:name,
        email:email,
        mobile:mobile,
        gender:gender,
        add:add
    },
    function(data, status){
      if(data=="ok"){
      location.href="profile.php";
      }
      else {
          alert("An Error Occured");
      }
    });
  }
  }
