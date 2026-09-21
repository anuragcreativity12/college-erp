<?php
session_start();
if($_SESSION['role'] != 'student'){
    header("Location: index.php");
    exit();
}
?>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<ul>
    <li>Timetable</li>
    <li>Attendance</li>
    <li>Assignments</li>
    <li>Materials</li>
    <li>Exams & Results</li>
    <li>Fees</li>
    <li>Notices</li>
    <li>Faculty</li>
    <li>Helpdesk</li>
    <li>Resume & Career</li>
    <li>Placements</li>
</ul>
<a href="logout.php">Logout</a>
