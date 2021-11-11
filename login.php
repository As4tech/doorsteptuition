<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$status='1';
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>

   .container{
	   width: 430px;
	   height: 400px;
	   margin: 8% auto;
	   background: #fff;
	   border-radius: 5px;
	   position: relative;
}
	   body{
		background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(./sc/bg.jpg);
	    background-position: center;
	    background-size: cover;
	   }

       form input{
		width: 100% !important;
	    padding: 10px 5px !important;
	    margin: 8px 0 !important;
	    border: 0px !important;
	    border-bottom: 1px solid #999 !important;
	    outline: none !important;
	    background: transparent !important;
	   }


	   h3{
		   font-style: bold;
		   transform: uppercase;
		   text-align: center;
	        margin-bottom: 40px;
	        color: #777;
	   }

	   .container form{
	     width: 370px;
	     position: absolute;
	     top: 20px;
	     left: 40px;
     }

	</style>

</head>

<body>
<div class="container">
		<form method="post">
			<h3>Tutor Login</h3>
			<hr>
			<input type="email" name="username" placeholder="Email Address" required autocomplete>
			<input type="password" name="password" placeholder="Password" required>

			<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
			<p>Don't have an account yet? <a href ="register.php">Register for an account</a> </p>
		</form>
	</div>

</body>

</html>