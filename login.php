<?php
    SESSION_START();
    include('connect.php');
    if(isset($_POST['login']))
    {
        $name = mysqli_real_escape_string($db,$_POST['email']);
        $pass = mysqli_real_escape_string($db,$_POST['pwd']); 
        $pass = md5($pass);
        $sql = "SELECT * FROM login WHERE email = '$name' AND password = '$pass'";
        $result = mysqli_query($db,$sql); 
        $row=mysqli_fetch_assoc($result);
        if($row['email']==$name && $row['password']==$pass){
            if($name==='admin@gmail.com')
            {
                $_SESSION['user'] = $name;
                $_SESSION['success'] = "You are now logged in";
                header('location: index3.php');
            }
            else
            {
                $_SESSION['user'] = $name;
                $_SESSION['success'] = "You are now logged in";
                header('location: index3.php');
            }
        }else{
            echo "<script>alert('Wrong username/password');
            window.location.href='login.php';</script>";
        }
    }
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
<!--		<link rel="stylesheet" type="text/css" href="logincss.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            body{
                background: url(women1.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .log{
                padding: 40px;
                width: 400px;
                margin: 0 auto;
                margin-top: 100px;
                background: white;
                border-radius: 100px;
                border-width: thin medium thick 10px;
                box-shadow: 5px 10px 20px ;
                font-family: Arial, Helvetica, sans-serif;
            }

    </style>
<script>

function validate()
{
validatemail();
validatepass();
if(flag==0)
   return true;
   return false;

}
function validatemail() 
	 {     
	       flag=0;
	       var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/;
            var email = document.getElementById('uemail').value;
			
			if(email=="")
			{   flag=1;
				alert("Email ID must be filled.");
				document.getElementById('uemail').style.borderColor="red";
				return false;
			}
            else if (!email.match(reg)) 
          {
				flag=1;
				alert("Email id is invalid.")
				document.getElementById('uemail').style.borderColor="red";
				return false;
			}
			
 }
 function validatepass() 
	 {
		 if(flag==0)
		flag=0;
		else
		flag=1;
	      
            var email = document.getElementById('pwd').value;
			
			if(email=="")
			{   flag=1;
				alert("Password must be filled.");
				document.getElementById('pwd').style.borderColor="red";
				return false;
			}
            else if (email.length<8) 
          {
				flag=1;
				alert(" Password must have atleast 8 characters")
				document.getElementById('pwd').style.borderColor="red";
				return false;
			}
			
 }
</script>
</head>
<body>
<br/>
<form method="POST" enctype="multipart/form-data" >
<div class="log">
    <h1>Sign in:</h1><br/>
    <p>Email:</p>
<input type="email" id="email" name="email" placeholder="Enter Email"><br/><br/>
<p>Password:</p>
<input type="password" id="pwd" name="pwd" placeholder="Enter Password"><br/><br/>
    <button type="submit"  name="login" onclick="return validate();" >Submit</button>
<br/><br/><font style="color:orange">If you are a new user </font><div id="late"><a href="signup.php">Sign Up</a></div>
</div>
</form>
</body>
</html>