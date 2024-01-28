<?php
if(isset($_POST['Submit']))
{

    require_once('expence mang/functions1.php');
    $db = new  class_tii();

   $val_Category =$_POST['Category'];
   $val_Title    =$_POST['text'];
   $val_Ammount  =$_POST['number'];
   $val_Date     =$_POST['date'];
   


   $db->create_user_acount($val_Category,$val_Title,$val_Ammount,$val_Date );
}
  ?>
<html>

<head>
 <center><title>Expense Manager </title></center>
 <style>
.hii{
    margin-top:20px;
    margin-right:23px;
    margin-left:30px;
    border:2px solid black;
    padding: 5px;
    font-size:30px;
    border-radius: bold;
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
}
.oii
{
    margin-right:600px !important;
    margin-left:23px !important;
    background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);
    font-size:20px;
    padding: 5px;
    border:2px solid black;
    border-size:20px;
    margin-top:10px;


}
.dii
{
    margin-left: 70px;
    margin-right: 300px;
    padding: 8px;
    margin-top: 20px;

}
.nii
{
    font-size: 40px;
    margin-left: 500px;
    margin-right: 550px;
    margin-top: 100px;
    padding: 40px;
    border: 3px solid darkblue;
}
.fii
{
margin-right:90px;
margin-left:50px;
    

 </style>
 
</head>

<body background="C:\Website\IMAGES\background-design-poly-vektor-abstraktsiia-oka-project-golub.jpg">

<form action="addexpence2" method="POST" >

    <div class="nii">
 <label class="fii">Select Category </label>
<select name="Category" class="hii">
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

<br />

<label class="fii">Enter Title</title>
<input type="text" class="hii oii" name="text" placeholder="Enter Title " />

<br />

<label class="fii">Enter Amount </label>
<input type="number" class="oii" name="number" placeholder="Enter Amount" />

<br />

<label class="fii">Enter Date </label>
<input type="date" class="hii" name="date" />

<br >
<input type="Submit" class="hii dii"  name="Submit" placeholder="Submit" />
</div>
</form>
</body>

</html>