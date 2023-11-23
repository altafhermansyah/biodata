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
    <title>Siswa</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3">
        <h3>Siswa</h3>
    </div>
    <div class="container p-4">
        <table border="1" width="85%" align="center" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Hobi</th>
                    <th>Cita-cita</th>
                    <th>Jumlah Saudara</th>
                    <th>Kelas</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT siswa.id, siswa.nama, siswa.tplahir, siswa.tglahir, siswa.alamat, siswa.hobi, siswa.cita_cita, siswa.jm_saudara, kelas.namakelas as namakelas, agama.nm_agama as namaagama FROM siswa INNER JOIN kelas ON siswa.idkelas = kelas.id INNER JOIN agama ON siswa.idagama = agama.id;";
                $query = mysqli_query($conn, $sql);
                while ($siswa = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $siswa['nama'] ?></td>
                        <td><?= $siswa['tplahir'] ?></td>
                        <td><?= $siswa['tglahir'] ?></td>
                        <td><?= $siswa['alamat'] ?></td>
                        <td><?= $siswa['hobi'] ?></td>
                        <td><?= $siswa['cita_cita'] ?></td>
                        <td><?= $siswa['jm_saudara'] ?></td>
                        <td><?= $siswa['namakelas'] ?></td>
                        <td><?= $siswa['namaagama'] ?></td>
                        <td>
                            <button type="button" class="btn bg-primary"> <a href="edit_siswa.php?id=<?= $siswa['id'] ?>" class="text-decoration-none text-white"> Update </a> </button>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <div class="container p-4">
        <form action="../controller/logout.php" method="post">
            <div class="input-group">
                <button class="btn bg-danger text-white">Logout</button>
            </div>
        </form>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>