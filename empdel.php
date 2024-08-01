<?php
require("connection.php");
 if(isset($_POST['delete']))
 {
	 $emp_id=$_POST['emp_id'];
	 $query="Delete from tmp_emp where emp_id='$emp_id'";
	 $query_run=mysqli_query($con,$query);
	 
	 if($query_run)
	 {
		 echo '<script>alert("data deleted")</script>';
		 header("location:empview.php");
	 }
	 else
	 {
		 echo'<script> alert("Data not deleted");</script>';
	 }
 }
 ?>
