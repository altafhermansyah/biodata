<?php
include '../../config/conn.php';
$id = $_GET["id"];
$query = "DELETE FROM kelas WHERE id=$id";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Delete Data Berhasil'); document.location.href = '../../siswa/kelas.php';</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
