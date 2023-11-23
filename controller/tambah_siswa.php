<?php
include '../config/conn.php';
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $insert = "INSERT INTO siswa VALUES (null, '$nama', '$tplahir', '$tglahir', '$alamat', '$hobi', '$cita_cita', '$jm_saudara', '$idkelas', '$idagama')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Tambah Data Berhasil'); document.location.href = '../siswa/siswa_admin.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
