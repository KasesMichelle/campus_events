
<?php
require_once("../config/connection.php");
session_start();
if($_SESSION['user_role']!=='organizer'){header("Location: ../student/dashboard.php");exit;}
$stmt=$conn->prepare("INSERT INTO events(title,event_date,location,description,organizer_id) VALUES(?,?,?,?,?)");
$stmt->bind_param("ssssi",$_POST['title'],$_POST['event_date'],$_POST['location'],$_POST['description'],$_SESSION['user_id']);
$stmt->execute();
header("Location: dashboard.php");

