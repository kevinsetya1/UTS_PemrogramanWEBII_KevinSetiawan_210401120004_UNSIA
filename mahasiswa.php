<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Menampilkan data mahasiswa
$query = "SELECT * FROM Mahasiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="tambah_mahasiswa.php">Tambah Mahasiswa</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Nama']."</td>";
            echo "<td>".$row['NIM']."</td>";
            echo "<td>".$row['Program Studi']."</td>";
            echo "<td><a href='edit_mahasiswa.php?id=".$row['ID']."'>Edit</a> | <a href='hapus_mahasiswa.php?id=".$row['ID']."'>Hapus</a></td>";
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
