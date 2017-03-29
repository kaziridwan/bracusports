<?php

$host="localhost"; // Host name 
$username="id1091469_dbadmin"; // Mysql username 
$password="dbadminpass"; // Mysql password 
$db_name="id1091469_bracusports"; // Database name 

$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con, "$db_name")or die("cannot select DB");

?>

