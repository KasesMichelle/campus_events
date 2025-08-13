```php
<?php require_once("dashboard.php"); require_once("../config/connection.php"); $res=$conn->query("SELECT id,name,email,role FROM users"); ?>
<h3>Users</h3><table class="table"><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr></thead><tbody>
<?php while($u=$res->fetch_assoc()): ?><tr><td><?= $u['id']?></td><td><?= $u['name']?></td><td><?= $u['email']?></td><td><?= $u['role']?></td></tr><?php endwhile; ?></tbody></table>
<?php include_once("../includes/footer.php"); ?>
```