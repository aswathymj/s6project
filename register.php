<?php
	if(isset($_POST['sub']))
	{
		$na=$_POST['user'];
		$ma=$_POST['mail'];
		$un=$_POST['name'];
		$ps=$_POST['pass1'];
		$ps1=$_POST['pass2'];
		require("connection.php");
		$query="insert into tbl_log(username,password) values('$un','$ps')";
		$re=mysqli_query($con,$query);
		if($re)
		{
			$last_id=mysqli_insert_id($con);
			$q="insert into tbl_reg(lid,name,email) values('$last_id','$na','$ma')";
			$res=mysqli_query($con,$q);
			 if($res)
			 {
				 
				 ?>
				   <script>
				      alert('Fields Inserted Successfully');
					</script> <?php
			 }
			header('Location: login.php');
		}
		mysqli_close($con);
	}
?>
<html>  
<head> 
<meta charset="utf-8">
<title>login form</title>
<style>
body{
	margin:0;
	padding:0;
	font-family:montserrat;
background-image:linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)), url("gass.jpg");
	height:80vh;
	overflow:hidden;
	background-size:cover;
	background-repeat:no-repeat;
}
.center{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:300px;
	background:;
	border-radius:10px;
}
.center h1{
	text-align:center;
	padding:0 0 20px 0;
	border-bottom:1px solid silver;
	
}
.center form{
 padding:0 40px;
 box-sizing:border-box;
}
form.txt_field{
	position:relative;
	border-bottom:2px solid black;
	margin:60px 0;
	
}
.txt_field input{
width:100%;
padding:0 5px;
height:40px;
font-size:16px;
border:none;
background:#e9f4fb;
outline:;
}
.btn{
	width:100%;
	height:50px;
	border:1px solid;
	background:#2691d9;
	border-radius:25px;
	font-size:18px;
	color:#e9f4fb;
	font-weight:700;
	cursor:pointer;
	outline:;
}
input[type="button"]{
	border:1px solid;
	background:#2691d9;
	border-radius:10px;
	font-size:12px;
	color:#e9f4fb;
	font-weight:100;
	cursor:pointer;
	outline:;
}
input[type="submit"]:hover{
	border-color:#2691d9;
	transition:.5s;
}
.signup_link{
margin:30px 0;
text-align:center;
font-size:16px;
color:#666666;
}
.signup_link a{
color:#2691d9;
text-decoration:none;
}
.signup_link a:hover{
text-decoration:underline;
}
.error{
  color: red;
  font-size: 12px;
}
.content{
        width:450px;
        height:750px;
        background-color:white;
        margin:1% auto;
    }
	  h1{
        font-family: Script MT;
		font-size:40px;
		color:blue;
		padding-top:30px;
		text-align:center;
    }
</style> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
	var v1=0;
	var v2=0;
	var v3=0;
	var v4=0;
	var v5=0;
	var v6=0;
	
        $(document).ready(function () {
            $("#error1").hide();
            $("#error2").hide();
            $("#error3").hide();
			$("#error4").hide();
			$("#error5").hide();
			$("#error6").hide();
			
			var name = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
            $("#p1").keyup(function () {
                x = document.getElementById("p1").value;
                if (name.test(x) == false) {
                     v1 = 1
                    $("#error1").show();
                }
                else if (name.test(x) == true) {
                   v1 = 0;
                    $("#error1").hide();
                }
            });
$('#p1').keyup(function(){
 
var username = $(this).val();
if(username ==""){
$('#availability').html('');
}else{
$.ajax({
url:'ajaxfile.php',
method:"POST",
data:{username:username},
success:function(data)
{
if(data!='0')
{
$('#availability').html('<span class="text-danger">Username Already exist</span>');
$('#s').attr("disabled", true);
}
else
{
$('#s').attr("disabled", false);
}
}
})
}
});			
			
            var user = /^[a-zA-Z\.\s]*$/;
            $("#p6").keyup(function () {
                x = document.getElementById("p6").value;
                if (user.test(x) == false) {
                     v6 = 1;
                    $("#error6").show();
                }
                else if (user.test(x) == true) {
                   v6 = 0;
                    $("#error6").hide();
                }
            });
			
			
			        x  = document.getElementById("p2").value;
					y  = document.getElementById("p3").value;
					
			   psw1= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
               $("#p2").keyup(function () {
                x1 = document.getElementById("p2").value;
                if (psw1.test(x1) == false) {
                     v3 = 1
                    $("#error2").show();
                }
                else if (psw1.test(x1) == true) {
                   v3 = 0;
                    $("#error2").hide();
                }
            });
			psw2= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
			$("#p3").keyup(function () {
                y1  = document.getElementById("p3").value;
                if (document.getElementById("p2").value != document.getElementById("p3").value ) {
                     v4 = 1
                    $("#error3").show();
                }
                else if (document.getElementById("p2").value == document.getElementById("p3").value) {
                   v4 = 0;
                    $("#error3").hide();
                }
            });
			 var mail = /^\w+([\.-]?\w+)*(@gmail|@yahoo)+([\.-]?\w+)*(\.com)+$/;
            $("#p4").keyup(function () {
                x = document.getElementById("p4").value;
                if (mail.test(x) == false) {
                    v2 = 1
                    $("#error4").show();
                }
                else if (mail.test(x) == true) {
                   v2 = 0
                    $("#error4").hide();
                }
            });
			  
			 
			
            $(".btn").click(function () {
                if (v1==0 && v2==0 && v3==0 && v4==0 && v5==0 && v6==0 )
                    $("#error6").hide();
                else
				{
                   alert('Please Fill The Form Correctly');
					return false;
					}
            });
        });
		
    </script>
	</head>
	<body>
	<div class="content">
	<div class="center">
<h1><b >Register now</h1></b>
<table>
<form action = "" method="POST" enctype="multipart/form-data">

<label><B style= "color:black">NAME</B></label>
<div class="txt_field"> 
<input type="text" id="p6" name="user"  placeholder="Enter name "required/>
 <p id="error6"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Name should include characters only</b> </p>
</div><br>
<label><B style= "color:black">EMAIL<B></label>
<div class="txt_field"> 
<input type="email" id="p4" name="mail" placeholder="Enter Email address" required/>
<p id="error4" ><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Email must include character,number,'@',yahoo or gmail,'.',com</b></p>
</div><br>
<label><b style= "color:black">USERNAME</b></label>
<div class="txt_field"> 
<input type="text" id="p1" name="name" placeholder="Enter username "required/>
<p id="availability"></p>
 <p id="error1" ><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp; User Name must include character or number</b></p>
</div><br>
<label><b style= "color:black">PASSWORD</b></label>
<div class="txt_field"> 
 <input type = "password" name = "pass1" id="p2"  placeholder=" Enter Password" required/>
 <p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Password should include at-least eight characters,lowercase
                    letter,number and special character.</b></p>
 </div><br>
 <label> <B style= "color:black">CONFRIM PASSWORD</B></label>
<div class="txt_field"> 
  <input type = "password" name = "cp" id="p3"  placeholder="Enter Confirm Password" required/>
  <p id="error3"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Password Doesn't Match</b></p>
  </div><br>
  
<input type="submit"  class= "btn" name="sub" id="s" value="Register"> 
<div class="signup_link"><p style= "color:black">already a member? <a href="login.php">login</a></p></DIV> 
<input type="button" name="sub" value="Go back!" onClick="history.back()"> 

</table> 
</div>
</body>  
</html>  