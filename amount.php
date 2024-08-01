<?php
 require("connection.php");
 if(isset($_POST["cyl_id"])){
    $a=$_POST["cyl_id"];
    // echo "<script>alert($a);</script>";
    $qu="select * from tbl_cyl where cyl_id='$a'";
    // $qu="select * from tbl_product where cat_id='$a'";

    $r=mysqli_query($con,$qu);
    $row=mysqli_fetch_array($r);
   
        ?>
          <script>
            $("#amount").html("<?php echo $row['cyl_price']; ?>");
          </script>
        <?php
     }
    
?>