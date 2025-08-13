```php
<?php
require_once("../includes/auth_check.php");
include_once("../includes/header.php");
require_once("../config/connection.php");
$uid=$_SESSION['user_id'];
$res=$conn->query("SELECT e.title,e.event_date,e.location FROM bookings b JOIN events e ON e.id=b.event_id WHERE b.user_id=$uid ORDER BY e.event_date");
?>
<h2>Your Booked Events</h2>
<?php if($res->num_rows===0): ?>
  <p>No bookings yet. <a href="/campus_events/public/event_list.php">Browse events</a></p>
<?php else: ?>
<table class="table"><thead><tr><th>Title</th><th>Date</th><th>Location</th></tr></thead><tbody>
<?php while($r=$res->fetch_assoc()): ?>
<tr><td><?= $r['title'] ?></td><td><?= $r['event_date'] ?></td><td><?= $r['location'] ?></td></tr>
<?php endwhile; ?>
</tbody></table>
<?php endif; ?>
<?php include_once("../includes/footer.php"); ?>
```