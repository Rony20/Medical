<?php

include 'dbconnect.php';

$name=$_POST['fullname'];
$email=$_POST['email'];
$mobile=$_POST['number'];
$date=$_POST['date'];
$age=$_POST['age'];
$message=$_POST['msg'];

$sql=mysql_query("INSERT into `appoinment`(`Name`,`Email`,`Mobile`,`Date`,`Age`,`Message`) Values('$name','$email','$mobile','$date','$age','$message')");

if($sql)
{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sended Succesfully');
        window.location.href='index.html';

        
        </SCRIPT>");
}

?>