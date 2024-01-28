<?php
require_once('lb/functions.php');
$db = new class_tii();
   



   if(isset($_GET['delete_id']))
{
     $del_id = $_GET['delete_id'];

     $db->delete_user_record($del_id);
}

?>

<html>

<head>
 <style>
 .thead
 {
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
 color: green;
 font-size:20px;
 padding:80px;
 color: black;
 
 }
 .eii
 {
     font-size: 60px;
     color:black;
 }
 .yii
    {
    font-size: 25px;
    border:2px solid black;
    margin-left:1060px;
    margin-top:30px;
    width:140px;
    padding:10px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.aii
{
   
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    font-size:25px;
    width:330px;
    padding: 10px;
    border-radius:15px;
    border:2px solid black;
    border-size:20px;


}
.cat
{
    margin-top:30px;
    margin-left:30px;

}
.pii
{
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;
    font-size:20px;
    width:330px;
    padding: 5px;
    border-radius:15px;
    border:2px solid black;
    margin-left:630px;
    

}
.nii
{
       margin-top:150px;

}
.qii
{
     background: linear-gradient(to bottom, #99ccff 0%, #ff66ff 100%);
}
@media only screen and (max-width: 1000px)

{
     .thead
 {
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
 color: green;
 font-size:20px;
 padding:80px;
 color: black;
 
 }
 .eii
 {
     font-size: 60px;
     color:black;
 }
 .yii
    {
    font-size: 25px;
    border:2px solid black;
    margin-left:610px;
    margin-top:30px;
    width:140px;
    padding:10px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.aii
{
   
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    font-size:25px;
    width:330px;
    padding: 10px;
    border-radius:15px;
    border:2px solid black;
    margin-top:70px !important;

}
.cat
{
    margin-top:30px;
    margin-left:30px;

}
.pii
{
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;
    font-size:20px;
    width:330px;
    padding: 5px;
    border-radius:15px;
    border:2px solid black;
    margin-left:420px;
    

}
.nii
{
       margin-top:150px;

}
.qii
{
     background: linear-gradient(to bottom, #99ccff 0%, #ff66ff 100%);
}
}
 </style>
</head>

<body background="C:\Website\IMAGES\images (6).jpg">

<div class="cat" >

     <a class="aii" href="addexpence2.php">Add Choise</a>
     <a class="yii" href="report2.php?excel_export">Excel Export</a>

     <a class="pii" href="dashbord.php">Log out</a>

</div>
<div     class="qii" >
 	<center><h1 class="eii">*Total Report*</h1></center>
    <table border="1" width="100%" cellspacing="1" cellpadding="10" >            
		<thead class="thead">
        <td>Sr.no</td>
       <td>Category</td>
       <td>textfill</td>
        <td>Title</td>
       <td>Amount</td>
        <td>Date</td>
        <td>Date</td>
        <td>Time</td>
        <th>Edit</th>   
        <th>Delete</th>
</thead >


<tbody >

     <?php
          $total=0;
          $users_data =array();
          $users_data =$db->get_all_users_data();
$result=$db->get_total();
         // print_r($users_data);

         if(!empty($users_data))
         {
          $counter = 0;

          foreach($users_data as $record )
          {
               $res_no                = $users_data[$counter]['no'];
               $res_select_category   = $users_data[$counter]['select_category'];
               $res_textfill           = $users_data[$counter][ 'textfill'];
               $res_enter_title      = $users_data[$counter]['enter_title'];
               $res_enter_amount       = $users_data[$counter]['enter_amount'];
               $res_enter_date         = $users_data[$counter]['enter_date'];
               $res_date              = $users_data[$counter]['date'];
               $res_time               = $users_data[$counter]['time'];
               $total                  = $total+ $res_enter_amount ;

            ?>
           <tr>
                <td><?php echo  $counter + 1 ?></td>
                <td><?php echo  $res_select_category ?></td>
                <td><?php echo  $res_textfill ?></td>              
                <td><?php echo  $res_enter_title  ?></td>
                <td><?php echo  $res_enter_amount ?></td>
                <td><?php echo  $res_enter_date ?></td>
                <td><?php echo  $res_date ?></td>
                <td><?php echo  $res_time  ?></td>
                <td>
                      <a href="edit-record2.php?edit_id=<?php echo $res_no; ?>">Edit</a>
          </td>
          <td>
                       <a href="report2.php?delete_id=<?php echo  $res_no; ?>" >Delete</a>

          </td>
          </td><?php echo $result; ?>
          <td>
          
        </tr>
            <?php
               $counter++;
          
          }
          ?>
          <tr>
               <td colspan="4">
                    Total
               </td>
               <td>
                    <?php echo   $total;    ?>
               </td>
          </tr>
          <?php 
     
          }
          else   
          {
             echo "No data found";
          }
       
          if(isset($_GET['excel_export']))
	{
		$filename = "user_report2".date('Ymd') . ".xls";			
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"report2.php");	
		$show_coloumn = false;
		if(!empty($users_data)) {
		  foreach($users_data as $record) {
			if(!$show_coloumn) {
			  // display field/column names in first row
			  echo implode("\t", array_keys($record)) . "\n";
			  $show_coloumn = true;
			}
          }
     }
     exit;  
}

     ?>
     
     </div>
</html>