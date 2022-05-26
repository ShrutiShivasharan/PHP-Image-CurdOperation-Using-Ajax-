<?php
include 'conn.php';

$id=$_GET['updateid'];
$sql="SELECT * FROM `imgupload` WHERE id=$id";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$pws=$row['password'];
$img =$row['image'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Programg</title>
<!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<style>

	img{
		width: 100px;
	}

</style>
<body>
	<div class="col-lg-6 m-auto">
		<form method="post" id="update">
		<br><br>
		<div class="card">
		  	<div class="card-header bg-dark text-white text-center">
		  		<h1>Insert Operations</h1>
		  	</div>
			<!-- <label for="ID">ID:</label> -->
		    <input type="hidden" class="form-control" placeholder="Enter ID" name="id" value="<?php echo $id;?>">
		  	<br>
		    <label for="username">Username:</label>
		    <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $name;?>">
		    <br>
		    <label for="password">Password:</label>
		    <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php echo $pws;?>">
		    <br>
		    <label> image: </label>
			<img src="<?php echo $img;?>"><?php echo $row['image'];?>
 			<input type="file" name="image" class="form-control" value="">
 			<br>
		  	<button type="submit" name="done" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</div>

<!-- Ajax jquery Used -->

<script>
$(document).ready(function() {
    
    $("#update").submit(function() {

        event.preventDefault();
        var data = new FormData(this);
        // alert("in ajax");
        $.ajax({
            type: "POST",
            url: "function1.php?action=updatedata",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                //alert(data);
                window.location.href="display.php";
            },
            error: function() {
                console.log("Error Occured !!");
            }
        });  
    });
});  
</script>

</body>
</html>
