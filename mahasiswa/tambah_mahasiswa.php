<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Proses tambah mahasiswa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO Mahasiswa (Nama, NIM, `Program Studi`) VALUES ('$nama', '$nim', '$prodi')";
    mysqli_query($conn, $query);

    // Redirect ke halaman Mahasiswa
    header("Location: mahasiswa.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>
        <br>

        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" required>
        <br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
