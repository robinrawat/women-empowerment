<?php
SESSION_START();

?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script rel="jquery" type="text/javascript" src="myjs.js"></script>    
		<link rel="stylesheet" type="text/css" href="mycss.css">
        <script>
        
            function myFunction() {
                var v=document.getElementById('c1');
                if(v){
                    alert("You must login first");
                    window.open("login.php","_self");
                    return false;
                }

            }

            
        </script>
	</head>
	<body>
        <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                          </button>
                        <a class="navbar-brand" href="#">Empowerment</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav">
                            <li ><a href="#">Home</a></li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome 
                                
                            <!--    <?php

                                    $con=mysqli_connect('localhost','id5388810_robin','abcdefgh','id5388810_wep');
                                    $c=$_SESSION['user'];
                                    $sql=("SELECT *   FROM login where email='".$c."';");
                                    $records=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($records);
//                                    echo '<span class="glyphicon glyphicon-user">';
                                    echo $row['username'];
//                                    echo '</span>';
                                ?> -->
                                
                                </a></li>
                            <li><a href="unset.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                          </ul>
                    </div>
              </div>
        </nav>
           
                
                <div class="jumbotron text-center">
                    <h1>Welcome to the enlightment</h1>
                    <p> Show The World Your Worth </p> 
                </div>

                <div class="container">
                    <div class="row">
                    <div class="col-sm-4">
                        <h3>Self Defence</h3>
                        <a href="container.php">Video Lectures</a>
                    </div>
                    <div class="col-sm-4">
                        <h3>Send Your Complains To NGOs/Authority</h3>
                        <a href="index1.php">Mail</a>
                        
                    </div>
                    <div class="col-sm-4">
                        <h3>Women Rights</h3> 
                        <a href="index2.php">Rights</a>
                       
                    </div>
                </div>
                </div>
                
	</body>
</html>