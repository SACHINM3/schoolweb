<?php
error_reporting(0);
include ("../includes/functions.php"); //includind functions
include ("../database/uploaddb/filesdb.php"); //including database conection

// ON UPLOADING
if(isset($_POST['upload'])){
    if($con){

        $filetitle    = $_POST['file-title'];   //geting file name from form 
        $class        = $_POST['class'];        //get class from form
        $subject      = $_POST['subject'];      //get subject from frm
        $section      = $_POST['section'];      //get section from form
        $description  = $_POST['description'];  //get descr from form
        $filetype     = $_POST['file-type'];    //get file type from form
        $fname        = rand(1000,10000)."-".$_FILES["file"]["name"]; //set the name of file using file name and integer also
        $tempname     = $_FILES["file"]["tmp_name"];     //set temporary name using file and name
        $upload_dir   = './uploads';         //upload directory

        // UPLOADING STARTS
        move_uploaded_file($tempname, $upload_dir.'/'.$fname);
        $upload = "INSERT INTO `upload-db` (`s.no`, `name`, `class`, `subject`, `section`, `description`, `type`, `file`) VALUES (NULL, '$filetitle', '$class', '$subject', '$section', '$description', '$filetype', '$fname')";
        if(mysqli_query($con,$upload)){
        ?>
        <script>alert("File has been uploaded Successfully")</script> 
        <?php
        }else{
        ?>
        <script>alert("Failed To Upload The File")</script> 
        <?php
        }  
        
    }else{
        echo "Failed to connect to database";
    }
}
// FOR CHECK LOGIN
login();

if(login()==true){

  if($_SESSION['role'] >= 0){

?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><link rel="stylesheet" href="./css/admin.css?v=<?php echo time(); ?>">
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
                    <a href="#notfound"><i class='bx bxs-dashboard'></i>
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
                    <button class="back_btn" onclick="window.location.href='../index.php'">
                      <i class='bx bx-left-arrow-circle '></i> Go back to Home
                    </button>
                </div>
            </div>
    <!-- navbar end  -->
    <div class="home-content">
        <div class="upload ">
          <p>UPLOAD FILES</p>
        </div>
        <div class="form-container">
          <form action="./admin.php" method="post" id="form" enctype="multipart/form-data">
            <div class="controls">
              <!-- ..............forms starts......................  -->
              <div id="file-name-bx " class="control-bx">
                <label for="file-title" id="label-file-title">What is it ?</label>
                <input type="text" name="file-title" placeholder="name of file" class="form-control" required/>
              </div>
              <!-- name khatam -->
              <!-- class shuru -->
              <div id="class-bx" class="control-bx">
                <label for="class">Choose Class : </label>
                <select name="class" id="class" required>
                  <option value="10">X</option>
                </select>
              </div>
              <!-- class khatam -->
              <!-- subject -->
              <div id="subject-bx" class="control-bx">
                <label for="subject">Choose Subject : </label>
                <select name="subject" id="subject" required>
                  <option value="science">Science</option>
                  <option value="english">English</option>
                  <option value="maths">Maths</option>
                  <option value="emdd">EMDD</option>
                  <option value="hindi">Hindi</option>
                  <option value="social">I&S</option>
                </select>
              </div>
              <!-- section wala -->
              <div id="section-bx" class="control-bx">
                <label for="section">Choose Section : </label>
                <select name="section" id="section" required>
                  <option value="a">A</option>
                  <option value="b">B</option>
                  <option value="c">C</option>
                  <option value="d">D</option>
                  <option value="e">E</option>
                  <option value="f">F</option>
                  <option value="all">All</option>
                </select>
              </div>
              <!-- section khatam -->
              <!-- description wala -->
              <div id="description-bx" class="control-bx">
                <label for="description" id="label-description"> Instruction for Students</label>
                <input type="text" name="description" placeholder="Instructions for students" class="form-control" />
              </div>
              <!-- type select -->
              <div id="type-bx" class="control-bx">
                <label for="file-type">Choose A File Type : </label>
                <select name="file-type" id="file-type" required >
                  <option value="assingment">Assingment</option>
                  <option value="book-pdf">Book PDF</option>
                  <option value="circulars">Circulars</option>
                  <option value="homework">Homework</option>
                </select>
              </div>
              <!-- type select end -->
              <div class="choose-bx ">
                <label for="choose-file" class="choose-btn-wrapper">Choose a File : </label>
                <input type="file" id="choose-file" name="file" required>
              </div>
              <!-- choose box end -->
              <button type="submit" name="upload" class="btn_upload">Upload</button>
              <button type="reset" class="btn-reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
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
