<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mendapatkan ID dosen dari parameter URL
$id = $_GET['id'];

// Proses edit dosen
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $jenjang = $_POST['jenjang'];

    $query = "UPDATE Dosen SET Nama='$nama', NIDN='$nidn', `Jenjang Pendidikan`='$jenjang' WHERE ID=$id";
    mysqli_query($conn, $query);

    // Redirect ke halaman Dosen
    header("Location: dosen.php");
    exit;
}

// Mendapatkan data dosen berdasarkan ID
$query = "SELECT * FROM Dosen WHERE ID=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
</head>
<body>
    <h1>Edit Dosen</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['Nama']; ?>" required>
        <br>

        <label for="nidn">NIDN:</label>
        <input type="text" name="nidn" value="<?php echo $data['NIDN']; ?>" required>
        <br>

        <label for="jenjang">Jenjang Pendidikan:</label>
        <select name="jenjang" required>
            <option value="S2" <?php if ($data['Jenjang Pendidikan'] == 'S2') echo 'selected'; ?>>S2</option>
            <option value="S3" <?php if ($data['Jenjang Pendidikan'] == 'S3') echo 'selected'; ?>>S3</option>
        </select>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
