<?php
require_once('lb/functions.php');
$db = new class_functions();	

if(isset($_POST['submit']))
{
  $var_username =$_POST['username'];
  $var_password =$_POST['password'];
  $users_data = array();
  $users_data =$db->validate();


  if($users_data['full_name']==$var_username && $users_data['password']==$var_password )
{
  ?>
 <form action="records.php">
  <?php
}
else{
  ?>
<div class="alert alert-danger" role="alert">
 Invalid Username or Password
</div>
  <?php
}

}




?>
<html>
    <head>
        <title>
 Admin Login
        </title>
        <link rel="stylesheet" type="text/css" href="css\\bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css\\bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css\\bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="css\\bootstrap-utilities.css">
        <link rel="icon" href="images\logo.png" type="png">
        <script type="text/javascript" src="js\\bootstrap.js"> </script>
        <script type="text/javascript" src="js\\bootstrap.bundle.js"> </script>
        <link rel="stylesheet" href="css\style3.css">
        
    </head>
    <style>
         body {
      margin-top: 0px;
    }

    .complogo {
    height: 150px;
    width: 195px;
    margin-right: 700px;

  }


    .apper {
      padding: 10px;
      padding-right: 50px;
      font-size: 15px;
      color: white;
    }

    label {
      color: white;
    }

    .searchbar {
      margin-right: 30px;
      border-radius: 15px;
    }

    .sb {
      border-radius: 10px;
     
    }

    .apper:hover {

      border-radius: 10px;



    }

    label:hover {
      color:black;
    }

    .admin-login
    {margin:auto;
        height:500px;
        width:400px;
        border:2px solid olivedrab;
        border-radius: 8px;
    }
  .logo-position
  {
    margin-top: 40px;
  }
  .e-f-size
  {margin-right: 20px;
    width:65%;
    float:right;
    border:2px solid green;
    margin-top: 0px;
  }
  .form-lable
  {
    margin-top: 9px;
    margin-left:6px;
    color:black;
    font-size: 21px;
    font-family: 'Times New Roman';
   
  }
  .form-control
  {
    float:right;
    width:60%;
    margin-right: 50px;
    margin-top: 20px;
    border: 2px solid green;
  }
  .form-label
  {margin-left:10px;
    font-family: 'Times New Roman';
    color:black;
    font-size: 20;
    margin-top: 20px;
  }
  .sub-btn
  {
    float:center;
    margin-top: 50px;
    margin-left: 110px;
  }
  .bg_logo
{
border:2px solid black;
height:60px;
width:200px;
margin-left:100px;
border-radius:15px;
}
.apper {
    padding: 10px;
    padding-right: 50px;
    font-size: 15px;
    color: white;
    float:right !important;
    border:1.5px solid goldenrod;
    margin-right: 20px;
    border-radius: 10px;
  }
  .apper:hover {
    background: linear-gradient(to top, #ff66ff 0%, #9966ff 100%);
color:black ;
border-color: white;

  }
  
  .nvc
  {
    background-color: white !important;
  }
  @media only screen and (max-width:800px)
  {
    .complogo {
    height: 150px !important;
    width: 195px !important;
    margin-right:0px !important;

  }
  .apper {
    padding: 10px;
   height:58px;
   width:100px;
    font-size: 15px;
    color: white;
    text-align: justify;
    margin-top: 10px;
  }
  .admin-login {
      margin:auto;
        height:400px;
        width:300px;
        border:2px solid olivedrab;
        border-radius: 8px;
    }
    
  }
  .btn
  {
    border:2px solid black;
    margin-right: 8px;
    background-color: antiquewhite !important;
    color:black;
   
  }
  .btn:hover{
    background-color: tomato !important;
    color:black;
  }
    </style>

<body background="images\ad-log.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;" style="background-size: 100% 1000px; background-repeat:no-repeat;">

</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: linear-gradient(to right, #9900ff 0%, #ff99cc 100%) !important;">
  <div class="container-fluid" style="background-color: rgb(33, 21, 21);">
    <img src="images\logo.png" class="complogo">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon nvc"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active apper" style="color:white" aria-current="page" href="index.php">Home</a>
        </li>
        
      

        <li class="nav-item">
          <a class="nav-link active apper" style="color:white" aria-current="page" href="login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active apper" style="color:white" aria-current="page" href="contact_us.php">Contact us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active apper" style="color:white" aria-current="page" href="about_us.php">About us</a>
        </li>

      </ul>     
    </div>
  </div>
</nav>



<br>



<div class="wrapper">
<form  method="POST">
  <center><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </svg></center>
  <br>
  <hr>
  <h1>Hello Again!</h1>
  <br>
  <form>
    <input type="text" name="username" placeholder="Ur Username here...">
    <br>
    <input type="password" name="password" placeholder="Ur Password here..">
    
 
<center>  <input type="submit" name="submit"class="btn">Login As Administrator</input></center>
</form>
</div>

</body>
</html>