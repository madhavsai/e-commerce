<?php
session_start();
session_unset(); 
setcookie("uname", "", time() - 3600,'/');
setcookie("product_ids", "", time() - 3600,'/');
echo "ok";
?>
