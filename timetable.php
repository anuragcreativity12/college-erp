<?php
session_start();
include("db.php");

if(!isset($_SESSION['role'])){
    header("Location: index.php");
    exit();
}

$tt = mysqli_query($conn, "SELECT * FROM timetable ORDER BY day, time_slot");
?>
<h2>Weekly Timetable</h2>
<table border="1">
<tr><th>Day</th><th>Time</th><th>Subject</th><th>Faculty</th></tr>
<?php while($r = mysqli_fetch_assoc($tt)){ ?>
<tr>
  <td><?php echo $r['day']; ?></td>
  <td><?php echo $r['time_slot']; ?></td>
  <td><?php echo $r['subject']; ?></td>
  <td><?php echo $r['faculty']; ?></td>
</tr>
<?php } ?>
</table>
