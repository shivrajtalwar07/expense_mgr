<?php

require_once('lb/functions.php');
  $db = new class_mi();

  
?>

<?php
 echo  $_SESSION['Login_mon_no']  ;
?>
<html>
<head>




<style>


.nii
{
    margin-top:200px !important;
    margin-left:185px;
    font-family:cambria;
    font-size:50px;
    padding:20px;
    border:2px solid #862B0D;
    background-color: #FFC95F;
    border-radius:20px;
    color:#D34C26;
    text-decoration:none;
    position:center;

}

.align
{
    margin-top:300px;


}
.jii
{
    margin-top:200px;
    border:1px solid black;
    width:50px;
    margin-left:720px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    padding:5px;
}

.apper
{
    font-size: 25px;
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:700px;
    margin-right:250px;
    margin-top:30px;
    width:80px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}

@media only screen and (max-width: 1000px)
{
    .nii
{
    margin-top:200px !important;
    margin-left:20px;
    font-family:cambria;
    font-size:50px;
    padding:20px;
    border:2px solid #862B0D;
    background-color: #FFC95F;
    border-radius:20px;
    color:#D34C26;
    text-decoration:none;
    position:center;

}

.align
{
    margin-top:350px;


}
.jii
{
    margin-top:200px;
    border:1px solid black;
    width:50px;
    margin-left:450px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    padding:5px;
}

.apper
{
    font-size: 25px;
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:450px;
    margin-right:250px;
    margin-top:180px !important;
    width:80px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);

}
.ki
{
    margin-left:400px;

}
.kii 
{
    margin-left:1600px !important;

    margin-top:60px  !important;

}
}
    </style>

<body background="IMAGES\low_poly_banner_design_1711.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;">
<div class="indexlink">

                    <a class="nav-link active apper " aria-current="page" href="index.php">Home</a>
                
<div class="align">





    <a class="nii ki" href="category5.php">Category</a>

 
    <a class="nii kii "  href="addexpence2.php">Add Choise</a>
    
    <a class="nii" href="report2.php">Total Report </a>
   




</div>
<br>
<br>
<div class="jii">
<center><a href="Login1.php?logout">Logout</a></center>
</div>
</body>


</head>
</html>







