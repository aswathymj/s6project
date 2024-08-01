<?php
require("connection.php");
 if(isset($_POST['delete']))
 {
	 $cyl_id=$_POST['cyl_id'];
	 $query="Delete from tbl_cyl where cyl_id='$cyl_id'";
	 $query_run=mysqli_query($con,$query);
	 
	 if($query_run)
	 {
		 echo '<script>alert("data deleted")</script>';
		 header("location:cyview.php");
	 }
	 else
	 {
		 echo'<script> alert("Data not deleted");</script>';
	 }
 }
 ?>
