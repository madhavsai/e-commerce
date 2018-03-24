<?php
if(isset($_POST['s2']))
{
}
?>
<?php
session_start();
include "signup_db.php";
$name=$_SESSION['email_id'];
$res_sel =mysql_query("select * from `signup` where email_id='$name'");
while($fet_sel =mysql_fetch_array($res_sel))
{ ?>
<html>
<head>
<style>
#s{
  width:35%;
  float:left;
  text-align:right;
  font-size:20px;
}
#s1{
  width:65%;
  float:right;
  text-align:left;
  font-family:Calibri;
  font-size:20px;
}
.prof_head{
  line-height:70px;
  padding-left: 300px;
  width: 100%;
  height: 70px;
  font-size: 30px;
  text-decoration: underline;
}
.prof_continer{
  margin-top: 10px;
  width: 100%;
  height: 80%;
}
.prof_foot{
  margin-top: 15px;
  padding-left: 300px;
  width: 100%;
  height: 70px;
  font-size: 15px;
}
.prof_foot input[type="submit"]{
  height: 40px;
  width: 70px;
}
</style>
<script src="jquery-1.11.3.min.js"></script>
<script>
function update(){
  $("#hk").load('get_val.php');
}
</script>
</head>
<body>
  <div class="prof_head">Profile Information</div>
  <div class="prof_continer">

<div id="s">User Name:&nbsp&nbsp&nbsp</div><div id="s1"><?php echo $fet_sel['user_id'];?></div><br><br><br>
<div id="s">Email&nbspId&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</div><div id="s1"><?php echo $fet_sel['email_id'];?></div><br><br><br>
<div id="s">Mobile&nbspNo&nbsp&nbsp:&nbsp&nbsp</div><div id="s1"><?php echo $fet_sel['mobno'];?></div><br><br><br>
<div id="s">Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</div><div id="s1"><?php echo $fet_sel['gender'];?></div><br><br><br>
<div id="s">Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</div><div id="s1"><?php echo $fet_sel['adress'];?></div><br><br><br>
<div id="s"><center></center></div>
<div class="prof_foot"><input type="submit" value="update" onclick="update()" id="s2"></div>
</div>
<?php }?>

</body>
</html>
