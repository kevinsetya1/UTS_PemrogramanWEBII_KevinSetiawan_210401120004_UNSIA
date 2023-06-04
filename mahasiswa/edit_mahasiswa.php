<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID mahasiswa dari parameter URL
$id = $_GET['id'];

// Proses edit mahasiswa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE Mahasiswa SET Nama='$nama', NIM='$nim', `Program Studi`='$prodi' WHERE ID=$id";
    mysqli_query($conn, $query);

    // Redirect ke halaman Mahasiswa
    header("Location: mahasiswa.php");
    exit;
}

// Mendapatkan data mahasiswa berdasarkan ID
$query = "SELECT * FROM Mahasiswa WHERE ID=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['Nama']; ?>" required>
        <br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="<?php echo $data['NIM']; ?>" required>
        <br>

        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" value="<?php echo $data['Program Studi']; ?>" required>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
