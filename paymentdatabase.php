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
   
    $amount=$_GET['amount'];
		require("connection.php");
		$query="insert into tbl_pay(uid,amount) values('$lid','$amount')";
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