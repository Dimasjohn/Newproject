
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFO</title>

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

</body>
</html>
<?php 

include 'dbconnection.php';
include 'function.php';
$query="SELECT * FROM profile";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
	if($rows=mysqli_fetch_assoc($result)){
		$ID=$rows['id'];
		$name=$rows['name'];
		$location=$rows['location'];
		$details=$rows['details'];
		$category=$rows['category'];


	}
}

if (isset($_POST['update'])) { // if the update button is clicked
	
	// set variables
	
	
	
	$name = validateFormData( $_POST['name']);
	$location = validateFormData( $_POST['location']);
	$category = validateFormData( $_POST['category']);
	$details = validateFormData( $_POST['details']);
	// new database query and result
	$query = "UPDATE profile
			SET 		
			
			name = '$details' 
			WHERE id = '$ID'";
			$result = mysqli_query($conn, $query);

			if($result){
				header("Location:org.php?alert=updatesuccess");
			}else{
				echo "Error updating user record:". mysqli_error($conn);
			}
}
if (isset($_POST['delete'])) {
	$alertmessage = "<div class = 'alert alert-danger'> 
	
		<form action = 'info.php?id=$ID' method = 'POST'>
		<button class= 'close' data-dismiss = 'alert' aria-hidden='true'>&times</button>

		<input type = 'submit' class = 'btn btn-danger btn-sm btn-close' name = 'confirm-delete' value = 'Yes, delete!'>
		</form><br>
		<p>Are you sure you want to delete user Information?</p>

	</div>";
}

// if confirm delete button was submitted
if ( isset($_POST['confirm-delete'])) {
	
	// new database query and result
	$query = "DELETE FROM profile WHERE id = '$ID' ";
	$result = mysqli_query($conn, $query); 
	if ($result) {
		header("Location: org.php?alert=deleted");
	}else{
		echo "Error deleting record: ". mysqli_error($conn);
	}
}



		 ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $ID; ?>" method="POST">
        	<div class="row">
        	<div class="col-md-6 col-md-offset-3">
        		<h1>EDIT INFORMATION</h1>  
        		<?php echo $alertmessage; ?>
         <input type="text" class="form-control" value="<?php echo $name;?>"><br>
         <input type="text" class="form-control" value="<?php echo $location;?>"><br>
         <input type="text" class="form-control" value="<?php echo $category;?>"><br>
         <textarea class="form-control" name="details" cols="5" rows="5"><?php echo htmlspecialchars($details);?>
         	
         </textarea><br>
         <button type = "submit" class = "btn btn-primary  btn-md col-sm-offset-1" name = "cancel"><a href="org.php" style = "text-decoration:none; color:white">Cancel </a></button>&nbsp;&nbsp;
			<button type = "submit" class = "btn btn-danger btn-md" name = "delete">Delete</button>&nbsp;&nbsp;
			<button type = "submit" class = "btn btn-info  btn-md" name = "update">Update</button>
		</div>
	</div>
		
        </form>
		