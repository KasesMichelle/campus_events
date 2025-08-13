<?php
$host = "localhost";
$user = "root";
$pass = ""; // use your MySQL password if set
$db   = "campus_events";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
