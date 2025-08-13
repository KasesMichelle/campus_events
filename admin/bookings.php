```php
<?php require_once("dashboard.php"); require_once("../config/connection.php"); $res=$conn->query("SELECT b.id,e.title,u.name,b.booking_date FROM bookings b JOIN events e ON e.id=b.event_id JOIN users u ON u.id=b.user_id"); ?>
<h3>Bookings</h3><table class="table"><thead><tr><th>ID</th><th>Event</th><th>User</th><th>Date</th></tr></thead><tbody>
<?php while($b=$res->fetch_assoc()): ?><tr><td><?= $b['id']?></td><td><?= $b['title']?></td><td><?= $b['name']?></td><td><?= $b['booking_date']?></td></tr><?php endwhile; ?></tbody></table>
<?php include_once("../includes/footer.php"); ?>
``