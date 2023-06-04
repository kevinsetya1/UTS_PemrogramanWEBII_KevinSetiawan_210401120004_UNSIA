<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Proses tambah matakuliah
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO Matakuliah (Nama, `Kode Matakuliah`, Deskripsi) VALUES ('$nama', '$kode', '$deskripsi')";
    mysqli_query($conn, $query);

    // Redirect ke halaman Matakuliah
    header("Location: matakuliah.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>

        <label for="kode">Kode Matakuliah:</label>
        <input type="text" name="kode" required>
        <br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" required></textarea>
        <br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
