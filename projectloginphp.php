<?php
require "connect2.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM project_admins WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        //echo "Login succesful";
        header("Location:dashbord.php");
    }else{
        echo "<script>alert('Login failed, please try again')</script>";
    }
}
?>