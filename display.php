<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud operations</title>
<!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Jquery Table Downlod-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<!-- Jquery table -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->

</head>

<style>

	img{
		width: 100px;
	}

</style>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="insert.php" class="text-light">Add User</a></button>
		<table class="table" id="table">
  <thead>
    <tr>
      <th scope="col">Sir.No</th>
      <th scope="col">Images</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
      <th scope="col">operations</th>
    </tr>
  </thead>

<!-- script -->

<!-- <script type="text/javascript">
	
$(document).ready(function () {
	
$("#table").dataTable();

});

</script> -->

 <?php
	$sql="SELECT * FROM `imgupload`";
	$result=mysqli_query($con,$sql);
	if ($result) {
		while ($row=mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$img=$row['image'];
			$name=$row['username'];
			$pws=$row['password'];
			echo '<tr>
			      <th scope="row">'.$id.'</th>
			      <td><img src='.$img.'></td>
			      <td>'.$name.'</td>
			      <td>'.$pws.'</td>
			    <td>
					<button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class=text-white>Update</a></button>
					<button class="btn btn-danger"><a href="Delete.php?deleteid='.$id.'" class=text-white>Dalete</a></button>
				</td>
				</tr>'
			      ;
		}
	}

?> 
</tbody>
</table>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

</div>
</body>
</html>