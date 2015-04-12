<?php
include('connect.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$sql="INSERT INTO users(Name,email,rusername,rpassword,country,phone)VALUES('{$name}','{$email}','{$username}','{$password}','{$country}','{$phone}')"; 
   
  if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }  
  {
  	include("./pages/problem_submit.php");
  } 
 
   mysql_close($con);
}
?>