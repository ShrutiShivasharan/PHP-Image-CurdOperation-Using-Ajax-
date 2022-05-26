<?php
include 'conn.php';

if (isset($_GET['deleteid'])) {

	$id=$_GET['deleteid'];
	
	$sql="DELETE FROM `imgupload` WHERE id=$id";

	$result=mysqli_query($con,$sql);

	if ($result) {
		// echo "Record deleted successfully";
		header('location:display.php');
	}else{
		die(mysql_error($con));
	}
}
?>
