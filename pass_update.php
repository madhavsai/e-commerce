<?php
session_start();
include "signup_db.php";
$op=$_POST['op'];
$np=$_POST['np'];
$uni=$_SESSION['user_id'];
$pass=$_SESSION['password'];
if($op==$pass)
{
$qury_sel="update `signup` SET password='$np' WHERE user_id='$uni' ";
if (mysql_query($qury_sel)) {
    echo "ok";
} else {
    echo "not" ;
}
}
?>
