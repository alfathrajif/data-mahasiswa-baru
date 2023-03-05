<?php
// Start session
session_start();

require_once 'koneksi.php';

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  // User is not logged in, redirect to login page
  header("Location: ../login.php");
  exit();
}



// Define the condition for the row to be deleted
$id_mahasiswa = $_GET['id'];

// Build the DELETE query with a WHERE clause
$query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";

// Execute the query and check for errors
if (!$result = $conn->query($query)) {
  echo "Error: " . $conn->error;
  exit();
}

// Check if any rows were affected by the DELETE query
if ($conn->affected_rows > 0) {
  header("Location: ../index.php");
} else {
  echo "No rows were deleted.";
}

// Close the database connection
$conn->close();
