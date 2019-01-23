<?php
error_reporting(0);
  include('connect.php');

  $a=$_POST['fname'];
  $b=$_POST['lname'];
  //$c=$_POST['lname'];
  $d=$_POST['address'];
  $e=$_POST['dob'];
  $f=$_POST['contact'];
  $g=$_POST['parent'];
  $h=$_POST['email'];
  $i=$_POST['stream'];
  $jj=$_POST['College'];
  $k=$_POST['result'];
  $l=$_POST['aadhar'];

$serch=mysql_query("select * from register where email_id='$h'");
          if(mysql_num_rows($serch)>0){
             echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('email already Registered!')
    window.location.href='register.html';
    </SCRIPT>");
          } else {
 $sql=mysql_query("INSERT INTO register(`fname`,`mname`,`address`,`dob`,`contact`,`parent`,`email_id`,`stream`,`college`,`result`,`aadhar`) values('$a','$b','$d','$e','$f','$g','$h','$i','$jj','$k','$l')");




 	if(!$sql)
 	{
       mysql_error();
 	}

 	else{

$to = $h;
$subject = "Registered";
$message = "your regestration is confirm...  ";
$from = "From: dhaval7030@gmail.com";
$s=mail($to, $subject, $message, $from);

 		  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registered Successfully!')
    window.location.href='register.html';
    </SCRIPT>");
 	}
}
?>