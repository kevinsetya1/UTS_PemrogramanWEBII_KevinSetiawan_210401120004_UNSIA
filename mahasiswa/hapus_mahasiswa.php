<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID mahasiswa dari parameter URL
$id = $_GET['id'];

// Proses hapus mahasiswa
$query = "DELETE FROM Mahasiswa WHERE ID=$id";
mysqli_query($conn, $query);

// Redirect ke halaman Mahasiswa
header("Location: mahasiswa.php");
exit;

// Menutup koneksi database
mysqli_close($conn);
?>
