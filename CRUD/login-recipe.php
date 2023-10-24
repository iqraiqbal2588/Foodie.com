<?php
require "connection.php";
if (isset($_POST['submit'])) {
    $frmEmail = $_POST['Email'];
    $frmPassword=$_POST['Password'];

    // Database query to check if the email and password match
    $query = "SELECT * FROM `register` WHERE `Email`='$frmEmail' AND `Password`='$frmPassword'";
    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) == 1) {
        // Authentication successful
        echo "<h1 style='text-align: center; background-color: black; color: aliceblue;'>Login Successful</h1> <br>";
        // Redirect to a secure page or perform any other desired action
        require "recipe.php";
        exit;
    } else {
        // Authentication failed
        echo "<h1 style='text-align: center; background-color: black; color: aliceblue;'>Invalid email or password</h1> <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url('login.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
     body {
      background-color: #000000;
    }
    .card {
      background-color: #1e1e1e;
      color: #ffffff;
    }
    .form-control {
      background-color: #2b2b2b;
      color: #ffffff;
      border-color: #343a40;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>
<body>

</head>
<body>

<div class="container-fluid">

  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-4">
      <div class="card border-100 shadow-lg">
        <div class="card-header bg-transparent text-center">
          <h3 ">Welcome to Foodie.com</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button name="submit" type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
