<?php
// error_reporting(0);
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
  <title>ASOSE,Sector-10 Dwarka</title>
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <link rel="stylesheet" href="./achievements.css?v=<?php echo time(); ?>"/>
  <!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
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
      <li onclick = "window.location.href='./achievements.php'"><a href="./achievements/achievements.php">Acheivments</a></li>
      <li onclick = "window.location.href='#'"><a href="#infrastructure">Infrastructure</a></li>
      <li onclick = "window.location.href='../faculty/faculty.php'"><a href="../faculty/faculty.php">Faculty</a></li>
      <li onclick = "window.location.href='#'"><a href="#about">About</a></li>
    </ul>
    <div class="rightnav">
      <button class="btn" id="login-btn" onclick="window.location.href='../login/login.php'">Login</button>
<?php
      if($_SESSION['role'] == 0){ ?>
        <button class="profile " id="profile-btn">
          <span><img src="./img/img4.jpg" id="img-btn" onclick="myFunction()" class="dropbtn" alt="btn"></span>
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
<!-- nav end -->

    <div class="container">
        <div class="all_cards">
            <div class="card">
                <div class="imgbox">
                    <img src="../img/img2.jpg" alt="">
                </div>
                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="../img/award (1).JPG" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="../img/award (3).JPG" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="../img/award (2).JPG" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="../img/award (4).JPG" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="img2.jpg" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="img2.jpg" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="img2.jpg" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img src="img2.jpg" alt="">
                </div>

                <div class="content_not-seen">
                    <h2>Asose</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        doloribus vitae fugit enim repudiandae
                    </p>
                </div>
            </div>

        </div>

    </div>
    <footer class="footer">
        <div class="container-footer">
          <div class="row">
            <div class="footer-col">
              <h4>About us</h4>
              <ul>
                <li><a href="#">Management</a></li>
                <li><a href="#">Head of School</a></li>
                <li><a href="#">Director</a></li>
                <li><a href="#">Faculty</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Acedemics</h4>
              <ul>
                <li><a href="#">Curriculam</a></li>
                <li><a href="#">Assessment</a></li>
                <li><a href="#">E-learning</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Co-Academics</h4>
              <ul>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Workshops</a></li>
                <li><a href="#">NCC</a></li>
                <li><a href="#">Clubs</a></li>
                <li><a href="#">Student Council</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Infrastructure</h4>
              <ul>
                <li><a href="#">RAA labs</a></li>
                <li><a href="#">Faculty</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Curriculars</h4>
              <ul>
                <li><a href="#">Common Curriculars</a></li>
                <li><a href="#">Curriculars for IX-XI</a></li>
                <li><a href="#">Curriculars for X-XII</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>-->
        <!-- </div> -->
      </footer>

    <div class="copyright">
        <i>&#169</i> 
            <p>Copyright Reserved-ASOSE</p>
    </div>

  <script src="./achievements.js"></script>
</body>
</html>

<!-- ........... -->
<!-- js like php -->
<!-- .....To be added in all pages...... -->

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