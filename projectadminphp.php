<?php
require "connect2.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM project_admins WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "<script>alert('Details already exists')</script>";
    }else{
        $result = 'INSERT INTO project_admins(firstname, lastname, username, email, password) VALUES("'.$firstname.'","'.$lastname.'", "'.$username.'", "'.$email.'", "'.$password.'")';
    }
    mysqli_query($conn, $result);
    echo "Registration successful";
}
?>