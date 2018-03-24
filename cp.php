<html>
    <head>
	<style>
		#product{height:80%; width:100%; float:right;}
		#cp_head{height:10%; width:100%;background-color: red;}
		#cp_foot{height:10%; width:100%; float:center;font-size:20px; background-color: green;}
    #cmd{
      height: 40px;
      width: 50%;
      }/*empty container*/
	</style>
    </head>
<body>
	<div id="product">
	   <div id="cp_head"><form method="post" action="#" onSubmit="return signup_db()"></div>
		<div id="cmd" align="center">Old Password</div><div id="cmd" align="center"><input type="text" placeholder="Old Password" id="opass"></div>
		<div id="cmd" align="center">New Password</div>
		<div id="cmd" align="center"><input type="text" placeholder="Old Password" id="opass"></div>
		<div id="cmd" align="center">Re-Enter Password</div>
		<div id="cmd" align="center"><input type="text" placeholder="Old Password" id="opass"></div>

           <div id="cp_foot"></div>
        </div>
  <body>
    <script src="jquery-1.11.3.min.js"></script>
    <script>
      function fun(){
      var f1,f2,f3=0;
    if(document.getElementById("opass").value=="")
    {
    f1=1;

    }
    if(document.getElementById("npass").value=="") {
    f2=1;
    }
    if(document.getElementById("rpass").value=="") {
    f3=1;
    }
    if(f1 && f2 && f3==1){
          document.getElementById("o_pass").innerHTML="Please enter old passwrd";

          document.getElementById("n_pass").innerHTML="enter new password";

          document.getElementById("re_pass").innerHTML="Re enter password";

          return false;
    }

    if(f1 || f2 || f3==1){
    if(f1==1){
      document.getElementById("o_pass").innerHTML="Please enter old passwrd";
      return false;
    }
    else{
        document.getElementById("o_pass").innerHTML="";

    }
    if(f2==1){
      document.getElementById("n_pass").innerHTML="enter new password";
      return false;
    }
    else{
      document.getElementById("n_pass").innerHTML="";

    }
    if(f3==1){
      document.getElementById("re_pass").innerHTML="Re enter password";
      return false;
    }
    else{
        document.getElementById("re_pass").innerHTML="";
    }
    }
    else{
      return true;}
    }
    if(f2 && f3!=1)
    {
    if(f2==f3){
      document.getElementById("re_pass").innerHTML="";
      return false;
    }
    else{
        document.getElementById("re_pass").innerHTML="password did not match";
    }
    }

    </script>
</html>
