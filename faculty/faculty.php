<?php
include ("../includes/functions.php");

login();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASoSE - Faculty</title>
    <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
    <link rel="stylesheet" href="faculty.css?v=<?php echo time(); ?>" />
</head>

<body>
    <nav class="navbar">
        <ul class="leftnav">
            <div class="logo">
                <img src="../img/img3.jpeg" alt="logo" />
            </div>
      <li onclick = "window.location.href='../index.php'"><a href="../index.php">Home</a></li>
      <li onclick = "window.location.href='./studymaterial/studymaterial.php'"><a href="../studymaterial/studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='../gallery/gallery.php'"><a href="../gallery/gallery.php">Gallery</a></li>
      <li onclick = "window.location.href='../achievements/achievements.php'"><a href="../achievements/achievements.php">Acheivments</a></li>
      <li onclick = "window.location.href='#'"><a href="#infrastructure">Infrastructure</a></li>
      <li onclick = "window.location.href='./faculty.php'"><a href="./faculty.php">Faculty</a></li>
      <li onclick = "window.location.href='#'"><a href="#about">About</a></li>
        </ul>
        <div class="rightnav">
            
        <button class="btn" id="login-btn" onclick="window.location.href='./login/login.php'">Login</button>
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

    <!-- ....... -->
    <!-- ../ nav -->
    <!-- ........ -->

    <section class="content">
        <div class="section1">
            <img src="https://source.unsplash.com/1290x399/?books,notebooks,cars" alt="" class="img">
        </div>

        <div class="section2">
            <div class="heading">
                <h1>Science</h1>
            </div>
            <!-- ............. -->
            <!-- cards starting -->
            <div class="all_cards_science">
                <!-- .............. -->
                <!-- main card body -->
                <div class="cards">
                    <div class="card-photo">
                        <img src="https://source.unsplash.com/290x160/?Teachers" alt="Teacher" class="card-image">
                    </div>
                    <!-- ........... -->
                    <!--Card details -->
                    <div class="card-name"> 
                        <h1>Shobhit Paul</h1>
                        <h3>TGT Science</h3>
                        <br>
                    </div>
                    <button class="popup_btn">View More</button>
                    <div class="popup-bg">
                        <div class="popup">
                            <div class="popup-img">
                                <img src="https://source.unsplash.com/290x160/?Teachers" alt="" class="popup-image">
                            </div>
                            <div class="popup-content">
                                <h2>Shobhit Paul</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, quaerat.</p>
                            </div>
                            <span class="close_btn">X</span>
                        </div>
                    </div>
                </div>
                <!-- card 1 end -->
                <!-- card 2 start -->
                <!-- main card body -->
                <div class="cards">
                    <div class="card-photo">
                        <img src="https://source.unsplash.com/290x160/?,schools,rpvv,Teachers" alt="" class="card-image">
                    </div>
                    <!-- ........... -->
                    <!--Card details -->
                    <div class="card-name"> 
                        <h1>Shalini</h1>
                        <h3>TGT Science</h3>
                        <br>
                    </div>
                    <button class="popup_btn">View More</button>
                    <div class="popup-bg">
                        <div class="popup">
                            <div class="popup-img">
                                <img src="https://source.unsplash.com/290x160/?Teachers" alt="" class="popup-image">
                            </div>
                            <div class="popup-content">
                                <h2>Shalini</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, quaerat.</p>
                            </div>
                            <span class="close_btn">X</span>
                        </div>
                    </div>
                </div>
                <!-- card 2 end -->
                <!--.card 3 start. -->
                <!-- main card body -->
                <div class="cards">
                    <div class="card-photo">
                        <img src="https://source.unsplash.com/290x160/?,india,schools" alt="" class="card-image">
                    </div>
                    <!-- ........... -->
                    <!--Card details -->
                    <div class="card-name"> 
                        <h1>Manju Lata</h1>
                        <h3>TGT Science</h3>
                        <br>
                    </div>
                    <button class="popup_btn">View More</button>
                    <div class="popup-bg">
                        <div class="popup">
                            <div class="popup-img">
                                <img src="https://source.unsplash.com/290x160/?Teachers" alt="" class="popup-image">
                            </div>
                            <div class="popup-content">
                                <h2>Manju Lata</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, quaerat.</p>
                            </div>
                            <span class="close_btn">X</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 end -->
                <!-- card 4 start -->
                <!-- main card body -->
                <div class="cards">
                    <div class="card-photo">
                        <img src="https://source.unsplash.com/290x160/?cars,rolce,royce,money" alt="Failed to load" class="card-image">
                    </div>
                    <!-- ........... -->
                    <!--Card details -->
                    <div class="card-name"> 
                        <h1>Teacher 4</h1>
                        <h3>TGT Science</h3>
                        <br>
                    </div>
                    <button class="popup_btn">View More</button>
                    <div class="popup-bg">
                        <div class="popup">
                            <div class="popup-img">
                                <img src="img1.jpg" alt="" class="popup-image">
                            </div>
                            <div class="popup-content">
                                <h2>Teacher 4</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, quaerat.</p>
                            </div>
                            <span class="close_btn">X</span>
                        </div>
                    </div>
                </div>
                <!-- cards end -->
            </div>
        </div>
    </section>
    <!-- ............. -->
    <!-- Footer starts -->
    <!-- ............. -->
    <footer class="footer">
        <div class="container">
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
    <script src="./faculty.js"></script>
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