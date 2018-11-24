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
    </style> 
  </head>
<body >
<!-- NAVBAR -->
<nav class=" navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
            <img src="logo_mc.jpg" class="pull-left mcit" alt="MCIT"> 
        </div>
    <div>
    <a href="yourProfile.html" class="btn btn-outline-light" role="button" aria-disabled="true">Home</a> 
    <a href="logout.php" class="btn btn-outline-light" role="button" aria-disabled="true">Log out </a> 
        </div>
</nav>
    <br>
  <div>
      <!-- DASHBOARD -->
      <p class="text-center h2"> Welcome to Your Profile</p>
  </div>
            <!-- STUDENT MNGT CONTAINER -->
  <div class="container pt-4" style="margin-top: 30px">
      <div class="row">
        <div class="text-center col-md-3 no-padding">
          <div class="classWithPad1"><br>
            <p class="h5"><b>Students Management</b> </p><br>
            <p>When clicking this option<BR> you will redirected to <BR><br> <a href="addstudentsform.php" class="btn btn-outline-primary" role="button" aria-disabled="true">ADD STUDENT</a> <br> <BR>
              <a href="selectStudent1.php" class="btn btn-outline-success" role="button" aria-disabled="true">UPDATE STUDENT </a> <br>  <BR>
              <a href="selectStudent1.php" class="btn btn-outline-danger" role="button" aria-disabled="true">DELETE STUDENT </a><br></p> <br>
          </div>
        </div>

        <!-- PROG MNG CONTAINER  -->
        <div class="text-center col-md-3 no-padding">
          <div class="classWithPad1"><br>
              <p class="h5"><b>Program Management</b></p>
              <p></p>When clicking this option you will redirected to <BR><br> <a href="addprogram.php" class="btn btn-outline-primary" role="button" aria-disabled="true">ADD PROGRAM</a> <br> <BR>
              <a href="selectProgram.php" class="btn btn-outline-success" role="button" aria-disabled="true">UPDATE PROGRAM</a> <br>  <BR>
              <a href="selectProgram.php" class="btn btn-outline-danger" role="button" aria-disabled="true">DELETE PROGRAM</a><br></p> <BR>
          </div>
        </div>

        <!-- ADD STUD TO PROG CONTAINER -->
        <div class="text-center col-md-3 no-padding">
          <div class="classWithPad1"><br>
          <p class="h5"><b>Add Student to Program</b></p><br>
          <p>When clicking this option<br> you will be redirected where<BR> you can ADD students to <BR><BR><a href="addStudentToProgram.php" class="btn btn-outline-info" role="button" aria-disabled="true">SPECIFIC PROGRAM</a></p><br><br><br><br><br>
          </div>
        </div>

        <!-- REPORTS CONTAINER  -->
        <div class="text-center col-md-3 no-padding">
          <div class="classWithPad1"><br>
          <p class="h5"><b>Reports</b></p><br>
          <p>When clicking this option <br> you will be redirected where you can<br><br> <a href="searchByProgram.php" class="btn btn-outline-info" role="button" aria-disabled="true">SEARCH BY PROGRAM </a> <br><br> <a href="searchStudent.php" class="btn btn-outline-warning" role="button" aria-disabled="true">SEARCH BY COLLEGGE</a></p><br>
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
