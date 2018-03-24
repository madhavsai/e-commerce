<?php
include "signup_db.php";
$resource = mysql_query("SELECT user_id FROM signup WHERE user_id IS NOT NULL");
$count = mysql_num_rows($resource);
$id=5000+$count;
echo $id;
?>
