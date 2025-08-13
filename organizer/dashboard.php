
<?php
require_once("../includes/auth_check.php");
include_once("../includes/header.php");
require_once("../config/connection.php");
$oid=$_SESSION['user_id'];
$res=$conn->query("SELECT * FROM events WHERE organizer_id=$oid ORDER BY event_date");
?>
<h2>Organizer Dashboard</h2>
<a class="btn btn-success mb-3" href="create_event.php">+ Create New Event</a>
<?php if($res->num_rows===0): ?>
  <p>No events yet.</p>
<?php else: ?>
<table class="table table-striped"><thead><tr><th>Title</th><th>Date</th><th>Location</th></tr></thead><tbody>
<?php while($row=$res->fetch_assoc()): ?>
<tr><td><?= $row['title'] ?></td><td><?= $row['event_date'] ?></td><td><?= $row['location'] ?></td></tr>
<?php endwhile; ?>
</tbody></table>
<?php endif; ?>
<?php include_once("../includes/footer.php"); ?>
