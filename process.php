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
   
<?php
$info = $alertmessage = $salary = "";
// iclude functions file
include 'function.php';
// if user is not looged in
//if (!$_SESSION['loggedInUder']) {
	
	// send them to the login page
	//header("Location: index.php");
//}
// get ID sent by the GET collection
	
$userID = $_GET['id'];
// connect to database
include 'dbconnection.php';
// query the database with the staff ID
$query = "SELECT * FROM agent WHERE id = '$userID'";
$result = mysqli_query($conn, $query);
// if result is returned
if( mysqli_num_rows($result)>0)  {
	
	// we have data so set some variables
	while($row = mysqli_fetch_assoc($result)){
		
		
		
		$comment= $row['comment'];
		$userID=$row['id'];
	}
}else{
	// no result is returned
	$alertmessage = "<div class = 'alert alert-warning'>No staff in the database<a href = 'process.php'>Head back</a></div>";
}
if (isset($_POST['update'])) { // if the update button is clicked
	
	// set variables
	
	
	
	$comment = validateFormData( $_POST['comment']);
	// new database query and result
	$query = "UPDATE agent
			SET 		
			
			comment = '$comment'
			WHERE id = '$userID'";
			$result = mysqli_query($conn, $query);
			if($result){
				header("Location:updateusers.php?alert=updatesuccess");
			}else{
				echo "Error updating user record:". mysqli_error($conn);
			}
}
// delete button was submitted
if (isset($_POST['delete'])) {
	$alertmessage = "<div class = 'alert alert-danger'> 
	
		<form action = 'process.php?id=$userID' method = 'POST'>
		<button class= 'close' data-dismiss = 'alert' aria-hidden='true'>&times</button>
		<input type = 'submit' class = 'btn btn-danger btn-sm btn-close' name = 'confirm-delete' value = 'Yes, delete!'>
		</form><br>
		<p>Are you sure you want to delete user Information?</p>
	</div>";
}
// if confirm delete button was submitted
if ( isset($_POST['confirm-delete'])) {
	
	// new database query and result
	$query = "DELETE FROM agent WHERE id = '$userID' ";
	$result = mysqli_query($conn, $query); 
	if ($result) {
		header("Location: updateusers.php?alert=deleted");
	}else{
		echo "Error deleting record: ". mysqli_error($conn);
	}
}
?>
<div class="container">
	<div class="col-sm-8 col-sm-offset-2">
<h1>Edit Users Information</h1>
<?php echo $alertmessage; ?> 
<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $userID; ?>" method = "POST" class = "row">
	
	
	<div class = "form-group col-sm-12">
		<label for = "comment">Information</label>
		<!-- <input class="form-control input-lg" id="comment" name="comment" rows="15px" cols="15px" 
		type="text" value="<?php echo $comment; ?>">  -->
		<textarea class="form-control" name="comment" rows="10" cols="10">
			<?php echo htmlspecialchars($comment);?>
			

		</textarea> 
	</div>
<hr>
	

	
	<div class = "col-sm-12 col-sm-offset-2">

		

			
			
			<button type = "submit" class = "btn btn-primary  btn-md col-sm-offset-1" name = "cancel"><a href="updateusers.php" style = "text-decoration:none; color:white">Cancel </a></button>&nbsp;&nbsp;
			<button type = "submit" class = "btn btn-danger btn-md" name = "delete">Delete</button>&nbsp;&nbsp;
			<button type = "submit" class = "btn btn-info  btn-md" name = "update">Update</button>
			
		</div>
	</div>
</form>
	
</div>
