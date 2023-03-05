<?php

require_once 'koneksi.php';

// Define the values to be inserted into the table
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

// Build the INSERT query
$query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";

// Execute the query and check for errors
if (!$result = $conn->query($query)) {
  echo "Error: " . $conn->error;
  exit();
}

// Check if the row was inserted successfully
if ($conn->affected_rows > 0) {
  header("Location: ../index.php");
} else {
  echo "No rows were inserted.";
}

// Close the database connection
$conn->close();
