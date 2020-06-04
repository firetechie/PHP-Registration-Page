<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$file=$_POST['file'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
mysqli_query($bd, "INSERT INTO registration(fname, lname, gender, address, contact, email, file, username, password, repassword)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$email', '$file', '$username', '$password', '$repassword')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>