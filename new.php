<?php 


 ?>


<?php
$server = "localhost";
$username = "root";
$password= "john";
$db = "schools";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
	echo"ERROR" .mysqli_error($conn);
}

$query = "SELECT * FROM agent ";
$result = mysqli_query($conn, $query);

//check for query string
if ( isset( $_GET['alert'])) {
	// new staff added
	if ( $_GET['alert'] == 'success') {
		$alertmessage = "<div class = 'alert alert-success'><h4>user record Added </h4><a class = 'close' data-dismiss = 'alert'>&times;</a></div>";
	}elseif( $_GET['alert'] == 'updatesuccess'){
		$alertmessage = "<div class = 'alert alert-success'><h4>User record updated</h3><a class = 'close' data-dismiss = 'alert'>&times;</a></div>";
	}elseif( $_GET['alert'] == 'deleted' ){
		$alertmessage = "<div class = 'alert alert-success'><h4>User Record Deleted Successfull</h4><a class = 'close' data-dismiss = 'alert'>&times;</a></div>";
	}
}
// close connection 	
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NEWS UPDATE</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          .dd{
            font-size: 18px;

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
            <li><a href="tokya.php"><span class="glyphicon glyphicon-home"> Home</a></span></li>
            <!-- <li><a href="nnconect.php">Services</a></li> -->
            <!-- <li><a href="#">News Feed</a></li>
            <li><a href="nnconect.php">Advertisment</a></li> -->
            <li><a href="new.php"><span class="glyphicon glyphicon-book"> News feed</a></span></li>
             <li><a href="register.php"><span class="glyphicon glyphicon-user"> Registration</a></span></li>
          
          </ul>
      <!-- <form  method="POST" action="search.php" class="navbar-form navbar-right" role="search">
      <div class="form-group input-group">
      <input type="text" name="search" class="form-control input-md" size="100" placeholder="search site...">
      <span class="input-group-btn">
      <button type ="submit" name="btnsearch" class="btn btn"><span class="glyphicon glyphicon-search"></span></button> -->
    </div>
    
    
  </form>


          
    </div> 
  </div>
  </nav>
<body onload="viewdata()">
	<div class="container" style="margin-top: 50px">
    <div class="col-lg-12" style="font-size: 18px">
		<h4 style="text-align: center; font-size: 30px; ">Users comments</h4>
		<table class = "table table-striped table-bordered table-hover">
		<tr>
			
			<th></th>
			
			<!-- <th style = "text-align:center">Type Of Test Conducted</th>
			<th style = "text-align:center">Result</th>
			 -->
		</tr>
		
		<?php
		if (mysqli_num_rows($result)>0) {
			// their is data
			//output the data

			while( $row = mysqli_fetch_assoc($result)){
        echo "<div class='col-md-6' id='dd'>";
				echo "<tr>";

				echo "<td style = 'text-align:center'>".$row['comment']."</td>";
				
				
				echo "</tr>";
          echo "</div>";
			}
		}else{
			// if no entries
			echo "<div class = 'alert alert-warning'> No Updated information  </div>";


		}

		?>

		<!-- <tr>
			<td colspan = "6"><div class = "text-center"><a href="add.php" type = "button" class = "btn btn-sm btn-primary"><span class = "glyphicon glyphicon-plus"></span>Add Staff</a></div></td>
		</tr> -->
	</table>
  <h1 style="text-align: center">Admin </h1>
  <?php 
  include 'dbconnection.php';
$update="SELECT * FROM admin_news";

$check=mysqli_query($conn,$update);



  if(mysqli_num_rows($check)>0){
  while($num=mysqli_fetch_assoc($check)){
    echo "<table>";
    echo "<tr>";
   echo $num['news']."</td>";
    echo "</tr>";
    echo "</table>";
  }
}
?>

<!-- jQuery -->
    <script src="../vendor/bootstrap/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
     <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="../vendor/bootstrap/js/jquery.tabledit.js"></script>
     <script src="../vendor/bootstrap/js/jquery.tabledit.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
$(document).ready(function(){
    
    $(document).on('click', '#getUser', function(e){
        
        e.preventDefault();
        
        var uid = $(this).data('id');   // it will get id of clicked row
        
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
        
        $.ajax({
            url: 'getuser.php',
            type: 'POST',
            data: 'id='+uid,
            dataType: 'html'
        })
        .done(function(data){
            console.log(data);  
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
        
    });
</script>
<!-- <script type="text/javascript">
function viewdata(){
	$.ajak({
		url: 'process.php?figo=view',
		method: 'GET'
	}).done(function(data){
		$('tbody').php(data)
		tableData()
	})

}
function tableData(){
	$('#contact').TableData({
		url: 'process.php',
		columns: {
			identifier: [0, 'id'],
			editable: [[1, 'name'], [2, 'email'], [3, 'phone'], [4, 'address'], [5, 'info']]
		}
	});

	}

</script> -->
</body>

</html>

