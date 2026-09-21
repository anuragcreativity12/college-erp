<?php
session_start();
include("db.php");

if($_SESSION['role'] != 'student'){
    header("Location: index.php");
    exit();
}

$student = $_SESSION['username'];
$query = "SELECT s.student_id FROM students s 
          JOIN users u ON u.username='$student' 
          WHERE s.email=u.username OR s.roll_no=u.username";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$student_id = $row['student_id'];

$assign = mysqli_query($conn, "SELECT * FROM assignments WHERE student_id='$student_id'");
?>
<h2>Assignments</h2>
<table border="1">
<tr><th>Title</th><th>Due Date</th><th>File</th></tr>
<?php while($r = mysqli_fetch_assoc($assign)){ ?>
<tr>
  <td><?php echo $r['title']; ?></td>
  <td><?php echo $r['due_date']; ?></td>
  <td><a href="<?php echo $r['file_path']; ?>">Download</a></td>
</tr>
<?php } ?>
</table>
