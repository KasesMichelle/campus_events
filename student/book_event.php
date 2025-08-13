```php
<?php
require_once("../includes/auth_check.php");
include_once("../includes/header.php");
$eid=intval($_GET['id']);
require_once("../config/connection.php");
$event=$conn->query("SELECT * FROM events WHERE id=$eid")->fetch_assoc();
?>
<h2>Book: <?= htmlspecialchars($event['title']); ?></h2>
<p>Date: <?= $event['event_date']; ?> · Location: <?= htmlspecialchars($event['location']); ?></p>
<form action="process_booking.php" method="post"><input type="hidden" name="event_id" value="<?= $eid; ?>"><button class="btn btn-success">Confirm Booking</button></form>
<?php include_once("../includes/footer.php"); ?>
```