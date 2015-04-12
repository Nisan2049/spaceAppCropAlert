<?php
include('connect.php');

$_SESSION['loggedin']="";
$_SESSION['Name']="";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$name="";
$passwd="";
$result = mysql_query("SELECT * FROM users where rusername='{$username}'");
while(($row = mysql_fetch_array($result))>0)
      {
            $name= $row['rusername'] ;
            $passwd =$row['rpassword'];
           
            
    }
   mysql_close($con);
  if((strcmp($username,$name)===0)&&(strcmp($password,$passwd)===0))
  {
      include("./pages/problem_submit.php");
      }
    else
    {
        
        echo"<p> please use your valid user Id and password </p>";
    }  
  }
  else
  {
   

  }

?>