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
    <nav class=" navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
             <img src="logo_mc.jpg" class="pull-left mcit" alt="MCIT">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
      </div>
    </div>
    <div>
        <a href="yourProfile.html" class="btn btn-outline-light" role="button" aria-disabled="true">Home </a>      
        <a href="logout.php" class="btn btn-outline-light" role="button" aria-disabled="true">Log out </a> </div> 
    </div>
</nav>

 <!--   STARTING FORM  -->
   
<div class="col form-group">
    <form action="addstudentsform.php" method="POST"  style="margin-top: 70px; margin-left:270pt;"  > 
        <p class="h3"> <b>Register Student</b> </p><br>
        <p> <input class="form-control" style="width: 20%;" type="text" name="reg_fname" placeholder="First Name" required></p>
        <p><input class="form-control" style="width: 20%;" type="text" name="reg_lname" placeholder="Last Name" required></p>
        <p><input class="form-control" style="width: 20%;" type="text" name="program" placeholder="Program Name" required></p>
        <p><input class="form-control" style="width: 20%;" type="text" name="address" placeholder="Address" required></p>
        <p><input class="form-control" style="width: 20%;" type="number" name="phone_number" placeholder="Phone Number" required></p>
        <p>Gender<select name ="Gender" class="form-control"  style="width: 20%;">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            </select>
        </p>
        <br>
		<p><input class="form-control" style="width: 20%;" type="email" name="email" placeholder="email" required></p>
		<p><input class="form-control" style="width: 20%;" type="date" name="birth_date" placeholder="Birth Date required"></p>
        <input type="submit"  value="Register">
    </form>

<!-- PHP  & MYSQL-->

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){ 
        
        // Database connection    
        $cox = mysqli_connect("localhost", "snoopblog", "qwerty10i","mynewdb1000") 
                            or die("There was a problem while connecting");
                            
            $firstName = $_POST['reg_fname'];
            $lastName = $_POST['reg_lname'];
            $progName= $_POST['program'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $gender = $_POST['Gender'];
            $email = $_POST['email'];
            $birth_date = $_POST['birth_date'];


        //Insert to the form
        $insert = "INSERT INTO users(first_name, last_name, program_name, address, phone_number, gender, email, birth_date) 
                            VALUES('$firstName', '$lastName', '$progName', '$address', '$phone_number', '$gender', '$email', '$birth_date' )";
        
        $result = mysqli_query($cox, $insert)
                    or die("There was a problem while executing the insert");
                    
        echo '<p style="margin-top: 20px; margin-left:150pt;">*The student was added succesfully</p>';
        mysqli_close($cox);				     
        }				
    ?>
 </div>
</div>

  <!--Footer  -->
    <div class="footers">
        <hr>
        <p><b>Find us on social media.</b></p>

                <p>
                <a href="http://www.facebook.com"> <i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf082;</i> </a>
                    <a href="http://www.instagram.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf16d;</i> </a>
                    <a href="http://www.twitter.com"> <i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf099;</i> </a>
                    <a href="http://www.snapchat.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf2ad;</i> </a>
                    <a href="http://www.wordpress.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf19a;</i> </a>
                </p>
        </div>   
    </div>
  </body>
</html>