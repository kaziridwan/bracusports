<?php
include_once('connect.php');
session_start();
$res=mysqli_query($con, "select * from customer where Email='".$_POST["email"]."'");

$tid = $_POST['type'];
if(mysqli_num_rows($res)==0)
{
mysqli_query($con, "insert into customer(FName,LName,Apt_No,Street,State,City,Zip,Start_date,End_date,Dob,Gender,Ph_No,Email,Password) values ('".
$con->real_escape_string( $_POST['firstname']) . "', '".
$con->real_escape_string( $_POST['lastname'] ) . "','" . 
$con->real_escape_string( $_POST['apartment'] ) . "','" . 
$con->real_escape_string( $_POST['street']) . "','".
$con->real_escape_string( $_POST['state'] ). "','".
$con->real_escape_string( $_POST['city'] ) . "','" . 
$con->real_escape_string( $_POST['zip'] )."','".
$con->real_escape_string( $_POST['start_date'] )."','".
$con->real_escape_string( $_POST['end_date'] )."','".
$con->real_escape_string( $_POST['dob'] ) . "','" . 
$con->real_escape_string( $_POST['gender'] ) . "','" . 
$con->real_escape_string( $_POST['contact']) . "','".
$con->real_escape_string( $_POST['email'] ). "','".
$con->real_escape_string( md5($_POST['password']) ) . "')",$con);
$_SESSION['myusername']=$_POST['email'];
$_SESSION['mypassword']=md5($_POST['password']);


$res1=mysqli_query($con, "select Cid from customer C where C.Email='".$_SESSION['myusername']."'");
$array1=mysqli_fetch_array($res1);
$cid=$array1[0];

mysqli_query($con, "insert into pays (Cid,Tid) values ('".$cid."','".$tid."')"); 
header("location:homepage.php");                   
}
else
{
header("location:register.php?msg=User already exists");
}
mysqli_close($con);



?>