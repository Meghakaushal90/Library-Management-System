<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="dash-bg">

<div class="overlay">

<div class="dash-box">

<h1>Hello, <?php echo $_SESSION['username']; ?> 👋</h1>
<p>Welcome to Library Dashboard</p>

<div class="cards">

<a href="add_book.php" class="card">📚<br>Add Book</a>

<a href="view_books.php" class="card">📖<br>View Books</a>

<a href="add_student.php" class="card">🎓<br>Add Student</a>

<a href="view_students.php" class="card">👨‍🎓<br>View Students</a>

<a href="issue_book.php" class="card">📦<br>Issue Book</a>

<a href="return_book.php" class="card"><br>Return Book</a>

<a href="search_book.php" class="card">🔍<br>Search Book</a>

<a href="logout.php" class="card logout-card">🚪<br>Logout</a>

</div>

</div>

</div>

</body>
</html>