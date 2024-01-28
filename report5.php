<?php
require_once('lb/functions.php');
$db = new class_dii();
       

   
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
    margin-right:600px;
    margin-top:50px !important;
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

<a class="nav-link active apper1 jii" aria-current="page" href="Admin.php" >Admin page</a>

 	<center><h1 class="eii">*Registration Report*</h1></center>
    <table border="1" width="100%" cellspacing="1" cellpadding="10" >            
		<thead class="thead">
               <td>id</td>
        <td>category</td>
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
               $res_category    = $users_data[$counter]['category'];
               $res_date        = $users_data[$counter]['date'];
               $res_time        = $users_data[$counter]['time'];
            ?>
           <tr>
                <td><?php echo  $counter + 1 ?></td>
                <td><?php echo  $res_category ?></td>
                <td><?php echo  $res_date ?></td>
                <td><?php echo  $res_time  ?></td>
                <td>
                      <a href="edit-record5.php?edit_id=<?php echo $res_id; ?>" >Edit</a>
          </td>
          <td>
                       <a href="report5.php?delete_id=<?php echo  $res_id; ?>" >Delete</a>

          </td>
          </tr>
            <?php
               $counter++;
          }
     } 
          else
          {
             echo "No data found";
          }
         
     ?>


</tbody>
</body>

</html>
