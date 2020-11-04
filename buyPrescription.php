<!DOCTYPE  HTML>
<html>
    <head>  <title>Reservation
    </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
    <style>
    body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(1.jpg) no-repeat;
  background-size: cover;
}

    .wrap{
    width:400px;
    margin:auto;
    
     font-size:17px;
    }
 
    form{
    border:1px dotted white;
    background-color:#f8f5ee;
    padding:10px;
    }

    h3{
    text-align:center;
    
    color:white;
    width:600px;
    margin:auto;
    margin-top: 5px;
    
  align-content: center;

    }

    button[type=submit] {
      
      background-color:#4682B4;
      color: white;
     
     
    }

    .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4682b4;
  color: white;
}

h4{
    margin:auto;
    padding: 10px;
  align-content: center;

} 

table {
  width: 900px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border:1px dotted white;
  

}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

button{
  align-content:center;
}
    </style>
  
    </head>
    <div class="topnav">
      
        <a   href="regPatient.php">New Patient</a>
        <a href="view_patient.php">Prescribe Medicines</a>
        <a class="active" href="buyPrescription.php">Buy Prescribed Medicines</a>
        
        
      </div>

      
    <?php
   

    if(isset($_POST['prescribe'])) {
    
     $patient_id = $_POST['patient_id'];
     echo '<h4 class="text-white bg-dark text-center"> Enter the prescription for the patient with patient_id '. $patient_id .' here</h4><br>';
         
    }

    if(isset($_GET['prescription'])) {   
           if($_GET['prescription'] == "success"){ 
            echo '<h4 class="bg-success text-center" align="center" >The Prescribed medicines was ordered successfully!</h4>';
        }
        }
        ?>
         <body>
    <div class="wrap">
        <form action="" method="post" onsubmit="return Validate()"  name="vform" enctype="multipart/form-data" >
        
    
            <div class="form-group" id="name_div">
            <label>Prescription No</label>
                <input type="text" class="form-control" name="p_no"  id="p_no" placeholder="Prescription number" required/>
            </div>
        
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Get Prescription </button>
            </div>
        </form>
    </div>
        

<?php

$db = mysqli_connect("localhost", "root", "", "pharmacy") or die("Unable to connect");
if (isset($_POST['reserv-submit'])) {
    $p_no=$_POST['p_no'];
        $list="select * from prescription where prescription_no='$p_no' ";
$result=mysqli_query($db,$list);?>

<table class="" align="center" >
                
    <tr >
      <th scope="col">Medicine</th>
        <th scope="col">Quantity</th>
    </tr>

<?php
while($row = $result->fetch_assoc()) {
    ?>
    <form action="boughtPres.php" align="center"  enctype="multipart/form-data" method="post">
    <th> <input name="p_no"  id="p_no" type="hidden"  value="<?php echo $row["prescription_no"]; ?>"/></th>
    <tr> <th scope='row'><?php echo $row["medicine1"];?> </th>
      <td ><?php echo $row["qty1"]; ?></td></tr>
      <tr><th> <?php echo $row["medicine2"];?></th>
      <td> <?php echo $row["qty2"]; ?></td></tr>
      <tr><th> <?php echo $row["medicine3"];?></th>
      <td> <?php echo $row["qty3"]; ?></td></tr><br><br>
      
  <th > <button  type='submit' name="buy-prescribe" class='btn btn-danger btn-sm'>BUY</button></th>
</form>
  

<?php         
        }  
    } 
        ?>
</table> 

    </body>
    </html>