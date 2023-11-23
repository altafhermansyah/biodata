<?php
session_start();
include "../../config/conn.php";

if ($_SESSION['username'] == "") {
    header("Location: ../../index.php?pesan=gagal");
}

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $namakelas = $_POST['namakelas'];
    $kompetensi = $_POST['kompetensi'];
    $tahun_pelajaran = $_POST['tahun_pelajaran'];
    $keterangan = $_POST['keterangan'];

    $insert = "UPDATE kelas SET namakelas = '$namakelas', kompetensi = '$kompetensi', tahun_pelajaran = '$tahun_pelajaran', keterangan = '$keterangan' WHERE id=$id";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Update Data Berhasil'); document.location.href = '../../siswa/kelas.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
