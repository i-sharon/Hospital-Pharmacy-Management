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
    width:600px;
    margin:auto;
    padding:50px;
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
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
    margin-top: 25px;
    
  align-content: center;
    
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    }
   
  

    button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none;
     
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

.topnav-right {
  float: right;
}
h4{
    margin:auto;
    padding: 10px;
  align-content: center;

} 

    </style>
    
</script>

    </head>
    <div class="topnav">
        
        <a   href="regPatient.php">New Patient</a>
        <a class="active"href="view_patient.php">Prescribe Medicine</a>
        <a  href="buyPrescription.php">Buy Prescribed Medicines</a>
      </div>

    
    <body>
      
    <?php
   

    if(isset($_POST['prescribe'])) {
    
     $patient_id = $_POST['patient_id'];
     echo '<h4 class="text-white bg-dark text-center"> Enter the prescription for the patient with patient Id '. $patient_id .' here</h4><br>';
         
    }

    if(isset($_GET['prescription'])) {   
           if($_GET['prescription'] == "success"){ 
            echo '<h4 class="bg-success text-center" align="center" >Patient Prescription was successfully added!</h4>';
        }
        }
        ?>
<h3> Prescription Form </h3>
    <div class="wrap">
        <form action="prescribeTable.php" method="post" onsubmit="return Validate()"  name="vform" enctype="multipart/form-data" >
        <input name='patient_id' id="patient_id" type="hidden"  value="<?php echo $patient_id ?>"/></th>
    
            <div class="form-group" id="name_div">
            <label>Prescription No</label>
                <input type="text" class="form-control" name="p_no"  id="p_no" placeholder="Prescription number" required/>
                <small class="form-text text-muted">Prescription number format is HHPPDDMMYY </small>
            </div>
            <div class="form-group" id="phone_div">
            <label for="guests">First Medicine</label>
                <input type="text" class="form-control" name="p_1" id="p_1" placeholder="First Medicine" required/>
                 <small class="form-text text-muted">Name of first Medicine</small>
            </div>

            <div class="form-group" id="phone_div">
            <label for="guests">Quantity </label>
                <input type="number" class="form-control" name="q_1" id="q_1" placeholder="First Medicine" required/>
               > <small class="form-text text-muted">Quantity of first medicine</small>
            </div>
            <div class="form-group" id="phone_div">
            <label for="guests">Second Medicine</label>
                <input type="text" class="form-control" name="p_2" id="p_2" placeholder="First Medicine" required/>
                <small class="form-text text-muted">Name of first Medicine</small>
            </div>

            <div class="form-group" id="phone_div">
            <label for="guests">Quantity </label>
                <input type="number" class="form-control" name="q_2" id="q_2" placeholder="First Medicine" required/>
                <small class="form-text text-muted">Quantity of first medicine</small>
            </div>
            <div class="form-group" id="phone_div">
            <label for="guests"> Third Medicine</label>
                <input type="text" class="form-control" name="p_3" id="p_3" placeholder="First Medicine" required/>
               <small class="form-text text-muted">Name of first Medicine</small>
            </div>

            <div class="form-group" id="phone_div">
            <label for="guests">Quantity </label>
                <input type="number" class="form-control" name="q_3" id="q_3" placeholder="First Medicine" required/>
                <small class="form-text text-muted">Quantity of first medicine</small>
            </div>
            <div class="form-group" >
            <label for="date" >Date</label>
                <input type="date" class="form-control" name="address" required/>
                 <small class="form-text text-muted">Enter date when prescription was assigned</small>
            </div>
            
            
        
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Submit Prescription </button>
            </div>
        </form>
        </div>
    
    </body>
    </html>


