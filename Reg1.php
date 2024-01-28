<?php

require_once('lb/functions.php');
  $db = new class_mi();


if(isset($_POST['submit']))
{
   $va_full_name 	      = 	$_POST['text'];
   $va_Mobil_number     =   $_POST['number'];
   $va_email_name       =   $_POST['email'];
   $va_password         =   $_POST['password'];
   $va_option           =   $_POST['option'];
   $var_system_captcha	=	$_POST['system_captcha'];
   $var_user_captcha	=	$_POST['user_captcha'];
   
   if($var_system_captcha==$var_user_captcha)
   {
 if( $db->create_user_account($va_full_name,$va_Mobil_number,$va_email_name,$va_password,$va_option))
 {

?>

<div class="alert alert-success"   ;
 role="alert">
 You Have successfully Registred .. 👍
</div>
<?php

 }
 /* {
    //Send Whatsapp Message
    $whatsapp_message = "
      💥💥💥💥💥💥💥💥 \n

      *Expence Manger*

      Dear $var_full_name,
      Thank You For Joining With Us \n

      \n Note:Automatic Software Message".
      "\n💥💥💥💥💥💥💥💥";

      $url =	"http://web.cloudwhatsapp.com/wapp/api/send?apikey=7a7bc6e92e1447d4ac545dac48eebee4&mobile=$var_mobile_number&msg=".urlencode($whatsapp_message);
        echo $response = file_get_contents($url);
        
          //Send Message
    $forwardURL = 'http://sms.bulksmsind.in/sendSMS?'.http_build_query(array(
      'username' => "abc",
      'sendername' => "DRMTCH",
      'smstype' => "TRANS",
      'numbers' => $contact_no,
      'message' => $user_message,
      'apikey' => "1b4a8d6a-5760-40c7-b7eb-e31119e19cad",
    ));

  }*/
}

else{
  echo "Invalid Captcha Code.. Refill details";
}
}


?>



<html>

<head>
  
<title>
Expense mangemnt
        </title>

<meta name="keywords" content="Expence Mangemnet,month mangement,house mangemnt,office mangement,money mangement,expence tarackers, "/>
<meta name="description" content="it is month mangement it is so easy calculet of the money ,Retusreducing the lod mangement,your tressless injoy your life"/>
<meta name="robots" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
 
         <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css\bootstrap-grid.css">
         <link rel="stylesheet" type="text/css" href="css\bootstrap-reboot.css">
         <link rel="stylesheet" type="text/css" href="css\bootstrap-utilities.css">

        <script type="text/javascript" src="js\bootstrap.js"></script>
             <script type="text/javascript" src="js\bootstrap.bundle.js"></script>
 <style>
.Ragistration_form
{
margin-top:100px;
height:750px;
width:600px;

}
.Ragistration_form input{
gap:50px;
margin-top:17px;
position:relative;
	 display: block;
	
	 width:400px;
	 height:60px;
 border-radius:8px;
 		border:2px solid black;

	outline:none;
	padding:auto;
	font-size:25px;
}
.button
{
width:200px;
height:60px;
margin-top:-80px;
border-radius:9px;
}
.button:hover
{
width:150;

}
.input
{
gap:50px;
margin-top:17px;
position:relative;
	 display: block;
	
	 width:400px;
	 height:60px;
 border-radius:8px;
 		border:2px solid black;

	outline:none;
	padding:auto;
		font-size:25px;
	
}
.Home{
font-size:20px!important;
margin-left:700px; 
font-color:black;
background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
}
.Hil{
font-size:20px!important;
margin-right:800px; 
font-color:black;
background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
}

@media only screen and (max-width: 1000px)
{
  .Ragistration_form
{
margin-top:40px;
height:550px;
width:600px;
margin-right:20px; 

}
.reg{
  margin-right:150px;
}
.Ragistration_form input{
gap:50px;
margin-top:23px;
position:relative;
	 display: block;
   margin-right:200px; 

	 width:200px;
	 height:30px;
 border-radius:8px;
 		border:2px solid black;

	outline:none;
	padding:auto;
	font-size:15px;
}
.button
{
width:100px;
height:50px;
margin-top:-100px;
border-radius:9px;
}
.button:hover
{
width:150;

}
.input
{
gap:50px;
margin-top:23px;
position:relative;
	 display: block;
   margin-right:200px; 

	 width:200px;
	 height:30px;
 border-radius:8px;
 		border:2px solid black;

	outline:none;
	padding:auto;
		font-size:15px;
	
}
.Home{
font-size:15px!important;
margin-left:95px; 
font-color:black;
 background-color:red;
}
.Hil{
font-size:15px!important;
margin-right:450px; 
font-color:black;
background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
}
<body background="IMAGES\pexels-james-wheeler-1486974.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;" >

}

 </style>
</head>

<body background="IMAGES\colorful-arrow-symbols-mobile-phone-pen-blue-backdrop.jpg" style="background-size: 100% 1000px; background-repeat:no-repeat;" >

                  
    
<form action="Reg1.php" method="POST">


 <center><div class="Ragistration_form "  style="margin-top:10px;">
 <center><h1><label class="reg">Let's Get Register..</label></h1></center>
 <a class=" Hil"  href="index.php">Home</a>  
 <a class=" Home"  href="Login1.php">Login</a>
<input type="text" name="text" required placeholder="Enter Full_Name" />


<input type="number" name="number" required placeholder="Enter Mob_Number" />


<input type="email" name="email" required placeholder="Enter Email" >


<input type="password" name="password" required  placeholder="Enter Password" />


<select class="input" name="option">
<option>Student</option>
<option>Home</option>
<option>Work</option>
<option>Hospital</option>
	  <?php
			$random_value = rand(50000,99000)
	  ?>


	  <input type="text" name="system_captcha" value="<?php echo $random_value; ?>" />
	  
	  <input type="text" name="user_captcha" placeholder="Enter Captcha Code" />
	
    <br />

</div>
<br />
<input type="submit" class="button" name="submit" />
</center>
</form>
   
     
</body>
</html>