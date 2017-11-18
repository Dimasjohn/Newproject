<?php include 'mysqlconnection.php'; ?>
<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.min.js"></script>
    <title>Mysql Insert</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		<h1 class="text-center">nHUb Interns</h1>
		</div>
		<?php
		//connect to the database line 1
		// fetch fuctions
		$sql="SELECT * FROM users1";
		$query=mysqli_query($conn,$sql);

		if(!$query){
			echo"ERROR OCCURED <br>".mysqli_error($query);
		}
		else{
			//check if table contain data .
			if (mysqli_num_rows($query)){

				while ($row=mysqli_fetch_assoc($query)){

					echo"<div class='col-md-3'>
					<div class='panel panel-success'>
							<div class='panel panel-heading'>
								<h1>".$row['username']."</h1>
								</div>

									<div class='panel-body>
										<h4>".$row['password']."</h4>

								</div>
						";
						echo"</div></div>";
				}
			}
		}

		?>
		
	</div>
</body>
</html>