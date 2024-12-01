<?php 
error_reporting(0);
include ("../includes/functions.php");
include ("./database/logindb/database.php");

login();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ASOSE,Sector-10 Dwarka</title>
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <link rel="stylesheet" href="studymaterial.css?v=<?php echo time(); ?>" />
</head>
<body>
  <nav class="navbar">
    <ul class="leftnav">
      <div class="logo">
        <img src="../img/img3.jpeg" alt="logo" />
      </div>
      <li onclick = "window.location.href='../index.php'"><a href="../index.php">Home</a></li>
      <li onclick = "window.location.href='./studymaterial.php'"><a href="./studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='../gallery/gallery.php'"><a href="../gallery/gallery.php">Gallery</a></li>
      <li onclick = "window.location.href='../achievements/achievements.php'"><a href="../achievements/achievements.php">Acheivments</a></li>
      <li onclick = "window.location.href='#'"><a href="#infrastructure">Infrastructure</a></li>
      <li onclick = "window.location.href='../faculty/faculty.php'"><a href="../faculty/faculty.php">Faculty</a></li>
      <li onclick = "window.location.href='#'"><a href="#about">About</a></li>
    </ul>
    <div class="rightnav">
    <button class="btn" id="login-btn" onclick="window.location.href='../login/login.php'">Login</button>
<?php
      if($_SESSION['role'] == 0){ ?>
        <button class="profile " id="profile-btn">
          <span><img src="../img/img4.jpg" id="img-btn" onclick="myFunction()" class="dropbtn" alt="btn"></span>
          <div id="profile_1">
            <p id="profile_text" onclick="myFunction()" class="dropbtn">My Profile</p>
            <div class="dropdown">
              <div id="myDropdown" class="dropdown-content">
                <a onclick="window.location.href='../dashboard/dashboard.php'">Dashboard</a>
                <a onclick="window.location.href='../logout.php'">logout</a>
            </div>
          </div>
      </button>
<?php
      }elseif($_SESSION['role'] == 1){ ?>
        <button class="btn" id="profile-btn" onclick="window.location.href='../admin/admin.php'">Admin</button>
<?php
      }elseif($_SESSION['role'] == 2){ ?>
        <button class="btn" id="profile-btn" onclick="window.location.href='../admin/admin.php'">Admin</button>
<?php
      }else{

      }
?>
        
    </div>
  </nav>

  <!-- main nabar end -->
  <!-- .............. -->
  <!-- Right nav code -->
  <DIV class="RIGHT-DIV">
    <nav class="sidenav-box">
      <ul class="ul-sidenav">
        <li><a href="#">Student Companion</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Assessments</a></li>
        <li><a href="#">Maths</a></li>
        <li><a href="#">Science</a></li>
        <li><a href="#">Hindi</a></li>
        <li><a href="#">I&S</a></li>
        <li><a href="#">English</a></li>
      </ul>
    </nav>
  </DIV>
  <!-- right nav code end -->
<script src="./study.js"></script>
</body>
</html>

<!-- Script for JS -->
<!-- PHP and JS for after login button change to Profile -->
<!-- ........... -->

<?php if(login() == true){ ?>
        <script>
          document.getElementById("login-btn").style.display = "none";
          document.getElementById("profile-btn").style.display = "inline-block";
        </script>
<?php
}else{ ?>
        <script>
          document.getElementById("login-btn").style.display = "inline-block";
          document.getElementById("profile-btn").style.display = "none";
        </script>
<?php
} ?>
<!-- ......... -->