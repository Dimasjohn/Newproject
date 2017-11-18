

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
            background-color:whitesmoke;
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
            <li><a href="tokya.php"><span class="glyphicon glyphicon-home"> Home</a></li>
            <li><a href="new.php"><span class="glyphicon glyphicon-book"> News Feed</a></li>
            
            <!-- <li><a href="nnconect.php">Services</a></li> -->
            <!-- <li><a href="#">News Feed</a></li>
            <li><a href="nnconect.php">Advertisment</a></li> -->
           <!--  <li><a href="#"><span class="glyphicon glyphicon-download">Download</a></li> -->
             <li><a href="register.php"><span class="glyphicon glyphicon-user">Registration</a></span></li>
          
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
    <?php $server = "localhost";
$username = "root";
$password= "john";
$db = "schools";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
  echo"ERROR" .mysqli_error($conn);
}
?>
<?php 
  if (isset($_GET['detailss'])) {
    if (!empty($_GET['detailss'])) {
      $id = $_GET['detailss'];
      $image="";

      $sql = "SELECT * FROM profile WHERE id  = '$id'";

      $result = mysqli_query($conn, $sql);
      if ($result) {
        while($row=mysqli_fetch_assoc($result)){
           // echo "<div id=img_div>";
           // echo "<img class='circle' src='img/".$row['image']."'>";
           
          //echo "<img src='images/".$row['image']."'>";
        // <div class='panel panel-success'>
        // <h3><div class='col-md-12 col-md-offset-2'>
                  echo "
                       
                      <br><br><br>
                      <center><img width='350'height='250'src='img/".$row['image']."'></center><br><br>
                     
            
             <b>Details:</b>".
             $row['details']."<br><br>


            ".
            "<br><br></a>

              <b>Map:</b>".
             "<center>".$row['map']."</center><br><br>

            

            

                    
            


             
             </div>
            ";

          echo"</div></div></div>";


      }
      }
    }
  }
  include "footer.php";
 ?>

  </div>
  
  </body>
  </html>
