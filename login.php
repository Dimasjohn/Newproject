



<?php
error_reporting(0); 
include("dbconnection.php"); 
$errormsg=$successmsg="";
if(isset($_POST['btnsend']))
{
	
	$email=$_POST['email'];
  
	$password=$_POST['password'];
  if(empty($email) || empty($password)){
    $usererror="Enter email and password";
  }else{
  $query="SELECT * FROM agent WHERE email='$email' AND password='$password'";
  $result=mysqli_query($conn,$query);

  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      header("location: edit.php");

    }
  }
  else{
    $error="Invalid email or password";
    }
} 

} 


?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="../bootstrap.min.js"></script>

 	<title>	LOGIN</title>

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
            <li><a href="tokya.php" class="active">Home</a></li>
            <!-- <li><a href=""class="active">NEWS FEED</a></li>
            <li><a href="">ADVERTISEMENT</a></li>
           <li><a href="">SERVICES</a></li>
             -->
             
          
          </ul>
        
      <form  method="POST" action="search.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
      <input type="text" name="search" class="form-control input-md" size="100" placeholder="search site...">
      <span class="input-group-btn">
      <button type ="submit" name="btnsearch" class="btn btn"><span class="glyphicon glyphicon-search"></span></button>
    </div><br>
   
    
  </form>


          
    </div> 
  </div>
  </nav>

 <body>
 <form action="login.php" method="POST">
 <div class="col-md-4 col-md-offset-4 text-center">
 <!-- <strong><fieldset>
 <?php 	echo "Today is " . date("Y/m/d") . "<br>";
 
 echo "The time is " . date("h:i:sa");
 ?> -->
 <div class="regwrapper">
 <h3 class="page-header">Register</h3></div>
 <p style="color:red">
 <?php 	if($usererror)
    {
             echo htmlentities($usererror);
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

 
 <input type="email" class="form-control" name="email" placeholder="Email" value="" ><br>
 
 <input type="password"  class="form-control" name="password" placeholder="Password" value="" ><br>
 
 
   


<!-- <textarea class="form-control" name="comment" cols="19" rows="4" required placeholder ="Commments">
</textarea><br>
 -->
<input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="btnsend">
Don't have an account click here to <a href="register.php">Register</a>
 </div>
 </div>
 </form>
</div>



 </fieldset>
 </body>
 </html>