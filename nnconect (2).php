

<!DOCTYPE html>
<html>
<head>
  <title>SEARCH MACHINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  	<style type="text/css">
		  	.jumbotron{
		  		background-color:white;
		  		padding:150px;

		  	


		  		}
          a{
            size:20px
            font-size:50px;
          }
          c{
            size:20px;
            color:white;
            font-size: 30px;

          }
          d{
            size:20px;
            color:orange;
            font-size:40px;
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
          center{
            padding-top:10px;
          }
          nav{
          	background-color:black;
          }
          #contact{
            text-align: center;
            color: orange;
            background-color:white;
            padding-top: 180px;
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
        <p><c><b>T</b></c><d><b>o</b></d><e><b>K<font color =#d68500>Y</font>A</b></e></p>

      </div>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="nnconect.php"class="active">HOME</a></li>
            <li><a href=""class="active">NEWS FEED</a></li>
            <li><a href="">ADVERTISEMENT</a></li>
           <li><a href="">SERVICES</a></li>
           <li><i class="fa fa-user"></i><a href="register.php">REGISTER</a></li>
            
             
          
          </ul>
      <!--<form  method="POST" action="search.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
      <input type="text" name="search" class="form-control input-md" size="100" placeholder="search site...">
      <span class="input-group-btn">
      <button type ="submit" name="btnsearch" class="btn btn"><span class="glyphicon glyphicon-search"></span></button>
    </div>
    
    
  </form>-->


          
    </div> 
  </div>
  </nav>

  <body>

  	  <div class="col-md-12">
  	<div class="jumbotron text-center">
  <!--<center><img src="connect1.jpg" width="400" height="300" ></center>-->
<!--<h1><f><b>n</f></b><g><b>C</g></b><k><b>onnect</k></b></h1>-->

  <img src="img/logo.PNG" width="450" height="250">
  <form method="POST" action="nnconect.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
        <input type="text" name="search" class="form-control input-lg" size="100" height="20" placeholder="Search here">
         <span class="input-group-btn">
      <button type ="submit" name="btnsearch" class="btn btn-lg"><span class="glyphicon glyphicon-search"></span>search</button>
       
      </div>
      
    </div>
    </form>
     
   
    
  
  <!--<center> <p>Thanks for chooosen nConnect! To get the most out of your browser,</p>
  <p>learn more about the <a href="#" >latest features </a> </p> </center>-->
  </div>
</div>



    
   
    
  
  <!--<center> <p>Thanks for chooosen nConnect! To get the most out of your browser,</p>
  <p>learn more about the <a href="#" >latest features </a> </p> </center>-->
  </div>
</div>

<!--<div id="services" class="container-fluid">
  <div class="row slideanim"></div>
  <div class="col-sm-4">
    <div class="panel-header">
      <h3>Informations</h3>
    </div>
    <div class="panel-body">
    <a href="About.html">About Us</a><br>
    <a href="#contact"> Contact Us</a><br>
    <a href="">Create an Acount with us</a>

    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel-header">
      <h3>Our Services</h3>
    </div>
        <div class="panel-body">
        <a href="">News</a><br>
        <a href=""> Advertisements</a><br>
        <a href="">Consultancy Services</a>  and lots more...
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel-header">
     <h3>nConnect</h3>
    </div>
        <div class="panel-body">

    <p id="e-t">nConnect is a search engine that allows all its users get informations that concerns Schools, Industries,Healthcare centers and Farmers(Agriculture). All these sectors access information from a unified database.
      </p>
    </div>
  </div>
</div>-->


<!--contact us-->
<?php include("mysqlconnection.php"); ?>
<?php  
$sql=""; 
if(isset($_POST['btnsearch'])){
  $search=$_POST['search'];
  $location = $type=$name=$success='';

  if($search==''){
    //header("Location:sach.php");
    //$success="<h3 class='alert alert-danger'>Type in something</h3>";
    echo "<script>alert('Type in something ')</script>";
    //header("Location:nnconect.php");
    exit();
  }
    if($search=='schools'){
    
         $sql= "SELECT * FROM profile";
         
    
    }
    elseif($search=='university' or $search=='universities')
    {
 $sql="SELECT * FROM profile WHERE name LIKE '%university%' ";
  
    }elseif ($search=='colleges') {
      $sql="SELECT * FROM profile WHERE name LIKE '%college%'";

    }elseif ($search=='unijos'or $search=='university of jos' or $search=='uj') {

      $sql="SELECT * FROM profile WHERE name LIKE '%university_of_jos%'";

    }elseif($search=='PLATEAU STATE UNIVERSITY BOKKOS' or $search== 'PLASU' or $search=='plasu' or $search=='plateau state university Bokkos'){

      $sql = "SELECT * FROM profile WHERE name LIKE '%PLATEAU% %STATE% %UNIVERSITY% %BOKKOS%'";

    }elseif ($search=='college of education Gindiri') {

      $sql="SELECT * FROM profile WHERE name LIKE '%college% %Gindiri%'";

    }elseif ($search=='federal college of education pankshin' or $search=='fce pankshin' or $search=='fce') {

      $sql="SELECT * FROM profile WHERE name LIKE '%college% %pankshin%'";
    }elseif ($search=='PLATEAU STATE POLYTECHNIC BARKIN LADI' or $search=='plapoly' or $search=='PLAPOLY') {

      $sql="SELECT * FROM profile WHERE name LIKE '%POLYTECHNIC% %BARKIN% %LADI%'";
    }elseif ($search=='public secondary schools'  or $search=='GSS') {

      $sql="SELECT * FROM profile WHERE name LIKE '%government% %GSS%'";
    }

    
    
        
        $query= mysqli_query($conn,$sql);

        if(!$query){

  echo "ERROR OCCURED!<br>".mysqli_error($query);
} 
else
{
  //check if table contains data

  if(mysqli_num_rows($query)){

    while($row=mysqli_fetch_assoc($query)){

      $schoolID = $row['id'];
       echo "<h3><div class='col-lg-8 col-md-offset-2'>
                   <div class='panel panel-success'>
      
  <b>NAME OF SCHOOL  : </b>"."<a href='detail.php?detail=$schoolID'>".$row['name']."</a><br>

                   <b>LOCATION  : </b>"

                  .$row['location' ]. "<br>

                  <b>TYPE  :</b>"

                  .$row['type' ]."<br>
                    </div>
             ";

    echo"</div></div></div>";

         
        // echo $row ['description'];


        

        
        echo "<br> <br> <br> " ;
  
    }

  }

}

}

 ?>

 




  	
  </body>
  <div id="contact" class="container-fluid"> <div class="row"></div>
  <h2>OUR ADDRESS</h2>
  <p>nHub,3rd floor Tean complex jos,plateau state</p><br>
  <li><a href="reg.html"><span class="glyphicon glyphicon-envelope"></span>  tokya@gmail.com </a></li>
   <li><a href="reg.html"><span class="glyphicon glyphicon-earphone"></span></a>  08164690079/08141557353</li>
</div>
</html>
       
    


    