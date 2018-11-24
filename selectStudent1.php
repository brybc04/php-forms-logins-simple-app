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

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
        </div>
        <div><a href="yourProfile.html" class="btn btn-outline-light" role="button" aria-disabled="true">Home </a>      
            <a href="logout.php" class="btn btn-outline-light" role="button" aria-disabled="true">Log out </a> </div> 
        </div>
    </nav>

    <table class="table table-striped h6" >
        <?php 
            //set
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];

            //set connect
            $cox = mysqli_connect("localhost", "snoopblog", "qwerty10i","mynewdb1000") 
                or die("There was a problem while connecting");	
            
            //request
            $query = "SELECT id, first_name, last_name, program_name, address, phone_number, gender, email, birth_date FROM users";
            
            //searching for all poss a% ending, %a starting, %a% sny
            if($firstName != ''){
                $query .= " WHERE first_name like '%$firstName%' ";		
                if($lastName != ''){
                    $query .= " or last_name like '%$lastName%' ";	
                }	
            } else {
                if($lastName != ''){
                    $query .= " WHERE last_name like '%$lastName%' "	;
                }		
            }
            $result = mysqli_query($cox, $query);
        ?>

            <!--  Back to the Broswer -->
        <p class="h5 text-center "> Student's Information </p>
            <!-- tables on the browser-->
            <tr>
                <th> ID </th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Program name</th>
                <th> Address </th>
                <th> Phone Number </th>
                <th> Gender</th>
                <th> Email</th>
                <th> Birthday</th>
                <th> Actions </th>	
            </tr>
        <!-- tables from DB -->
        <?php 	
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>$row[0] </td>";
                echo "<td>$row[1] </td>";
                echo "<td>$row[2] </td>";
                echo "<td>$row[3] </td>";
                echo "<td>$row[4] </td>";
                echo "<td>$row[5] </td>";
                echo "<td>$row[6] </td>";
                echo "<td>$row[7] </td>";
                echo "<td>$row[8] </td>";

                echo "<td><a href='updateStudent.php?id=$row[0]'>Update</a> ";
                echo "<td><a href='deleteStudent.php?id=$row[0]');'>Delete</a> </td>";
                echo "</tr>";
            }
            //done
            mysqli_close($cox);	
        ?>
    </table>
    <p> <a type="button" href='searchStudent.php' style="margin-left:10%;"> Search A Student</a>  </p>

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
