<?php
session_start();
if($_SESSION['role'] != 'student'){
    header("Location: index.php");
    exit();
}
?>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<ul>
    <li><a href="timetable.php">Timetable</a></li>
    <li><a href="attendance.php">Attendance</a></li>
    <li><a href="assignments.php">Assignments</a></li>
    <li><a href="materials.php">Materials</a></li>
    <li><a href="exams.php">Exams & Results</a></li>
    <li><a href="fees.php">Fees</a></li>
    <li><a href="notices.php">Notices</a></li>
    <li><a href="faculty.php">Faculty</a></li>
    <li><a href="helpdesk.php">Helpdesk</a></li>
    <li><a href="resume.php">Resume & Career</a></li>
    <li><a href="placements.php">Placements</a></li>
</ul>
<a href="logout.php">Logout</a>
