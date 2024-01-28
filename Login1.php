<?php

require_once('lb/functions.php');
  $db = new class_mi();


  if(isset($_GET['logout']))
  {
    unset($_SESSION['Login_mon_no']);
  }

  if(isset($_POST['submit']))
{

  $va_Mobil_number     =   $_POST['number'];
  $va_password         =   $_POST['password'];

 $db_password = $db->get_user_password( $va_Mobil_number);

  
 if($db_password=="")
 {
     echo "This user is not registered with us . Check Mobile Number";
 }
 else
 {
     if($va_password ==$db_password)
     {

        //echo "login Success";
        $_SESSION['Login_mon_no'] = $va_Mobil_number ;

        header("location:dashbord.php");
     }
     else
     {
        echo "Incorrect password";
     }
 }
}
?>






<html>
    <head>
        <title>
Login Page
        </title>
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">

        <link rel="stylesheet" type="text/css" href="css\bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css\bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="css\bootstrap-utilities.css">

        <script type="text/javascript" src="js\bootstrap.js"></script>
             <script type="text/javascript" src="js\bootstrap.bundle.js"></script>
        <style>
.complogo
{
    width:200px;
    height:200px;

}
.pos
{
    margin-right:200px;
}
.apper
{
    font-size: 25px;`
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:160px;
    margin-right:250px;
    margin-top:60px;
    width:80px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.apper:hover
{
    color:white !important;
    background-color: black;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.bgcolor
{
  background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;

}
.log-form
{
  border:2px solid black;
  width:350px;
  height:430px;
  border-radius: 20px;
  margin-left:500px !important;
  margin-right:450px !important; 
  margin-top:30px !important;
    font-size: 20px;
     margin: 5px;

}
.fii
{
  padding: 40px;
  font-size: 50px;
  color:black;
}
.gii
{
 
 margin-top: 30px; 
 margin-left:30px;
margin-right:32px !important;
border-radius: 30px;
font-size: 25px;
font-color:black;
}

.pii
{
  margin-left:140px;
  margin-right:100px !important;
  margin-top:40px;
  font-size:20px;
  background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;

}

.wii
{  
  margin-top:120px;
 background="C:\wamp64\www\IMAGES\download 6.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;


}
.jii
{
  margin-top:30px;
}
.in
{
   font-size: 40;
   margin-right: 100px; 
   margin-bottom: 80px;
}

@media only screen and (max-width: 1000px)
{

  .complogo
{
    width:200px;
    height:200px;

}
.pos
{
    margin-right:200px;
}
.apper
{
    font-size: 25px;`
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:220px;
    margin-right:210px;
    margin-top:380px;
    width:150px;
    height:60px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.apper:hover
{
    color:white !important;
    background-color: black;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.bgcolor
{
  background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;

}
.log-form
{
  border:2px solid black;
  width:600px;
  height:800px;
  border-radius: 20px;
  margin-left:200px !important;
  margin-right:200px !important; 
  margin-top:50px !important;
    font-size: 20px;
     margin: 5px;

}
.fii
{
  padding: 40px;
  font-size: 80px;
  color:black;
}
.gii
{
 
 margin-top: 60px; 
 margin-left:40px;
 width:500px;
 height:80;
margin-right:32px !important;
border-radius: 30px;
font-size: 25px;
font-color:black;
background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;
}

.pii
{
  margin-left:250px;
  margin-right:100px !important;
  margin-top:100px;
  font-size:20px;
  width:130;
  height:40;
  background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;

}

.wii
{  
  margin-top:120px;
 background="C:\wamp64\www\IMAGES\download 6.jpg";
 background-size: 100% 1000px; background-repeat:no-repeat;


}
.jii
{
  margin-top:30px;
}
.in
{
   font-size: 40;
   margin-right: 100px; 
   margin-bottom: 80px;
}
.wii
{
  background-size: 100% 1000px; 
  
  background-size:auto !important;
  background-repeat:no-repeat;
}  

}



            </style>
    </head>

    <body class="wii" background="IMAGES\43533.jpg"  style="background-size: 100% 1000px; background-repeat:no-repeat;" >

          
          
<form action="Login1.php" method="POST">

          <div class="log-form">
     <center><label class="fii">Login</label></center> 
  <input type="number"  class="gii" name="number" placeholder="Enter the Number" />
  
  <br />
   
  <input type="password" class="gii" name="password" placeholder="Enter the password" />
  
  <br />
  
   
  <input type="submit" class="pii"  name="submit" placeholder="Sign in " />

  <br />

  <br />
</form>

      
      
<li class="nav-item ">
                    <a class="nav-link active apper " aria-current="page" href="index.php">Home</a>
                  </li>


    </body>
</html>