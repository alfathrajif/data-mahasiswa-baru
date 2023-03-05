<?php

require_once 'koneksi.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
  // User exists, create session and redirects
  session_start();
  $_SESSION['username'] = $username;
  header("Location: ../index.php");
  exit();
} else {
  // User does not exist, display error message
  echo "Invalid username or password";
}

$conn->close();
