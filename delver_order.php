<?php
session_start();
include "orders_db.php";
$pids=$_POST["name"];
$address=$_POST["add"];
$uid=$_SESSION['uid'];
$qry_ins=(mysql_query("insert into `orders`.`$uid` (productsname,address)
   values('$pids','$address')"));
   if($qry_ins==1)
     {
     include "signup_db.php";
       $name=$_SESSION['uid'];
       $res_sellll=mysql_query("select * from `signup` where uid='$name'");
       while($fet_sel =mysql_fetch_array($res_sellll))
       { $usernumber=$fet_sel['mobno'];
         $username=$fet_sel['user_id'];
         $useraddres=$address;
        include "orders_db.php";
        $qry_inssss=(mysql_query("insert into `orders`.`orders` (name,mobno,pid,address)
           values('$username','$usernumber','$pids','$useraddres')"));
           echo "ok";
       }
}
?>
