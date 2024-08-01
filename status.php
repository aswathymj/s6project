<?php
  $id=$_GET['id'];
  require("connection.php");
  $query="select * from tbl_reg  where uid='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['status']==1){
      $que="update tbl_reg set status='0' where uid='$id'";
      $ques="update tbl_log set status='0' where lid='$id'";
      $res=mysqli_query($con,$que);
      $re=mysqli_query($con,$ques);
      if($res && $re){
        header("location:total.php");
        }
  }
  elseif($row['status']==0){
    $que="update tbl_reg set status='1' where uid='$id'";
      $ques="update tbl_log set status='1' where lid='$id'";
      $res=mysqli_query($con,$que);
      $re=mysqli_query($con,$ques);
      if($res && $re){
        header("location:total.php");
        }
  }
?>