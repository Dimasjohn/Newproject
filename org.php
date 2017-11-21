 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
  <div class="col-md-12">
  <table class = "table table-striped table-bordered table-hover">
        <P style="text-align: center"><b>Registered Sectors</b> <a href="updateusers.php"><br> <span class="glyphicon glyphicon-backward"> Back</a></P>
    <tr>
      <th style = "text-align:center">Organization Name</th>
      <th style = "text-align:center">Location</th>
      <th style = "text-align:center">Details</th>
      <th style = "text-align:center">Category</th>
      <!--<th style = "text-align:center">Information</th>-->
     <th style = "text-align:center">Edit</th>
    </tr>


      <?php 
      include 'dbconnection.php';
      $check="SELECT * FROM profile";
      $checkvalue=mysqli_query($conn,$check);
      if(mysqli_num_rows($checkvalue)>0){
        while($rows=mysqli_fetch_assoc($checkvalue)){
        
          echo "<tr>";

        echo "<td style = 'text-align:center'>".$rows['name']."</td><td style = 'text-align:center'>".$rows['location']."</td><td style = 'text-align:center'>".$rows['details']."</td><td style = 'text-align:center'>".$rows['category']."</td>";

        echo '<td style = "text-align:center"><a href = "info.php?id='.$rows['id'].'" type = "button" class = "btn btn-primary btn md"><span class = "glyphicon glyphicon-edit"></span></a></td>';

        
        echo "</tr>";
        
        }
      }


       ?>
     </table>
   </div>
   

</body>
</html>
 