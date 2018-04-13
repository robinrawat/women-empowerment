<?php

require 'connect.php';


  
  if(isset($_POST['submit'])){
  $c1=$_POST['email'];  
  $c2=$_POST['subject'];
  $c3=$_POST['message'];
  $c4="From:robinrawat97@gmail.com";





mail($c1, $c2, $c3, $c4);
}


?>


<!DOCTYPE html>
<html>
	<head>
    <style type="text/css">
    .purple-border textarea {
    border: 1px solid #ba68c8;
    max-width: 1265px;
}
.purple-border .form-control:focus {
    border: 1px solid #ba68c8;
    box-shadow: 0 0 0 0.2rem rgba(186, 104, 200, .25);
    max-width: 1265px;
}
      
    </style>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script rel="jquery" type="text/javascript" src="myjs.js"></script>    
		<link rel="stylesheet" type="text/css" href="mycss.css">
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
           
        <div class="page_content container">
            <form method="POST" enctype="multipart/form-data">
              <label>Email Address</label><br>
              <div class="form-group purple-border">
              <input type="text" name="email" placeholder="Email"><br>
            </div>

                 <div class="form-group purple-border">

                 <label>subject</label><br>
              <input type="text" name="subject" placeholder="subject"><br>
            </div>
              <div class="form-group purple-border">
              <label>Message</label><br>
              <label for="exampleFormControlTextarea4">  </label>
              <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="message"></textarea>
              <button class="btn btn-lg btn-primary btn-block"  name="submit" value="submit" type="Submit" >send</button>
          </div>
            </form>
        </div>
	</body>
</html>