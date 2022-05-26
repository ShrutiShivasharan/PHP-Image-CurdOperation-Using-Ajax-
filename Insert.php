
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form id="insert" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> image: </label>
 <input type="file" name="image" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
 
<!-- Ajax jquery Used for insert data-->
<script>
$(document).ready(function() {
    
    $("#insert").submit(function() {

        event.preventDefault();
        var data = new FormData(this);
        // alert("in ajax");
        $.ajax({
            type: "POST",
            url: "function.php",
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
