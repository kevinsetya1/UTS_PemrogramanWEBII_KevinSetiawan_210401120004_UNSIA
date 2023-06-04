<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Menampilkan data matakuliah
$query = "SELECT * FROM Matakuliah";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Data Matakuliah</h1>

    <a href="tambah_matakuliah.php">Tambah Matakuliah</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kode Matakuliah</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Nama']."</td>";
            echo "<td>".$row['Kode Matakuliah']."</td>";
            echo "<td>".$row['Deskripsi']."</td>";
            echo "<td><a href='edit_matakuliah.php?id=".$row['ID']."'>Edit</a> | <a href='hapus_matakuliah.php?id=".$row['ID']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
