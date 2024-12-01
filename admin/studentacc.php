<?php
include("../includes/functions.php");
include("../database/logindb/database.php");
// FOR CHECK LOGIN
login();

if(login()==true){

  if($_SESSION['role'] >= 0){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['snoEdit'])){
                $snoEdit = $_POST['snoEdit'];
                $nameEdit = $_POST['nameEdit'];
                $usernameEdit = $_POST['usernameEdit'];
                $passwordEdit = $_POST['passwordEdit'];
                $classEdit = $_POST['classEdit'];
                $sectionEdit = $_POST['sectionEdit'];
                // .........
                $update = "UPDATE `idpass` SET `name`='$nameEdit',`username`='$usernameEdit',`password`='$passwordEdit',`class`='$classEdit',`section`='$sectionEdit' WHERE `s.no`=$snoEdit;";
                $result = mysqli_query($con,$update);
                if ($result) {

               echo "<script> alert(' Records updated'); </script>";  

                }else{

                }
            }

        }


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/studentacc.css?v=<?php echo time(); ?>"> <!-- css -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> <!--  jquery css -->
  <link rel="icon" id="favicon" type="image/x-icon" href="../img/img3.jpeg">
  <title>Admin - Panal</title>
  <!-- BOOTSTRAP CSS AND JS FOR MODAL -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- END BOOTSTRAP CSS AND JS FOR MODAL -->

<body>
<!-- EDIT MODAL -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--  -->
        <form action="./studentacc.php?update=true" method="post">
            <div class="form-group">
                <input type="hidden" name="snoEdit" id="snoEdit">
                <label for="nameEdit">Name</label>
                <input type="text" class="form-control" id="nameEdit" name="nameEdit">

                <label for="usernameEdit">Username</label>
                <input type="text" class="form-control" id="usernameEdit" name="usernameEdit">

                <label for="passwordEdit">Password</label>
                <input type="text" class="form-control" id="passwordEdit" name="passwordEdit">

                <label for="classEdit">Class</label>
                <input type="text" class="form-control" id="classEdit" name="classEdit">

                <label for="sectionEdit">Section</label>
                <input type="text" class="form-control" id="sectionEdit" name="sectionEdit">
            </div>
            <!-- form div end -->
            <!-- submit div -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <!-- submit div end -->
        </form>
        <!--  -->
      </div>
      <!-- DIV END MODAL BODY -->
    </div>
  </div>
</div>
<!-- ........................................... -->

    <section class="content_box">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-school'></i>
                <span class="logo_name">Admin Panel</span>
            </div>

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
                    <a href="#">
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
            <div class="nav1">
                <nav>
                    <div class="admin"><p>Admin - <?php echo $_SESSION['name']; ?></p></div>
                </nav>
                <div class="back_to_home">
                    <button class="back_btn" onclick="window.location.href='../index.php'" >
                      <i class='bx bx-left-arrow-circle '></i> Go back to Home
                    </button>
                </div>
            </div>

            <!-- ................................ -->
            <!-- main kaam yha h baki sab static h -->
            <!-- ................................. -->
<div class="data"> <!-- is div ke ander baki kaam wale div aynge-->
<div class="studenttext">
    <h1 class="h1">Student Accounts</h1>
</div>
    <!-- div table -->
    <div class="datatable">
        <!-- table  -->
    <table class="table" id="myTable">
    <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Class</th>
            <th scope="col">Section</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- php -->
        <?php
        $sql = "SELECT * FROM `idpass` WHERE `class`=10 AND `role_as`=0;";
        $result = mysqli_query($con, $sql);
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td class='td'>" . $row['name'] . "</td>
            <td class='td'>" . $row['username'] . "</td>
            <td class='td'>" . $row['password'] . "</td>
            <td class='td'>" . $row['class'] . "</td>
            <td class='td'>" . $row['section'] . "</td>
            <td class='td'> <button data-toggle='modal' data-target='#editModal' class=' btn btn-sm btn-danger' id=" .$row['s.no']. ">Delete</button> <button data-toggle='modal' data-target='#editModal' class='edit btn btn-sm btn-primary' id=" .$row['s.no']. ">Edit</button> </td>
            </tr>";
        }
        ?>
        <!-- /php -->
        </tbody>
        </table>
    </div>
    <!-- table div end -->
    </div>
        <!-- main kaaam end  -->
    </section>

<!-- Js -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<!-- data table -->
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} )
</script>

<!-- script for modal -->
<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
      element.addEventListener('click', (e)=>{
          console.log("edit " , e.target.parentNode.parentNode)
          tr =  e.target.parentNode.parentNode;
          name = tr.getElementsByClassName("td")[0].innerHTML;
          username = tr.getElementsByClassName("td")[1].innerHTML;
          password = tr.getElementsByClassName("td")[2].innerHTML;
          Class = tr.getElementsByClassName("td")[3].innerHTML;
          section = tr.getElementsByClassName("td")[4].innerHTML;
        //   ................................................
        nameEdit.value = name;
        usernameEdit.value = username;
        passwordEdit.value = password;
        classEdit.value = Class;
        sectionEdit.value = section;
        snoEdit.value = e.target.id;
        // console.log(e.target.id);
        //  ................................................
        // $('#editModal').modal('toggle');

      })
})
</script>
<!-- script for modal end -->

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
