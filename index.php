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
                var v1=document.getElementById('c2');
                var v2=document.getElementById('c3');
                if(v){
                    alert("You must login first");
                    window.open("login.php","_self");
                    return false;
                }else if(v1){
                    alert("You must login first");
                    window.open("login.php","_self");
                    return false;
                }else if(v2){
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
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                        <a href="#" id="c1" onclick="myFunction()">Lecture</a>
                    </div>
                    <div class="col-sm-4">
                        <h3>Send Your Complains To NGOs/Authority</h3>
                        <a href="#" id="c2" onclick="myFunction()">Mail</a>
                        
                    </div>
                    <div class="col-sm-4">
                        <h3>Women Rights</h3> 
                        <a href="#" id="c3" onclick="myFunction()">Rights</a>
                       
                    </div>
                </div>
                </div>
                
	</body>
</html>