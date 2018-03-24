<?php
session_start();
include "signup_db.php";
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$number=$_POST["mobile"];
$resource = mysql_query("SELECT user_id FROM signup WHERE user_id IS NOT NULL");
$count = mysql_num_rows($resource);
$id=500+$count;
$qry_ins=(mysql_query("insert into `signup`.`signup` (user_id,email_id,mobno,password,uid)
   values('$name','$email','$number','$password','$id')"));
   if($qry_ins==1)
     {
        include "orders_db.php";
       $qry_vv="CREATE TABLE `orders`.`$id` (`products_ids` VARCHAR(250) ,`productsname` VARCHAR(250) ,`quantity` VARCHAR(250) ,`totalprice` VARCHAR(15) ,`address` VARCHAR(250));";
 			if(mysql_query($qry_vv))
 			{
        $_SESSION['user_id']=$name;
        $_SESSION['email_id']=$email;
        $_SESSION['mobno']=$number;
        $_SESSION['password']=$password;
        $_SESSION['uid']=$id;
        $_SESSION['addres']=null;
        setcookie("uname",$name,time() + (86400 * 1),'/');
        echo "ok";
 			}
     }
      else{
    $error2=0;
       $ins=(mysql_query("select * from `signup` where email_id='$email'"));
       while($fet_sel =mysql_fetch_array($ins))
       {
          $email2=$fet_sel['email_id'];

            if($email==$email2){
                    echo "email";
                      $error2=1;
                            }
        }

        if($error2 == 0){
          $ins2=(mysql_query("select * from `signup` where mobno='$number'"));

                    while($fe_sel =mysql_fetch_array($ins2))
          {
           $num2=$fe_sel['mobno'];
                      if($num2==$number){
                            echo "number";
                                        }

         }


        }
}

?>
