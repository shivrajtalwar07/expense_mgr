<?php

class class_tii
{
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","dt_dream2");

    }

    function create_user_acount($select_category,$enter_title,$enter_amount, $enter_date)
    {
        $current_date= date("Y-m-d");
        $current_time= date("H:i:s A");

        if($stmt = $this->con->prepare("INSERT INTO `users2`( `select_category`, `enter_title`, `enter_amount`, `enter_date`, `date`, `time`) VALUES (?,?,?,?,?,?,?)"))
        {
            $stmt->bind_param("ssisss",$select_category,$enter_title,$enter_amount, $enter_date,$current_date,$current_time);

            if($stmt->execute())
            {
               return true;
            }
            else
            {
               return false;
            }
        }
    }

    function get_user_data()
     {
        if($stmt = $this->con->prepare("SELECT `no`, `select_category`, `enter_title`, `enter_amount`, `enter_date`, `date`, `time` FROM `users2"))
{
     $stmt->bind_result($res_no,$select_category,$enter_title,$enter_amount, $enter_date,$res_date,$res_time);

     if($stmt->execute())
     {
      $data= array();
      $counter =0;

      while($stmt->fetch())
      {
         $data[$counter]['no'] = $res_no;
         $data[$counter]['caterg']=$select_category;
         $data[$counter]['titlee']=$enter_title;
         $data[$counter]['ammount']=$enter_amount;
         $data[$counter]['date']=$enter_date;
         $data[$counter]['date']=$res_date;
         $data[$counter]['time']=$res_time;

      
      }
     }
}
     }
}

?>