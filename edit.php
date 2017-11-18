



<?php
session_start();
error_reporting(0); 
include("dbconnection.php"); 
$errormsg=$successmsg="";
if(isset($_POST['btnsend']))
{
	$comment=$_POST['comment'];

  $query="SELECT * FROM agent WHERE name='$name'";
  $check=mysqli_query($conn,$query);
  if(mysqli_num_rows($check)>0){
    while ($rows=mysqli_fetch_assoc($check)) {
      $name=$rows['name'];
      
    }
  }
	
 
	$user="INSERT INTO agent(comment) VALUES('$comment')";
	$result=mysqli_query($conn,$user);
    if(!$result)
    {
    	$errormsg="could not send Information!";
    }else
    {
      $successmsg="Information sent successfully";
      
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

 	<title>	REGISTER</title>

 	<style type="text/css">
   body{
   	padding-top: 100px;
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
            <li><a href="logout.php" class="active">logout</a></li>
           <!--  <li><a href="">ADVERTISEMENT</a></li>
           <li><a href="">SERVICES</a></li>
             -->
             
          
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
 <form action="edit.php" method="POST">
 <div class="col-md-4 col-md-offset-4 text-center">
 <!-- <strong><fieldset>
 <?php 	echo "Today is " . date("Y/m/d") . "<br>";
 
 echo "The time is " . date("h:i:sa");
 ?> -->
 <h1> <span class='glyphicon glyphicon-user' style='font-size: 50px'></span><h1>
  <?php echo $name; ?>
 <div class="regwrapper">
 <h3 class="page-header">Updated Information</h3></div>
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
    <div class="col-lg-12">
        <div class="form-group">
          <textarea class="form-control" name="comment" placeholder="Enter your Information" cols="50px" rows="15px" required></textarea>
        </div>
    </div>
   

<!-- <textarea class="form-control" name="comment" cols="19" rows="4" required placeholder ="Commments">
</textarea><br>
 -->
<input class="btn btn-lg btn-info btn-block" type="submit" value="Submit" name="btnsend">
 
 </div>
 </div>
 </form>
</div>



 </fieldset>
 </body>
 </html>