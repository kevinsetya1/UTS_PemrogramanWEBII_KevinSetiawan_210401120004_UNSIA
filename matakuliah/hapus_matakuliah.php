<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID matakuliah dari parameter URL
$id = $_GET['id'];

// Proses hapus matakuliah
$query = "DELETE FROM Matakuliah WHERE ID=$id";
mysqli_query($conn, $query);

// Redirect ke halaman Matakuliah
header("Location: matakuliah.php");
exit;

// Menutup koneksi database
mysqli_close($conn);
?>
