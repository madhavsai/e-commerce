<?php
if(isset($_POST['s1']))
{
}
?><html>
<head>
    <style>
    #container{
       height: 100%;width:100%;
       display:block;
       position: absolute;
       top: 0%;
       left: 0%;
       width:1366px;
       height:1000px;
      background-color: black;
       z-index:1001;
      -moz-opacity: 0.8;
       opacity:.80;
       filter: alpha(opacity=50);
  }
    #login{height:60%;width:40%;float:left; top:10%;order: 1;position: fixed; 	background-color: white;;
    margin-left: 29%;margin-top:5%;}
    .rt{width: 230px; height: 50px;}
    #sub{height:80px;;width:100%;text-align: center;}
    #sub1{height:40px;;width:100%;text-align: center;}

    #sub input[type="submit"]{
      margin-top: 5px;
      height: 30px;
      width: 100px;
      background-color: gray;

      color: white;
      transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -webkit-transition: all 0.3s ease 0s;

    text-shadow:none !important;

    border:none !important;

    box-shadow:none !important;
    }
    #sub input[type="submit"]:hover{
      background-color: black;
    }
    #sub a{
      color: 0072C6;
      line-height: 20px;
    }
    .clr{color:red; font-family: "Montserrat","HelveticaNeue","Helvetica Neue",sans-serif;}

</style>
<script src="jquery-1.11.3.min.js"></script>
<script src="delver.js"></script>
</head>
<body>
      <div id="container">
        <div id="login">
            <div id="sub1"><a href="#" onclick = "close();">close</a></div>
            <div id="sub">
                <center><h2>Delivary Services</h2></center>
            </div>
            <div id="sub"><form method="POST" onSubmit="return login_db()" action="javascript:return login_db();">
               <center><textarea rows="4" cols="50" placeholder="type u r requirments" class="rt" id="uname"></textarea></center><span class="clr" id="uname_error"></span>
            </div>
            <div id="sub">
               <center><textarea rows="4" cols="50" placeholder="enter address details" class="rt" id="pass" ></textarea><br><span class="clr" id="pass_error"></span><br></center>
            </div>
            <div id="sub">
               <center><input type="submit" value="order" onclick="return order()" ></center>
            </div>
       </div>
   </div>
</body>
</html>
