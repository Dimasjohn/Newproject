


<!DOCTYPE html>
<html>
<head>
  <title>View page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .jumbotron{
          background-color:white;
          padding:100px;

        


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
          }

          .services{
            width:620px;
            height:auto;
            float:left;
            text-align:left;
          }




          
        </style>

</head>
<body>


  <nav class="navbar-inverse navbar-fixed-top">
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<img src="nconnect1.jpg" width="200" height="100" >-->
        <p><a class="navbar-brand" href="#home"><c><b>T</b></c><d><b>o</b></d><e><b>kya</b></e></a></p>

      </div>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="tokya.php">Home</a></li>
            <!-- <li><a href="nnconect.php">Services</a></li> -->
            <!-- <li><a href="#">News Feed</a></li>
            <li><a href="nnconect.php">Advertisment</a></li> -->
           <!--  <li><a href="#"><span class="glyphicon glyphicon-download">Download</a></li> -->
             <li><a href="register.php"><span class="glyphicon glyphicon-user">Registration</a></li>
          
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
  <div class="jumbotron">
  <div class="row">
  <div class="col-md-8">
<?php 
$server = "localhost";
$username = "root";
$password= "john";
$db = "schools";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
  echo"ERROR" .mysqli_error($conn);
}


$name = $category = $search = $locations = $sql = "";
error_reporting(0);
if(isset($_POST['btnsearch'])){
  $search = $_POST['search'];
  //$search = preg_replace("#[^0-9a-z]#i","", $search);
  

  //if($search == ''){
  //if(isset($_POST['btnsearch']) == '')
  //{echo "Oops you have to type something!"; }
if($search ==''){
  echo "<script>alert('Type in something') </script>";
  //header("Location:search.php");
  exit();
}
 
 if($search=='schools' or $search=='schools in jos'){
    
         $sql= "SELECT * FROM profile ";
         
    
    }
     elseif($search=='university' or $search=='universities')
     {
  $sql="SELECT * FROM profile WHERE name LIKE '%university%' ";
  
     }elseif ($search=='colleges') {
       $sql="SELECT * FROM profile WHERE name LIKE '%college%'";

     }elseif ($search=='unijos'or $search=='university of jos' or $search=='uj') {

       $sql="SELECT * FROM profile WHERE name LIKE '%university_of_jos%'";

     }elseif($search=='PLATEAU STATE UNIVERSITY, BOKKOS' or $search=='PLASU' or $search=='plasu' or $search=='plateau state university Bokkos'){

       $sql = "SELECT * FROM profile WHERE name LIKE '%Plateau_State_university%'";
     }elseif ($search=='federal college of education pankshin' or $search=='fce pankshin' or $search=='fce') {

       $sql="SELECT * FROM profile WHERE name LIKE '%Pankshin%'";
     }elseif ($search=='FEDERAL GOVERNMENT COLLEGE JOS' or $search=='fgc jos' or $search=='fgc') {

       $sql="SELECT * FROM profile WHERE name LIKE '%government%'";
     
     }elseif ($search=='PLATEAU STATE POLYTECHNIC BARKIN LADI' or $search=='plapoly' or $search=='PLAPOLY') {

       $sql="SELECT * FROM profile WHERE name LIKE '%Polytechnic%'";

     }elseif ($search=='college of education Gindiri') {

       $sql="SELECT * FROM profile WHERE name LIKE '%college_Gindiri%'";

     
     }elseif ($search=='public secondary schools'  or $search=='GSS') {

       $sql="SELECT * FROM profile WHERE name LIKE '%governmentGSS%'";
     }elseif($search == 'schools in jos'){

        $sql="SELECT * FROM profile WHERE name LIKE'%&search%' OR location LIKE '%&search%'";
     }elseif($search=='hospitals' OR $search='hospitals'){

     	       $sql="SELECT * FROM profile WHERE name LIKE '%hospital%'";

     }

     else{
      $sql="SELECT * FROM profile WHERE name LIKE'%".$search."%' OR location LIKE '%".$search."%' OR category LIKE '%".$search."%'";
    
     }
  }
    
  $result= mysqli_query($conn,$sql);

  if(!$result){
echo "Sorry Result not found";
  }else{

    if(mysqli_num_rows($result)){
 

    while($row=mysqli_fetch_assoc($result)){
    	
      $schoolID = $row['id'];
     echo"<div class ='services'> 
     <div class = 'panel'  ";
    

          echo "<div>";
          echo "<h3> <a href ='detailss.php?detailss=$schoolID'>".$row['name']." </a> </h3>"; 
          echo "<h4>".$row['location']."</h4>";
          echo "<h4>". $row['category']."</h4>";
          // echo "<ima src='img/".$row['images']."'>";
          echo " </div>";
     echo"</div>";
    }

    }
  }

