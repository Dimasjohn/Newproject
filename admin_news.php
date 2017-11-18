  <?php 
include 'dbconnection.php';
if(isset($_POST['btnupdate'])){
  $news=$_POST['news'];

  $insert="INSERT INTO admin_news(news)VALUES('$news')";
  $result=mysqli_query($conn,$insert);
  if($result){
    $succ="News sent";
  }else{
    $error="Not sent";
  }

}
 ?>
 

<!DOCTYPE html>
<html>

<body>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="../bootstrap.min.js"></script>

  <title> update news | admin</title>

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
          body{
            background-color: #92bb9c;
          }
          
          
 
  </style>
 </head>
 <div class="row">
 
<form action="admin_news.php" method="POST" >
  <div class="col-md-6 col-md-offset-4" style="border: 2px solid black">
    <h1>Updates to clients</h1>
    <p style="color: green">
      <?php if($succ){
        echo htmlentities($succ);
      } ?>

    </p>
    <b style="color: red">
      <?php if($error){
        echo htmlentities($error);
      } ?>
    </b>
 <textarea class="form-control" name="news" rows="5px" cols="5px" required=""></textarea><br>
<input class="btn btn-lg btn-info input-sm col-md-offset-4" type="submit" value="Submit" name="btnupdate"><br>

<a href="updateusers.php">Back</a> <a href="register.php">Register</a> 
</div>
</div>
</form>
</body>
</html>

