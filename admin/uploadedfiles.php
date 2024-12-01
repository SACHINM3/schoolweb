<?php
include("../includes/functions.php");
// FOR CHECK LOGIN
login();

if(login()==true){

  if($_SESSION['role'] >= 0){

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><link rel="stylesheet" href="./css/uploadedfiles.css?v=<?php echo time(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <title>Admin - Panal</title>

<body>
    <section class="content_box">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-school'></i>
                <span class="logo_name">Admin Panel</span>
            </div>
            <hr>
            <ul class="nav_links">
                <li>
                    <a href="#"><i class='bx bxs-dashboard'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./admin.php">
                        <i class='bx bx-upload'></i>
                        <span class="links_name">Upload</span>
                    </a>
                </li>
                <li>
                    <a href="./studentacc.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">Student Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="./uploadedfiles.php">
                        <i class='bx bx-upload'></i>
                        <span class="links_name">Uploaded Files</span>
                    </a>
                </li>
            </ul>

            <!-- ul link -->

            <div class="bottom">
                <li class="settings">
                    <a href="/settings.html">
                        <i class='bx bx-cog'></i>
                        <span class="links_name">Settings</span>
                    </a>
                </li>
                <hr>
                <li class="log_out">
                    <a href="../logout.php">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </div>
        </div>
<!-- second remain -->
        <div class="n">
            <div class="nav">
                <nav>
                    <div class="admin"><p>Admin - <?php echo $_SESSION['name']; ?></p></div>
                </nav>
                <div class="back_to_home">
                    <button class="back_btn" onclick="window.location.href='../index.php'" >
                      <i class='bx bx-left-arrow-circle '></i> Go back to Home
                    </button>
                </div>
            </div>
    <!-- navbar end  -->
    <!-- main shuru where data begins -->
<div class="data">

</div>


</section>
</body>

</html>
<!-- .......... -->
<!-- AGAIN PHP -->
<!-- .......... -->
<?php

}else{
  echo "Access Denied ";
  ?>
  <button onclick="window.location.href='../login/login.php'">Login!</button>
  <?php
 }
 
?>

<?php

}else{
  echo "You Need To Be Logged In ";
  ?>
  <button onclick="window.location.href='../login/login.php'">Login!</button>
  <?php
}

?>

<!--  -->
