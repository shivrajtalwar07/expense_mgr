<?php

require_once('lb/functions.php');
  $db = new class_tii();
$db2=new class_mi();




if(isset($_POST['submit']))
{
    $va_Category 	    =   $_POST['Category'];
    $va_Enter_textfill   =   $_POST['textfill'];
    $va_Enter_Title      =   $_POST['title'];
    $va_Enter_Amount     =   $_POST['number'];
    $va_Enter_Date       =   $_POST['date'];
   
  
   $db->create_user_account( $va_Category,$va_Enter_textfill,$va_Enter_Title, $va_Enter_Amount, $va_Enter_Date);
}


?>

<?php
 echo  $_SESSION['Login_mon_no']  ;
?>




<html>

<head>
 <center><title>Expense Manager </title></center>
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
    margin-left: 120px;
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
<body background="IMAGES\59271.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;">

}


 </style>
 
</head>

<body background="IMAGES\59271.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;">


<div class="cat" >
<a class="oii" href="category5.php">Category</a>
<a class="sii" href="report2.php">Total Report </a>
</div>
<form action="addexpence2.php" method="POST">

    <div class="nii">
 <label class="fii">Select Category </label>
<select type="text" name="Category" class="hii oii">

<?php
          $users_data =array();
          $users_data =$db2->get_category_data();
         
         if(!empty($users_data))
         {
          $counter = 0;

          foreach($users_data as $record )
          {
               
               $res_category    = $users_data[$counter]['category'];
            
          
            ?>
            <option> <?php echo $res_category; ?> </option>
            <?php
               $counter++;
          }
     } 
         ?>  
 <option>Category </option>
<option>Market</option>
<option>TV Balance</option>
<option>Mobile Recharge</option>
<option>Gas</option>
<option>Function</option>
<option>Vegitable</option>
<option>Petrol</option>
<option>Eduction</option>
<option>Light Bill</option>
<option>LIC </option>
<option>Rashan</option>
<option>House Rent</option>
<option>Water Bill</option>


</select>
<br >
<label class="fii ">Enter textfill</title>
<input type="text" class=" hii oii " name="textfill" placeholder="$va_Enter_textfill" />

<br />


<label class="fii lii">Enter Title</title>
<input type="text" class=" hii oii " name="title" placeholder="Enter Title" />

<br />

<label class="fii">Enter Amount </label>
<input type="number" class="oii " name="number" placeholder="Enter Amount" />

<br />

<label class="fii">Enter Date </label>
<input type="date" class=" hii oii" name="date" />

<br >
<input type="submit" class=" dii"  name="submit" placeholder="Submit" />



</div>
</form>

<div class="mat" >
<a class="pii" href="dashbord.php">Log out</a>
    </div>
</body>

</html>