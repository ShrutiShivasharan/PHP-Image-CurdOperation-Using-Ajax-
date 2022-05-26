<?php
// error_reporting(0);
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $img = $_FILES['image'];

// echo "hello";
echo $username;
echo $password;
print_r($img);


$imgname=$img['name'];
print_r($imgname);

 $imgerror=$img['error'];
 print_r($imgerror);

$imgtemp=$img['tmp_name'];
print_r($imgtemp);

$img_separate=explode('.',$imgname);
print_r($img_separate);

// $img_extension=strtolower(end($img_separate));
$img_extension=strtolower($img_separate[1]);
print_r($img_extension);

$extension=array('jpeg','jpg','png');

if(in_array($img_extension,$extension)){

    $upload_img='images/'.$imgname;

    move_uploaded_file($imgtemp,$upload_img);

    $q = " INSERT INTO `imgupload`( `username`, `password`, `image`)VALUES ( '$username', '$password', '$upload_img' )";

    $query = mysqli_query($con,$q);
    if ($q) {
        //echo "data inserted";
        header('location:Display.php');
    }else{
        die(mysql_error($con));
    }
}
}
?>
