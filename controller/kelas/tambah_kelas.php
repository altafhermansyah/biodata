<?php
include '../../config/conn.php';
if (isset($_POST['save'])) {
    $namakelas = $_POST['namakelas'];
    $kompetensi = $_POST['kompetensi'];
    $tahun_pelajaran = $_POST['tahun_pelajaran'];
    $keterangan = $_POST['keterangan'];

    $insert = "INSERT INTO kelas VALUES (null, '$namakelas', '$kompetensi', '$tahun_pelajaran', '$keterangan')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Tambah Data Berhasil'); document.location.href = '../../siswa/kelas.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
