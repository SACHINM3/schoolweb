<?php
include("../includes/functions.php");

login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'><link rel="stylesheet" href="./infrastructure.css">
  <title>Infrastructure</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<!--  -->
<nav class="navbar" >
    <ul class="leftnav">
      <div class="logo">
        <img src="./img/img3.jpeg" alt="logo" />
      </div>
      <li onclick = "window.location.href='./index.php'"><a href="./index.php">Home</a></li>
      <li onclick = "window.location.href='./studymaterial/studymaterial.php'"><a href="./studymaterial/studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='./gallery/gallery.php'"><a href="./gallery/gallery.php">Gallery</a></li>
      <li onclick = "window.location.href='./achievements/achievements.php'"><a href="./achievements/achievements.php">Acheivments</a></li>
      <li onclick = "window.location.href='#'"><a href="#infrastructure">Infrastructure</a></li>
      <li onclick = "window.location.href='./faculty/faculty.php'"><a href="./faculty/faculty.php">Faculty</a></li>
      <li onclick = "window.location.href='#'"><a href="#about">About</a></li>
    </ul>
    <div class="rightnav">
      <button class="btn" id="login-btn" onclick="window.location.href='./login/login.php'">Login</button>
<?php
      if($_SESSION['role'] == 0){ ?>
        <button class="profile " id="profile-btn">
          <span><img src="./img/img4.jpg" id="img-btn" onclick="myFunction()" class="dropbtn" alt="btn"></span>
          <div id="profile_1">
            <p id="profile_text" onclick="myFunction()" class="dropbtn">My Profile</p>
            <div class="dropdown">
              <div id="myDropdown" class="dropdown-content">
                <a onclick="window.location.href='./dashboard/dashboard.php'">Dashboard</a>
                <a onclick="window.location.href='./logout.php'">logout</a>
            </div>
          </div>
      </button>
<?php
      }elseif($_SESSION['role'] == 1){ ?>
        <button class="btn" id="profile-btn" onclick="window.location.href='./admin/admin.php'">Admin</button>
<?php
      }elseif($_SESSION['role'] == 2){ ?>
        <button class="btn" id="profile-btn" onclick="window.location.href='./admin/admin.php'">Admin</button>
<?php
      }else{

      }
?>
        
    </div>
  </nav>
<!--  -->
<section class="o-slider o-style">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://images.unsplash.com/photo-1579003087287-997fd4d18771?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
            </div>
            <div data-swiper-parallax="400" class="slide-text">
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://images.unsplash.com/photo-1579003087287-997fd4d18771?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
            </div>
            <div data-swiper-parallax="400" class="slide-text">
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<section class="Content">
  <h2>RAA Labs</h2>
  <hr />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quisquam veritatis provident culpa aliquid, doloribus ratione dicta blanditiis consequuntur rerum vitae labore laborum odio autem. Eius temporibus veniam quia soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, totam expedita. Deleniti facere, qui pariatur assumenda deserunt sit magnam asperiores nisi nemo eaque quis atque. Velit deleniti nulla iste perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni praesentium voluptatibus ullam quaerat doloribus. Sapiente fuga aliquid minus iure quos corporis, reprehenderit quidem qui recusandae consequatur nobis. Repudiandae, vel odio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae error necessitatibus illo dolores laborum voluptates corporis quibusdam sapiente, autem dolore corrupti non asperiores explicabo reiciendis numquam voluptate ad hic? Nemo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sed odio numquam libero illo. Tenetur, reiciendis, quaerat quam adipisci optio in minus a, aliquid porro accusamus ratione ducimus voluptas delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque consequatur veniam blanditiis consequuntur nihil repudiandae non, porro obcaecati ipsum quam omnis officia itaque expedita sed dicta rerum sit culpa ut.
  </p>>
  <h2>Science Labs</h2>
  <hr />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quisquam veritatis provident culpa aliquid, doloribus ratione dicta blanditiis consequuntur rerum vitae labore laborum odio autem. Eius temporibus veniam quia soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, totam expedita. Deleniti facere, qui pariatur assumenda deserunt sit magnam asperiores nisi nemo eaque quis atque. Velit deleniti nulla iste perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni praesentium voluptatibus ullam quaerat doloribus. Sapiente fuga aliquid minus iure quos corporis, reprehenderit quidem qui recusandae consequatur nobis. Repudiandae, vel odio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae error necessitatibus illo dolores laborum voluptates corporis quibusdam sapiente, autem dolore corrupti non asperiores explicabo reiciendis numquam voluptate ad hic? Nemo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sed odio numquam libero illo. Tenetur, reiciendis, quaerat quam adipisci optio in minus a, aliquid porro accusamus ratione ducimus voluptas delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque consequatur veniam blanditiis consequuntur nihil repudiandae non, porro obcaecati ipsum quam omnis officia itaque expedita sed dicta rerum sit culpa ut.
  </p>
  <h2>Biology Labs</h2>
  <hr />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quisquam veritatis provident culpa aliquid, doloribus ratione dicta blanditiis consequuntur rerum vitae labore laborum odio autem. Eius temporibus veniam quia soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, totam expedita. Deleniti facere, qui pariatur assumenda deserunt sit magnam asperiores nisi nemo eaque quis atque. Velit deleniti nulla iste perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni praesentium voluptatibus ullam quaerat doloribus. Sapiente fuga aliquid minus iure quos corporis, reprehenderit quidem qui recusandae consequatur nobis. Repudiandae, vel odio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae error necessitatibus illo dolores laborum voluptates corporis quibusdam sapiente, autem dolore corrupti non asperiores explicabo reiciendis numquam voluptate ad hic? Nemo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sed odio numquam libero illo. Tenetur, reiciendis, quaerat quam adipisci optio in minus a, aliquid porro accusamus ratione ducimus voluptas delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque consequatur veniam blanditiis consequuntur nihil repudiandae non, porro obcaecati ipsum quam omnis officia itaque expedita sed dicta rerum sit culpa ut.
  </p>
</section>
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./infrastructure.js"></script>



</body>
</html>
