<?php
session_start();
include("db.php");

if($_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
}

// Add Student
if(isset($_POST['add_student'])){
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $dept = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO students (roll_no, name, department, email, phone)
              VALUES ('$roll_no','$name','$dept','$email','$phone')";
    mysqli_query($conn, $query);
    echo "Student added successfully!";
}

// Delete Student
if(isset($_POST['delete_student'])){
    $roll_no = $_POST['roll_no'];
    $query = "DELETE FROM students WHERE roll_no='$roll_no'";
    mysqli_query($conn, $query);
    echo "Student deleted successfully!";
}
?>

<h2>Admin Panel</h2>
<form method="POST">
    <h3>Add Student</h3>
    <input type="text" name="roll_no" placeholder="Roll No" required><br>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="department" placeholder="Department"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <button type="submit" name="add_student">Add Student</button>
</form>

<form method="POST">
    <h3>Delete Student</h3>
    <input type="text" name="roll_no" placeholder="Roll No" required><br>
    <button type="submit" name="delete_student">Delete Student</button>
</form>

<a href="logout.php">Logout</a>
