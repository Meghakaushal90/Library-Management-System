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
    margin: 0;
    font-family: Arial;
    background: url('images/aman.jpg');
    background-size: cover;
    background-position: center;
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
    padding: 25px;
    border-radius: 15px;
    width: 90%;
    max-width: 1000px;
    box-shadow: 0 0 25px rgba(0,0,0,0.5);
}

/* heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
}

/* table */
table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #007bff;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    text-align: center;
}

tr:hover {
    background: #f2f2f2;
}

/* photo */
img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
</style>

</head>

<body>

<div class="main">
<div class="box">

<h2>🎓 Student List</h2>

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

</div>
</div>

</body>
</html>