
<?php
require_once("../config/connection.php");
session_start();
$email=trim($_POST['email']);
$pass=$_POST['password'];
$stmt=$conn->prepare("SELECT id,name,password,role FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result=$stmt->get_result();
if($result && $row=$result->fetch_assoc()){
 if(password_verify($pass,$row['password'])){
   $_SESSION['user_id']=$row['id'];
   $_SESSION['user_name']=$row['name'];
   $_SESSION['user_role']=$row['role'];
   switch($row['role']){
     case 'organizer': header("Location: /campus_events/organizer/dashboard.php"); break;
     case 'admin': header("Location: /campus_events/admin/dashboard.php"); break;
     default: header("Location: /campus_events/student/dashboard.php");
   }
   exit;
 }
}
header("Location: login.php?error=invalid");
