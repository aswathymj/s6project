<?php
    
    session_start();
    $lid=$_SESSION['uid'];
	require("connection.php");
    $query="select * from tbl_reg where lid='$lid'";
    $re=mysqli_query($con,$query);
    $row=mysqli_fetch_array($re);
    $q="select * from tbl_log where lid='$lid'";
    $result=mysqli_query($con,$q);
    $row1=mysqli_fetch_array($result);
     
     

      $na=$row['name'];
      $em=$row['email'];
      $user=$row1['username'];
?>
<!doctype html>
  <head>
    <title>Profile</title>

    <style>
      *{
        margin:0;
        padding:0;
        scroll-behavior:smooth;
    }
	body, html {
        height: 100%;
        width:100%;
     }
    body{
             background-image:linear-gradient(rgba(0,0,0,0.),rgba(0,0,0,0)),url(view.jpg);
             background-size:cover;
			 background-attachment:fixed;
			 background-position: center;
			 background-repeat:no-repeat;
		}
    .content{
        width:500px;
        height:600px;
        background-color:;
        margin:1% auto;
    }
    h3{
        font-family: Script MT;
		font-size:40px;
		color:#AB0F0F ;
		padding-top:30px;
		text-align:center;
    }
    img{
        height:150px;
         width:150px;
         border-radius:50%;
         margin-left:170px;
    }
    table{
           margin-top:30px;
            margin-left:30px;
            padding-left:10px;
            line-height:45px;
            font-size:17px;
    }
    #btn{
          border-radius:20px;
          width:100px;
          height:40px;
          margin-left:200px;
          background-color:;
    }
    #btn :hover{
        background-color:red;
    }
    .image{
        margin-left:200px;
    }
    .btns{
        border-radius:10px;
        width:270px;
        height:30px;
    }
    </style>
  </head>
  <body>
    <div class="content">
        <h3><u>Update Profile</u></h3><br>
        <form  method="post"  enctype="multipart/form-data">
     
      
      <table width="600px">
      <tr>
                    <td><b style= "color:black">Name:</b></td>
                     <td colspan="2"><input type="text" name="name" id="name" value="<?php echo $na;?>" class="btns" placeholder="Name" required/></td>
                    </tr>
                    <tr>
                    <td><b style= "color:black">Email:</b></td>
                        <td colspan="2"><input type="email" name="email" id="email" value="<?php echo $em;?>" class="btns" placeholder="Email" required/></td>
                    </tr>
                    
                    <tr>
                    <td><b style= "color:black">Username:</b></td>
                        <td colspan="2"><input type="text" name="username" id="username" value="<?php echo $user;?>" class="btns" placeholder="Username" required/></td>
                    </tr>
                    
      </table><br><br>
        <b><input type="submit" value="Save" name="sub" id="btn" /></b>
        </form>
    </div>
  </body>
  <?php
  if(isset($_POST['sub']))
  {
      $na=$_POST['name'];
      $em=$_POST['email'];
      
      $user=$_POST['username'];
      require("connection.php");
      $sql="update  tbl_log set username='$user' where lid='$lid'";
      $result=mysqli_query($con,$sql);
      if($result)
      {
          $last_id=mysqli_insert_id($con);
          $q="update  tbl_reg set lid='$lid',name='$na' ,email='$em'  where lid='$lid'";
          $res=mysqli_query($con,$q);
          
          header("Location: demo.php");
      }
      mysqli_close($con);
  }
?>
</html>