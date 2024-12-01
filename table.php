<?php
include("./database/logindb/database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
    <title>Document</title>
</head>
<body>
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
            <td>" . $row['name'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td>" . $row['class'] . "</td>
            <td>" . $row['section'] . "</td>
            <td> <a href='./del'>Delete</a> <a href='./edit'>Edit</a> </td>
            </tr>";
        }

        ?>
        <!-- /php -->
    </tbody>
</table>

<!-- Js -->
<!-- ....... -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<!-- data table -->
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} )
</script>

</body>
</html>