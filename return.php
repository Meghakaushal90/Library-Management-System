<?php
include 'db.php';

$message = "";

if(isset($_POST['return'])){
    $student = $_POST['student_name'];
    $book = $_POST['book_name'];
    $date = $_POST['return_date'];

    $sql = "INSERT INTO return_books (student_name, book_name, return_date) 
            VALUES ('$student','$book','$date')";

    if(mysqli_query($conn,$sql)){
        $message = "Book Returned Successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Return Book</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial;

    background: url('images/aman.jpg');
    background-size: cover;
    background-position: center;
}

/* center */
.main {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* box */
.box {
    background: rgba(255,255,255,0.95);
    padding: 35px;
    border-radius: 15px;
    width: 320px;
    text-align: center;
    box-shadow: 0 0 25px rgba(0,0,0,0.5);
}

/* input */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

/* button */
button {
    width: 100%;
    padding: 10px;
    background: #dc3545;
    color: white;
    border: none;
}

/* message */
.msg {
    color: green;
    margin-bottom: 10px;
}
</style>

</head>

<body>

<div class="main">
<div class="box">

<h2>📚 Return Book</h2>

<?php if($message != "") { ?>
    <div class="msg"><?php echo $message; ?></div>
<?php } ?>

<form method="post">

<input type="text" name="student_name" placeholder="Student Name" required>

<input type="text" name="book_name" placeholder="Book Name" required>

<input type="date" name="return_date" required>

<button type="submit" name="return">Return Book</button>

</form>

</div>
</div>

</body>
</html>