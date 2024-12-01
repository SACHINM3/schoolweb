<?php
error_reporting(0);
include ("../database/logindb/database.php");
include ("../includes/functions.php");

login();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ASoSE - Achievments</title>
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <link rel="stylesheet" href="achievements.css?v<?php echo time(); ?>"/>
</head>

<body>
  <nav class="navbar" >
    <ul class="leftnav">
      <div class="logo">
        <img src="../img/img3.jpeg" alt="logo" />
      </div>
      <li onclick = "window.location.href='../index.php'"><a href="../index.php">Home</a></li>
      <li onclick = "window.location.href='../studymaterial/studymaterial.php'"><a href="../studymaterial/studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='../gallery/gallery.php'"><a href="../gallery/gallery.php">Gallery</a></li>
      <li onclick = "window.location.href='./achievements.php'"><a href="./achievements.php">Acheivments</a></li>
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
  
  <div class="container">
    <div class="card">
       <div class="face face1">
         <div class="content">
           <img src="../img/award (1).JPG" alt="">
         </div>
       </div>
       <div class="face face2">
         <div class="content">
          <p>
            I had nothing to write 
          </p>
         </div>
       </div>
    </div>
    
    <div class="card">
       <div class="face face1">
         <div class="content">
         <img src="../img/award (2).JPG" alt="">
         </div>
       </div>
       <div class="face face2">
         <div class="content">
          <p>Hello Dear Teachers ...Its 12`O clock and i am still coding</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
         <img src="../img/award (3).JPG" alt="">
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p>Me HU Ek Udta Robo Doraemon.....Mano ya na mano me hu ek udta robo doraemon</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
         <img src="../img/award (4).JPG" alt="">
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
         <img src="../img/img7.JPG" alt="">
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
            <h3>Award</h3>
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
            <h3>Award</h3>
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
            <h3>Award</h3>
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
    
    
    <div class="card">
       <div class="face face1">
         <div class="content">
           
            <h3>Award</h3>
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
         </div>
       </div>
    </div>
  
  </div>

<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
<script src="./achievements.js"></script>
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