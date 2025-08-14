<?php
require "connect3.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    $sql = "SELECT * FROM kongaguests WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "Details already exists";
    }else{
        $result = 'INSERT INTO kongaguests(fullname, username, email, password, phone_number) VALUES("'.$fullname.'","'.$username.'", "'.$email.'", "'.$password.'", "'.$phonenumber.'")';
    }
    mysqli_query($conn, $result);
    header("Location:index.php");
    //echo "Registration successful";
}
?>
<body style="background-color: beige;">
    <div>
        <h1>Register</h1>
        <form action="" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname"><br><br>

            <label for="username">Username:</label>
            <input type="text" name="username"><br><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email"><br><br>
    
            <label for="password">Password:</label>
            <input id="pass"type="password" name="password"> <input type="checkbox" onclick="word()"> Show Password <br><br>
    
            <label for="phone number">Phone Number:</label>
            <input type="text" placeholder="#### ##" name="phonenumber"><br><br>
    
            <button type="submit">Create Account</button>
        </form>
        <div>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
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