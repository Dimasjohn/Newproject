<?php
error_reporting(0); 
include("dbconnection.php"); 
$errormsg=$successmsg="";
if(isset($_POST['btnsend']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
  $phone=$_POST['phone'];
  $category=$_POST['category'];
	$comment=$_POST['comment'];
  // $cpassword=$_POST['cpassword'];
  // if($password==$cpassword){
	$user="INSERT INTO agent (name,email,phone,category,comment) VALUES('$name','$email','$phone','$category','$comment')";

	$result=mysqli_query($conn,$user);

    if(!$result)
    {
    	$errormsg="could not insert values,check query!";

    }else
    {
      $successmsg="sent successfully";

      // header("location:login.php");
    }
 }
//  else{
// //   $error="password don't match";
// }



?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

 	<title>	REGISTER</title>

 	<style type="text/css">
   body{
   	padding-top: 150px;
   }
   c{
            size:20px;
            color:white;
            font-size: 30px;

          }
          d{
            size:20px;
            color:lightblue;
            font-size:30px;
          }
          e{
            size:20px;
            color:white;
            font-size:30px; 
          }
          f{
            size:20px;
            color:black;
            font-size:100px;
          }
          g{
            size:20px;
            color:orange;
            font-size:100px;
          }
          k{
            size:20px;
            color:black;
            font-size:100px;
          }
         
          .login-panel{
             background-color: white;
          }
          .login-panel panel panel-info{
     background color:blue;
     border: 2px solid color;

          }
          .col-md-4{
            border: 2px solid gray;
            background-color: whitesmoke;
            box-shadow:3px 4px 3px 7px whitesmoke;
          }
          .reg_wrapper{

            background-color: #000000;
          }
          
          
 
 	</style>
 </head>
 <nav class="navbar-inverse navbar-fixed-top">
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<img src="nconnect1.jpg" width="200" height="100" >-->
        <p><c><b>T</b></c><d><b>o</b></d><e><b>kya</e></b></p>

      </div>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="tokya.php" class="active"><span class="glyphicon glyphicon-home"> Home</a></li>
            <li><a href="new.php" class="active"><span class="glyphicon glyphicon-book"> News feed</a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-user"> Register</a></span></li>
          <!--  <li><a href="">SERVICES</a></li> -->
             
             
          
          </ul>
        
      <form  method="POST" action="search.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
      <input type="text" name="search" class="form-control input-md" size="100" placeholder="search site...">
      <span class="input-group-btn">
      <button type ="submit" name="btnsearch" class="btn btn"><span class="glyphicon glyphicon-search"></span></button>
    </div>
    
    
  </form>


          
    </div> 
  </div>
  </nav>

 <body>
 <form action="register.php" method="POST">
 <div class="col-md-4 col-md-offset-4 text-center">
 <!-- <strong><fieldset>
 <?php 	echo "Today is " . date("Y/m/d") . "<br>";
 
 echo "The time is " . date("h:i:sa");
 ?> -->
 <div class="regwrapper">
 <h3 class="page-header">Register</h3></div>
 <p style="color:red">
 <?php 	if($errormsg)
    {
             echo htmlentities($errormsg);
 	} 
  if($error){
    echo htmlentities($error);
  }
 	?>
 	</p>
 	<p style="color:green">
 	<?php 	
    if($successmsg)
    {
    	echo htmlentities($successmsg);
    }

 	 ?>
    </p>

  <input type="text" class="form-control" name="name" placeholder="username" value="" required><br>
 <input type="email" class="form-control" name="email" placeholder="Email" value="" required><br>
 <input type="text"  class="form-control" name="phone" placeholder="phone Number" value="" required><br>
 <!-- <input type="password"  class="form-control" name="password" placeholder="Password" value="" required><br>
 <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" value="" required><br>
  -->
   
<select name="category" id="" class="form-control">
<option value="#">category</option
<option value="industry">Industry</option>
<option value="agriculture">Agriculture</option>
<option value="school">School</option>
<option value="healthcare">Healthcare</option>

 </select>
 <br>

<textarea class="form-control" name="comment" cols="19" rows="4" required placeholder ="Comments">
</textarea><br>
 
<input class="btn btn-lg btn-info btn-sm" type="submit" value="Submit" name="btnsend">
 <!-- If you have an account click here to <a href="login.php">Login</a> -->
 </div>
 </div>
 </form>
</div>



 </fieldset>
 </body>
 </html>