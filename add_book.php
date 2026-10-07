<?php
include 'db.php';

if(isset($_POST['add'])){
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO books (book_id, book_name, author, quantity) 
              VALUES ('$book_id','$book_name','$author','$quantity')";

    if(mysqli_query($conn,$query)){
        echo "<script>alert('Book Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial;

            background: url('images/pari.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .box {
            width: 350px;
            padding: 25px;
            background: rgba(255,255,255,0.9);
            border-radius: 12px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.4);

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: green;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Add Book</h2>

    <form method="post">
        <input type="text" name="book_id" placeholder="Book ID" required>
        <input type="text" name="book_name" placeholder="Book Name" required>
        <input type="text" name="author" placeholder="Author Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>

        <button type="submit" name="add">Add Book</button>
    </form>
</div>

</body>
</html>