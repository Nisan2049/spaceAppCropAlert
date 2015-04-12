<?php


include('./pages/connect.php');?>
 <p>Crops problems and its solution</p>            
  <table >

      <tr>

        <th>Disease</th>
        <th>Problems</th>
        <th>Symptom</th>
 
      </tr><?php

$result = mysql_query("SELECT disease,problem,symptom FROM problem ");
while(($row = mysql_fetch_array($result))>0) 
      {

  ?><tr><td><?php

           echo  $row['disease']."</td><td>";
            echo  $row['problem']."</td><td>";     
           echo  $row['symptom']."</td><td>";
          
           ?></tr><?php     
            
    }
   mysql_close($con);
  
?>

 
  </table>