<?php
  include 'dbconnect.php';

  $a=$_POST['email'];
  $b=$_POST['key'];


  $sql=mysql_query("SELECT * from `login` where `Uname`='$a' AND `Pass`='$b'");
   $ab=mysql_fetch_assoc($sql);
  if($ab){

       header("Location:appoinment_view.php?id=$a");

  }
  else
  {
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong Username or Password');
        window.location.href='login.html';

        
        </SCRIPT>");
  }


  ?>