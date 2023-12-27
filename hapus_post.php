<?php
include "koneksi.php";

$nik = $_POST['nik'];

$sql = "DELETE FROM identitas_data WHERE nik=$nik";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil dihapus!");
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
