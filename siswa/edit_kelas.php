<?php
include "../config/conn.php";
$id = $_GET['id'];

$query = "SELECT * FROM kelas WHERE id = $id";

$exe = mysqli_query($conn, $query);
$data = mysqli_fetch_array($exe);

$id = $data['id'];
$namakelas = $data['namakelas'];
$kompetensi = $data['kompetensi'];
$tahun_pelajaran = $data['tahun_pelajaran'];
$keterangan = $data['keterangan'];
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kelas</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">

</head>

<body>
    <!-- Form Update Data -->
    <div class="container p-3">
        <h4>Update Kelas </h4>
        <form method="post" action="../controller/kelas/update_kelas.php">
            Nama Kelas:<br>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="text" value="<?= $namakelas ?>" name="namakelas" required>
            <br>
            Kompetensi :<br>
            <input type="text" value="<?= $kompetensi ?>" name="kompetensi" required>
            <br><br>
            Tahun Pelajaran :<br>
            <input type="int" value="<?= $tahun_pelajaran ?>" name="tahun_pelajaran" required>
            <br><br>
            Keterangan :<br>
            <input type="text" value="<?= $keterangan ?>" name="keterangan" required>
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>