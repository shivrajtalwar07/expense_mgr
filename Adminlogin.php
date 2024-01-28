<?php
if(isset($_POST['submit']))
{

  $va_Mobil_number     =   $_POST['text'];
  $va_password         =   $_POST['password'];

 $db_password = $db->get_user_password( $va_Mobil_number);
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
    font-size: 25px;
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
  background: linear-gradient(to bottom, #ffff99 0%, #ffffff 100%);
    font-size: 20px;
     margin: 5px;

}
.fii
{
  padding: 40px;
  font-size: 40px;
  color:black;
}
.gii
{
  
 margin-top: 30px; 
 margin-left:30px;
margin-right:32px !important;
border-radius: 30px;
font-size: 25px;
background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;
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
 background="IMAGES\download 6.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;


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

@media only screen and (max-width: 800px)
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
    font-size: 25px;
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
  width:200px;
  height:400px;
  border-radius: 20px;
  margin-left:50px !important;
  margin-right:60px !important; 
  margin-top:40px !important;
  background: linear-gradient(to bottom, #ffff99 0%, #ffffff 100%);
    font-size: 15px;
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
  
 margin-top: 20px; 
 margin-left:10px;
margin-right:32px !important;
border-radius: 10px;
font-size: 15px;
background: linear-gradient(to bottom, #3366ff 0%, #ff00ff 100%) !important;
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
  margin-left:10px;
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

}



            </style>
    </head>

    <body class="wii" background="IMAGES\download 6.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;" >

          
          
<form action="Login1.php" method="POST">

          <div class="log-form">
     <center><label class="fii">Admin Login</label></center> 
  <input type="text"  class="gii" name="number" placeholder="Enter the Number" />
  
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