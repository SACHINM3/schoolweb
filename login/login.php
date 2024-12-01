<?php
error_reporting(0);
include("../database/logindb/database.php");

// delaration of variables
session_start();

// .................................
// validating credentials with database
// ...................................
$username = $_POST['username'];
$password = $_POST['password'];
$usernameselect = "SELECT 'username' FROM idpass WHERE username ='$username'"; //searching for username in database //
$passwordselect = "SELECT 'password' FROM idpass WHERE BINARY password = '$password' AND username='$username'"; //searching for k sensitive pass in db//
$usernamequery = mysqli_query($con, $usernameselect); //running search query//
$passwordquery = mysqli_query($con, $passwordselect); //running search query//
$usernamecount = mysqli_num_rows($usernamequery); //displaying the no of row found for username entered//
$passwordcount = mysqli_num_rows($passwordquery); //displaying the no of row found for pass entered//
//validation of credentials end//
// ..............................//
// code query for displaying name for username = $username; 
$nameselect = "SELECT `name` FROM idpass WHERE username = '$username' AND BINARY password = '$password'";
$namequery = mysqli_query($con, $nameselect);
$name1 = mysqli_fetch_assoc($namequery);
$name = $name1['name'];

// code end for name..
// code for role
$roleselect = "SELECT `role_as` FROM idpass WHERE username = '$username' AND BINARY password = '$password'";
$rolequery = mysqli_query($con, $roleselect);
$role1 = mysqli_fetch_assoc($rolequery);
$role = $role1['role_as'];

// .................
// session variables are defined below pass correct
// because login hoke hi to name name me jaynga

// .............................
// Login process shuru from here
// ..............................


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($con) {
    if ($usernamecount > 0) {
      if ($passwordcount > 0) {
        // .....................
        $_SESSION['name'] = $name; //$name will go in name
        $_SESSION['role'] = $role;
        // ......................
        if (isset($_SESSION['name'])) {

          if ($role == 1) {
            header("location:../admin/admin.php");
          } elseif ($role == 2) {
            header("location:../admin/admin.php");
          } else {
            header("location:../dashboard/dashboard.php");
          }

        } else {
          echo "Please login to continue";
        }
      }else{
?>
<script>alert("Incorrect password") </script>
<?php
      }
    }else{
?>
<script>alert("User not Registered")</script>
<?php

    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet'
    href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css?v=<?php echo time(); ?>'>
  <link rel="stylesheet" href="./login.css?v=<?php echo time(); ?>">
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <title>Login To Sose Sec-10</title>
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <div id="login-box">
      <div class="logo">
        <img src="../img/img3.jpeg" class="img img-responsive img-circle center-block" />
        <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
      </div>
      <!-- /.logo -->
      <form action="./login.php" method="post">
        <div class="controls">
          <!-- <div id="form-name"><input type="text" name="name" placeholder="Name" class="form-control" required /></div> -->
          <div id="form-usr"><input type="email" name="username" placeholder="Username" class="form-control" required />
          </div>
          <div id="form-pass"><input type="Password" name="password" placeholder="Password" class="form-control"
              required /></div>
          <button type="submit" name="login" class="btn btn-default btn-block btn-custom">Login</button>
          <button type="button" class="btn btn-default btn-block  btn-cancel"
            onclick="window.location.href='../index.php'">Cancel</button>
        </div>
      </form>
    </div>
  </div>


  <div id="particles-js">
    <!-- partial -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
    <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="./login.js"></script>
  </div>
</body>

</html>