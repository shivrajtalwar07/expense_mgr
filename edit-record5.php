<?php

require_once('lb/functions.php');
  $db = new class_dii();
  global $res_category ;
  global $res_edit_id ;
  if(isset($_GET['edit_id']))
  {
        $res_edit_id  = $_GET['edit_id'];
        $_SESSION['edit_id']  =  $res_edit_id ;
  
  }
    $res_edit_id =  $_SESSION['edit_id'] ;


if(isset($_POST['submit']))
{
        $va_category     =   $_POST['text'];


        $db->update_user_account($va_category,$res_edit_id);

}

$users_data = array();
$users_data = $db->get_user_data_from_id( $res_edit_id);

if(!empty($users_data))
{
$res_id          = $users_data['id'];
$res_category    = $users_data['category'];
$res_date        = $users_data['date'];
$res_time        = $users_data['time'];
}
?>   
   <html>

<head>
 <style>
.oii
{
padding: 30px;
font-size: 50px;
margin-right: 20px;
}
 .mi{
         border: 2px solid black;
         background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
         padding: 10px;
        font-size: 30px;
        margin-right: 50px;
        margin-left: 550px;
 }
 .mii
 {
    border: 2px solid black;
         background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
         padding: 10px;
        font-size: 20px;
        margin-right: 50px;
        margin-left: 650px;
        margin-top: 20px;
 }
.ki
     {
         
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
           border:2px solid black;
    padding: 5px;
    font-size:15px;
    
     }
 </style>
</head>

<body background="IMAGES\mi.jpg">
<form action="edit-record5.php" method="POST">

 <center><h1 class="oii">Category Master</h1></center>
<input type="text" class="mi" name="text" value="<?php echo $res_category  ?>"  />
<br />
<input type="submit" class="mii" name="submit" placeholder="Submit" />

</form>

	
</body>

</html>