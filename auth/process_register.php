<?php
// Display errors during development (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../config/connection.php");

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $pass, $role);

    if ($stmt->execute()) {
        header("Location: login.php?msg=registered");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
