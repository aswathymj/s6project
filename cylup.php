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
 $query="select * from tbl_cyl where cyl_id='$id'";
 $re=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($re))
 {
 $b=$row['cyl_image'];
 ?>
<center>
<h1>Update details of product</h1>
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="cyl_name"  value="<?php echo $row['cyl_name'] ;?>"/><br>
<input type="text" name="cyl_desc" value="<?php echo $row['cyl_desc'] ;?>"/><br>
<input type="text" name="cyl_price" value="<?php echo $row['cyl_price'] ;?>"/><br>
<input type="file" name="file"    accept="image/png,image/jpeg"/><br>
<input type="date" name="cyl_date" value="<?php echo $row['cyl_date'] ;?>"/><br>

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
	$query="select * from tbl_cyl where cyl_id='$id'";
	$re=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($re))
	{
		$b=$row['cyl_image'];
	}

	  $cyl_name=$_POST['cyl_name'];
	   $cyl_desc=$_POST['cyl_desc'];
	    $cyl_price=$_POST['cyl_price'];
	  $filename=$_FILES["file"]["name"];
     if($filename=="")
     {
$filename=$b;
     }
	 $cyl_date=$_POST['cyl_date'];
	 
  
require("connection.php");
  $query="UPDATE tbl_cyl SET cyl_name='$cyl_name',cyl_desc='$cyl_desc',cyl_price='$cyl_price',cyl_image='$filename',cyl_date='$cyl_date'where cyl_id=' $id'";
    $re=mysqli_query($con,$query);
if($re)
 {
   $targetDir="uploads/";
   $target_file=$targetDir.$filename;
   move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
	?>
	<script>
	window.location.href='cylvie.php';
	</script>
	<?php
    
}
}

?>
