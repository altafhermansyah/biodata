<?php
session_start();
include "../config/conn.php";

if ($_SESSION['username'] == "") {
    header("Location: ../index.php?pesan=gagal");
}

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $insert = "UPDATE siswa SET nama = '$nama', tplahir = '$tplahir', tglahir = '$tglahir', alamat = '$alamat', hobi = '$hobi', cita_cita = '$cita_cita', jm_saudara = $jm_saudara, idkelas = $idkelas, idagama = $idagama WHERE id=$id";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Tambah Data Berhasil'); document.location.href = '../siswa/siswa_admin.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
