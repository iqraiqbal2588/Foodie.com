<?php
require "connection.php";
if (isset($_POST['submit'])) {
    $frmName = $_POST['Username'];
    $frmEmail = $_POST['Email'];
    $frmPassword=$_POST['Password'];
// database insert SQL code
$query= "INSERT INTO `register`(`Username`,`Email`,`Password`) values('$frmName','$frmEmail','$frmPassword')";

$res=mysqli_query($conn,$query);
if ($res) {
   echo "<h1 style='text-align: center; background-color: black; color: aliceblue;'>User Added Successfully</h1> <br> ";
   require "Index.php";
   
} else {
    die(mysqli_error($conn));
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Foodie.com</title>
  </head>
  <body>
    <div class="container my-5">
    <h1 style="text-align: center; background-color: black; color: aliceblue;">Register Your self</h1>
    </div>
    <div class="container my-3">
    <form action="" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">Username:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Username" placeholder="Enter Username" Required>

    <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" Required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password" Required>
  </div>
  
  <button name="submit" type="submit" class="btn btn-success">Register</button>
</form>
    </div>




