<?php
require "connect2.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM project_users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "Details already exists";
    }else{
        $result = 'INSERT INTO project_users(firstname, lastname, username, email, password) VALUES("'.$firstname.'","'.$lastname.'", "'.$username.'", "'.$email.'", "'.$password.'")';
    }
    mysqli_query($conn, $result);
    echo "Registration successful";
}
?>
<form action="" method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname"><br><br>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname"><br><br>

    <label for="username">Username</label>
    <input type="text" name="username"><br><br>

    <label for="email">Email</label>
    <input type="email" name="email"><br><br>

    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit">
</form>
<?php

?>