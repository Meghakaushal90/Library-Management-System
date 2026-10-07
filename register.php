<?php
include("db.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    mysqli_query($conn, "INSERT INTO users(username,password,mobile) VALUES('$username','$password','$mobile')");

    echo "<script>alert('Registered Successfully'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="main">

    <!-- LEFT IMAGE -->
    <div class="side left"></div>

    <!-- CENTER BOX -->
    <div class="login-box">
        <h2>Register</h2>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required>

            <button name="register">Register</button>
        </form>

        <p class="reg">
            Already have account? <a href="index.php">Login</a>
        </p>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="side right"></div>

</div>

</body>
</html>