<?php
		   session_start();
		     $lid=$_SESSION['uid'];
			require("connection.php");
			 $query="select * from tbl_reg where lid='$lid'";
			 $q="select * from tbl_log where lid='$lid'";
			 $re=mysqli_query($con,$query);
			 $result=mysqli_query($con,$q);
			 $row=mysqli_fetch_array($re);
			 $row1=mysqli_fetch_array($result);
			 
		?>
		
			<?php
				mysqli_close($con);
		?>
        <?php
	if(isset($_POST["sub"]))
	{
    $b=$_POST['msg'];
    
		require("connection.php");
		$query="insert into tbl_fd(uid,comment) values('$lid','$b')";
		$res=mysqli_query($con,$query);
		
			 if($res)
			 {
				echo"<script>alert('Fields Inserted Successfully');
					</script>";
        header('Location:user db.php');
			 }
		
		mysqli_close($con);
	}
	
?>

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cool Honey Website Template | Smarteyeapps.com</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body class="bg-white">
      <header>
            <div id="menu-jk" class="nav-part shadow-md bg-white navcol">
                <div class="container-lg">
                    <div class="row  p-2">
                        <div class="col-lg-4 p-2">
                           <h2><B>Sastha</B><span>Flames</span></h2>
                             <a  data-bs-toggle="collapse" data-bs-target="#menu" class="float-end d-lg-none pt-1 ps-3"><i class="bi pt-1 fs-1 cp bi-list"></i></a>
                        </div>
                        <div id="menu" class="col-lg-8 d-none d-lg-block">
                            <ul class="fw-bold float-end nacul fs-7">
                                <li class="float-start p-3 px-4"><a href="index.html">Home</a></li>
                                <li class="float-start p-3 px-4"><a href="about.html">About Us</a></li>
                                <li class="float-start p-3 px-4"><a href="products.html">Products</a></li>
                          
                                <li class="float-start p-3 px-4"><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

             
    <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">Feedback form</h2>
                    <ul>
                        <li> <a href="#"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i>feedback</li>
                    </ul>
                </div>
            </div>
        </div>
           
           
         <div style="margin-top:0px;" class="row no-margin">
         
      


      </div>

      <div class="row contact-rooo big-padding no-margin">
        <div class="container">
           <div class="row">
            <form action="" method="POST">   
          
            <div style="padding:20px" class="col-sm-7">
            <h2 class="fs-4 fw-bold" >Feedback Form</h2> <br>
                <div class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"  class="form-control input-sm" value="<?php echo $row['name'];?>"/  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  value="<?php echo $row['email'];?>"/></div>
                </div>
                 
                 <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" name="msg" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                    <input  class="btn btn-primary fs-5 btn-sm" type="submit" name="sub" value="Submit">
                 
                    </div>
                </div>
            </div>
</form>
             <div class="col-sm-5">    
                  <div style="margin:50px" class="serv"> 
                    <h2 class="fs-4 fw-bold" style="margin-top:10px;">Address</h2>
                    <p class="fs-5">
                          Sastha flames <br>
                            Erumely<br>
                            Kottayam District<br>
                            Phone:+91 9878787878<br>
                            Email:sasthaflames@1998.in<br>
                            Website:www.sasthaflames.com<br>
                    </p>
                  

               </div>    
             </div>
          </div>
        </div>
      </div>
    
            
    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>About US</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi.</p>

                        <ul>
                            <li>23 Rose Stren Melbourn</li>
                            <li>sales@smarteyeapps.com</li>
                            <li>+91 876 766 554</li>
                        </ul>
                    </div>

                    

                    <div class="col-md-3 foot-services">
                        <h4>Top Category</h4>

                        <ul>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Web Analytics</a></li>
                            <li><a href="">Page Monitering</a></li>
                            <li><a href="">Page Optimization</a></li>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Email Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, vehicula eget eros. </p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                            <li><i class="bi bi-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps.com</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/prabinraja89"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>
    


        </body>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
        <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>

    </html>