<?php

 
?>

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
    margin-top: 0px;
       padding:50px;
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
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
  width:600px;
    margin:auto;
    padding: 20px;
  align-content: center;

}    
    
    </style>
    <script type="text/javascript">
    function Validate() {
  alert("yo");
  var alpha=/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
  var num=/^[1-9][0-9]{8}$/;
  var mailformat = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,3})+$/;
var name = document.forms['vform']['name'];
var phone = document.forms['vform']['phone'];
var email = document.forms['vform']['email'];


var name_error = document.getElementById('name_error');
var phone_error = document.getElementById('phone_error');
var email_error = document.getElementById('email_error');


  if(!alpha.test(name.value)){
      alert("here");
    
    name.style.border = "1px solid red";
    document.getElementById('name_div').style.color = "red";
    document.getElementById('name_error').style.fontSize = "17px";
    name_error.textContent = "**Name should contain only alphabets";
    name.focus();
    return false;

  }
  
  if(!num.test(phone.value)){
      alert("num");
    phone.style.border = "1px solid red";
    document.getElementById('phone_div').style.color = "red";
    document.getElementById('phone_error').style.fontSize = "17px";
    phone_error.textContent = "**Invalid Number(Number to be a 9 digits)";
    phone.focus();
    return false;

  }

  
  if (!mailformat.test(email.value)) {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    document.getElementById('email_error').style.fontSize = "17px";
    email_error.textContent = "**Email is invalid";
    email.focus();
    return false;
  }
 


  }
  
 
</script>

    </head>
    <div class="topnav">
    <a class="active"href="regPatient.php">New Patient</a>
<a href="view_patient.php">Prescribe Medicines</a>
<a  href="buyPrescription.php">Buy Prescribed Medicines</a>
      </div>

    
    <body>
      
    <?php
    if(isset($_GET['registeration'])) {   
           if($_GET['registeration'] == "success"){ 
            echo '<h4 class="bg-success text-center" align="center" >Patient registeration was successfull!</h4>';
        }
        }
        ?>
<h3> New Patient </h3>
    <div class="wrap">
        <form action="register.php" method="post" onsubmit="return Validate()"  name="vform" enctype="multipart/form-data" >
    
    
            <div class="form-group" id="name_div">
            <label>Patient Name</label>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Name" required/>
                <div id="name_error"><small class="form-text text-muted">Name must be 3-20 characters long</small></div>
            </div>
            <div class="form-group" id="phone_div">
            <label for="guests">Patient Mobile Number</label>
                <input type="telephone" class="form-control" name="phone" id="phone" placeholder="Mobile number" required/>
                <div id="phone_error"> <small class="form-text text-muted">Mobile number must be 9 characters long</small></div>
            </div>

            <div class="form-group" >
            <label for="guests">Patient Address</label>
                <textarea type="text" class="form-control" name="address" placeholder="Address" required ></textarea>
                 <small class="form-text text-muted">Address must be 10-30 characters long</small>
            </div>

            <div class="form-group " id="email_div">
            <label>Patient Email </label>
                <input type="text" class="form-control" name="email" placeholder="Email " >
                <div id="email_error">  <small class="form-text text-muted">Email must be valid</small></div>
            </div>   

            
            
        
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Register Patient</button>
            </div>
        </form>
        </div>
    
    </body>
    </html>
