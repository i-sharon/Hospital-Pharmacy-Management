<?php

session_start();

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'pharmacy');
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
echo $name;
echo $phone;
echo $address;
echo $email;

    $reg="insert into patient(patient_name,patient_phone,patient_address,patient_email) 
    values('$name','$phone','$address','$email')";
	mysqli_query($conn,$reg);
    header("Location:regPatient.php?registeration=success");
	
?>
