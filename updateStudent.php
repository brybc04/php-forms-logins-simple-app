<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portal Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Latest compiled and minified CSS -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<style>
        body {
        width: 100%;
        margin: auto;
        background-color: #d7d7d7;
        font-family: 'Open Sans', sans-serif;
        }

        .navbar-fixed-top {
        width: 100%;
        margin: auto;
        height: 70px;
        }

        .navbar-inverse {
        background-color: steelblue;
        border-color: steelblue;
        color: aqua;
        }
        
        .navbar-brand {
        font-size: 15pt;
        }

        #bb {
        background-color: #d7d7d7;
        width: 106.2%;
        margin-left: -3%;
        }

        #cc {
        background-color: #d7d7d7;
        }

        .classWithPad1 { 
        background-color: white;
        border-radius: 5px;
        }

        .classWithPad2 { 
        background-color: white;
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 5px;
        }

        .navbar-inverse {
        background-color: steelblue;
        } 
        
        .mcit {
        float: left;
        width: 150pt;
        height: 40pt;
        margin-top: 5px;
        }
            
        mark {
        background-color: steelblue;
        color: white;
        border-radius: 2px;
        }

        .footers {
        margin: auto;
        margin-top: 260px;
        width: 100%;
        color: black;
        text-align: center;
        }

        .table {
        margin-left: 3%;
        margin-right: 20%;
        }      
    </style> 
</head>

<body>
        <!-- navbar -->
    <nav class=" navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <img src="logo_mc.jpg" class="pull-left mcit" alt="MCIT">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          <div><a href="yourProfile.html" class="btn btn-outline-light" role="button" aria-disabled="true">Home </a>      
            <a href="logout.php" class="btn btn-outline-light" role="button" aria-disabled="true">Log out </a> </> 
      </div>
    </nav>

    <!-- ici  -->
  <?php 
    $id = $_GET['id'];
    $firstnam = $_GET['id'];
    //con
    $cox = mysqli_connect("localhost", "root", "","mynewdb1000")  
        or die("There was a problem connecting");	
    
    //db
    $sql = "SELECT first_name, last_name, program_name, address, phone_number, gender, email, birth_date FROM users WHERE id=$id";
        
    $result = mysqli_query($cox, $sql) or die("There was a problem searching");
        if($row = mysqli_fetch_array($result)){
          
        $firstname = $row[0];				
        $lastname = $row[1];	
        $program_name= $row[2];			
        $address= $row[3];
        $phoneNumber= $row[4];
        $gender= $row[5];
        $email= $row[6];
        $birthDate= $row[7];
    }?>

    <!-- FORM to update -->
    <form action="runUpdateStudent.php" method="post" style="margin-top: 50px; margin-left:270pt;" >
        <p class="h3"> Update a Student. </p>
        <input class="form-control" style="width: 20%;" type="hidden" name="id" value="<?php echo $id?>" disable><br>
        First Name<input class="form-control" style="width: 20%;" type="text" name="fname" value="<?php echo $firstname?>"><br>
        Last Name<input class="form-control" style="width: 20%;" type="text" name="lname" value="<?php echo $lastname?>"><br>
        Program Name<input class="form-control" style="width: 20%;" type="text" name="program_name" value="<?php echo $program_name?>"><br>
        Address<input  class="form-control" style="width: 20%;"type="text" name="address" value="<?php echo $address?>"><br>
        Phone Number <input class="form-control" style="width: 20%;" type="number" name="phoneNumber" value="<?php echo $phoneNumber?>"><br>
        Gender<input class="form-control" style="width: 20%;" type="text" name="gender" value="<?php echo $gender?>"><br>
        Email<input class="form-control" style="width: 20%;" type="email" name="email" value="<?php echo $email?>"><br>
        Birth Date<input class="form-control" style="width: 20%;" type="date" name="birthDate" value="<?php echo $birthDate?>"><br>
        <input type="submit" value="Update">
    </form>
  </body>
</html>
