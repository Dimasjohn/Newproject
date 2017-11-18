<?php
$server = "localhost";
$username = "root";
$password= "john";
$db = "schools";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
	echo"ERROR" .mysqli_error($conn);
}

?>