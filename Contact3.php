

<?php
require_once('lb/functions.php');
$db=new  class_functions();


 if(isset($_POST['submit']))
 {
   echo $var_fist_name  = $_POST['firstname'];
    echo $var_last_name  = $_POST['lastname'];
   echo $var_country    = $_POST['country'];
   echo $var_sub        = $_POST['sub'];

   $db->create_user_account($var_fist_name,$var_last_name,$var_country,$var_sub );

 }

?>
<html>
    <head>
        <title>
Contact us
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
    margin-left:700px;
    margin-right:680px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    margin-top:60px;

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
.vii
{
    background: linear-gradient(to bottom, #9999ff 0%, #9999ff 100%);

}
.fii
{
margin-top:350px;
}

.lii
{
margin-left:350px;
  font-size: 20px;
     margin-top: 80px;
     color:red;
     font-size:50px;
}
.jii
{
margin-left:100px;
  font-size: 20px;
     margin-top: 80px;
     color:red;
     font-size:50px;
}
.oii
{
margin-left:100px;
  font-size: 20px;
     margin-top: 80px;
     color:blue;
     font-size:50px;
}
.nii
{
margin-left:300px;
  font-size: 20px;
     margin-top: 20px;
     color:yellow;
     font-size:50px;
}

.contact_form
{

  border:2px solid pink;
  font-size:35px;
  
}
.marg_logo
{
  margin-top:40px;
  margin-left:40px;
}
.ip_box
{
   background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);

}
.in
{
   font-size: 40;
   margin-right: 100px; 
   margin-bottom: 80px;
}
.hii
{
  margin-top:40px;
  height:150px;
    background: linear-gradient(to bottom, #99ffcc 0%, #ccff99 100%);
    border-radius:20px;

}
.yii
{
    background: linear-gradient(to bottom, #ffffcc 0%, #ffffcc 100% !important) ;
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
    font-size: 20px;
    font-family: 'Times New Roman';
    border:2px solid black;
    margin-left:420px;
    margin-right:160px;
    border-radius:15px;
    background: linear-gradient(to bottom, #66ff66 0%, #00ffff 100%);
    padding:5px;
    width:90px;
    height:50px;
    margin-top:130px;
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
.vii
{
    background: linear-gradient(to bottom, #9999ff 0%, #9999ff 100%);

}
.fii
{
margin-top:400px;
size:100 !important;
width:100 !important;
}

.lii
{
margin-left:350px;
  font-size: 20px;
     margin-top: 80px;
     color:red;
     font-size:50px;
}
.jii
{
margin-left:100px;
  font-size: 20px;
     margin-top: 80px;
     color:red;
     font-size:50px;
}
.oii
{
margin-left:100px;
  font-size: 20px;
     margin-top: 80px;
     color:blue;
     font-size:50px;
}
.nii
{
margin-left:300px;
  font-size: 20px;
     margin-top: 20px;
     color:yellow;
     font-size:50px;
}

.contact_form
{

  border:2px solid pink;
  font-size:35px;
  
}
.marg_logo
{
  margin-top:10px;
  margin-left:10px;
  width:20px;
  hight:20px;
}
.ip_box
{
   background: linear-gradient(to bottom, #6699ff 0%, #ff6699 100%);

}
.in
{
   font-size: 40;
   margin-right: 100px; 
   margin-bottom: 80px;
}
.hii
{
  margin-top:100px;
  height:120px;
    background: linear-gradient(to bottom, #99ffcc 0%, #ccff99 100%);
    border-radius:20px;
}
.yii
{
    background: linear-gradient(to bottom, #ffffcc 0%, #ffffcc 100% !important) ;
  }
  .hi{
margin-top:30px;
font-size:100px;
margin-top:200px;
  }
.i
{
  background-size:auto !important;

}

}
            </style>
    </head>

    <body  class="i"   background="IMAGES\pexels-james-wheeler-1486974.jpg"  style="background-size: 100% 1000px; background-repeat:no-repeat;">



          <form action="Contact3.php" method="POST">

          <center><h1 class="hi" >Get in Toch</h1></center>


<div class="container text-center">
  <div class="row">
    <div class="col yii">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="blue" class="bi bi-telephone fii" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
<h3>Contact</h3>
<h5>9156893352</h5>


</svg>

    </div>
    <div class="col hii">
      <br>
      <a href="https://chat.whatsapp.com/CSwUCq8k9V6FpGE6HIXpB9"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-whatsapp marg_logo" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>

<a href="https://instagram.com/shivrajtalwar07?igshid=MmIzYWVlNDQ5Yg=="><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="pink" class="bi bi-instagram marg_logo" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>


<a href="https://www.facebook.com/profile.php?id=100077298931437&mibextid=ZbWKwL"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="blue" class="bi bi-facebook marg_logo" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
<br>
<br>

<hr>
<div >
  <form >


  </form>
</div>
    </div>
    <div class="col yii">
     
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="yellow" class="bi bi-envelope fii" viewBox= "0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
<h3>Email</h3>
<h5>shivrajtalwar07@gamil.com</h5>

</svg>

    </div>
  </div>
</div>
</form>

    
<li class="nav-item ">
                    <a class="nav-link active apper " aria-current="page" href="index.php">Home</a>
                  </li>
    </body>
</html>