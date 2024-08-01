<?php
	if(isset($_POST['sub']))
	{
		$na=$_POST['name'];
		$un=$_POST['desc'];
		$ps=$_POST['pri'];
		$filename=$_FILES["file"]["name"];
    $d=$_POST['date'];
		require("connection.php");
		$query="insert into tbl_cyl(cyl_name,cyl_desc,cyl_price,cyl_image,cyl_date) values('$na','$un','$ps','$filename','$d')";
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
			 }
		
		mysqli_close($con);
	}
	
?>
<html>  
<head> 
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
	 /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0A2558;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #081D45;
}
.sidebar .nav-links li a:hover{
  background: #081D45;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 104px;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}

/* Right box */
.home-content .sales-boxes .top-sales{
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section{
    /* width: calc(100% - 220px); */
    overflow: hidden;
    left: 220px;
  }
  .home-section nav{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
	  
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
    display: none;
  }
}
  @media (max-width: 400px) {
  .sidebar{
    width: 0;
  }
  .sidebar.active{
    width: 60px;
  }
  .home-section{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section{
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
  }
}

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
.btns{
	width:60px;
	height:25px;
	border:1px solid;
	background:#2691d9;
	border-radius:15px;
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
        width:600px;
        height:700px;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
	var v1=0;
	var v2=0;
	var v3=0;
  var v5=0;
	var v6=0;
	
        $(document).ready(function () {
            $("#error1").hide();
            $("#error2").hide();
            $("#error3").hide();
			      $("#error6").hide();
            $("#error5").hide();
			
			var name =/^\S.*[a-zA-Z\s]*$/
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
            
      var desc = /^[0-9a-zA-Z]+$/;
            $("#p2").keyup(function () {
                x = document.getElementById("p2").value;
                if (desc.test(x) == false) {
                     v2 = 1;
                    $("#error2").show();
                }
                else if (desc.test(x) == true) {
                   v2 = 0;
                    $("#error2").hide();
                }
            });
			
			
			        
			var pri= /^[0-9]+$/;
      $("#p3").keyup(function () {
                x = document.getElementById("p3").value;
                if (pri.test(x) == false) {
                     v3 = 1;
                    $("#error3").show();
                }
                else if (pri.test(x) == true) {
                   v3 = 0;
                    $("#error3").hide();
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
                if (v1==0 && v2==0 && v3==0 && v5==0 && v6==0 )
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
	<div class="sidebar">
    <div class="logo-details">
    
      <span class="logo_name"> Sastha Flames</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin db.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
		
		<li>
          <a href="amangcon.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Manage connection</span>
          </a>
        </li>
    <li>
          <a href="amangbook.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Manage booking</span>
          </a>
        </li>
        
        <li>
          <a href="add cy.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name"> Manage Product</span>
          </a>
        </li>
       
        <li>
          <a href="emp.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Manage employee</span>
          </a>
        </li>
        <li>
          <a href="total.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Manage consumers</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
     
    </nav>

    <div class="home-content">
      <div class="content">
	<div class="center">
<h1><br><b >Add Product</h1></b><br>
<a href='<?php echo "cylvie.php"?>'><input type="submit"  class= "btns" name="sub" id="s" value="VIEW"> </a><br><br>
<table>
<form action = "" method="POST" enctype="multipart/form-data">

<label><B style= "color:black">Name</B></label>
<div class="txt_field"> 
<input type="text" id="p1" name="name"  placeholder=" name "required/>
<p id="error1"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Name should include characters only</b> </p>
</div><br>

<label><b style= "color:black">Describe</b></label>
<div class="txt_field"> 
<input type="text" id="p2" name="desc" placeholder="Enter description "required/>
<p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;describe should include characters and numbers only</b> </p>
</div><br>
<label><b style= "color:black">Price</b></label>
<div class="txt_field"> 
 <input type = "text" name = "pri" id="p3"  placeholder=" Enter Price" required/>
 <p id="error3"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;price should include numbers only</b> </p>
 </div><br>
 
  <label> <B style= "color:black">Image Upload</B></label>
<div class="txt_field"> 
<input type="file" name="file" id="p5"   accept="image/png,image/jpeg" required/>
<p id="error5"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Upload Product Image </p><br></div>
</div><br>
<label> <B style= "color:black">Date</B></label>
<div class="txt_field"> 
<input type="date" name="date" placeholder="Enter date" required/>
</div><br>
<br><a href='<?php echo "add cy.php"?>'><input type="submit"  class= "btn" name="sub" id="s" value="ADD"> </a>

<!--<a href='<?php echo "editsub.php"?>?subcat_id=<?php echo $row['subcat_id'];?>'><input type="submit" class="btn btn-primary" value="Edit"></a>-->
<br>
</table> 

</div>

      </div>

      <div class="sales-boxes">
        
          
       
       
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>



	
</body>  
</html>  