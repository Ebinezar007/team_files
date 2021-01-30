<?php 
if( isset($_SESSION['user']) AND $_SESSION['user']["3"]== "super_admin"){
if(isset($_REQUEST['email'])){
$email=$_REQUEST['email'];
$phone=$_REQUEST['phonenumber'];
$doj=$_REQUEST['doj'];
$sql="INSERT INTO `user` (  `email`, `phonenumber`,  `DOJ`, `role_u`) VALUES (  '$email', $phone, '$doj',  'user'  )";

if ($conn->query($sql) === TRUE) {
    echo "Employee addded successfully";
  } else {
    echo "Please enter correct value";
  }
}}else {echo "you are not authorized";}
?>