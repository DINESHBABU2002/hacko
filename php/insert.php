<?php
include 'connection.php';
$Schoolname=$_POST['Schoolname'];
$Schoolid=$_POST['Schoolid'];
$Year=$_POST['Year'];
$Area=$_POST['Area'];
$rooms=$_POST['rooms'];
$Labs=$_POST['Labs'];
$Capacity=$_POST['Capacity'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$whats=$_POST['whats'];
$email=$_POST['email'];
$querry="insert into register values('$Schoolname','$Schoolid','$Year','$Area','$rooms','$Labs','$Capacity','$Email','$Phone','$state','$gender','$whats','$email')";
mysqli_query($conn,$querry);