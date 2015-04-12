<?php
include('./pages/connect.php');

?>
  <p>Crops problems and its solution</p>            
  <table class="table table-condensed">
    <thead>
      <tr>

        <th>Disease</th>
        <th>Crops affected</th>
        <th>Symptom</th>
        <th>Solution</th>
        <th>medicine</th>
      </tr>
      
<?php
$result = mysql_query("SELECT * FROM crop_disease");
while(($row = mysql_fetch_array($result))>0)
      {
        ?><tr><td><?php

        echo  $row['disease']."</td>";
         echo  $row['crops_affected']."</td><td>";     
           echo  $row['symptom']."</td><td>";
           echo  $row['solution']."</td><td>";
            echo  $row['medicines']."</td>";  
           ?></tr><?php

    }
?>
  </table>