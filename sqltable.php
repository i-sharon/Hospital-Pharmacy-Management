<?php
// Create connection
$conn=mysqli_connect('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE pharmacy";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
mysqli_select_db($conn,'pharmacy');


$tab="create table hospital(hospital_id int(2) , hospital_name varchar(20),PRIMARY KEY ( hospital_id))";
if ($conn->query($tab) === TRUE) {
    echo " Hospital Table created successfully<br>";
  } else {
    echo "Error creating Table: " . $conn->error;
  }


$sql = "INSERT INTO hospital(hospital_id,hospital_name)
VALUES ('88', 'Appollo Hospital');";

$sql .= "INSERT INTO hospital(hospital_id,hospital_name)
VALUES ('90', 'Omega Healthcare');";

$sql .= "INSERT INTO hospital(hospital_id,hospital_name)
VALUES ('89', 'Ramachandra')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records inserted into Hospital table successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$tab="create table pharmacy(drug_id int(2) , drug_name varchar(200),drug_category varchar(200),drug_qty int(5), drug_price int(5),PRIMARY KEY ( drug_id))";
if ($conn->query($tab) === TRUE) {
    echo " Pharmacy Table created successfully<br>";
  } else {
    echo "Error creating Table: " . $conn->error;
  }

$conn->close();
?>