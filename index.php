<?php
session_start();
include("db.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($query) > 0){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Wrong Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Library System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="main">

    <!-- LEFT IMAGE -->
    <div class="side left"></div>

    <!-- CENTER LOGIN BOX -->
    <div class="login-box">
        <h2>📚 LIBRARY</h2>
        <p>Management System</p>

        <form method="POST">
            <input type="text" name="username" placeholder="User Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button name="login">Login</button>
        </form>

        <p class="reg">
            Don't have account? <a href="register.php">Register</a>
        </p>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="side right"></div>

</div>

</body>
</html>