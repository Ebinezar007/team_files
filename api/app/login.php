<?php

if(isset($_REQUEST['email'])){
$dis_1=$_REQUEST['email'];
$dis_2=$_REQUEST['password'];
$sql = "SELECT fname,lname,email,role_u,phonenumber FROM user WHERE username='$dis_1' and pass_word='$dis_2' ";
$result = $conn->query($sql);

  
if($row = $result->fetch_row())
  $_SESSION['user'] =  $row;
   if(!empty($_SESSION['user'])){
     echo "logged in";
   }else{
     echo "wrong password";
   }

}
?>