<?php 
include('mysqlconnection.php');//making connection
?>
<?php 
if(isset($_POST['register'])){
	$user_name=$_POST['name'];//here getting result from the post array after submitting the form
	$user_pass=$_POST['pass'];//same
	$user_email=$_POST['email'];//same
	if($user_name=='')
	{
		//javascript use for input checking
		echo "<script>alert('please enter the name')</script>";
		exit();//this use if first is not work then other will not show
	}
	if($user_pass=='')
	{
		echo"<script>alert('please enter the password')</script>";
		exit();
	}
	if($user_email=='')
	{
		echo "<script>alert('please enter the email')</script>";
		exit();
	}
	//here query check weather if already registered so can't register again
	$check_email_query = "select * FROM profile WHERE user_email='$user_email'";
	
	$run_query=mysqli_query($conn,$check_email_query);
	
	if(mysqli_num_rows($run_query)>0)
	{
		echo"<script>alert('email already exist in our database,please try another one!')</script>";
		exit();
		header("Location:user.php");
	}
	//insert the user into the database.
	$insert_user = "INSERT INTO profile(user_name,user_pass,user_email)
	VALUES('$user_name','$user_email','$user_pass')";
	if(mysqli_query($conn,$insert_user)){
		echo"<script>window.open('welcome.php','_self')</script>";
		$success="<h3 class='alert alert success <b> " .$user_name. " </b>sent</h3>";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.min.js"></script>
	<title>USER REG.</title>
</head>
<body><br><br><br>
<div class="container">
<div class="row">
 <div class="col-md-4 col-md-offset-4">
 <div class="login-panel panel panel-success">
 <div class="panel-heading">
 <h3 class="panel-title">Registration</h3>
</div>
<div class="panel-body">
<?php echo $success; ?>

<form role="form"method="POST" action="user.php">
   <fieldset>
     <div class="form-group">
<input type="text"class="form-control"placeholder="username"name="name"autofocus><br><br>
</div>
<div class="form-group">
<input type="email"class="form-control"placeholder="email"name="email"autofocus><br><br>
</div>
<div class="form-group">
<input type="password"class="form-control"name="pass"placeholder="password"value=""><br>
</div>
<input class="btn btn-lg btn-success btn-block"type="submit"value="register"name="register">
</fieldset>
</form>
<center><b>Already registered?</b><br></b>
<a href="login.php">Login here</a></center>
</div>
</div>
</div>
</div>
</body>
</html>