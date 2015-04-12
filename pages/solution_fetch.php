<?php



include('connect.php');
$landid=12341;

$result = mysql_query("SELECT s.treatment,s.medicine,s.precaution,s.contact,l.landid 
FROM land l, solution s
WHERE l.landid = s.landid and l.landid=12342");

while(($row = mysql_fetch_array($result))>0) 
{
        $medicine=$row['treatment'];
    	echo $medicine;
    }
   mysql_close($con);
  
?>
