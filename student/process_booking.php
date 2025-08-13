```php
<?php
require_once("../config/connection.php");
session_start();
$stmt=$conn->prepare("INSERT INTO bookings(user_id,event_id) VALUES(?,?)");
$stmt->bind_param("ii",$_SESSION['user_id'],$_POST['event_id']);
$stmt->execute();
header("Location: dashboard.php");
```