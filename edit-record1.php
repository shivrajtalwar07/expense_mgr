<?php

require_once('lb/functions.php');
  $db = new class_mi();


  
  global $res_edit_id ;
  if(isset($_GET['edit_id']))
  {
        $res_edit_id  = $_GET['edit_id'];
        $_SESSION['edit_id']  =  $res_edit_id ;
  
  }
    $res_edit_id =  $_SESSION['edit_id'] ;

if(isset($_POST['submit']))
{
   $va_full_name 	      = 	$_POST['text'];
   $va_Mobil_number     =   $_POST['number'];
   $va_email_name       =   $_POST['email'];
   $va_password         =   $_POST['password'];
   $va_option           =   $_POST['option'];


    
  $db->update_user_acount($va_full_name,$va_date,$va_Mobil_number,$va_email_name,$va_password,$va_option,$res_edit_id);


}

$users_data = array();
$users_data = $db->get_user_data_from_id( $res_edit_id);

if(!empty($users_data))
{
  
  $res_id          = $users_data['id'];
  $res_full_name   = $users_data['full_name'];
  $res_mob_number = $users_data['mob_number'];
  $res_email       = $users_data['email'];
  $res_password    = $users_data['password'];
  $res_option      = $users_data['option'];
  $res_date        = $users_data['date'];
  $res_time        = $users_data['time'];
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
.nii
{
  background:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

 .tii
 {
    border:2px solid black;
     margin-left:450px;
    margin-right:500px;
    font-size:30px;
    background: linear-gradient(to bottom, #ccccff 0%, #ccffff 100%);

     
 }
 .lii 
 {
  border:2px solid black ;

 }
 
 .kii
 {
     font-size: 30px;
     margin: 90;
     color: black
 }
.mii
{
   background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
   margin-right:50px;
   margin-left:50px;
   margin-top:15px;
   border:2px solid black ;
    padding: 10px;
    font-size:30px;
    
    border-radius: 10px;
    
}
.complogo
{
    width:200px;
    height:200px;

}
.pos
{
    margin-right:130px;
}
.apper
{
    font-size: 25px;
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:15px;
    border-radius:15px;
    margin-bottom:90px;
}
.apper:hover
{
    color:white !important;
    background-color: black;
}
.bgcolor
{
  background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
    
}

.jii
{    
  background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
   margin-left:150px;
  margin-right:100px;
  margin-top:30px;
}
.bii
{
  margin-right:50px;
   margin-left:50px;
   background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
   margin-top:15px;
   border:2px solid black ;
    padding: 10px;
    font-size:40px;
    border-radius: 10px;
    
}
.in
{
   font-size: 40;
   margin-right: 100px; 
   margin-bottom: 80px;
}

@media only screen and (max-width: 800px)
{

  .complogo
{
    width:80px;
    height:100px;

}
.pos
{
    margin-right:100px;
}
.apper
{
  
  font-size: 15px;
    font-family: 'Times New Roman';
    border:1px solid black;
    margin-left:600px;
    margin-right:300px;
    border-radius:10px;
    margin-bottom:0px !important;
}
.apper:hover
{
    color:white !important;
    background-color: black;
}
.bgcolor
{
  background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
    
}
.nii
{
  background:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

 .tii
 {
    border:2px solid black;
     margin-left:200px;
    margin-right:200;
    font-size:15px;
    background: linear-gradient(to bottom, #ccccff 0%, #ccffff 100%);

     
 }
 .lii 
 {
  border:1px solid black ;
  width:100%;

 }
 
 .kii
 {
     font-size: 20px;
     margin-left: 90;
     color: black
 }
.mii
{
   background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
   margin-right:50px;
   margin-left:50px;
   margin-top:15px;
   border:2px solid black ;
    padding: 10px;
    font-size:15px;
    
    border-radius: 10px;
    
}


.jii
{    
  background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
   margin-left:120px !important;
  margin-right:100px;
  margin-top:30px;
}
.bii
{
 margin-left:50px;
font-size:20px;
}
.in
{
  margin-top:30px;
  font-size: 30px;
   margin-right: 10px; 
}

}

 </style>
</head>

<body class="nii" >



<form action="edit-record1.php" method="POST">


 <div class="tii">

<input type="text" class="mii" name="text" value="<?php echo $res_full_name; ?>" required placeholder="Enter First Name" />

<br />






<input type="number" class="mii" name="number" value="<?php echo $res_mob_number; ?>"  required placeholder="Enter The Number" />

<br />


<input type="email" class="mii" name="email" value="<?php echo $res_email;   ?>" required placeholder="Enter The Email" />

<br />


<input type="password" class="mii" name="password" value="<?php echo  $res_password; ?>" required placeholder="Enter The Password" />

<br />

<input type="option" class="bii" name="option" value="<?php echo $res_option; ?>" required placeholder="Enter option" />

<br />

<input type="submit" class="jii" name="submit" />
</div>
</form>

</body>
</html>