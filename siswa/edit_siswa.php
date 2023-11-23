<?php
include "../config/conn.php";
$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id = $id";

$exe = mysqli_query($conn, $query);
$data = mysqli_fetch_array($exe);

$id = $data['id'];
$nama = $data['nama'];
$tplahir = $data['tplahir'];
$tglahir = $data['tglahir'];
$alamat = $data['alamat'];
$hobi = $data['hobi'];
$cita_cita = $data['cita_cita'];
$jm_saudara = $data['jm_saudara'];
$idkelas = $data['idkelas'];
$idagama = $data['idagama'];
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
    <title>Update Siswa</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">

</head>

<body>
    <!-- Form Update Data -->
    <div class="container p-3">
        <h4>Update Siswa </h4>
        <form method="post" action="../controller/update_siswa.php">
            <div></div>
            Nama :<br>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="text" value="<?= $nama ?>" name="nama" required>
            <br>
            Tempat Lahir :<br>
            <input type="text" value="<?= $tplahir ?>" name="tplahir" required>
            <br><br>
            Tanggal Lahir :<br>
            <input type="text" value="<?= $tglahir ?>" name="tglahir" required>
            <br><br>
            Alamat :<br>
            <textarea name="alamat" id="" cols="30" rows="5" required><?= $alamat ?></textarea>
            <br><br>
            Hobi :<br>
            <input type="text" value="<?= $hobi ?>" name="hobi" required>
            <br><br>
            Cita-cita :<br>
            <input type="text" value="<?= $cita_cita ?>" name="cita_cita" required>
            <br><br>
            Jumlah Saudara :<br>
            <input type="int" value="<?= $jm_saudara ?>" name="jm_saudara" required>
            <br><br>
            <label for="">Kelas :</label>
            <select name="idkelas" value="<?php echo $data['idkelas'] ?>">
                <option value="1">XI RPL 1</option>
                <option value="2">XI ANM 1</option>
                <option value="3">XI DKV 1</option>
            </select>
            <br><br>
            <label for="">Agama :</label>
            <select name="idagama" value="<?= $idagama ?>">
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Hindu</option>
            </select>
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>