<?php
ob_start();
require_once('lb/functions.php');
$db = new class_mi();
       

   
   if(isset($_GET['delete_id']))
   {
        $del_id = $_GET['delete_id'];
   
        $db->delete_user_record($del_id);
   }
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<link rel="stylesheet" type="text/css" href="css\bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap-utilities.css">

<script type="text/javascript" src="js\bootstrap.js"></script>
     <script type="text/javascript" src="js\bootstrap.bundle.js"></script>
<style>

 <style>
 .thead
 {
 
      background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);


 color: green;
 font-size:20px;
 padding:80px;
 color: red;
 
 }
 .eii
 {
     font-size: 60px;
     color:black;
 }
 .apper1
{
    font-size: 25px;
    font-family: 'Times New Roman';
    border:3px solid black;
    margin-left:700px;
    margin-right:630px;
    margin-top:50px;
    border-radius:250px;
    padding:5px;
}
.apper1:hover
{
    color:white !important;
    background-color: black;
}
 </style>
</head>

<body >
<a class="nav-link active apper1 jii" aria-current="page" href="Admin.php" >Admin paget</a>


 	<center><h1 class="eii">*Registration Report*</h1></center>
     	<a href="report.php?excel_export">Export </a>
         

          <h1>Users Report</h1>
	<a href="report.php?excel_export">Excel Export</a>
	
	<a href="https://rzp.io/i/xF2dv8f">PAY NOW</a>
	
	<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "YOUR_KEY_ID", // Enter the Key ID generated from the Dashboard
    "amount": "1000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "DREAM TECHNOLOGY",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>


    <table border="1" width="100%" cellspacing="1" cellpadding="10" >            
		<thead class="thead">
               <td>id</td>
        <td>Full_Name</td>
        <td>Mobile_number</td>
       <td>Email</td>
        <td>Password</td>
        <th>option</th>   
        <th>date</th>
        <th>time</th>
        <th>Edit</th>   
        <th>Delete</th>
        
</thead >
<tbody >
     <?php
          $users_data =array();
          $users_data =$db->get_all_users_data();

         // print_r($users_data);

         if(!empty($users_data))
         {
          $counter = 0;

          foreach($users_data as $record )
          {
               $res_id          = $users_data[$counter]['id'];
               $res_full_name   = $users_data[$counter]['full_name'];
               $res_mob_number = $users_data[$counter]['mob_number'];
               $res_email       = $users_data[$counter]['email'];
               $res_password    = $users_data[$counter]['password'];
               $res_option      = $users_data[$counter]['option'];
               $res_date        = $users_data[$counter]['date'];
               $res_time        = $users_data[$counter]['time'];
            ?>
           <tr>
                <td><?php echo  $counter + 1 ?></td>
                <td><?php echo  $res_full_name ?></td>
                <td><?php echo  $res_mob_number?></td>
                <td><?php echo  $res_email  ?></td>
                <td><?php echo  $res_password ?></td>
                <td><?php echo  $res_option?></td>
                <td><?php echo  $res_date ?></td>
                <td><?php echo  $res_time  ?></td>
                <td>
                <a href="edit-record1.php?edit_id=<?php echo $res_id; ?>">Edit</a>
          </td>
          <td>
                       <a href="report.php?delete_id=<?php echo  $res_id; ?>" >Delete</a>

          </td>
          </tr>
            <?php
               $counter++;
          }
     }
          else
          {
             echo "No data found  😟..!";
          }
         

          if(isset($_GET['excel_export']))
	{
		$filename = "user_report".date('Ymd') . ".xls";			
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");	
		$show_coloumn = false;
		if(!empty($users_data)) {
		  foreach($users_data as $record) {
			if(!$show_coloumn) {
			  // display field/column names in first row
			  echo implode("\t", array_keys($record)) . "\n";
			  $show_coloumn = true;
			}
			echo implode("\t", array_values($record)) . "\n";
		  }
		}
		exit;  
	}

     ob_flush();
     ?>


</tbody>
</body>

</html>