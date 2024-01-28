<?php

require_once('lb/functions.php');
$db = new class_mi();
  $db = new class_dii();
  $user=$_SESSION['Login_mon_no'];

  





if(isset($_POST['submit']))
{
        $category     =   $_POST['text'];


    
  $db->create_user_account($category,$user);
echo  $user;
}



?> 

<?php
 echo  $_SESSION['Login_mon_no']  ;
?>  
   <html>

<head>
 <style>
.oii
{
padding: 30px;
font-size: 70px;
margin-right: 20px;
margin-top: 20px;

}
 .mi{
         border: 2px solid black;
         background: lightblue;
         padding: 10px;
        font-size: 35px;
        margin-right: 50px;
        margin-left: 500px;
        margin-top: 70px;

 }
 .mii
 {
    border: 2px solid black;
    background: lightblue;
        padding: 10px;
        font-size: 20px;
        margin-right: 50px;
        margin-left: 650px;
        margin-top: 40px;
 }
.ki
     {
         
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
     border:2px solid black;
    padding: 5px;
    font-size:15px;
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
 @media only screen and (max-width: 1000px)
 {
       
    .oii
{
padding: 30px;
font-size: 70px;
margin-right: 20px;
margin-top: 200px;

}

 .mi{
         border: 2px solid black;
         background: lightblue;
         padding: 10px;
        font-size: 35px;
        margin-right: 50px;
        margin-left: 270px;
        margin-top: 130px;

 }
 .mii
 {
    border: 2px solid black;
    background: lightblue;
        padding: 10px;
        font-size: 20px;
        margin-right: 50px;
        margin-left: 450px;
        margin-top: 100px;
 }
.ki
     {
         
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
     border:2px solid black;
    padding: 5px;
    font-size:15px;
 }
 
.yii
    {
    font-size: 25px;
    border:2px solid black;
    margin-left:600px;
    margin-top:50px;
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
   margin-top:50px;

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
    width:360px;
    padding: 5px;
    border-radius:15px;
    border:2px solid black;
    margin-left:430px;
    margin-top:100px;
}
.nii
{
    margin-top:150px;

}
.hi{
margin-top:50px !important;
}
 }
 </style>
</head>

<body background="IMAGES\3334695.jpg"   style="background-size: 100% 1000px; background-repeat:no-repeat;">
<div class="cat" >
<a class="aii hi" href="addexpence2.php">Add Choise</a>
<a class="yii" href="report2.php">Total Report </a>
</div>

<form action="category5.php" method="POST">

 <center><h1 class="oii">Category Master</h1></center>
<input type="text" class="mi" name="text" placeholder="Category Name" />
<br />
<input type="submit" class="mii" name="submit" placeholder="Submit" />

</form>

<div class="nii cat sii" >
<a class="pii" href="dashbord.php">Log out</a>
    </div>
</body>

</html>