//   $maxRows_Demo = 10;
// $Demo = new WA_MYSQLi_RS ("Demo",$DBConnection,$maxRows_Demo);
// $Demo->setQuery("SELECT * FROM demo");

// $Demo->execute();

// $DemoTotal = new WA_MYSQLi_RS ("DemoTotal",$DBConnection);
// $DemoTotal->setQuery("SELECT count(1) a FROM demo");
// $DemoTotal->execute();
// $Demo_Total = (int)$DemoTotal->Results[0]['a'];
// $Req_pages = ceil("$Demo_Total/$maxRows_Demo");





// $total_Rows_Demo = $Demo_Total;
// $pageNum_Demo = 0;
// if(isset($_GET['pageNum_Demo'])){
//   $pageNum_Demo = $_GET['pageNum_Demo'];
// }
// $incdone = false;
// if($maxRows_Demo == 0){
//   $maxRows_Demo = 1;
//   $incdone = true;
// }

// $totalpages_Demo = ceil($totalRows_Demo/$maxRows_Demo) -1;

// if($totalpages_Demo > 0 && !$incdone){
//   $elems = array();
//   for($i=0;$i<$Req_pages;$i++)


// if ($i == $pageNum_Demo) {

// } else{
//   $elems[] = "<a href=\"search.php? pageNum_Demo=$i\">".($i+1)."</a>";
// }
//     }
//   echo implode("| ", $elems);



  


 ?>
  </div><br>

  <div class="col-md-4">
    
  <h2 style="color:orange"> </h2><hr>
        <img src="img/nhub.jpg" id="mainImage" width="250" height="200"><br><br><br>

        <script type="text/javascript">
      var myImage=document.getElementById("mainImage");
      var imageArray=["img/nhub.jpg"];
      var imageIndex=0;
      function changeImage(){
      myImage.setAttribute("src",imageArray[imageIndex]);
      imageIndex++;
      if(imageIndex >=imageArray.length){
        imageIndex=0;

      }
      }
      setInterval(changeImage,5000);
</script><hr>

            <!-- <h2 style="color:orange;"> </h2><hr>
        <a href=""><img src="img/shirt.jpg" id="joinImage" width="250" height="200"><br><br><br></a>

  


        <a href=""><img src="img/mother.jpg" width="200" height="150"><br><br><br></a>


        <img src="img/shirt.jpg" width="200" height="150"><br><br><br>
      
  </div><hr> -->
<!--       <div class="row">
        <div class="col-md-4">45
          <img src="utm.png" width="200" height="150"><br><br> 
        </div>

          <div class="row">
        <div class="col-md-4">45
          <img src="utm.png" width="200" height="150"><br><br> 
        </div>

        <div class="row">
        <div class="col-md-4">45
          <img src="utm.png" width="200" height="150"><br><br> 
        </div>

          <div class="row">
        <div class="col-md-4">45
          <img src="utm.png" width="200" height="150"><br><br> 
        </div>
 --> 
      </div>
     </div>
  </div>
  </div>

</body>
<!-- <script type="text/javascript">
  var currentPos = 0;
var intervalHandle;

function beginAnimate() {
  document.getElementById("joinImage").style.position="absolute";
  document.getElementById("joinImage").style.right="0px";
  document.getElementById("joinImage").style.top="100px";
  intervalHandle=setInterval(animateBox,50);
  
}

function animateBox () {
  currentPos+=5;
  document.getElementById("joinImage").style.right=currentPos+"px";
  if(currentPos > 900){
    clearInterval(intervalHandle);
  document.getElementById("joinImage").style.position="";
  document.getElementById("joinImage").style.right="";
  document.getElementById("joinImage").style.top="";

}

}
window.onload=function(){
  setTimeout(beginAnimate,5000);
};
</script> -->
</html>
