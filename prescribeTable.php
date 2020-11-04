<?php

session_start();

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'pharmacy');
$medi1=$_POST['p_1'];
$qty1=$_POST['q_1'];
$medi2=$_POST['p_2'];
$qty2=$_POST['q_2'];
$medi3=$_POST['p_3'];
$qty3=$_POST['q_3'];
$patient_id=$_POST['patient_id'];
$pres_no=$_POST['p_no'];


    $reg="insert into prescription(prescription_no,patient_id,medicine1,qty1,medicine2,qty2,medicine3,qty3) 
    values('$pres_no','$patient_id','$medi1','$qty1','$medi2','$qty2','$medi3','$qty3')";
	mysqli_query($conn,$reg);
    header("Location:prescribe.php?prescription=success");
	
?>
