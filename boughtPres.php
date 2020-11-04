<?php

$db = mysqli_connect("localhost", "root", "", "pharmacy") or die("Unable to connect");


    $p_no=$_POST['p_no'];
    
        $list="select * from prescription where prescription_no='$p_no' ";
        $result=mysqli_query($db,$list);

    while($row = $result->fetch_assoc()) {
       $m1= $row["medicine1"];
       $q1= $row["qty1"];
       $m2= $row["medicine2"];
       $q2= $row["qty2"];
       $m3= $row["medicine3"];
       $q3= $row["qty3"];
        }
    
      
        $file_open=fopen("pharmacy_data.scv","w+");
        
        $form_data = array(
           ' 1st Drug'  => $m1,
           'Quantity1'  => $q1,
           '2st Drug'  => $m2,
           'Quantity2' =>$q2,
           '3st Drug' => $m3,
           'Quantit3' => $q3
        );
        fputcsv($file_open, $form_data);



        $query1="UPDATE pharmacy
        INNER JOIN  
        prescription
        ON pharmacy.drug_name = '$m1'
        SET  pharmacy.drug_qty=  pharmacy.drug_qty-'$q1' ";

mysqli_query($db,$query1);


$query2="UPDATE pharmacy
INNER JOIN  
prescription
ON pharmacy.drug_name = '$m2'
SET  pharmacy.drug_qty=  pharmacy.drug_qty-'$q2' ";

mysqli_query($db,$query2);


$query3="UPDATE pharmacy
INNER JOIN  
prescription
ON pharmacy.drug_name = '$m3'
SET  pharmacy.drug_qty=  pharmacy.drug_qty-'$q3' ";

mysqli_query($db,$query3);

header("Location:buyPrescription.php?prescription=success");


        ?>