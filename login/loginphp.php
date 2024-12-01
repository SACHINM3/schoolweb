<?php
include ("../database/logindb/database.php");
// delaration of variables
error_reporting(0);
session_start();

// .................................
// validating credentials with database
// ...................................
$username = $_POST['username']; //$username me 'username' ki vale store hogi
$password = $_POST['password'];
$usernameselect = "SELECT 'username' FROM idpass where username ='$username'"; //searching for username in database //
$passwordselect = "SELECT 'password' FROM idpass where password = '$password'"; //searching for pass in db//
$usernamequery = mysqli_query($con, $usernameselect); //running search query//
$passwordquery = mysqli_query($con, $passwordselect); //running search query//
$usernamecount = mysqli_num_rows($usernamequery); //displaying the no of row found for username entered//
$passwordcount = mysqli_num_rows($passwordquery); //displaying the no of row found for pass entered//
//validation of credentials end//
// ..............................//
// code query for displaying name for username = $username; 
$nameselect = "SELECT `name` FROM idpass WHERE username = '$username'";
$namequery = mysqli_query($con ,$nameselect);
$name1 = mysqli_fetch_assoc($namequery);
$name = $name1['name'];
// code end for name..
// code for role
$roleselect = "SELECT `role_as` FROM idpass WHERE username = '$username'";
$rolequery = mysqli_query($con , $roleselect);
$role1 = mysqli_fetch_assoc($rolequery);
$role = $role1['role_as'];

// .................
// session variables are defined below pass correct
// because login hoke hi to name name me jaynga

// .............................
// Login process shuru from here
// ..............................
    
    
if(isset($_POST['login'])){
    if($con){
        if($usernamecount>0){
            if($passwordcount>0){
                // .....................
                $_SESSION['name'] = $name; //$name will go in name
                $_SESSION['role'] = $role;
                // ......................
                if(isset($_SESSION['name'])){
                    // echo "Welcome To Sose dear " . $name ."  ". $_SESSION['role'];
                    // echo "<br>";
                    
                    if($role==1){
                        // echo $name . " is admin";
                        header("location:../admin/admin.php");
                    }elseif($role==2){
                        echo $name . " is super admin";
                    }else{
                        echo $name . " is a user";
                    }
                }else{
                        echo "Please login to continue";
                }
            }else{
?>
                     <script>alert("Incorrect password") </script>
<?php
                 }
                    }else{ 
?>
                            <script>alert("User not Registered")</script>
<?php
                        }
            }else{
                echo "failed to connect to fatabase";
            }
}
?>