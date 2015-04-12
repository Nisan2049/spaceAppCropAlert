<?php
$loggedin=$_SESSION['loggedin'];
if($loggedin=="true")
{
	echo "Logged in as ".$_SESSION['Name'];
}
?>