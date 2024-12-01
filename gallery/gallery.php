<?php
include ("../includes/functions.php");

login(); //USING LOGIN FUNCTION FROM INCLUDES

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ASOSE,Sector-10 Dwarka</title>
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <link rel="stylesheet" href="./gallery.css?v=<?php echo time(); ?>" />
  <!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
</head>

<body>
  <nav class="navbar">
    <ul class="leftnav">
      <div class="logo">
        <img src="../img/img3.jpeg" alt="logo" />
      </div>
      <li onclick = "window.location.href='../index.php'"><a href="../index.php">Home</a></li>
      <li onclick = "window.location.href='./studymaterial.php'"><a href="../studymaterial/studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='./gallery.php'"><a href="../gallery/gallery.php">Gallery</a></li>
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
<!-- code end for navbar -->

<div class="container">
    <div class="top-content">
      <ul class="photo-nav">
        <div class="li"><li class="ph-nav"><a href="#ALL-PHOTOS">All Photos</a></li></div>
        <div class="li"><li class="ph-nav"><a href="">Ncc</a></li></div>
        <div class="li"><li class="ph-nav"><a href="">Classrooms</a></li></div>
        <div class="li"><li class="ph-nav"><a href="">Labs</a></li></div>
        <div class="li"><li class="ph-nav"><a href="">Competetions</a></li></div>
    </ul>
    </div>
    <!-- cards for pic inside -->
      <!-- ............. -->
      <!-- cards starting -->
      <div id="All-PHOTOS">
            <h1>All PHOTOS</h1>
            <div class="card-grid">
            <div class="cards"><div class="img-container" id="c-1"><img src="../img/img8.JPG" alt="image" id="img-c1"></div></div>
            <div class="cards"><div class="img-container" id="c-2"><img src="https://source.unsplash.com/1125x758/?school,college" alt="image" id="img-c2"></div></div>
            <div class="cards"><div class="img-container" id="c-3"><img src="https://source.unsplash.com/1125x758/?technologyindia,schools,university" alt="image" id="img-c3"></div></div>
      </div>
      <script src="./gallery.js"></script>
</body>
</html>

<!-- ........... -->
<!-- js like php -->
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