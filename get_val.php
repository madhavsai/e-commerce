<html>
<?php
if(isset($_POST['s3']))
{
}
?>
<?php
session_start();
include "signup_db.php";
$name=$_SESSION['email_id'] ;
$qury_sel="select * from `signup` where user_id='$name'";
$res_sel =mysql_query($qury_sel);
while($fet_sel =mysql_fetch_array($res_sel)){?>
  <head>
<style>
.hd{
   display:none;
 }
 #h{

    width:50%;
    float:right;
  }
  #h1{
     float:left;width:50%;
   }
  #nm{
      float:right;
    }
  .f{
     float:left;
   }
   .spn{
         height:6%;
         width:100%;
         text-align:right;
         display: block;
         color:red;
     }
</style>
  <script src="jquery-1.11.3.min.js"></script>
  <script>
  function fun2()
  {
    var f1,f2,f3,f4,f5,f6,f7=0
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
if(document.getElementById("unid").value=="")
{
 f6=1;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    f7=1;}

if(f1 && f2 && f3 && f4 && f5 && f6==1){
  document.getElementById("suid").innerHTML="Please enter User id";
  document.getElementById("seid").innerHTML="Please enter email id";
  document.getElementById("smid").innerHTML="Please enter mobile number";
  document.getElementById("ssid").innerHTML="Please enter gender";
  document.getElementById("sgid").innerHTML="Please enter address";
  document.getElementById("sunid").innerHTML="Please enter user id";
return false;
}
if(f1 || f2 || f3 || f4 || f5 || f6==1){
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
    document.getElementById("smid").innerHTML="Please enter mobile number";
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
if(f6==1){
  document.getElementById("sunid").innerHTML="Please enter user id";
  return false;
}
else{
    document.getElementById("sunid").innerHTML="";
}
if(f7==1){
  document.getElementById("seid").innerHTML="Please enter valid email id";
  return false;
}
else{
    document.getElementById("seid").innerHTML="";
}
}
else{
  return true;

}

}

function cal()
{
   var name=document.getElementById("uid").value;
   var email=document.getElementById("eid").value;
   var mobile=document.getElementById("mid").value;
   var gender=document.getElementById("sid").value;
   var add=document.getElementById("gid").value;
    var uni=document.getElementById("unid").value;
   $.post("val_update.php",
     {
         name:name,
         email:email,
         mobile:mobile,
         gender:gender,
         add:add,
         uni:uni
     },
     function(data, status){
       if(data=="ok"){
         alert("update succuscces");
       }

     });

}
  </script>
</head>
  <body>
  <form method="post" onSubmit="return cal()" action="javascript:return cal();">
 <br><br><div id="h1"><div id="nm">User Name:&nbsp&nbsp</div></div><div id="h"><input type="text" id="uid" value="<?php echo $fet_sel['user_id'];?>"placeholder="User_id"></div><br>
  <span id="suid" class="spn"></span>
  <div id="h1"><div id="nm">Email&nbspId&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</div></div><div id="h"><input type="text" id="eid" value="<?php echo $fet_sel['email_id'];?>" placeholder="email_id"></div><br>
  <span id="seid" class="spn"></span>
  <div id="h1"><div id="nm">Mobile&nbspNo&nbsp&nbsp:&nbsp&nbsp</div></div><div id="h"><input type="text" id="mid" value="<?php echo $fet_sel['mobno'];?>"placeholder="mobno"></div><br>
  <span id="smid" class="spn"></span>
  <div id="h1"><div id="nm">Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</div></div><div id="h"><input type="text" id="sid" value="<?php echo $fet_sel['gender'];?>"placeholder="gender"></div><br>
  <span id="ssid" class="spn"></span>
  <div id="h1"><div id="nm">Address&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</div></div><div id="h"><input type="text" id="gid" value="<?php echo $fet_sel['adress'];?>"placeholder="address"></div><br>
  <span id="sgid" class="spn"></span>
  <div id="h"><input type="text" class="hd" id="unid" value="<?php echo $fet_sel['uid'];?>"placeholder=""></div><br>
  <span id="sunid" class="spn"></span>
  <center><input type="submit" value="Change" onclick="return fun2()" id="s3"></center>
</body>
<?php
 }
?>
</html>
