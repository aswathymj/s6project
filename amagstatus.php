<?php
  $id=$_GET['id'];
require("connection.php");
  $query="select * from tbl_con  where con_id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['status']==1){
      $que="update tbl_con set status='0' where con_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:amangcon.php");
        }
  }
  elseif($row['status']==0){
    $que="update tbl_con set status='1' where con_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:amangcon.php");
        }
  }
 
?>