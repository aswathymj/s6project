<?php
  $id=$_GET['id'];
require("connection.php");
  $query="select * from tbl_books  where book_id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['status']==1){
      $que="update tbl_books set status='0' where book_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:amangbook.php");
        }
  }
  elseif($row['status']==0){
    $que="update tbl_books set status='1' where book_id='$id'";
      $res=mysqli_query($con,$que);
      if($res){
        header("location:amangbook.php");
        }
  }
 
?>