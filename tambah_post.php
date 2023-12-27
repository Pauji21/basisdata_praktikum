<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$hobi = $_POST['hobi'];

$cekduplicate = mysqli_num_rows(mysqli_query($conn, "SELECT nik FROM identitas_data WHERE nik='$nik'"));

if($cekduplicate > 0)
{
    echo '<script language="javascript">
    alert ("[ERROR] Data sudah ada!");
    window.location="data_identitas.php";
    </script>';
    exit();
}

// Menyimpan data ke database
$sql = "INSERT INTO identitas_data (nik, nama, nohp, alamat, tgl_lahir, hobi) VALUES ('$nik', '$nama', '$nohp', '$alamat', '$tgl_lahir', '$hobi')";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil ditambahkan!");
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
