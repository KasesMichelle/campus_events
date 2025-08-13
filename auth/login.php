
<?php include_once("../includes/header.php"); ?>
<h2>Login</h2>
<?php if(isset($_GET['msg'])&&$_GET['msg']==='registered'): ?>
 <div class="alert alert-success">Registration successful. Please log in.</div>
<?php endif;?>
<form action="process_login.php" method="post" class="w-50">
 <div class="mb-2"><label>Email</label><input type="email" name="email" class="form-control" required></div>
 <div class="mb-2"><label>Password</label><input type="password" name="password" class="form-control" required></div>
 <button class="btn btn-primary">Login</button>
 <a href="register.php" class="btn btn-link">Need an account?</a>
</form>
<?php include_once("../includes/footer.php"); ?>
