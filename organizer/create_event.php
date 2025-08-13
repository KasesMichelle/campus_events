
<?php
require_once("../includes/auth_check.php");
include_once("../includes/header.php");
if($_SESSION['user_role']!=='organizer'){header("Location: ../student/dashboard.php");exit;}
?>
<h2>Create Event</h2>
<form action="process_create_event.php" method="post" class="w-50">
 <div class="mb-2"><label>Title</label><input name="title" class="form-control" required></div>
 <div class="mb-2"><label>Date</label><input type="date" name="event_date" class="form-control" required></div>
 <div class="mb-2"><label>Location</label><input name="location" class="form-control" required></div>
 <div class="mb-3"><label>Description</label><textarea name="description" class="form-control"></textarea></div>
 <button class="btn btn-primary">Save</button>
</form>
<?php include_once("../includes/footer.php"); ?>
