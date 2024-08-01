
<html>
<head>
<title>updation</title>
<style>
body{
	background-color:whitesmoke;
}
input{
	width:40%;
	height:5%;
	border:1px;
	border-radius:05px;
	padding:8px 15px 8px 15px;
	margin:10px 0px 15px 0px;
	box-shadow:1px 1px 2px 1px grey;
	
	
}
</style>
</head>
<body>
<?php
$id=$_GET['id'];
require("connection.php");
 $query="select * from tmp_emp where emp_id='$id'";
 $re=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($re))
 {
 $b=$row['image'];
 ?>
<center>
<h1>Update details of product</h1>
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="name"  value="<?php echo $row['name'] ;?>"/><br>
<input type="text" name="email" value="<?php echo $row['email'] ;?>"/><br>
<input type="text" name="address" value="<?php echo $row['address'] ;?>"/><br>
<input type="text" name="exp" value="<?php echo $row['exp'] ;?>"/><br>
<input type="text" name="ph" value="<?php echo $row['ph'] ;?>"/><br>
<input type="file" name="file" id="p5"   accept="image/png,image/jpeg"/><br>
<input type="submit" name="update" value="UPDATE"/><br>
</form>
</center>
</body>
<?php
}
?>
</html>

<?php
if(isset($_POST["update"]))
{
	$id=$_GET['id'];
	require("connection.php");
	$query="select * from tmp_emp where emp_id='$id'";
	$re=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($re))
	{
		$b=$row['image'];
	}

    $name=$_POST['name'];
    $email=$_POST['email'];
     $address=$_POST['address'];
     $exp=$_POST['exp'];
	 $ph=$_POST['ph'];
     $filename=$_FILES["file"]["name"];
     if($filename=="")
     {
$filename=$b;
     }
  
  

require("connection.php");
$query="UPDATE tmp_emp SET name='$name',email='$email', address='$address',exp='$exp',ph='$ph',image='$filename' where emp_id=' $id'";
 $re=mysqli_query($con,$query);
 if($re)
 {
   $targetDir="uploads/";
   $target_file=$targetDir.$filename;
   move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
   ?>
 
 <script>
 window.location.href='empview.php';
 </script>
 <?php
 
}
}
?>
