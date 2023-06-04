<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID dosen dari parameter URL
$id = $_GET['id'];

// Proses hapus dosen
$query = "DELETE FROM Dosen WHERE ID=$id";
mysqli_query($conn, $query);

// Redirect ke halaman Dosen
header("Location: dosen.php");
exit;

// Menutup koneksi database
mysqli_close($conn);
?>
