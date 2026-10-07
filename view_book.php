<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Students</title>

<style>
body {
    font-family: Arial;
    background: url('images/megha.jpg');
    background-size: cover;
}

table {
    width: 80%;
    margin: 50px auto;
    border-collapse: collapse;
    background: white;
}

th {
    background: green;
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    text-align: center;
}

img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
</style>

</head>

<body>

<h2 style="text-align:center;">🎓 Student List</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Student ID</th>
<th>Name</th>
<th>Branch</th>
<th>Semester</th>
<th>Mobile</th>
<th>Photo</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['branch']; ?></td>
<td><?php echo $row['sem']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td>
    <img src="images/<?php echo $row['photo']; ?>">
</td>
</tr>

<?php } ?>

</table>

</body>
</html>