<?php
session_start();
include "signup_db.php";

$uname=$_POST["name"];
$password=$_POST["password"];
$res_sel=mysql_query("select * from `signup` where email_id='$uname' and password='$password'");
if($res_sel){
  if(mysql_num_rows($res_sel)>0)
{
  while($fet_sel =mysql_fetch_array($res_sel))
  {
    $_SESSION['user_id']=$fet_sel['user_id'];
    $_SESSION['email_id']=$fet_sel['email_id'];
    $_SESSION['mobno']=$fet_sel['mobno'];
    $_SESSION['password']=$fet_sel['password'];
    $_SESSION['uid']=$fet_sel['uid'];
      $_SESSION['addres']=$fet_sel['adress'];
    setcookie("uname",$uname,time() + (86400 * 1),'/');
    echo "ok";


 }
}
else{
  echo "not";
}
}
?>
