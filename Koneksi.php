<?php
  $servername = "localhost"; // nama server MySQL
  $username = "root"; // username MySQL
  $password = ""; // password MySQL
  $database = "nama_database"; // nama database yang akan digunakan

  // membuat koneksi
  $conn = mysqli_connect($servername, $username, $password, $database);

  // memeriksa koneksi
  if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
  echo "Koneksi berhasil";
?>
