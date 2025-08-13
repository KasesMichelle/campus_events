```php
<?php
require_once("../includes/auth_check.php");
if($_SESSION['user_role']!=='admin'){header("Location: ../student/dashboard.php");exit;}
include_once("../includes/header.php");
?>
<h2>Admin Dashboard</h2>
<ul><li><a href="users.php">Manage Users</a></li><li><a href="events.php">Manage Events</a></li><li><a href="bookings.php">View Bookings</a></li></ul>
<?php include_once("../includes/footer.php"); ?>
```