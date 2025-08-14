<form action="" method="post">
    <label for="Username">Username</label>
    <input type="text" name="username">
    <input type="Submit">
</form>
<form action="" method="post">
    <label for="email">Email</label>
    <input type="email" name="email">
    <input type="submit" name="submit">
</form>
<form action="" method="get">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname">
    <input type="submit">
</form>
<form action="" method="get">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname">
    <input type="submit" name="submit">
</form>
<?php
/*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    if(isset($username)){
        echo $username;
    }
}*/

/*if (isset($_POST['submit'])){
    $email = $_POST['email'];
    echo $email;
}*/

/*if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $firstname = $_GET['firstname'];
    if(isset($firstname)){
        echo $firstname;
    }
}*/

/*if (isset($_GET['submit'])){
    $lastname = $_GET['lastname'];
    echo $lastname;
}*/
?>