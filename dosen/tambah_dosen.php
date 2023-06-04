<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Proses tambah dosen
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $jenjang = $_POST['jenjang'];

    $query = "INSERT INTO Dosen (Nama, NIDN, `Jenjang Pendidikan`) VALUES ('$nama', '$nidn', '$jenjang')";
    mysqli_query($conn, $query);

    // Redirect ke halaman Dosen
    header("Location: dosen.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
</head>
<body>
    <h1>Tambah Dosen</h1>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>

        <label for="nidn">NIDN:</label>
        <input type="text" name="nidn" required>
        <br>

        <label for="jenjang">Jenjang Pendidikan:</label>
        <select name="jenjang" required>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        <br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
