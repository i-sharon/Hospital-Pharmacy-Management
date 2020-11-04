<?php
// Create connection
$conn=mysqli_connect('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,'pharmacy');

for($var=1;$var<50;$var++){

    if($var%2==0)
   { $sql = "INSERT INTO pharmacy(drug_name,drug_category,drug_qty,drug_price)
VALUES ( 'Medicine', 'Prescription drug','50','0');";
mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
    echo " Pharmacy Table created successfully<br>";
  } else {
    echo "Error creating Table: " . $conn->error;
  }

}

else
{ $sql = "INSERT INTO pharmacy(drug_name,drug_category,drug_qty,drug_price)
VALUES ( 'Medicine', 'Over-the-counter drug','50','0');";
mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
    echo " Pharmacy Table created successfully<br>";
  } else {
    echo "Error creating Table: " . $conn->error;
  }

}

}

?>