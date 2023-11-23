<?php
include '../config/conn.php';
session_start();
if ($_SESSION['level'] == "") {
    header("Location: ../index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kelas</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3">
        <h3>Kelola Kelas</h3>
    </div>
    <div class="container p-4">
        <h5>Tambah Kelas : </h5>
        <form method="post" action="../controller/kelas/tambah_kelas.php">
            <label for="">Nama Kelas :</label>
            <input type="text" name="namakelas" required>
            <br><br>
            <label for="">Kompetensi :</label>
            <input type="text" name="kompetensi" required>
            <br><br>
            <label for="">Tahun Pelajaran :</label>
            <input type="int" name="tahun_pelajaran" required>
            <br><br>
            <label for="">Keterangan :</label>
            <input type="text" name="keterangan" required>
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
    <div class="container p-4">
        <table border="1" width="85%" align="center" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Kompetensi</th>
                    <th>Tahun Pelajaran</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT * FROM kelas";
                $query = mysqli_query($conn, $sql);
                while ($kelas = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kelas['namakelas'] ?></td>
                        <td><?= $kelas['kompetensi'] ?></td>
                        <td><?= $kelas['tahun_pelajaran'] ?></td>
                        <td align="center"><?= $kelas['keterangan'] ?></td>
                        <td>
                            <button type="button" class="btn bg-primary"> <a href="edit_kelas.php?id=<?= $kelas['id'] ?>" class="text-decoration-none text-white"> Update </a> </button> |
                            <button type="button" class="btn bg-danger"><a href="../controller/kelas/hapus_kelas.php?id=<?= $kelas['id'] ?>" class="text-decoration-none text-white"> Delete </a></button>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <div class="container p-4">
        <button class="btn bg-secondary text-white"><a href="siswa_admin.php" class="text-decoration-none text-white">Go Back</a></button>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>