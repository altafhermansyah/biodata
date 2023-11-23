<?php
session_start();
include "../../config/conn.php";

if ($_SESSION['username'] == "") {
    header("Location: ../../index.php?pesan=gagal");
}

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nm_agama = $_POST['nm_agama'];

    $insert = "UPDATE agama SET nm_agama = '$nm_agama' WHERE id=$id";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Update Data Berhasil'); document.location.href = '../../siswa/agama.php';</script>";
    } else {
        echo "Error: " . $insert . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
