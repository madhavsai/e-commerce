<?php
include "signup_db.php";
$email="madhavsai27@hotmail.com"
$ins=(mysql_query("select * from `signup` where email_id='$email'"));
while ($fet_sel =mysql_fetch_array($ins)) {
echo $fet_sel['user_id'];
}

?>
