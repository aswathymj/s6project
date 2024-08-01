<!doctype html>
  <head>
    <title>Profile</title>
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
 background-image:  linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)), url(".jpg");
  background-size: 1500px 900px;
  align-items: center;
background-repeat: no-repeat;
overflow:;

}
.container{
   margin:100px;
  width: 700px;
  background:white;
  border-radius: 6px;
  margin-top:116px;
  margin-left:400px;
  padding: 82px 65px 30px 40px;
  box-shadow:10px ;
}
.container .content{
  display: flex;
  align-items: center;

}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: Blue;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 20px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #DDD1F8;
  border-radius: 6px;
  padding: 0 15px;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}

 .btn {
			background-color: blue;
			color: white;
			border: 6px;
			padding: 3px;
			padding-right:90px;
			padding-left:50px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 5px 5px;
			cursor: pointer;
			border-radius: 20px;
			width: 60%;
		}
		.register{
		 color:white;
		 padding-top:10px;
		 padding-left:110px;
		 font-size:12px;
		}
a{
color:#708090;
font-size: 18px;
text-decoration:none;
padding-left:140px;
}
.table
{
	font-style: ;
	 font-size: 15px;
  font-weight: 550;
  color: black;
}
h2{
	color:green;
}
		.register{
		 color:white;
		 padding-top:10px;
		 padding-left:150px;
		 font-size:12px;
		}
.btn{
          border-radius:10px;
          width:1px;
          height:30px;
          margin-left:-100px;
          background-color:brown;
		  position:center;
    }
	
	 h3{
        font-family: Script MT;
		font-size:40px;
		color:brown ;
		padding-top:px;
		text-align:center;
    }
	
    </style>
</head>

<body>
      
  <div class="container">
         <h3 align="center"> User Profile </h3>
    <div class="content">
      <div class="right-side">
        <div class="topic-text"></div><br>
	  <div>	      
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
		<table align="center" width="900" cellpadding="10px" cellspacing="30px">
		<tr class="table">
                   
                <tr class="table">
                    <td>Name </td>
                    <td>
					<?php echo $row['name']; ?></td>
               </tr>
                <tr class="table"> 
                    <td>Mail </td>
                    <td><?php echo $row['email'] ;?></td>
                </tr>
				<tr class="table"> 
                    <td>UserName </td>
                    <td><?php echo $row1['username'] ;?></td>
               
            </table>
			<?php
				mysqli_close($con);
		?>
		</div></div></div>
		 <div class="register">
                <a href="user db.php"><b><input type="submit" value="Close" class="btn"/></b></a>
				<a href="edit.php"><b><input type="submit" value="Edit" class="btn"/></b></a>
				<a href="change.php"><b><input type="submit" value="password" class="btn"/></b></a></center>
		</div>
		</div>
</body>
</html>