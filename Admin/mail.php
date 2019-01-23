<?php
  include 'dbconnect.php';
  $a=$_POST['email'];
  $b=$_POST['time'];
  $c=$_POST['tt'];
 $sql=mysql_query("UPDATE `appoinment` SET `Status`=1 WHERE `Email` LIKE '%$a%' ");

   while($row=mysql_fetch_array($sql)){

         $name=$row['Name'];
   
	
      $to = $a;
      $subject = "Confirmed !";
      $message = "your appoinment is confirmed at ".$b." o'clock.";
      $from = "From: ronyahir20@gmail.com";
      $s=mail($to, $subject, $message, $from);
    
   

    if ($s)
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }


}

header('Location:appoinment_view.php');


 ?>

 $to = $row['Email'];
    $name = $row['Name'];
    $email= 'ronyahir20@gmail.com';
   $subject= "your appoinment is confirmed !";