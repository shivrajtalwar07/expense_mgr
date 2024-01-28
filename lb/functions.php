
<?php
session_start();

      date_default_timezone_set('Asia/kolkata');

 class class_mi
 {
     private $con;

     function __construct()
     {
        $this->con=new mysqli("localhost","root","","dt_dream");

     }

     function create_user_account($full_name,$mob_number,$email_id,$password,$options)
     {
         $current_date  = date("Y-m-d");
         $current_time  = date("H:i:s A");

        if($stmt = $this->con->prepare("INSERT INTO `users`( `full_name`,  `mob_number`, `email`, `password`,`option`, `date`, `time`) VALUES (?,?,?,?,?,?,?)"))
         {
            $stmt->bind_param("sssssss",$full_name,$mob_number,$email_id,$password,$options,$current_date,$current_time);

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

     function get_all_users_data()
     {

      $current_date  = date("Y-m-d");
      $current_time  = date("H:i:s A");
        if($stmt = $this->con->prepare("SELECT `id`, `full_name`,  `mob_number`, `email`, `password`,`option`, `date`, `time` FROM `users` "))
{
     $stmt->bind_result($res_id,$res_full_name,$res_mob_number,$res_email,$res_password,$res_option,$res_date,$res_time);

     if($stmt->execute())
     {
      $data= array();
      $counter =0;

      while($stmt->fetch())
      {
         echo 878787;
         $data[$counter]['id'] = $res_id;
         $data[$counter]['full_name']=$res_full_name;
         $data[$counter]['mob_number']=$res_mob_number;
         $data[$counter]['email']=$res_email;
         $data[$counter]['password']=$res_password;
         $data[$counter]['option']=$res_option;
         $data[$counter]['date']=$res_date;
         $data[$counter]['time']=$res_time;

         $counter++;
      }
      if(!empty($data))
      {
          return $data;
      }
      else
      {
         return false;
      }
     }
}
     }




     function get_category_data()
     {
      

        if($stmt = $this->con->prepare("SELECT  `category` FROM `cat`  "))
{
   
     $stmt->bind_result($res_category);

     if($stmt->execute())
     {
      $data= array();
      $counter =0;

      while($stmt->fetch())
      {
         
         $data[$counter]['category'] = $res_category;
        

         $counter++;
      }
      if(!empty($data))
      {
          return $data;
      }
      else
      {
         return false;
      }
     }
}
     }




     function delete_user_record($del_id)
     {
      if($stmt = $this->con->prepare("Delete from `users` where `id`=?"))
      {
            $stmt->bind_param("i",$del_id);

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


     function update_user_acount( $full_name,$brith_date,$mob_number,$email_id,$password,$res_edit_id)
     {
     
         $current_date = date("Y-m-d");
         $current_time= date("H:i:s A");
     
     
         if($stmt=$this->con->prepare("UPDATE `users` SET `full_name`=?,`brith_date`=?,`mob_number`=?,`email`=?,`password`=?,`date`=?,`time`=? WHERE  `id`=?"))
         {
               $stmt->bind_param("sssssssi",$full_name,$brith_date,$mob_number,$email_id,$password,$current_date, $current_time,$res_edit_id);
     
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
     

     function get_user_data_from_id( $res_edit_id)
     {
     if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `brith_date`, `mob_number`, `email`, `password`, `date`, `time` FROM `users` where `id`=? "))
     {
         $stmt->bind_param("i",$res_edit_id);

          $stmt->bind_result($res_id,$res_full_name,$res_brith_date,$res_mob_number,$res_email,$res_password,$res_date,$res_time);
     
          if($stmt->execute())
          {
           $data= array();
     
           if($stmt->fetch())
           {
              $data['id'] = $res_id;
              $data['full_name']=$res_full_name;
              $data['brith_date']=$res_brith_date;
              $data['mob_number']=$res_mob_number;
              $data['email']=$res_email;
              $data['password']=$res_password;
              $data['date']=$res_date;
              $data['time']=$res_time;
     
            
           }
           if(!empty($data))
           {
               return $data;
           }
           else
           {
              return false;
           }
          }
     }
          }


          function  get_user_password( $va_Mobil_number)
          {
            if($stmt = $this->con->prepare("SELECT  `password` FROM `users` WHERE `mob_number`=? "))
            {
               $stmt->bind_param("s",$va_Mobil_number);

               $stmt->bind_result($res_password);

               if($stmt->execute())
               {
                  if($stmt->fetch())
                  {
                     return $res_password;
                  }
                  else
                  {
                    return false;
                  }
               }
            }
          }


 }

?>





<?php
 
 
      date_default_timezone_set('Asia/kolkata');

 class class_dii
 {
     private $con;

     function __construct()
     {
        $this->con=new mysqli("localhost","root","","fun5");

     }

     function create_user_account($res_category,$user)
     {
         $current_date  = date("Y-m-d");
         $current_time  = date("H:i:s A");

        if($stmt = $this->con->prepare("INSERT INTO `cat` (`category`, `user`,`date`, `time`) VALUES (?,?,?,?)"))
         {
            $stmt->bind_param("ssss",$res_category,$user,$current_date,$current_time);

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

    function get_all_users_data()
     {
        if($stmt = $this->con->prepare("SELECT  `category` FROM `cat`  "))
{
     $stmt->bind_result($res_category);

     if($stmt->execute())
     {
      $data= array();
      $counter =0;

      while($stmt->fetch())
      {
       
         $data[$counter]['category']=$res_category;
        

         $counter++;
      }
      if(!empty($data))
      {
          return $data;
      }
      else
      {
         return false;
      }
     }
}
     }

     function delete_user_record($del_id)
     {
      if($stmt = $this->con->prepare("DELETE FROM `cat` WHERE `id`=?"))
      {
            $stmt->bind_param("i",$del_id);

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


     function update_user_account( $va_category,$res_edit_id )
{

    $current_date = date("Y-m-d");
    $current_time=date("H:i:s A");


    if($stmt=$this->con->prepare("UPDATE `cat` SET `category`=?,`date`=?,`time`=? WHERE 'id`=? "))
    {
          $stmt->bind_param("sssi", $va_category, $current_date, $current_time,$res_edit_id);

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


function get_user_data_from_id( $res_edit_id)
{
   if($stmt = $this->con->prepare("SELECT `id`, `category`, `date`, `time` FROM `id` where `id`=?  "))
   {
      
      $stmt->bind_param("i",$res_edit_id);

        $stmt->bind_result($res_id,$res_category,$res_date,$res_time);
   
        if($stmt->execute())
        {
         $data= array();
         
   
       if($stmt->fetch())
         {
            $data['id'] = $res_id;
            $data['category']=$res_category;
            $data['date']=$res_date;
            $data['time']=$res_time;
   
            
         }
         if(!empty($data))
         {
             return $data;
         }
         else
         {
            return false;
         }
        }
   }

}
 }

 
?>




<?php

class class_functions
{
     private $con;

     function __construct()
     {
        $this->con=new mysqli("localhost","root","","fun");
     }

     function create_user_account($frist_name,$last_name,$country,$subject)
     {
        if($stmt = $this->con->prepare("INSERT INTO `user`( `frist_name`, `last_name`, `country`, `subject`, `date`, `time`) VALUES (?,?,?,?,?,?)"))
        {
            $stmt->bind_param("ssssss","$frist_name,$last_name,$country,$subject,$current_date,$current_time");

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
 


     function get_all_users_data()
     {
        if($stmt = $this->con->prepare("SELECT `id`, `frist_name`, `last_name`, `country`, `subject`, `date`, `time` FROM `user`"))
{
     $stmt->bind_result($res_id,$res_first_name,$res_last_name,$res_country,$res_subject,$res_date,$res_time);

     if($stmt->execute())
     {
      $data= array();
      $counter =0;

      while($stmt->fetch())
      {
         $data[$counter]['id'] = $res_id;
         $data[$counter]['frist_name']=$res_first_name;
         $data[$counter]['last_name']=$res_last_name;
         $data[$counter]['country']=$res_country;
         $data[$counter]['subject']=$res_subject;
         $data[$counter]['date']=$res_date;
         $data[$counter]['time']=$res_time;

         $counter++;
      }
      if(!empty($data))
      {
          return $data;
      }
      else
      {
         return false;
      }
     }
}
     } 

     function delete_user_record($del_id)
     {
      if($stmt = $this->con->prepare("Delete from `users` where `id`=?"))
      {
            $stmt->bind_param("i",$del_id);

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



     
    function update_user_acount( $res_id,$res_first_name,$res_last_name,$res_country,$res_subject, $res_edit_id)
    {
    
        $current_date = date("Y-m-d");
        $current_time=date("H:i:s A");
    
    
        if($stmt=$this->con->prepare("UPDATE `user` SET `frist_name`=?,`last_name`=?,`country`=?,`subject`=?,`date`=?,`time`=? WHERE 1 `id`=?"))
        {
              $stmt->bind_param("ssssssi",$res_first_name,$res_last_name,$res_country,$res_subject, $va_Enter_Date,$current_date, $current_time,$res_edit_id);
    
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
    

     
 }
?>























<?php



date_default_timezone_set('Asia/kolkata');


class class_tii
{
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","dt_dream2");

    }

    function create_user_account($select_category,$enter_textfill,$enter_title,$enter_amount, $enter_date)
     {
        $current_date= date("Y-m-d");
        $current_time= date("H:i:s A");

        if($stmt = $this->con->prepare("INSERT INTO `users2`( `select_category`, `textfill`,`enter_title`, `enter_amount`, `enter_date`, `date`, `time`) VALUES (?,?,?,?,?,?,?)"))
        {
            $stmt->bind_param("sssisss",$select_category,$enter_textfill,$enter_title,$enter_amount, $enter_date,$current_date,$current_time);

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


    function get_total()
    {
      if($stmt = $this->con->prepare("SELECT sum( `enter_amount` ) FROM `users2`"))
      {
         $stmt->bind_result($var_total);
         if($stmt->execute())
         {
            return $var_total;
         }
         else{
            return false;
         }
      }


    }
    function get_all_users_data()
    {
       if($stmt = $this->con->prepare("SELECT `no`, `select_category`, `textfill`, `enter_title`, `enter_amount`, `enter_date`, `date`, `time` FROM `users2`"))
{
    $stmt->bind_result($res_no,$res_select_category,$res_textfill,$res_enter_title,$res_enter_amount,$res_enter_date,$res_date,$res_time);

    if($stmt->execute())
    {
     $data= array();
     $counter =0;

     while($stmt->fetch())
     {
        $data[$counter]['no'] = $res_no;
        $data[$counter]['select_category']=$res_select_category;
        $data[$counter]['textfill']=$res_textfill;
        $data[$counter]['enter_title']=$res_enter_title;
        $data[$counter]['enter_amount']=$res_enter_amount;
        $data[$counter]['enter_date']=$res_enter_date;
        $data[$counter]['date']=$res_date;
        $data[$counter]['time']=$res_time;

        $counter++;
     }
     if(!empty($data))
     {
         return $data;
     }
     else
     {
        return false;
     }
    }
}
    }

    function delete_user_record($del_no)
    {
     if($stmt = $this->con->prepare("Delete from `users2` where `no`=?"))
     {
           $stmt->bind_param("i",$del_no);

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

    function update_user_account( $va_Category,$va_Enter_textfill ,$va_Enter_Title, $va_Enter_Amount, $va_Enter_Date, $res_edit_id)
{

    $current_date = date("Y-m-d");
    $current_time=date("H:i:s A");


    if($stmt=$this->con->prepare("Update `users2` set `select_category`=?, `textfill`=?,`enter_title`=?,`enter_amount`=?,`enter_date`=?,`date`=?,`time`=? where `no`=?"))
    {
          $stmt->bind_param("sssisssi",$va_Category,$va_Enter_textfill ,$va_Enter_Title, $va_Enter_Amount, $va_Enter_Date,$current_date, $current_time,$res_edit_id);

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


function get_user_data_from_id( $res_edit_id)
{
    if($stmt = $this->con->prepare("select `no`, `select_category`, `textfill`, `enter_title`, `enter_amount`, `enter_date`, `date`, `time` from `users2` where  `no`=?"))
{
    $stmt->bind_param("i",$res_edit_id);

 $stmt->bind_result($res_no,$res_select_category,$res_textfill,$res_enter_title,$res_enter_amount,$res_enter_date,$res_date,$res_time);

 if($stmt->execute())
 {
  $data= array();


  if($stmt->fetch())
  {
     $data['no'] = $res_no;
     $data['select_category']=$res_select_category;
     $data['textfill']=$res_textfill;
     $data['enter_title']=$res_enter_title;
     $data['enter_amount']=$res_enter_amount;
     $data['enter_date']=$res_enter_date;
     $data['date']=$res_date;
     $data['time']=$res_time;

     
  }
  if(!empty($data))
  {
      return $data;
  }
  else
  {
     return false;
  }
 }
}

}

}

?>

