<!DOCTYPE html>
<html>
<head>
	<title>	HOME PAGE</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="jquery.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>

		  	<style type="text/css">
		  	.jumbotron{
		  		background-color:;
		  		padding:100px; 


		  		}
          a{
            size:20px
            font-size:50px;
          }
          c{
            size:20px;
            color:black;
            font-size: 30px;

          }
          d{
            size:20px;
            color:orange;
            font-size:50px;
          }
          e{
            size:20px;
            color:black;
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
          
		  	</style>
</head>
  <body id="home">
<nav class="navbar-default navbar-fixed-top">
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="connect1.jpg" width="200" height="100" >
        <!--<p><a class="navbar-brand" href="#home"><c><b>n</b></c><d><b>C</b></d><e><b>onnect</b></e></a></p>-->

      </div>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-download">Download</a></li>
             <li><a href="login.php"><span class="glyphicon glyphicon-user">Login</a></li>
          
          </ul>
      <form  method="GET" action="search.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
      <input type="text" name="search" class="form-control input-md" size="100" placeholder="search site...">
      <span class="input-group-btn">
      <button type ="submit" name="search" class="btn btn"><span class="glyphicon glyphicon-search"></span></button>
    </div>
    
    
  </form>


          
    </div> 
  </div>
  </nav>

  <div class="jumbotron text-center">
  <!--<center><img src="connect1.jpg" width="400" height="300" ></center>-->
  <h1><f><b>n</f></b><g><b>C</g></b><k><b>onnect</k></b></h1>
  <!--<form class="navbar-form navbar-right" role="search">
      <div class="form-group">
      <div class="input-group" >
        <input type="text" name="search" class="form-control input-lg" size="70" placeholder="Enter Adress or type URL">
       <span class="input-group-addon"><span class="glyphicon glyphicon-search"><a href="#"></a></span></span>
      </div>
      
    </div>
   
    
  </form>-->
</div>
<center> <p>Thanks for chooosen nConnect! To get the most out of your browser,</p>
  <p>learn more about the <a href="#" >latest features </a> </p> </center>
<hr>
 
<!--picture-->
<!--<div class="col-md-12">
  <div class="col-md-3">
      <div class="container">
  
    <img src="m.jpg" id="mainImage" width="250" height="200">

<script type="text/javascript">
  var myImage=document.getElementById("mainImage");
  var imageArray=["lib.jpg", "3.jpg","mami4.jpg","m5.jpg","plane.jpg"];
  var imageIndex=0;
  function changeImage(){
    myImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>

<div class="col-md-3">
<div class="container">


<img src="m.jpg" id="mainImage2" width="250" height="200">

<script type="text/javascript">
  var weImage=document.getElementById("mainImage2");
  var imageArray=["lib.jpg", "n.jpg","3.jpg","m5.jpg","plane.jpg"];
  var imageIndex=0;
  function changeImage(){
    weImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>

  

</div>
  
</div>

<div class="col-md-3">
<div class="container">

<img src="m.jpg" id="mainImage3" width="250" height="200">

<script type="text/javascript">
  var deImage=document.getElementById("mainImage3");
  var imageArray=["lib.jpg", "n.jpg","m.jpg","m5.jpg","plane.jpg"];
  var imageIndex=0;
  function changeImage(){
    deImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>
  
  

</div>
  
</div>

<div class="col-md-3">
<div class="container">


  <img src="m.jpg" id="mainImage4" width="250" height="200">

<script type="text/javascript">
  var feImage=document.getElementById("mainImage4");
  var imageArray=["lib.jpg", "n.jpg","m.jpg","m5.jpg","plane.jpg"];
  var imageIndex=0;
  function changeImage(){
    feImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>
  

</div>
  
</div>
<hr>

<div class="col-md-12">
  <div class="col-md-4">
    <div class="container">
    

  </div>
  
</div>-->

<div class="col-md-4">
  <div class="container">
    <h4><strong><a href="#">Schools</a></h4></strong>
    <img src="m5.jpg" id="mainImage" width="200" height="100">
      </div>
      </div>
    

<script type="text/javascript">
  var myImage=document.getElementById("mainImage");
  var imageArray=["lib.jpg","lib2.jpg","m5.jpg","mami4.jpg"];
  var imageIndex=0;
  function changeImage(){
    myImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>

  
  </div>
  
</div>

 <div class="col-md-4"> 
    <div class="container">
   <h4><strong><a href="#">Schools updates</h4></strong>
   <img src="utm.png" width="200" height="100">
   <p id="e-t">Platea State University, Bokkos
    <p>Post UTME Exams is on</p>
      </p>
   </a>

  </div>
  
</div>





  <!--<div class="col-md-3">
 <h4><strong>Healthcare Centers</strong></h4>
      <div class="container">
   <img src="m.jpg" id="mainImage" width="200">
      </div>
      </div>
    

<script type="text/javascript">
  var myImage=document.getElementById("mainImage");
  var imageArray=["lib.jpg", "n.jpg","m.jpg","m5.jpg","plane.jpg"];
  var imageIndex=0;
  function changeImage(){
    myImage.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex >=imageArray.length){
      imageIndex=0;

    }
  }
  setInterval(changeImage,5000);
</script>

<div class="col-md-3">
 <h4><strong>Healthcare Centers</strong></h4>
      <div class="container">
   <img src="m.jpg" id="mainImage" width="200">
      </div>
      </div>

      <div class="col-md-3">
 <h4><strong>Healthcare Centers</strong></h4>
      <div class="container">
   <img src="m.jpg" id="mainImage" width="200">
      </div>
      </div>
    

  
 <!--services-->
<div id="services" class="container-fluid">
  <div class="row slideanim"></div>
  <div class="col-sm-4">
    <div class="panel-header">
      <h3>Informations</h3>
    </div>
    <div class="panel-body">
    <a href="">About Us</a><br>
    <a href=""> Contact Us</a><br>
    <a href="user.php">Create an Acount with us</a>

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
</div>

</body>
</html>