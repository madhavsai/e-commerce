
function fun2()
{

  var f1,f2,f3=0;
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



if(f1 && f2 && f3==1){
document.getElementById("suid").innerHTML=" enter your current password";
document.getElementById("seid").innerHTML=" enter your new password";
document.getElementById("smid").innerHTML="re enter password";
return false;
}
if(f1 || f2 || f3==1){

if(f1==1){
document.getElementById("suid").innerHTML="enter your current password";
return false;
}
else{
  document.getElementById("suid").innerHTML="";
}
if(f2==1){
document.getElementById("seid").innerHTML="enter your new password";
return false;
}
else{
document.getElementById("seid").innerHTML="";
}
if(f3==1){
  document.getElementById("smid").innerHTML="re enter password";
  return false;
}
else{
document.getElementById("smid").innerHTML="";
}
}
var op=document.getElementById("uid").value;
var np=document.getElementById("eid").value;
var rp=document.getElementById("mid").value;
if(np==rp)
{
  document.getElementById("suid").innerHTML="";
  document.getElementById("seid").innerHTML="";
  document.getElementById("smid").innerHTML="";
 $.post("pass_update.php",
   {
       op:op,
       np:np
   },
   function(data, status){
     if(data=="ok"){
      location.href="profile.php";
     }
   });
 }
else
  {
    document.getElementById("smid").innerHTML="password does nor match";
  }
}
