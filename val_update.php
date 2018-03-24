<?php
session_start();
include "signup_db.php";
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$add=$_POST['add'];
$uni=$_SESSION['uid'];
$qury_sel="update `signup` SET user_id='$name',email_id='$email',mobno='$mobile',gender='$gender',adress='$add' WHERE uid='$uni'";
$qry_ins=mysql_query($qury_sel);
if (mysql_query($qury_sel)) {
    echo "ok";
} else {
    echo "not" ;
}
?>
