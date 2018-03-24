<?php
if(isset($_POST['s1']))
{
}
?>
<html>
  <head>
	<style>
   .fom{
     margin-left: 40%;
     margin-top: 3%;
   }

  #dd{
    height: 350px;
    width: 500px;
    display: none;
    margin-left:auto;
    margin-right:auto;


  }
 .hd input[type="text"]{
    display: none;
  }
  .s{color:blue;}/*span css*/
	</style>
  <script src="jquery-1.11.3.min.js"></script>
  <script>
  function fun1()
  {
  if(document.getElementById("txt").value=="")
  {
   document.getElementById("get").innerHTML="fill this with some thing";
   return false;
 }
 else {
   var name=document.getElementById("txt").value;
   $.post("get_val.php",
     {
         name:name,
     },
     function(data, status){
     });
  return true;
 }
}
  function callme(){
    document.getElementById('dd').style.display='block'
    var t=document.getElementById("txt").value;
    $("#dd").load('get_val_demo.php?name='+ t);
  }

  </script>
  </head>
  <body>
  <form method="post" onSubmit="return callme()" action="javascript:return callme();" class="fom">
<input type="text" class=".tftextinput" id="txt" placeholder="please enter ur user id">
  <input type="submit" class="tfbutton" value="Get" onclick="return fun1()"><br><span id="get" class="s"></span><br></form><br>
  <div id="dd"></div>
  <body>
</html>
