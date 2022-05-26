<?php
include 'conn.php';

 if ($_REQUEST['action']=='updatedata') {
    $id=$_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$img = $_FILES['image'];
    $imgname=$img['name'];
    $imgtemp=$img['tmp_name'];
    $upload_img='images/'.$imgname;
    move_uploaded_file($imgtemp,$upload_img);

	
    $sql="UPDATE `imgupload` SET username='$username',password='$password',image='$upload_img' WHERE id='$id'";

	$result=mysqli_query($con,$sql);

	if ($result) {
		 // echo "Updated";
	}else{
		die(mysql_error($con));
	}

}


?>