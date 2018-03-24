function suck_cls(){
	document.getElementById('overlay').style.display='none';
			document.getElementById('singup_suck').style.display='none';
			 location.reload();
}
function fun(){
  var f1,f2,f3,f4,f5,f6=0;
if(document.getElementById("email").value=="")
{
f1=1;
}
if(document.getElementById("user_name").value=="") {
f2=1;
}
if(document.getElementById("password").value=="") {
  f3=1;
  }
if(document.getElementById("mo_no").value=="") {
  f4=1;
}

  var k=document.getElementById("mo_no").value;

  var len=k.length;
  if(len != 10){
    f5=1;
  }
  var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        f6=1;}

if(f1 && f2 && f3 && f4==1){
document.getElementById("email_error").innerHTML="Please enter the email";

  document.getElementById("name_error").innerHTML="Please enter the  Name";

  document.getElementById("password_error").innerHTML="Please enter the Password";

document.getElementById("mo_error").innerHTML="Please enter the Mobile number";
return false;
}
if(f1 || f2 || f3 || f4 || f5 || f6==1){
if(f1==1){
  document.getElementById("email_error").innerHTML="Please enter email id";
  return false;
}
else{
    document.getElementById("email_error").innerHTML="";
}
if(f2==1){
  document.getElementById("name_error").innerHTML="Please enter the user Name";
  return false;
}
else{
  document.getElementById("name_error").innerHTML="";
}
if(f3==1){
    document.getElementById("password_error").innerHTML="Please enter the password";
    return false;
}
else{
  document.getElementById("password_error").innerHTML="";
}
if(f4==1){
  document.getElementById("mo_error").innerHTML="Please enter the mobile number";
  return false;
}
else{
document.getElementById("mo_error").innerHTML="";
}
if(f5==1){
  document.getElementById("mo_error").innerHTML="Please enter the valid mobile number";
  return false;

}
else{
  document.getElementById("mo_error").innerHTML="";
}
if(f6==1){
  document.getElementById("email_error").innerHTML="Please enter valid email id";
  return false;
}
else{
    document.getElementById("email_error").innerHTML="";
}
}
else{
  document.getElementById("name_error").innerHTML="";
  document.getElementById("password_error").innerHTML="";
  document.getElementById("mo_error").innerHTML="";
  document.getElementById("email_error").innerHTML="";

	var name=document.getElementById("user_name").value;
  var email=document.getElementById("email").value;
  var mobile=document.getElementById("mo_no").value;
  var password=document.getElementById("password").value;

  $.post("signup_values.php",
    {
      name: name,
        email:email,
        mobile:mobile,
        password:password
    },
		function(data, status){
      if(data=="email"){
document.getElementById("email_error").innerHTML="Email  exist";
      }else{
          document.getElementById("email_error").innerHTML="";
      }

      if(data=="number"){
          document.getElementById("mo_error").innerHTML="number exist";
      }
      else if(data=="ok"){
        signup_cls();
      document.getElementById('overlay').style.display='block';
    			document.getElementById('singup_suck').style.display='block';
      document.getElementById('suck').innerHTML ="your account is created welcome to jangalala.com";}


    });
  return true;

}
}
function login(){
	var l,l1=0;
  if(document.getElementById("uname").value=="")
  {
  l=1;
  }
  if(document.getElementById("pass").value=="")
  {
  l1=1;
}

	if(l && l1==1){
	document.getElementById("uname_error").innerHTML="Please enter the username";

	  document.getElementById("pass_error").innerHTML="Please enter the  Password";
		return false;
	}

	if(l || l1==1){

		if(l==1){
			document.getElementById("uname_error").innerHTML="Please enter the username";
			return false;
		}

		else {
				document.getElementById("uname_error").innerHTML="";

		}


if(l1==1){
	document.getElementById("pass_error").innerHTML="Please enter the  Password";
	return false;
}
else {
		document.getElementById("pass_error").innerHTML="";
}


	}
	else{
	  document.getElementById("pass_error").innerHTML="";
	  document.getElementById("uname_error").innerHTML="";


		var name=document.getElementById("uname").value;
		var password=document.getElementById("pass").value;

		$.post("login.php",
			{
				name: name,
					password:password
			},
			function(data, status){
				if(data=="ok"){
				login_chek();
				}else{
					document.getElementById("pass_error").innerHTML="Invalid login";
				}

			});

	}


}
function login_chek(){
signup_cls();
location.reload();
$("#login_chek").load(location.href + " #login_chek");


}
