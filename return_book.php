<?php
include 'db.php';

$message = "";

if(isset($_POST['return'])){
    $student = $_POST['student_name'];
    $book = $_POST['book_name'];
    $date = $_POST['return_date'];

    // insert into return table
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
    font-family: Arial;
    background: url('images/aman.jpg');
    background-size: cover;
}

/* center */
.main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* box */
.box {
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 15px;
    width: 300px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
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
    background: red;
    color: white;
    border: none;
}

/* message */
.msg {
    color: green;
}
</style>

</head>

<body>

<div class="main">
<div class="box">

<h2>📚 Return Book</h2>

<?php if($message!=""){ ?>
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