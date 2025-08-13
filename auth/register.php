
<?php include_once("../includes/header.php"); ?>
<h2>Register</h2>
<form action="process_register.php" method="post" class="w-50">
 <div class="mb-2"><label>Name</label><input name="name" class="form-control" required></div>
 <div class="mb-2"><label>Email</label><input type="email" name="email" class="form-control" required></div>
 <div class="mb-2"><label>Password</label><input type="password" name="password" class="form-control" required></div>
 <div class="mb-3"><label>Role</label>
   <select name="role" class="form-select">
     <option value="student">Student</option>
     <option value="organizer">Organizer</option>
   </select>
 </div>
 <button class="btn btn-primary">Register</button>
 <a href="login.php" class="btn btn-link">Already have an account?</a>
</form>
<?php include_once("../includes/footer.php"); ?>
