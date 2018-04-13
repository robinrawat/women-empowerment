<?php
SESSION_START();
include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--		<script rel="jquery" type="text/javascript" src="myjs.js"></script>    -->
		<link rel="stylesheet" type="text/css" href="image.css">
        <style>
            .mydis{
                display:none;
            }
        </style>
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
                            <li ><a href="index3.php">Home</a></li>
                              <?php

                                    $con=mysqli_connect('localhost','id5388810_robin','abcdefgh','id5388810_wep');
                                    $c=$_SESSION['user'];
                                    $sql=("SELECT *   FROM login where email='".$c."';");
                                    $records=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($records);
//                                    echo '<span class="glyphicon glyphicon-user">';
                                     $un = $row['username'];
//                                    echo '</span>';
                                    
                              ?>
                                    
                                
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" ><span class="glyphicon glyphicon-user"></span>Welcome 
                                
                                <?php

                                    $con=mysqli_connect('localhost','id5388810_robin','abcdefgh','id5388810_wep');
                                    $c=$_SESSION['user'];
                                    $sql=("SELECT *   FROM login where email='".$c."';");
                                    $records=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($records);
//                                    echo '<span class="glyphicon glyphicon-user">';
                                    echo $row['username'];
//                                    echo '</span>';
                                ?>
                                
                                </a></li>
                            <li><a href="unset.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                          </ul>
                    </div>
              </div>
        </nav>
                <div >
                    <iframe width="540" height="300" src="https://www.youtube.com/embed/T7aNSRoDCmg"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            
    
        
        </script>
	</body>
</html>