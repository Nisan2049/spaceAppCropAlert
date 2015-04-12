<?php

include("connect.php");

if(isset($_POST['btn_submit'])){
    $place = trim($_POST['city']);
    
    $query2 = "SELECT temp, pressure, humidity FROM location WHERE locName = '$place'";
    
    $result = mysql_query($query2, $con) or die(mysql_error());
    
    while(($row = mysql_fetch_array($result))>0){
          //echo $row['temp'];
        $temp = $row['temp'];
        $press = $row['pressure'];
        $hum = $row['humidity'];
       // echo $temp;
        $city = array("Kathmandu", "Delhi", "Pokhara", "Tokyo", "Colombo", "Moscow", "Kabul", "Doha", "Baghdad", "Islamabad");
        $j = 0;
        while($j< count($city)){
    
        $country="IN"; //Two digit country code
    
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$city[$j].",".$country."&units=metric&cnt=7&lang=en";
    
        $json=file_get_contents($url);
    
        $data=json_decode($json,true);
    
        $location = $city[$j];
        $temperature = $data['main']['temp'];
        $pressure = $data['main']['pressure'];
        $humidity = $data['main']['humidity'];
    
        $query = "UPDATE location SET temp = '$temperature', pressure = '$pressure', humidity = 'humidity' WHERE locName = '$location'";
        $res = mysql_query($query, $con);
        if($res){
            //Get current Temperature in Celsius
            //echo $data['main']['temp']."<br>";
            //Get weather condition
            //echo $data['weather'][0]['main']."<br>";
            //Get cloud percentage
            //echo $data['clouds']['all']."<br>";
            //Get wind speed
            //echo $data['wind']['speed']."<br>";
            $j++;

        }
        }
        
        $press1 = $press + 100;
        $press2 = $press - 100;
        $hum1 = $hum + 15;
        $hum2 = $hum - 15;
        $temp1 = $temp-2;
        $temp2 = $temp+2;
        $query1 = "SELECT locName FROM location WHERE (temp BETWEEN $temp1 AND $temp2) OR (humidity BETWEEN $hum1 AND $hum2) OR (pressure BETWEEN $press1 AND $press2)";

        $result = mysql_query($query1, $con) or die(mysql_error());
        $possArea = array();
        $k = 0;
        while(($row = mysql_fetch_array($result))>0)
          {
          $possArea[$k] = $row['locName'];
          $k++;
        
        //place email sending message
  
        }

        $m = 0;
         while($m< count($possArea)){
            
        $country="IN"; //Two digit country code
            
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$possArea[$m].",".$country."&units=metric&cnt=7&lang=en";
            
        $json=file_get_contents($url);
    
        $data=json_decode($json,true);
            
            $lat = $data['coord']['lat'];
            $lon = $data['coord']['lon'];

        $query4 = "INSERT INTO latlon(lat, lon) VALUES ('$lat', '$lon')";
        $res = mysql_query($query4, $con);
        if($res){
            $m++;
        }    

            
        }    
        include("leaf.php");

    }
}
?>
