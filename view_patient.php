<?php
  session_start();
  
 
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
 

    <style>
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

.topnav-right {
  float: right;
}

h4{
    margin:auto;
    padding: 20px;
  align-content: center;

} 
</style>
</head>


<?php 
$db = mysqli_connect("localhost", "root", "", "clinic");?>

<div class="topnav">

<a href="regPatient.php">New Patient</a>
<a class="active" href="view_patient.php">Prescribe Medicines</a>
<a  href="buyPrescription.php">Buy Prescribed Medicines</a>
  
</div>

<body>
<?php 
$db = mysqli_connect("localhost", "root", "", "pharmacy");

        echo '<h4 class="text-white bg-dark text-center "> Here are all the patients you have registered</h4><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Delete was successfull</h5>';
        }
    }  
  

$list="select * from patient ";
$result=mysqli_query($db,$list);?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                      <th scope="col">Patient Id</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Patient Phone</th>
                        <th scope="col">Patient Address</th>
                        <th scope="col">Patient Email</th>

                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
                <tbody>
                    <tr>
                    <form action='prescribe.php' method='POST'>
                     <input name='patient id' type="hidden" value="<?php echo $row["patient_id"]; ?>"/>
                    <th scope='row'><?php echo $row["patient_id"];?> </th>
                      <th scope='row'><?php echo $row["patient_name"];?> </th>
                      <td ><?php echo $row["patient_phone"]; ?></td>
                      <td> <?php echo $row["patient_address"];?></td>
                      <td> <?php echo $row["patient_email"]; ?></td>
                      <td class='table-danger'><button type='submit' name='prescribe' class='btn btn-danger btn-sm'>Prescribe</button></td>
                          </form>
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>