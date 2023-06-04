<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "siakad";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Menampilkan data dosen
$query = "SELECT * FROM Dosen";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
</head>
<body>
    <h1>Data Dosen</h1>

    <a href="tambah_dosen.php">Tambah Dosen</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Jenjang Pendidikan</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Nama']."</td>";
            echo "<td>".$row['NIDN']."</td>";
            echo "<td>".$row['Jenjang Pendidikan']."</td>";
            echo "<td><a href='edit_dosen.php?id=".$row['ID']."'>Edit</a> | <a href='hapus_dosen.php?id=".$row['ID']."'>Hapus</a></td>";
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
