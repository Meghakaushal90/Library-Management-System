<?php
include 'db.php';

if(isset($_POST['issue'])){
    $student = $_POST['student_name'];
    $book = $_POST['book_name'];
    $date = $_POST['issue_date'];

    $sql = "INSERT INTO issue_books (student_name, book_name, issue_date) 
            VALUES ('$student','$book','$date')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Book Issued Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Issue Book</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial;
    background: url('images/pari.jpg');
    background-size: cover;
    background-position: center;
}

/* center layout */
.main {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* form box */
.box {
    background: rgba(255,255,255,0.95);
    padding: 35px;
    border-radius: 15px;
    width: 320px;
    text-align: center;
    box-shadow: 0 0 25px rgba(0,0,0,0.5);
}

/* heading */
h2 {
    margin-bottom: 20px;
}

/* input */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* button */
button {
    width: 100%;
    padding: 10px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

button:hover {
    background: #218838;
}
</style>

</head>

<body>

<div class="main">
<div class="box">

<h2>📚 Issue Book</h2>

<form method="post">

<input type="text" name="student_name" placeholder="Student Name" required>

<input type="text" name="book_name" placeholder="Book Name" required>

<input type="date" name="issue_date" required>

<button type="submit" name="issue">Issue Book</button>

</form>

</div>
</div>

</body>
</html>