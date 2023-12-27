<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$hobi = $_POST['hobi'];

// Menyimpan data ke database
$sql = "UPDATE identitas_data SET nama='$nama', nohp='$nohp', alamat='$alamat', tgl_lahir='$tgl_lahir', hobi='$hobi' WHERE nik=$nik";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil diubah!");
    window.location="data_identitas.php";
    </script>';
    exit();
} else {
    echo 
    '<script language="javascript">
    alert ("[ERROR] Error SQL Query!");
    window.location="data_identitas.php";
    </script>';
    exit();
}

$conn->close();
?>
