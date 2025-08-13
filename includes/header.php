<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>CampusEvents</title>
 <link rel="stylesheet" href="/campus_events/assets/css/style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
   <a class="navbar-brand" href="/campus_events/public/index.php">CampusEvents</a>
   <?php if(isset($_SESSION['user_name'])): ?>
     <span class="text-light">Hi, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
     <a class="btn btn-sm btn-outline-light ms-2" href="/campus_events/auth/logout.php">Logout</a>
   <?php endif; ?>
 </div>
</nav>
<div class="container mt-4">