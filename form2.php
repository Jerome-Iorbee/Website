<?php
$fullname = "";
$username = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(empty($_POST["fullname"])){
        echo "<h4> style='color: red;'>Full name is required</h4>";
    }else{
        $fullname = $_POST['fullname'];
    }
    if(empty($_POST["username"])){
        echo "<h4 style='color: red;'>Username is required</h4>";
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST["email"])){
        echo "<h4 style='color: red;'>Email is required</h4>";
    }else{
        $email = $_POST['email'];
    }
}
?>
<form action="" method="post">
    <label for="fullname">Full Name</label>
    <input type="text" name="fullname"><br><br>

    <label for="username">Username</label>
    <input type="text" name="username"><br><br>

    <label for="email">Email</label>
    <input type="email" name="email">
    <input type="submit">
</form>
