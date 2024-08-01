<?php
if(isset($_POST['sub']))
	{

		$un=$_POST['name'];
		$ps=$_POST['psw1'];
  SESSION_START();
 require("connection.php");
   $adminq="select * from tbl_admin where admin_name='$un' and admin_password='$ps'";
  $adres = mysqli_query($con, $adminq);
  $rowad=mysqli_fetch_array($adres);
  $countad=mysqli_num_rows($adres);
  if ($countad > 0) {
    $_SESSION['admin'] = $rowad['admin_id'];
    ?>
    <script>
          alert("Welcome to Admin Panel");
      </script>
      <?php
    header('Location:admin db.php');
  } else
  {
  $select = "select * from tbl_log where username='$un' and password='$ps'";
  $result = mysqli_query($con, $select);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $id = $row['lid'];
    $_SESSION['uid'] = $id;
    header('Location:user db.php');
  } else {
?>
    <script>
      alert("username and Password Doesn't Match");
      window.location.href="log.php";
    </script>
<?php
  }
  mysqli_close($con);
}
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
        height:590px;
        background-color:white;
        margin:1% auto;
    }
	 h1{
        font-family: Script MT;
		font-size:40px;
		color:blue ;
		padding-top:30px;
		text-align:center;
    }
</style> 
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
	var v1=0;
	var v2=0;
	var v3=0;
        $(document).ready(function () {
            $("#error1").hide();
            $("#error2").hide();
            $("#error3").hide();
            var name = /^[a-zA-Z\s]*$/;
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
			        x  = document.getElementById("p2").value;
					y  = document.getElementById("p3").value;
					
			 var psw1= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
               $("#p2").keyup(function () {
                x1 = document.getElementById("p2").value;
                if (psw1.test(x1) == false) {
                     v2 = 1
                    $("#error2").show();
                }
                else if (psw1.test(x1) == true) {
                   v2 = 0;
                    $("#error2").hide();
                }
            });
            $(".btn").click(function () {
                if (v1==0 && v2==0 && v3==0)
                    $("#error3").hide();
                else
				{
                   alert('Please Fill The Form Correctly');
					return false;
					}
            });
        });
    </script>
   </head>
</head>
	<body> 
<div class="content">	
<div class="center">
<h1><b>Login Here</b></h1>
<table>
<form  method="POST">
<label><b style= "color:black">USERNAME</b></label>
<div class="txt_field"> 
<input type="text" id="p1" name="name" placeholder="Enter username "required/>
 <p id="error1" ><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Invalid User Name</b></p>
</div><br>
<label><b style= "color:black">PASSWORD</b></label>
<div class="txt_field"> 
 <input type = "password" name = "psw1" id="p2"  placeholder=" Enter Password" required/>
 <p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Password</b></p>
 </div><br>
 <input type="submit"  class= "btn" name="sub" value="Login"> 
<div class="signup_link"><p style= "color:black">already a member? <a href="register.php">Signup</a></p>
<input type="button" name="sub" value="Go back!" onClick="history.back()"></div>
 	
</table>
</div> 
</div>
</body>  
</html>  