<?php
require "connect3.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM kongaguests WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        //echo "Login succesful";
        header("Location:index.php");
    }else{
        echo "<script>alert('Login failed, please try again')</script>";
    }
}
?>
<body style="background-color: beige;">
    <div>
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="username" name="username"><br><br>
    
            <label for="password">Password:</label>
            <input id="pass" type="password" name="password"> <input type="checkbox" onclick="word()"> Show Password <br><br>
    
            <button type="submit">Login</button>
        </form>
        <div>
            <p><a href="#">Forgot your password?</a></p>
            <p>Don't have an account? <a href="register.php">Sign up here</a></p>
        </div>
    </div>
</body>
<script>
    function word(){
    let food = document.getElementById("pass");
    if(food.type === "password"){
        food.type = "text";
    }
    else{
        food.type = "password";
    }
}
</script>