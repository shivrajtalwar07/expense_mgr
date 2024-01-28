<?php


  require_once('lb/functions.php');
  $db = new class_tii();
$db2=new class_mi();
    
$res_no       =0;       
 $res_select_category=0; 
$res_textfill     =0;    
$res_enter_title =0;     
$res_enter_amount=0;     
$res_enter_date  =0;     
$res_date     =0;        
$res_time    =0;        

   $res_edit_id =  " " ;
  if(isset($_GET['edit_id']))
  {
        $res_edit_id  = $_GET['edit_id'];
        $_SESSION['edit_id']  =  $res_edit_id ;
  
  }
  echo   $res_edit_id =  $_SESSION['edit_id'] ;

if(isset($_POST['submit']))
{


    $va_Category 	    =   $_POST['Category'];
     $va_Enter_textfill   =   $_POST['textfill'];
     $va_Enter_Title      =   $_POST['title'];
    $va_Enter_Amount     =   $_POST['number'];
     $va_Enter_Date       =   $_POST['date'];
   
    $db->update_user_account( $va_Category,$va_Enter_textfill,$va_Enter_Title, $va_Enter_Amount, $va_Enter_Date,$res_edit_id);

}

 $users_data = array();
 $users_data = $db->get_user_data_from_id( $res_edit_id);

if(!empty($users_data))

 {
 $res_no                = $users_data['no'];
   $res_select_category   = $users_data['select_category'];
  $res_textfill           = $users_data[ 'textfill'];
  $res_enter_title      = $users_data['enter_title'];
 $res_enter_amount       = $users_data['enter_amount'];
 $res_enter_date         = $users_data['enter_date'];
 $res_date              = $users_data['date'];
  $res_time               = $users_data['time'];
 $total                  =  $res_enter_amount ;
 
 ?>

















</html><html>

<head>
 <center><title>update  Manager </title></center>
 <style>
.hii{
    margin-top:15px;
   
    border:2px solid black;
    padding: 5px;
    font-size:30px;
    border-radius: bold;
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;

}
.oii
{
   
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;
    font-size:30px;
    width:330px;
    padding: 5px;
    border:2px solid black;
    border-size:20px;
    margin-top:10px;


}
.dii
{
    margin-left: 8 0px;
    margin-right: 300px;
    
    padding: 8px;
    margin-top: 40px;
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;

}
.nii
{
    font-size: 30px;
    margin-left: 510px !important;
    margin-right: 550px;
    margin-top: 30px;
    padding: 40px;
    border: 3px solid #ff66cc;
}
.fii
{
margin-right:90px;
margin-left:50px;
color:light;
}  
.sii
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
.oii
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
    margin-left:660px;
    

}
.mat
{
    margin-top:60px;
}
.lii
{
margin-top:0px;
}
@media only screen and (max-width: 1000px)
{
    .hii{
    margin-top:07px;
   
    border:2px solid black;
    padding: 5px;
    font-size:40px !important;
    border-radius: bold;
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;
}
.oii
{
   
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;
    font-size:30px;
    width:380px;
    padding: 5px;
    border:2px solid black;
    border-size:20px;
    margin-top:10px;


}
.dii
{
    margin-left: 120px;
    margin-right: 300px;
    
    padding: 8px;
    margin-top: 40px;
    background: linear-gradient(to bottom, #00ff99 0%, #cc66ff 100%) !important;

}
.nii
{
    font-size: 30px;
    margin-left: 250px !important;
    margin-right: 270px !important;
    margin-top: 90px;
    padding: 40px;
    border: 3px solid #ff66cc;
    width:400px;
    height:1000px;
}
.fii
{
margin-right:90px;
margin-left:70px !important;
color:light;
margin-top:60px !important;
font-size:30px;
}  
.sii
    {
    font-size: 25px;
    border:2px solid black;
    margin-left:600px;
    margin-top:30px;
    width:140px;
    padding:10px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.oii
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
    margin-left:400px;
    

}
.mat
{
    margin-top:60px;
}
.lii
{
margin-top:0px;
}

}


 </style>
 
</head>

<body background="IMAGES\syss.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;">

<div class="cat" >
<a class="sii" href="report2.php">Total Report </a>
</div>
<form action="edit-record2.php" method="POST">

    <div class="nii">
 <label class="fii">Select Category </label>
<input type="text" name="Category" value="<?php echo $res_select_category; ?> " class="hii oii">



<br >
<label class="fii ">Enter textfill</title>
<input type="text" class=" hii oii " name="textfill"  value="<?php echo $res_textfill ;?>" />

<br />


<label class="fii lii">Enter Title</title>
<input type="text" class=" hii oii " name="title" value="<?php echo $res_enter_title ; ?>" />

<br />

<label class="fii">Enter Amount </label>
<input type="number" class="oii " name="number" value="<?php echo $res_enter_amount; ?>" />

<br />

<label class="fii">Enter Date </label>
<input type="date" class=" hii oii" value="<?php echo $res_enter_date ;}?>"name="date" />

<br >
<input type="submit" class=" dii"  name="submit"  value="UPDATE DETALS"  />



</div>
</form>


</body>

</html>