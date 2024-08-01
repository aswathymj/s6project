<?php 
session_start();

$a=$_GET['amount'];


// $a=1000;

?>
<html>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  var options = {
    "key": "rzp_test_N0qsdxc2WmSAoc", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $a*100;?>",
    "currency": "INR",
    "description": "Sastha flames",
    "image": "",
    "handler":function(response){
      console.log(response);
      jQuery.ajax({
        type:"POST",
        url:"paymentdatabase.php",
        data:"pay_id="+response.razorpay_payment_id,
        success:function(result){
          alert("Successfully completed");
          window.location.href="order.php";
        }
      })
 
   
  }
  };
  var rzp1 = new Razorpay(options);
  $(document).ready(function(e)
   {
    
    rzp1.open();
    e.preventDefault();
  })
</script>
</html>