<?php
  $id=$_GET['id'];
 require("connection.php");
  $query="select * from tbl_cyl  where cyl_id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['status']==1){
      $que="update tbl_cyl set status='0' where cyl_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:cylvie.php");
        }
  }
  elseif($row['status']==0){
    $que="update tbl_cyl set status='1' where cyl_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:cylvie.php");
        }
  }
?>