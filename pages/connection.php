<?php
    $connect = mysql_connect("localhost", "root", "") or die(mysql_error());
    if($connect){
        mysql_select_db("test") or die(mysql_error());
    }