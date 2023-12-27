<?php
include "koneksi.php";
$sql = "SELECT * FROM identitas_data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Identitas Data Diri</title>
</head>
<body>
    <div class="header">
        <img class="logo" src="gambar/profile.png" alt="no image">
        <h1>Identitas Data Diri</h1>
    </div>

    <div class="container">
        <h2>Identitas Diri</h2>
        <table>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Hobi</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            echo
            '<tr>'.
                '<td>'.$row["nik"].'</td>'.
                '<td>'.$row["nama"].'</td>'.
                '<td>'.$row["nohp"].'</td>'.
                '<td>'.$row["alamat"].'</td>'.
                '<td>'.$row["tgl_lahir"].'</td>'.
                '<td>'.$row["hobi"].'</td>'.
            '</tr>';
            }
            ?>
        </table>

        <h2>Tambah Data Diri</h2>
        <form action="tambah_post.php" method="POST">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="nohp">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
            <label for="hobi">Hobi :</label>
            <input type="text" id="hobi" name="hobi"><br><br>
            <input type="submit" value="Tambah">
        </form>

        <h2>Update Data Diri</h2>
        <form action="ubah_post.php" method="POST">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="nohp">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
            <label for="hobi">Hobi :</label>
            <input type="text" id="hobi" name="hobi"><br><br>
            <input type="submit" value="Ubah">
        </form>

        <h2>Hapus Data Diri</h2>
        <form action="hapus_post.php" method="POST">
            <label for="nik">NIK :</label>
            <input type="text" id="nik" name="nik"><br><br>
            <input type="submit" value="Hapus">
        </form>
    </div>
</body>