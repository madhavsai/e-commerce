<?php
if(isset($_POST['s1']))
{
}
?><html>
<head>
    <style>
    #container{height:100%;width:100%;
    display: flex;}
    #login{height:100%;width:49%;float:left; top:10%;order: 1;}
    #sigup{height:100%;width:49%;float:right;order: 3;}
    .rt{width: 200px; height: 30px;}
    #sub{height:70px;;width:100%;text-align: center;}
    .center_line{
      margin-top: 10%;
      float: right;
      order: 2;
      height: 60%;
      width: 2px;
      background-color: black;
    }
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

</style>
<script src="jquery-1.11.3.min.js"></script>
<script src="signup.js"></script>
</head>
<body>
       <div id="container">
        <div id="login">
            <div id="sub"></div>
            <div id="sub">
                <center><h2>Login</h2></center>
            </div>
            <div id="sub"><form method="POST" onSubmit="return login_db()" action="javascript:return login_db();">
               <center><input type="text" placeholder="Email id" class="rt" id="uname"></center><span id="uname_error"></span>
            </div>
            <div id="sub">
               <center><input type="password" placeholder="Password" class="rt" id="pass" ><br><span id="pass_error"></span><br><a href="#"></a></center>
            </div>
            <div id="sub">
               <center><input type="submit" value="Login" onclick="return login()" ></center>
            </div>
         </div>
         <div class="center_line"> </div>
         <div id="sigup"><form method="POST" onSubmit="return signup_db()" action="javascript:return signup_db();">
            <div id="sub">
                <center><h2>Signup</h2></center>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="Email-Id" class="rt" id="email" name="email"></center><span id="email_error"></span>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="User Name" class="rt" id="user_name" name="name"></center><span id="name_error"></span><br><br><br>
            </div>
            <div id="sub">
               <center><input type="password" placeholder="Password" class="rt" id="password" name="password"></center><span id="password_error"></span>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="Mobile number" class="rt" id="mo_no" name="number"></center><span id="mo_error"></span>
            </div>
            <div id="sub">
               <center><input type="submit" value="Signup" id="s1" title="Click to submit" onclick="return fun()"></center>
               <span class="cookies">Buy clicking sign Up, you agree to our terms and that you have read our privacy policy, including our cookie use.</span>
            </div>
         </div>
</div>
</body>
</html>
