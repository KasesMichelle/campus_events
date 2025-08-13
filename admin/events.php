```php
<?php require_once("dashboard.php"); require_once("../config/connection.php"); $res=$conn->query("SELECT e.*,u.name AS organizer FROM events e JOIN users u ON u.id=e.organizer_id"); ?>
<h3>All Events</h3><table class="table"><thead><tr><th>ID</th><th>Title</th><th>Date</th><th>Organizer</th></tr></thead><tbody>
<?php while($e=$res->fetch_assoc()): ?><tr><td><?= $e['id']?></td><td><?= $e['title']?></td><td><?= $e['event_date']?></td><td><?= $e['organizer']?></td></tr><?php endwhile; ?></tbody></table>
<?php include_once("../includes/footer.php"); ?>
```
