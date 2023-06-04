<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID matakuliah dari parameter URL
$id = $_GET['id'];

// Proses edit matakuliah
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE Matakuliah SET Nama='$nama', `Kode Matakuliah`='$kode', Deskripsi='$deskripsi' WHERE ID=$id";
    mysqli_query($conn, $query);

    // Redirect ke halaman Matakuliah
    header("Location: matakuliah.php");
    exit;
}

// Mendapatkan data matakuliah berdasarkan ID
$query = "SELECT * FROM Matakuliah WHERE ID=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
</head>
<body>
    <h1>Edit Matakuliah</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['Nama']; ?>" required>
        <br>

        <label for="kode">Kode Matakuliah:</label>
        <input type="text" name="kode" value="<?php echo $data['Kode Matakuliah']; ?>" required>
        <br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" required><?php echo $data['Deskripsi']; ?></textarea>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
