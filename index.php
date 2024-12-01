<?php
// error_reporting(0);
include ("./database/logindb/database.php");
include ("./includes/functions.php");

login();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ASOSE,Sector-10 Dwarka</title>
  <link rel="icon" id="favicon" type="image/x-icon" href="./img/img3.jpeg">
  <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"/>
  <!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
</head>

<body>
  <div class="preloader"></div>
  <nav class="navbar" >
    <ul class="leftnav">
      <div class="logo">
        <img src="./img/img3.jpeg" alt="logo" />
      </div>
      <li onclick = "window.location.href='./index.php'"><a href="./index.php">Home</a></li>
      <li onclick = "window.location.href='./studymaterial/studymaterial.php'"><a href="./studymaterial/studymaterial.php">Study material</a></li>
      <li onclick = "window.location.href='./gallery/gallery.php'"><a href="./gallery/gallery.php">Gallery</a></li>
      <li onclick = "window.location.href='./achievements/achievements.php'"><a href="./achievements/achievements.php">Acheivments</a></li>
      <li onclick = "window.location.href='./infra/infrastructure.php'"><a href="./infra/infrastructure.php">Infrastructure</a></li>
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

  <!-- navbar end -->
  <!-- slider -->

  <div class="slider">
    <div class="welcome">
      <h1 id="H1" class="typewriters">
        <span> <!--//welcome to sose and typewriter effect//--></span>
      </h1>
  </div>
  </div>
 
  <!-- sliderend -->

  <div class="txt-main">
    <div class="img-div">
      <img src="./img/img3.jpeg" alt="" class="img" />
    </div>
    <div class="txt-div">
      <div class="h1-txt">
        <h1>What <span id="spn">is</span> SoSE ?</h1>
      </div>
      <div class="p-txt">
        <p>
          We are living in an era of specialization and excellence. With
          Schools of Specialized Excellence, we are bringing world-class
          education to our students,so that they are ready for the next
          generation challenges. Schools of Specialized Excellence are
          choice-based schools for grades 9 to 12 that allow students to
          specialize in their chosen fields of study. The Government of NCT of
          Delhi has established Schools of Specialized Excellence in order to
          cater to students who have a demonstrated interest and aptitude in
          specific domains. These schools seek to discover, foster, and
          nurture student ability, thereby enabling them to realise their full
          potential. Schools of Specialized Excellence gives a well-developed
          platform to students to for there learning. It`s based on a concept
          that,what the student is interested in. The Schools of Specialized
          Excellence provide opportunities to the student in enhance their
          ability and skills
        </p>
      </div>
    </div>
  </div>
  <!-- content 2nd para -->

  <div class="txt-main">

    <div class="txt-div">
      <div class="h1-txt">
        <h1>What <span id="spn">is</span> SoSE ?</h1>
      </div>
      <div class="p-txt">
        <p>
              We are living in an era of specialization and
              excellence. With Schools of Specialized Excellence,
              we are bringing world-class education to our
              students, so that they are ready for the next
              generation`s challenges
              Schools of Specialized Excellence are choice-based
              schools for grades 9 to 12 that allow students to
              specialize in their chosen fields of study. The
              Government of NCT of Delhi has established Schools
              of Specialized Excellence to cater to students with
              a demonstrated interest and aptitude in specific
              domains. These schools seek to discover, foster, and
              nurture student abilities, thereby enabling them to
              realize their full potential.
              Schools of Specialized Excellence give a welldeveloped platform to students for their learning.
              It`s based on a concept that the student is
              interested in. The Schools of Specialized Excellence
              provide opportunities for students to enhance their
              abilities and skills. The School provides its
              students with the best Qualified Faculty and CoFaculty with Expression, Skills, and Mastery in
              their field, they work with the students to enhance
              their skills and develop child`s personalities,
              stimulating critical thinking and building
              decision-making qualities.
              Schools of Specialised Excellence curriculum is
              based on The Delhi Board of School Education (DBSE)
              and is designed as per the International
              Baccalaureate (IB), a global community of
              educationists, who have engaged with 5500 schools
              across 159 countries. DBSE makes students think beyond
              rote memorization, it features a new-age curriculum
              and assessment in the specialized domains, and the
              curriculum set by DBSE connects learning to student`s
              everyday life.
        </p>
      </div>
    </div>
    <div class="img-div">
     <!-- <img src="./img/award (1).JPG" alt=""> -->
     </div>
  </div>

  
<!-- Cards start -->
<!-- Cards end -->


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
    <!-- <div class="header-area">
      <h2>I am a <span class="animate"></span></h2>
    </div> -->
    <!-- <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>-->
    <!-- </div> -->
  </footer>
  <!-- <div class="response"></div>
  <button id="fetch">click me</button> -->
  <script src="./index.js"></script>
  <script src="./incjs/typed.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('.preloader').fadeOut();
    // $('#fetch').click(function(e){
      // $('.res').remove();
    //   $.ajax({
    //     url: "r.php",
    //     method: "post",
    //     success: function (res) {
    //       $('.response').html(res);
    //       // alert(res);
    //       $('#fetch').hide();

    //     }
    // }
    //   );
    // });

  });
  // ...........

// using jquery
var typed = new Typed('.typewriters', {
  strings:
  [
    "Welcome to SoSE",
    "This is future",
    "Inovation",
    "Technology",
    "Excelence",
    "Meet Together",

  ],
  showCursor: true,
  typeSpeed: 50,
  backSpeed: 70,
  backDelay: 500,
  loop: true,




});




</script>
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