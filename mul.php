<html>
<head>
    <style>
    .black_overlay{
        display: block;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: block;
        position: absolute;
        top: 20%;
        left: 20%;
        width: 60%;
        height: 60%;
        padding: 5px;
        border: 10px solid orange;
        background-color: white;
        z-index:1002;
        overflow: hidden;
    }
    #container{height:100%;width:100%;}
    #login{height:92%;width:48.3%;float:left;border: 5px solid black; top: 30%;}
    #signup{height:92%;width:48.3%;border: 5px solid black;float:right;}
    .rt{width: 200px; height: 30px;}
    #sub{height:15%;width:100%;}
</style>
</head>
<body>
  <?php
  include "signup_db.php";
  $email = $email_error =$name =$name_error=$num_error=$number=$password=$password_error="";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
              if (empty($_POST["email"]))
                  {
                      $email_error="Please eneter E-mail Id";

                      } else
                      {
                          $email = test_input($_POST["email"]);
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $email_error= "Invalid email format";
                              }


                        }
                        if (empty($_POST["user_name"]))
                            {
                                $name_error="Please Enter User name";

                                } else
                                {
                                    $name = test_input($_POST["user_name"]);
                                      // check if name only contains letters and whitespace
                                        if (!preg_match("/^[a-zA-Z ]*$/",$name))
                                          {
                                            $name_erro="User name conatins only characters.";
                                      }


                                  }
                                 if (empty($_POST["number"]))
                                      {
                                          $num_error="Please Enter your mobile Number";

                                          } else
                                          {
                                              $number = test_input($_POST["number"]);
                                                // check if name only contains letters and whitespace



                                            }
                                          if (empty($_POST["password"]))
                                                {
                                                    $password_error="Please  Enter Password";

                                                    }
                                                    else
                                                   {
                                                       $password = test_input($_POST["password"]);

                                                     }$perfect="not perfect";
                                                         if($name_error =="" && $email_error == "" && $password_error =="" && $num_error ==""){
                                                                        $name=1;
                                                                  for($i=0;$i<200;$i++){
                                                           $qry_ins="insert into `signup`.`signup` (user_id,email_id,mobno,password)
                                                           		values('$name','$email','$number','$password')";
                                                              if(mysql_query($qry_ins)){echo "<script>;
                                                      				location.href='home.php'</script>";}
                                                              $name++;
                                                            }

                                                         }


  }




  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  ?>

    <div id="light" class="white_content">
<a href = "javascript:history.back()" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>

       <div id="container">
        <div id="login">
            <div id="sub"></div>
            <div id="sub">
                <center><h2><u>Login</u></h2></center>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="User Name" class="rt" id="uname"></center>
            </div>
            <div id="sub">
               <center><input type="password" placeholder="Password" class="rt" id="pass" ></center>
            </div>
            <div id="sub">
               <center><input type="submit" value="Login" ></center>
            </div>
            <div id="sub"></div>
         </div>
         <div id="signup"><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div id="sub">
                <center><h2><u>Signup</u></h2></center>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="Email-Id" class="rt" name="email" value="<?php echo $email;?>"></center><span class="error"><?php echo $email_error;?></span>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="User Name" class="rt" name="user_name" value="<?php echo $name;?>"></center><span class="error"><?php echo $name_error;?></span><br><br><br>
            </div>
            <div id="sub">
               <center><input type="password" placeholder="Password" class="rt" name="password" value="<?php echo $password;?>"></center><span class="error"><?php echo $password_error;?></span>
            </div>
            <div id="sub">
               <center><input type="text" placeholder="Mobile number" class="rt" name="number" value="<?php echo $number;?>"></center><span class="error"><?php echo $num_error;?></span>
            </div>
            <div id="sub">
               <center><input type="submit" value="Signup" id="s1" title="Click to submit"></center>

            </div>
         </div>
</div>
    </div>
    <div id="fade" class="black_overlay"></div>
</body>
</html>
