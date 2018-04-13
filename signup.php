<?php
    include('connect.php');
    $errors=array();
    if(isset($_POST['reg']))
    {
        $myusername=mysqli_real_escape_string($db,$_POST['username']);
        $myuseremail = mysqli_real_escape_string($db,$_POST['usemail']);
        $mypassword = mysqli_real_escape_string($db,$_POST['pwd1']);
        echo $myusername;
        echo $myuseremail;
        $sql = "SELECT * FROM login WHERE username = '$myusername' OR  email= '$myuseremail'LIMIT 1";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row){
            if ($row['username'] === $myusername) {
                array_push($errors, "Username already exists");
            if ($row['email'] === $myuseremail) {
                array_push($errors, "Username already exists");
            }
            }
        }
        echo count($errors);
        if(count($errors)==0)
        {
            $password = md5($mypassword);
            $query = "INSERT INTO login (username, email, password) 
  			  VALUES('$myusername', '$myuseremail', '$password')";
            mysqli_query($db, $query);
            header('location: login.php');
        }else{
            echo "<script>
            alert('Already exists');
            window.location.href='signup.php';
            </script>";
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
		<!--<link rel="stylesheet" type="text/css" href="logincss.css">-->
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
<script language="javascript">
 var flag=0;
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
            var email = document.getElementById('usemail').value;
			
			if(email=="")
			{   
				flag=1;
				alert("Email ID must be filled.");
				document.getElementById('usemail').style.borderColor="red";
				return false;
			}
            else if (!email.match(reg)) 
          {
				flag=1;
				alert("Email id is invalid.")
				document.getElementById('usemail').style.borderColor="red";
				return false;
			}
			else
			{
				document.getElementById('usemail').style.borderColor="green";
			}
 }
 function validatepass() 
	 {
	      
		if(flag==0)
		flag=0;
		else
		flag=1;
            var email1 = document.getElementById('pwd1').value;
			var email2 = document.getElementById('pwd2').value;
			
			if(email1=="" ||email2=="")
			{   
		        flag=1;
				alert("Password must be filled.");
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
				return false;
			}
            else if (email1.length<8||email2.length<8) 
          {
				flag=1;
				alert(" Password must have atleast 8 characters")
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
				return false;
			}
			else if(email1!=email2)
			{
				flag=1;
				alert(" Passwords doesn't Match.");
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
			}
			else
			{
				
				document.getElementById('pwd1').style.borderColor="green";
				document.getElementById('pwd2').style.borderColor="green";
				
			}
 }
</script>
</head>
<body id="log">
    <br/>
    <form method="POST" enctype="multipart/form-data" action="">
        <div class="log">
            <h1>Sign Up :</h1><br/>
            <p>UserName :</p>
        <input type="text" id="username" name="username"  placeholder="Username" required><br/><br/>
        <p>Email :</p>
        <input type="email" id="usemail" name="usemail"  placeholder="Enter your Email" required><br/><br/>
            <p>PassWord :</p>
        <input type="password" id="pwd1" name="pwd1" placeholder="Enter your Password" required><br/><br/>
            <p>Re-enter PassWord :</p>
        <input type="password" id="pwd2" name="pwd2" placeholder="Re-enter your Password" required><br/><br/>
            <button type="submit" onclick="return validate();" name="reg">Submit</button><br/>
        <br/><font style="color:orange;">If your account alredy exists then </font><div id="late"><a href="login.php">Log In</a></div>
        </div>
    </form>
</body>
</html>
