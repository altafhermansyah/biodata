<?php
include '../../config/conn.php';
if (isset($_POST['save'])) {
    $nm_agama = $_POST['nm_agama'];
    $kompetensi = $_POST['kompetensi'];

    $insert = "INSERT INTO agama VALUES (null, '$nm_agama')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Tambah Data Berhasil'); document.location.href = '../../siswa/agama.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
