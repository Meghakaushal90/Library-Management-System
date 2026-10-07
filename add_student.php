<?php
include 'db.php';

$message = "";

// auto student id generate
$student_id = "STU" . rand(1000,9999);

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $mobile = $_POST['mobile'];
    $student_id = $_POST['student_id'];

    // photo upload
    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($temp, "images/".$photo);

    $sql = "INSERT INTO students(student_id, name, branch, sem, mobile, photo)
            VALUES('$student_id','$name','$branch','$sem','$mobile','$photo')";

    if(mysqli_query($conn,$sql)){
        $message = "Student Added Successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: url('images/megha.jpg');
    background-size: cover;
}

.main {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box {
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 15px;
    width: 350px;
    text-align: center;
    box-shadow: 0 0 25px rgba(0,0,0,0.5);
}

input, select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

button {
    width: 100%;
    padding: 10px;
    background: green;
    color: white;
    border: none;
}

.msg {
    color: green;
}
</style>

</head>

<body>

<div class="main">
<div class="box">

<h2>🎓 Add Student</h2>

<?php if($message != "") { ?>
<div class="msg"><?php echo $message; ?></div>
<?php } ?>

<form method="post" enctype="multipart/form-data">

<input type="text" name="student_id" value="<?php echo $student_id; ?>" readonly>

<input type="text" name="name" placeholder="Student Name" required>

<select name="branch" required>
<option value="">Select Branch</option>
<option>CS</option>
<option>Mechanical</option>
<option>Civil</option>
<option>ET</option>
</select>

<input type="number" name="sem" placeholder="Semester" required>

<input type="text" name="mobile" placeholder="Mobile Number" required>

<input type="file" name="photo" required>

<button type="submit" name="add">Add Student</button>

</form>

</div>
</div>

</body>
</html>