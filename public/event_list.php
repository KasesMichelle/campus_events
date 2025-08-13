```php
<?php include_once("../includes/header.php"); require_once("../config/connection.php");
$res=$conn->query("SELECT e.*,u.name AS organizer FROM events e JOIN users u ON u.id=e.organizer_id ORDER BY event_date");
echo '<h2>Upcoming Events</h2><table class="table"><thead><tr><th>Title</th><th>Date</th><th>Location</th><th>Organizer</th><th></th></tr></thead><tbody>';
while($row=$res->fetch_assoc()){
 echo "<tr><td>{$row['title']}</td><td>{$row['event_date']}</td><td>{$row['location']}</td><td>{$row['organizer']}</td><td><a class='btn btn-sm btn-outline-primary' href='/campus_events/student/book_event.php?id={$row['id']}'>Book</a></td></tr>";
}
echo '</tbody></table>'; include_once("../includes/footer.php"); ?>
```