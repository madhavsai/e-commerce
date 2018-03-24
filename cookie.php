<html>

<body>
  <input type="text" value="<?php echo "hai" ?>" id="hk">
  <?php
session_start();
  echo $_SESSION["user_id"]; ?>
</body>
<script>
var x = document.getElementById("hk").value;
    var y=document.cookie.split(';');

    <?php $value=$_COOKIE["product_ids"];
    $varable=explode(",",$value);
    ?>
var newval="<?php echo $varable; ?>";
alert(newval);


for(i=0;i<=y.length;i++){
}
</script>
</html>
