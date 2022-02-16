<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
       $Phone = $_POST['Phone'];
       $Con = $UserName." ".$Email." ".$Phone;

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg) || empty($Phone))
       {
           header('location:contact-us?error');
       }
       else
       {
           $to = "aarnavk7@gmail.com";

           if(mail($to,$Subject,$Msg,$Con))
           {
               header("location:contact-us?success");
           }
       }
    }
    else
    {
        header("location:contact-us");
    }
?>