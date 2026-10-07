<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Books</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

<h2>Book List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Author</th>
    <th>Quantity</th>
</tr>

<?php
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['book_id']; ?></td>
    <td><?php echo $row['book_name']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>