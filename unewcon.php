<?php
session_start();
$lid=$_SESSION['uid'];
$_SESSION['uid']  =$lid;
?>
<?php
	if(isset($_POST['sub']))
	{
    $c=$_POST['con'];
		$na=$_POST['name'];
		$ge=$_POST['ge'];
		$add=$_POST['add'];
    $em=$_POST['em'];
    $ph=$_POST['ph'];
    $ci=$_POST['ci'];
    $di=$_POST['di'];
		$filename=$_FILES["file"]["name"];
		require("connection.php");
		$query="insert into tbl_con(uid,name,gender,address,email,phone,city,district,proof,con) values('$lid','$na','$ge','$add','$em','$ph','$ci','$di','$filename','$c')";
		$res=mysqli_query($con,$query);
		
			 if($res)
			 {
				 $targetDir="uploads/";
				 $target_file=$targetDir.$filename;
				 move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
				 ?>
				   <script>
				      alert('Fields Inserted Successfully');
					</script> <?php
          header('Location: umangcon.php');
			 }
		
		mysqli_close($con);
	}
	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form input[type="select"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
  .box{
    
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
			
			var name = /^[a-zA-Z\.\s]*$/;
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
 

			
            var add = /^(?![0-9]+$)[a-zA-Z0-9\s\,\#\-]+$/;
            $("#p2").keyup(function () {
                x = document.getElementById("p2").value;
                if (add.test(x) == false) {
                     v2= 1
                    $("#error2").show();
                }
                else if (add.test(x) == true) {
                   v2 = 0;
                    $("#error2").hide();
                }
            });
            var mail = /^\w+([\.-]?\w+)*(@gmail|@yahoo)+([\.-]?\w+)*(\.com)+$/;
            $("#p3").keyup(function () {
                x = document.getElementById("p3").value;
                if (mail.test(x) == false) {
                     v3 = 1
                    $("#error3").show();
                }
                else if (mail.test(x) == true) {
                   v3 = 0;
                    $("#error3").hide();
                }
            });
            var ph = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            $("#p4").keyup(function () {
                x = document.getElementById("p4").value;
                if (ph.test(x) == false) {
                     v4 = 1
                    $("#error4").show();
                }
                else if (ph.test(x) == true) {
                   v4 = 0;
                    $("#error4").hide();
                }
            });
			
            var img=/([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/;
			  $("#p5").keyup(function () {
                x = document.getElementById("p5").value;
                if (img.test(x) == false) {
                    v5 = 1
                    $("#error5").show();
                }
                else if (img.test(x) == true) {
                   v5 = 0
                    $("#error5").hide();
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
  <div class="container">
    <div class="title">New connection</div>
    <div class="content">
    <form action = "" method="POST" enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Consumer no.</span>
            <input type="password" name="con" value="<?php echo $unique_id=sprintf('%10d',mt_rand(1,9999999999));?>"/>
          </div>
          <div class="input-box">
            <span class="details"> Name</span>
            <input type="text" id="p1" name="name" placeholder="Enter your name" required>
            <p id="error1"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Name should include characters only</b> </p>
          </div>
          <div class="input-box">
          <span class="details">Gender</span>
            <input type="radio" name="ge" value="male" id="dot-1">
            <input type="radio" name="ge" value="female" id="dot-2">
            <input type="radio" name="ge"  value="other" id="dot-3">
            
            <div class="category">
              <label for ="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for ="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for ="dot-3">
                <span class="dot three"></span>
                <span class="gender">Other</span>
              </label>

            </div>

          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="p2" name="add" placeholder="Enter your username" required>
            <p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Address must include character then number</b></p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="p3" name="em" placeholder="Enter your email" required>
            <p id="error3"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Email must include character,number,'@',yahoo or gmail,'.',com</b></p>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="p4" name="ph" placeholder="Enter your number" required>
            <p id="error4"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;phone number must be number</b></p>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            
            <?php
            require("connection.php");
            $s=mysqli_query($con,"select*from tbl_city");
            ?>
<select name="ci"><?php
while($r=mysqli_fetch_array($s))
{
  ?>
  <option ><?php echo $r['city'];?></option>
  <?php
}
?>
</select>
            
          </div>
          <div class="input-box">
            <span class="details">District</span>
            <input type="text" name="di"  value="kottayam"placeholder="Enter your district" required>
          </div>
          <div class="input-box">
            <span class="details">ID proof</span>
            <input type="file"  id="p5" name="file" placeholder="upload your id proof"  accept="image/png,image/jpeg" required/>
</div>
          
        </div>
        
        
        <div class="button">
          <input type="submit" name="sub" value="Register">
        </div>
        <div class="signup_link"><p style=  "text-align:center; color:black">already have a consumer number? <a href="userbook.php">Booking</a></p></DIV> 
      </form>
    </div>
  </div>

</body>
</html>