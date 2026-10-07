<?php
include 'db.php';

if(isset($_POST['search'])){
    $book = $_POST['book_name'];

    $result = mysqli_query($conn, "SELECT * FROM books WHERE book_name LIKE '%$book%'");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Book</title>

<style>
body {
    font-family: Arial;
    background: url('images/pari.jpg');
    background-size: cover;
}

.box {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    text-align: center;
}

input {
    padding: 10px;
    width: 70%;
}

button {
    padding: 10px;
    background: green;
    color: white;
    border: none;
}
</style>

</head>
<body>

<div class="box">

<h2>🔍 Search Book</h2>

<form method="post">
<input type="text" name="book_name" placeholder="Enter Book Name" required>
<button name="search">Search</button>
</form>

<br>

<?php
if(isset($result)){
    while($row = mysqli_fetch_assoc($result)){
        echo "<p>".$row['book_name']." - ".$row['author']."</p>";
    }
}
?>

</div>

</body>
</html>