<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM form_users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "Details already exists";
    }else{
        $result = 'INSERT INTO form_users(name, username, email, password) VALUES("'.$name.'","'.$username.'", "'.$email.'", "'.$password.'")';
    }
    mysqli_query($conn, $result);
    echo "Registration successful";
}
?>
<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name"><br><br>

    <label for="username">Username</label>
    <input type="text" name="username"><br><br>

    <label for="email">Email</label>
    <input type="email" name="email"><br><br>

    <label for="name">Password</label>
    <input type="password" name="password">
    <input type="submit">
</form>