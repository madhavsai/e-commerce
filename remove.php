<?php
$ha=$_POST["pids"];
$value=$_COOKIE["product_ids"];
$varable=explode(",",$value);
  $len=count($varable);
  $m=0;
for($i=0;$i<$len;$i++){
if($varable[$i]==$ha){
  $n=2;
}else{
  $n=1;
}
  switch ($n) {
      case 1:
          $newarray[$m]=$varable[$i];
          $m++;
          break;
      case 2:
          break;}

}
 $hh=implode(",",$newarray);
  setcookie("product_ids",$hh,time() + (86400 * 30),'/');
  echo "ok";
?>
